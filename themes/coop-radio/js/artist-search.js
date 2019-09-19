/**
 *
 * Artist search.
 *
 */

(function() {
  const artistSearchInput = document.getElementById('artist-search-input')
  if (!artistSearchInput) { return }

  const artistCards = [...document.getElementsByClassName('artist-search-card')]

  artistSearchInput.addEventListener('input', e => {
    const input = e.target.value.trim()

    if (input.length) {
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
})()
