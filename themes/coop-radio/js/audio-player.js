/**
 *
 * Site-wide audio player.
 *
 */

/* global WP_GLOBALS */

(function({ apiNonce, apiURL }) {
  const container = document.getElementById('audio-player__container')
  if (!container) { return }

  const audioPlayer = document.getElementById('audio-player')
  const prograssBarContainer = document.getElementById('audio-player__progress-container')
  const progressBar = document.getElementById('audio-player__progress')
  const shareButton = document.getElementById('audio-player__share-button')
  const currentTime = document.getElementById('audio-player__time')
  const playButton = document.getElementById('audio-player__action--play')
  const playButtonIcon = document.getElementById('audio-player__action-icon--play')
  const nextButton = document.getElementById('audio-player__action--next')
  const prevButton = document.getElementById('audio-player__action--prev')

  let tracks = []
  const lastPlayedTime =
    window.localStorage.getItem('audio-player-time') || 0
  const lastPlayedPercent =
    window.localStorage.getItem('audio-player-progress') || 0
  let i = localStorage.getItem('audio-player-index') || 0

  const loadTrack = (tracks, i) => fetch(tracks[i]._links['wp:attachment'][0].href)
    .then(res => res.json())
    .then(data => {
      audioPlayer.src = data[0].source_url
    })

  fetch(`${apiURL}track`, {
    'X-WP-Nonce': apiNonce
  })
    .then(res => res.json())
    .then(data => {
      tracks = data
      loadTrack(data, i)
    }) 

  const togglePlayButtonIcon = action => {
    const newSrc = playButtonIcon.dataset.altSrc
    playButtonIcon.dataset.altSrc = playButtonIcon.src
    playButtonIcon.src = newSrc
    playButtonIcon.alt = `${action} track`
  }

  // TODO: check if track is same
  progressBar.style.width = `${lastPlayedPercent}%`

  playButton.addEventListener('click', e => {
    e.preventDefault()
    audioPlayer.currentTime = lastPlayedTime

    if (audioPlayer.paused) {
      togglePlayButtonIcon('Play')
      audioPlayer.play()
    } else {
      togglePlayButtonIcon('Pause')
      audioPlayer.pause()
    }
  })

  prevButton.addEventListener('click', () => {
    if (i > 0) {
      loadTrack(tracks, --i)
    } else {
      i = tracks.length - 1
      loadTrack(tracks, i)
    }
    togglePlayButtonIcon('Pause')
  })
  nextButton.addEventListener('click', () => {
    if (i < tracks.length - 1) {
      loadTrack(tracks, ++i)
    } else {
      i = 0
      loadTrack(tracks, i)
    } 
    togglePlayButtonIcon('Pause')
  })

  // update time
  audioPlayer.addEventListener('timeupdate', () => {
    const padNum = num => num
      ? num.toString().length === 1
        ? `0${num}`
        : num
      : '00'
    
    const timeTotalSeconds = audioPlayer.currentTime
    const timeMinutes = Math.floor(timeTotalSeconds / 60)
    const timeSeconds = Math.floor(timeTotalSeconds - (timeMinutes * 60)) 

    currentTime.innerText = `${padNum(timeMinutes)}:${padNum(timeSeconds)}`
    const progressPercent = (
      audioPlayer.currentTime / audioPlayer.duration
    ) * 100
    progressBar.style.width = `${progressPercent}%`
    window.localStorage.setItem('audio-player-progress', progressPercent)
    window.localStorage.setItem('audio-player-time', audioPlayer.currentTime)

    if (progressPercent === 100) {
      togglePlayButtonIcon('Play')
      window.localStorage.removeItem('audio-player-progress')
      window.localStorage.removeItem('audio-player-time')
    }
  })

  // handle click to timestamp
  prograssBarContainer.addEventListener('click', function(e) {
    // FIXME: fetch audio metadata on load, not play
    if (!audioPlayer.duration) { return }
    const progressPercent = 
      (e.clientX - this.offsetLeft) / this.clientWidth
    audioPlayer.currentTime = progressPercent * audioPlayer.duration
    progressBar.style.width = `${progressPercent}%`
  })
  shareButton.addEventListener('click', () => {
    // TODO: handle share
    alert('hello')
  })
})(WP_GLOBALS)
