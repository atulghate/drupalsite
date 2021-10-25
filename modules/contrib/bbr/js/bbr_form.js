jQuery(document).ready(() => {
  jQuery('#bbr-input').parent().css('display', 'none');
  let bbr = jQuery('#bbr-input').val();
  if (bbr == 'yes') {
    location.reload(true);
  }
  else {
    jQuery('#bbr-input').val('yes').trigger('change');
  }
});
