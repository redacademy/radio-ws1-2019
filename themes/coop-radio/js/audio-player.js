/**
 *
 * Replaces the default WP audio player with a customized one.
 *
 */
(function() {
  const container = document.getElementById('audio-player')
  const defaultAudioPlayer = container.getElementsByTagName('audio')[0]
  // const audioSrc = defaultAudioPlayer.currentSrc

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

  const progressBar = document.createElement('progress')
  progressBar.value = 0
  defaultAudioPlayer.addEventListener('timeupdate', () => {
    progressBar.value = defaultAudioPlayer.currentTime / defaultAudioPlayer.duration 
  })
  container.appendChild(progressBar)

  const shareButton = document.createElement('button')
  shareButton.name = 'Share recording'
  shareButton.innerText = 'share'
  shareButton.classList.add('audio-player__share-button')
  shareButton.addEventListener('click', () => {
    // TODO: handle share
  })
  container.appendChild(shareButton)

  defaultAudioPlayer.classList.add('screen-reader-text')
  container.appendChild(defaultAudioPlayer)
})()
