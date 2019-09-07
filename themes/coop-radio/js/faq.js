jQuery(document).ready(() => {
  const $button = jQuery('button');
  return $button.click(function() {
    const $tooltip = jQuery(this).siblings('.tooltip');
    if ($tooltip.attr('hidden') === 'hidden') {
      $tooltip.removeAttr('hidden');
      return $button.attr('aria-expanded', true);
    } else {
      $tooltip.attr('hidden', true);
      return $button.attr('aria-expanded', false);
    }
  });
});
