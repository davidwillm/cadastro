jQuery(document).ready(function($) {
  
  $('#show_password').hover(function(e) {
    e.preventDefault();
    if ( $('#password').attr('type') == 'pass' ) {
      $('#password').attr('type', 'text');
      $('#show_password').attr('class', 'fa fa-eye');
    } else {
        $('#password').attr('type', 'password');
        $('#show_password').attr('class', 'fa fa-eye-slash');
    }
  });
  
});


