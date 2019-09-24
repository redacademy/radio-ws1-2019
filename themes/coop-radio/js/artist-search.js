/**
 *
 * Artist search.
 *
 */

jQuery(document).ready(function($) {
  const artistSearchInput = document.getElementById(
    'artist-library__search-input'
  );
  if (!artistSearchInput) {
    return;
  }

  const artistScrollBtnPrev = document.getElementById(
    'artist-library__action--prev'
  );
  const artistScrollBtnNext = document.getElementById(
    'artist-library__action--next'
  );
  const artistScroll = $('.artist-library');

  const noResultsText = document.createElement('p');
  noResultsText.innerText = 'No artists found';
  noResultsText.classList.add('artist-library__not-found');

  artistSearchInput.addEventListener('input', e => {
    const input = e.target.value.trim();

    // HACK: unfilter not working unless triggered on every input
    artistScroll.slick('slickUnfilter');
    if (input.length) {
      artistScroll.slick('slickGoTo', 0);
      artistScroll.slick('slickFilter', (i, el) =>
        el.innerText.toLowerCase().includes(input.toLowerCase())
      );
    }

    if (document.getElementsByClassName('artist-card').length === 0) {
      artistScroll.append(noResultsText);
      artistScrollBtnPrev.style.display = 'none';
      artistScrollBtnNext.style.display = 'none';
    } else {
      noResultsText.remove();
      artistScrollBtnPrev.style.display = 'initial';
      artistScrollBtnNext.style.display = 'initial';
    }
  });

  artistScrollBtnPrev.addEventListener('click', () =>
    artistScroll.slick('slickPrev')
  );
  artistScrollBtnNext.addEventListener('click', () =>
    artistScroll.slick('slickNext')
  );
});
