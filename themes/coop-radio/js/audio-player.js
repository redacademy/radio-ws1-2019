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

  const progressBarContainer = document.getElementById('audio-player__progress-container')
  const progressBar = document.getElementById('audio-player__progress')
  const shareButton = document.getElementById('audio-player__share-button')
  const currentTime = document.getElementById('audio-player__time')
  const playButton = document.getElementById('audio-player__play-button')
  const playButtonIcon = document.getElementById('audio-player__play-button-icon')

  let i = localStorage.getItem('audio-player-index') || 0

  fetch(`${apiURL}track`, {
    'X-WP-Nonce': apiNonce
  })
    .then(res => res.json())
    .then(data => 
      fetch(data[i]._links['wp:attachment'][0].href)
        .then(res => res.json())
        .then(data => {
          audioPlayer.src = data[0].source_url
        })
    )

  const togglePlayButtonIcon = action => {
    const newSrc = playButtonIcon.dataset.altSrc
    playButtonIcon.dataset.altSrc = playButtonIcon.src
    playButtonIcon.src = newSrc
    playButtonIcon.alt = `${action} track`
  }

  // TODO: check if track is same
  const progress = window.localStorage.getItem('audio-player-progress')
  if (progress) {
    progressBar.style.width = `${progress}%`
  }

  // set up event listeners
  playButton.addEventListener('click', () => {
    if (progress && audioPlayer.currentTime === 0) {
      audioPlayer.addEventListener('loadedmetadata', () => {
        audioPlayer.currentTime = (progress / 100) * audioPlayer.duration
        progressBarContainer.style.cursor = 'pointer'
      })
    }

    if (audioPlayer.paused) {
      togglePlayButtonIcon('Play')
      audioPlayer.play()
    } else {
      togglePlayButtonIcon('Pause')
      audioPlayer.pause()
    }
  })
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

    if (progressPercent === 100) {
      togglePlayButtonIcon('Play')
      window.localStorage.removeItem('audio-player-progress')
    }
  })

  progressBarContainer.addEventListener('click', function(e) {
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
