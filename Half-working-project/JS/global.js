$('input#name-submit').on('click', function() {
  var name = $('input#name').val();
  if($.trim(name) != '') {
    $.post('name.php', {name: name}, function(data) {
        $('div#name-data').text(data);
    });
  }
});

$('input#name-submit-quad').on('click', function() {
  var nameQuad = $('input#nameQuad').val();
  if($.trim(nameQuad) != '') {
    $.post('quad.php', {name: nameQuad}, function(data) {
        $('div#name-data-quad').text(data);
    });
  }
});


$('#viewMore').click(function() {
	$('.admission').css('display', 'block');
	$(this).addClass('clicked');
});
