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

    if (input.length) {
      artistScroll.slick('slickGoTo', 0)
      artistCards
        .forEach(el => el.innerText.toLowerCase().includes(input.toLowerCase())
          ? el.parentElement.style.display = 'initial'
          : el.parentElement.style.display = 'none'
        )
    } else {
      artistCards
        .forEach(el => el.parentElement.style.display = 'initial') 
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
