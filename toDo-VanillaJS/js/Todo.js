$(document).ready(function() {
  $('#button').click(function() {
    var toAdd = $('input[name=ListItem]').val();
    $('ol').append('<li>' + toAdd + '</li>');
  });

// removing list elements
  $(document).on('dblclick','li', function(){
    $(this).toggleClass('remove').fadeOut(1500);
  });

  $('input').focus(function() {
    $(this).val('');
  });

});
