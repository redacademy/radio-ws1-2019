/**
 *
 * Replaces the default WP audio player with a customized one.
 * Falls back to default audio player if JS disabled.
 *
 */

(function() {
  const container = document.getElementById('audio-player')
  const defaultAudioPlayer = container.getElementsByTagName('audio')[0]
  const audioSrc = defaultAudioPlayer.currentSrc

  if (!container) { return }

  // set up els
  const progressBarContainer = document.createElement('div')
  progressBarContainer.classList.add('audio-player__progress-container')
  const progressBar = document.createElement('div')
  progressBar.classList.add('audio-player__progress')
  const playButton = document.createElement('button')
  playButton.name = 'Audio player toggle'
  playButton.innerText = 'play'
  playButton.classList.add('audio-player__play-button')
  const progressBarMarker = document.createElement('span')
  progressBarMarker.classList.add('audio-player__progress-marker')
  const shareButton = document.createElement('button')
  shareButton.name = 'Share recording'
  shareButton.innerText = 'share'
  shareButton.classList.add('audio-player__share-button')

  // TODO: check if track is same
  const progress = window.localStorage.getItem('audio-player-progress')

  if (progress) {
    progressBar.style.width = `${progress}%`
  }

  // set up event listeners
  playButton.addEventListener('click', () => {
    if (progress && defaultAudioPlayer.currentTime === 0) {
      defaultAudioPlayer.addEventListener('loadedmetadata', () => {
        defaultAudioPlayer.currentTime = (progress / 100) * defaultAudioPlayer.duration
      })
    }

    if (defaultAudioPlayer.paused) {
      playButton.innerText = 'pause'
      defaultAudioPlayer.play()
    } else {
      playButton.innerText = 'play'
      defaultAudioPlayer.pause()
    }
  })
  defaultAudioPlayer.addEventListener('timeupdate', () => {
    if (defaultAudioPlayer.currentTime < 0.4) { return }
    const progressPercent = (
      defaultAudioPlayer.currentTime / defaultAudioPlayer.duration
    ) * 100
    progressBar.style.width = `${progressPercent}%`
    window.localStorage.setItem('audio-player-progress', progressPercent)

    if (progressPercent === 100) {
      playButton.innerText = 'play'
      window.localStorage.removeItem('audio-player-progress')
    }
  })
  shareButton.addEventListener('click', () => {
    // TODO: handle share
    alert(audioSrc)
  })

  // TODO: hide non-sr els for ats

  // render
  container.innerHTML = ''
  defaultAudioPlayer.classList.add('screen-reader-text')
  container.appendChild(playButton)
  progressBar.appendChild(progressBarMarker)
  progressBarContainer.appendChild(progressBar)
  container.appendChild(progressBarContainer)
  container.appendChild(shareButton)
  container.appendChild(defaultAudioPlayer)
})()
