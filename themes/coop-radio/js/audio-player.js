/**
 *
 * Replaces the default WP audio player widget with a customized one.
 * Falls back to default audio player if JS disabled.
 *
 */

/* global WP_GLOBALS */

// TODO: refactor this monster

(function({ stylesheetURI }) {
  const container = document.getElementById('audio-player')

  if (!container) { return }

  const defaultAudioPlayer = container.getElementsByTagName('audio')[0]
  const audioSrc = defaultAudioPlayer.currentSrc
  let audioDuration

  // set up els
  const progressBarContainer = document.createElement('div')
  progressBarContainer.classList.add('audio-player__progress-container')
  const progressBar = document.createElement('div')
  progressBar.classList.add('audio-player__progress')
  const progressBarFill = document.createElement('div')
  progressBarFill.classList.add('audio-player__progress-fill')
  const progressBarMarker = document.createElement('span')
  progressBarMarker.classList.add('audio-player__progress-marker')
  const currentTime = document.createElement('p')
  currentTime.classList.add('audio-player__time')
  currentTime.innerText = '00:00'
  const playButton = document.createElement('button')
  playButton.classList.add('audio-player__play-button')
  const playButtonIcon = document.createElement('img')
  const playButtonIconPlaySrc = `${stylesheetURI}/images/button-play.svg`
  const playButtonIconPauseSrc = `${stylesheetURI}/images/button-pause.svg`
  playButtonIcon.src = playButtonIconPlaySrc
  playButtonIcon.alt = 'Play audio'
  const shareButton = document.createElement('button')
  shareButton.classList.add('audio-player__share-button')
  const shareButtonIcon = document.createElement('img')
  shareButtonIcon.src = `${stylesheetURI}/images/share-icon.svg`
  shareButtonIcon.alt = 'Share'

  // TODO: check if track is same
  const progress = window.localStorage.getItem('audio-player-progress')
  if (progress) {
    progressBar.style.width = `${progress}%`
  }

  // set up event listeners
  playButton.addEventListener('click', () => {
    if (progress && defaultAudioPlayer.currentTime === 0) {
      defaultAudioPlayer.addEventListener('loadedmetadata', () => {
        audioDuration = defaultAudioPlayer.duration
        defaultAudioPlayer.currentTime = (progress / 100) * audioDuration
        progressBarContainer.style.cursor = 'pointer'
      })
    }

    if (defaultAudioPlayer.paused) {
      playButtonIcon.src = playButtonIconPauseSrc
      defaultAudioPlayer.play()
    } else {
      playButtonIcon.src = playButtonIconPlaySrc
      defaultAudioPlayer.pause()
    }
  })
  defaultAudioPlayer.addEventListener('timeupdate', () => {
    const padNum = num => num
      ? num.toString().length === 1
        ? `0${num}`
        : num
      : '00'
    
    const timeTotalSeconds = defaultAudioPlayer.currentTime
    const timeMinutes = Math.floor(timeTotalSeconds / 60)
    const timeSeconds = Math.floor(timeTotalSeconds - (timeMinutes * 60)) 

    currentTime.innerText = `${padNum(timeMinutes)}:${padNum(timeSeconds)}`
    const progressPercent = (
      defaultAudioPlayer.currentTime / defaultAudioPlayer.duration
    ) * 100
    progressBar.style.width = `${progressPercent}%`
    window.localStorage.setItem('audio-player-progress', progressPercent)

    if (progressPercent === 100) {
      playButtonIcon.src = playButtonIconPlaySrc
      window.localStorage.removeItem('audio-player-progress')
    }
  })
  progressBarContainer.addEventListener('click', function(e) {
    // TODO: fetch audio metadata on load, not play
    if (!audioDuration || !this.classList.contains('audio-player__progress-container')) { return }
    const progressPercent = 
    (e.clientX - this.offsetLeft) / this.clientWidth
    defaultAudioPlayer.currentTime = progressPercent * audioDuration
    progressBar.style.width = `${progressPercent}%`
  })
  shareButton.addEventListener('click', () => {
    // TODO: handle share
    alert(audioSrc)
  })

  // TODO: hide non-sr els for ats

  // render
  container.innerHTML = ''
  defaultAudioPlayer.classList.add('screen-reader-text')
  playButton.appendChild(playButtonIcon)
  container.appendChild(playButton)
  shareButton.appendChild(shareButtonIcon)
  container.appendChild(shareButton)
  container.appendChild(currentTime)
  progressBar.appendChild(progressBarMarker)
  progressBarContainer.appendChild(progressBarFill)
  progressBarContainer.appendChild(progressBar)
  container.appendChild(progressBarContainer)
  container.appendChild(shareButton)
  container.appendChild(defaultAudioPlayer)
})(WP_GLOBALS)
