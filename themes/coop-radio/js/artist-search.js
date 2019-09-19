/**
 *
 * Artist search.
 *
 */

jQuery(document).ready(function ($) {
  const artistSearchInput = document.getElementById('artist-search-input')
  if (!artistSearchInput) { return }

  const artistCards = [...document.getElementsByClassName('artist-search-card')]
  const artistScrollBtnPrev = document.getElementById('artist-library__action--prev')
  const artistScrollBtnNext = document.getElementById('artist-library__action--next')
  const artistScroll = $('.artist-library')

  artistSearchInput.addEventListener('input', e => {
    const input = e.target.value.trim()

    // HACK: unfilter not working unless triggered on every input
    artistScroll.slick('slickUnfilter')
    if (input.length) {
      artistScroll.slick('slickGoTo', 0)
      artistScroll.slick(
        'slickFilter',
        (i, el) =>
          el.innerText.toLowerCase().includes(input.toLowerCase())
      )
    }
  })

  artistScrollBtnPrev.addEventListener(
    'click',
    () => artistScroll.slick('slickPrev')
  )
  artistScrollBtnNext.addEventListener(
    'click',
    () => artistScroll.slick('slickNext')
  )
})
