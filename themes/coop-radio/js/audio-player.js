/**
 *
 * Replaces the default WP audio player with a customized one.
 *
 */
(function() {
  const container = document.getElementById('audio-player')
  const defaultAudioPlayer = container.getElementsByTagName('audio')[0]
  const audioSrc = defaultAudioPlayer.currentSrc

  // fall back to default audio player if no js
  if (!container) { return }

  container.innerHTML = ''

  const playButton = document.createElement('button')
  playButton.name = 'Audio player toggle'
  playButton.innerText = 'play'
  playButton.classList.add('audio-player__play-button')
  playButton.addEventListener('click', () => {
    if (defaultAudioPlayer.paused) {
      playButton.innerText = 'pause'
      defaultAudioPlayer.play()
    } else {
      playButton.innerText = 'play'
      defaultAudioPlayer.pause()
    }
  })
  container.appendChild(playButton)

  const progressBarContainer = document.createElement('div')
  progressBarContainer.classList.add('audio-player__progress-container')
  const progressBar = document.createElement('div')
  progressBar.classList.add('audio-player__progress')
  defaultAudioPlayer.addEventListener('timeupdate', () => {
    const progressPercent = (
      defaultAudioPlayer.currentTime / defaultAudioPlayer.duration
    ) * 100
    progressBar.style.width = `${progressPercent}%`
    if (progressPercent === 100) {
      playButton.innerText = 'play'
    }
  })
  const progressBarMarker = document.createElement('span')
  progressBarMarker.classList.add('audio-player__progress-marker')

  progressBar.appendChild(progressBarMarker)
  progressBarContainer.appendChild(progressBar)
  container.appendChild(progressBarContainer)

  const shareButton = document.createElement('button')
  shareButton.name = 'Share recording'
  shareButton.innerText = 'share'
  shareButton.classList.add('audio-player__share-button')
  shareButton.addEventListener('click', () => {
    // TODO: handle share
    alert(audioSrc)
  })
  container.appendChild(shareButton)

  defaultAudioPlayer.classList.add('screen-reader-text')
  // TODO: hide non-sr els for ats
  container.appendChild(defaultAudioPlayer)
})()
