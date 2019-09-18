/**
 *
 * Site-wide audio player.
 *
 */

/* global WP_GLOBALS, jsmediatags */

(function({ apiNonce, apiURL }) {
  const container = document.getElementById('audio-player__container')

  if (!container) { return }

  const audioPlayer = document.getElementById('audio-player')
  const coverImg = document.getElementById('audio-player__info-artist-img')
  const trackTitle = document.getElementById('audio-player__info--title')
  const trackArtist = document.getElementById('audio-player__info--artist')
  const prograssBarContainer = document.getElementById('audio-player__progress-container')
  const progressBar = document.getElementById('audio-player__progress')
  const shareButton = document.getElementById('audio-player__action--share')
  const currentTime = document.getElementById('audio-player__time')
  const playButton = document.getElementById('audio-player__action--play')
  const playButtonIcon = document.getElementById('audio-player__action-icon--play')
  const nextButton = document.getElementById('audio-player__action--next')
  const prevButton = document.getElementById('audio-player__action--prev')

  let tracks = []
  let lastPlayedTime =
    window.localStorage.getItem('audio-player-time') || 0
  let lastPlayedPercent =
    window.localStorage.getItem('audio-player-progress') || 0
  let lastPlayedIndex = localStorage.getItem('audio-player-index') || 0

  const loadTrack = (tracks, i) => fetch(tracks[i]._links['wp:attachment'][0].href)
    .then(res => res.json())
    .then(data => {
      const track = data[0]
      audioPlayer.src = track.source_url
      
      // get audio file's id3 tags
      new jsmediatags.Reader(track.source_url)
        .setTagsToRead(['title', 'artist', 'picture'])
        .read({
          onSuccess: function({tags}) {
            const { data, type } = tags.picture
            const byteArray = new Uint8Array(data)
            const blob = new Blob([byteArray], { type })
            const coverURL = URL.createObjectURL(blob)

            coverImg.src = coverURL
            trackTitle.innerText = tags.title
            trackArtist.innerText = tags.artist
          },
          // eslint-disable-next-line
          onError: e => console.error(e.type, e.info)
        })
    })

  fetch(`${apiURL}track`, {
    'X-WP-Nonce': apiNonce
  })
    .then(res => res.json())
    .then(data => {
      tracks = data
      loadTrack(data, lastPlayedIndex)
    }) 

  const togglePlayButtonIcon = action => {
    switch (action) {
      case 'PLAY':
        playButtonIcon.src = playButtonIcon.dataset.playIcon 
        playButtonIcon.alt = 'Play track'
        break
      case 'PAUSE':
          playButtonIcon.src = playButtonIcon.dataset.pauseIcon
          playButtonIcon.alt = 'Pause track'
        break
      default:
        break
    }
  }

  // TODO: check if track is same
  progressBar.style.width = `${lastPlayedPercent}%`

  playButton.addEventListener('click', () => {
    audioPlayer.currentTime = lastPlayedTime

    if (audioPlayer.paused) {
      audioPlayer.play()
      togglePlayButtonIcon('PAUSE')
    } else {
      audioPlayer.pause()
      togglePlayButtonIcon('PLAY')
    }
  })

  prevButton.addEventListener('click', () => {
    togglePlayButtonIcon('PAUSE')
    if (lastPlayedIndex > 0) {
      loadTrack(tracks, --lastPlayedIndex)
    } else {
      lastPlayedIndex = tracks.length - 1
      loadTrack(tracks, lastPlayedIndex)
    }
    localStorage.setItem('audio-player-index', lastPlayedIndex)
  })

  nextButton.addEventListener('click', () => {
    togglePlayButtonIcon('PAUSE')
    if (lastPlayedIndex < tracks.length - 1) {
      loadTrack(tracks, ++lastPlayedIndex)
    } else {
      lastPlayedIndex = 0
      loadTrack(tracks, lastPlayedIndex)
    } 
    localStorage.setItem('audio-player-index', lastPlayedIndex)
  })

  // update time
  const updateTime = () => {
    const padNum = num => num
      ? num.toString().length === 1
        ? `0${num}`
        : num
      : '00'
    
    const timeTotalSeconds = audioPlayer.currentTime || lastPlayedTime
    const timeMinutes = Math.floor(timeTotalSeconds / 60)
    const timeSeconds = Math.floor(timeTotalSeconds - (timeMinutes * 60)) 

    currentTime.innerText = `${padNum(timeMinutes)}:${padNum(timeSeconds)}`
  }
  updateTime()
  
  audioPlayer.addEventListener('timeupdate', () => {
    updateTime()

    const progressPercent = (
      audioPlayer.currentTime / audioPlayer.duration
    ) * 100
    progressBar.style.width = `${progressPercent}%`

    lastPlayedPercent = progressPercent
    window.localStorage.setItem('audio-player-progress', progressPercent)
    lastPlayedTime = audioPlayer.currentTime
    window.localStorage.setItem('audio-player-time', audioPlayer.currentTime)

    if (progressPercent === 100) {
      togglePlayButtonIcon('PLAY')
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
