jQuery(document).ready(function($) {

    // Append search-bar on click. //

    const $label = $('.search-label');
    const $input = $('.search-field');

    $('.search-toggle').on('click', function() {
      $label.css('width', '165');
      $input.css('width', '165');
      $input.focus();
    });
  
    // Hide search-bar on blur. //
    
    $input.blur(function() {
      $label.css('width', '0');
      $input.css('width', '0');
    }); 
  });