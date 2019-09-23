/**
 *
 * Single artist page audio tracks list.
 *
 */

/* global jsmediatags */

(function() {
  const audioPlayerContainers = document.getElementsByClassName('artist-track__container')

  if (!audioPlayerContainers) {
    return;
  }

  [...audioPlayerContainers].forEach(audioPlayerContainer => {
    const audioPlayer = audioPlayerContainer.querySelector('.artist-track');
    const audioSrc = audioPlayer.src
    const coverImg = audioPlayerContainer.querySelector('.artist-track__info-artist-img');
    const prograssBarContainer = audioPlayerContainer.querySelector(
      '.artist-track__progress-container'
    );
    const progressBar = audioPlayerContainer.querySelector('.artist-track__progress');
    const shareButton = audioPlayerContainer.querySelector('.artist-track__action--share');
    const currentTime = audioPlayerContainer.querySelector('.artist-track__time');
    const playButton = audioPlayerContainer.querySelector('.artist-track__action--play');
    const playButtonIcon = audioPlayerContainer.querySelector(
      '.artist-track__action-icon--play'
    );

    shareButton.href = `https://www.facebook.com/sharer/sharer.php?u=${audioSrc}`;

    // get audio file's id3 tags
    new jsmediatags.Reader(audioSrc)
      .setTagsToRead(['title', 'artist', 'picture'])
      .read({
        onSuccess: function({ tags }) {
          const { data, type } = tags.picture;
          const byteArray = new Uint8Array(data);
          const blob = new Blob([byteArray], { type });
          const coverURL = URL.createObjectURL(blob);

          coverImg.src = coverURL;

          audioPlayer.pause();
          togglePlayButtonIcon('PLAY');
        },
        onError: e => {
          // eslint-disable-next-line
          console.error(e.type, e.info);
          audioPlayer.style.display = 'none';
        }
      });

    // progress bar
    const togglePlayButtonIcon = action => {
      switch (action) {
        case 'PLAY':
          playButtonIcon.src = playButtonIcon.dataset.playIcon;
          playButtonIcon.alt = 'Play track';
          break;
        case 'PAUSE':
          playButtonIcon.src = playButtonIcon.dataset.pauseIcon;
          playButtonIcon.alt = 'Pause track';
          break;
        default:
          break;
      }
    };

    playButton.addEventListener('click', () => {
      if (audioPlayer.paused) {
        audioPlayer.play();
        togglePlayButtonIcon('PAUSE');
      } else {
        audioPlayer.pause();
        togglePlayButtonIcon('PLAY');
      }
    });

    // current time
    const updateTime = () => {
      const padNum = num =>
        num ? (num.toString().length === 1 ? `0${num}` : num) : '00';

      const timeTotalSeconds = audioPlayer.currentTime;
      const timeMinutes = Math.floor(timeTotalSeconds / 60);
      const timeSeconds = Math.floor(timeTotalSeconds - timeMinutes * 60);

      currentTime.innerText = `${timeMinutes}.${padNum(timeSeconds)}`;
    };

    updateTime();

    audioPlayer.addEventListener('timeupdate', () => {
      updateTime();

      const progressPercent =
        (audioPlayer.currentTime / audioPlayer.duration) * 100;
      progressBar.style.width = `${progressPercent}%`;

      if (progressPercent === 100) {
        togglePlayButtonIcon('PLAY');
      }
    });

    // click to timestamp
    prograssBarContainer.addEventListener('click', function(e) {
      if (!audioPlayer.duration) {
        return;
      }
      const progressPercent = (e.clientX - this.offsetLeft) / this.clientWidth;

      audioPlayer.currentTime = progressPercent * audioPlayer.duration;
      progressBar.style.width = `${progressPercent}%`;
    });
  })
})();
