var todo = document.getElementById('todolist');

//  ========================= storage functions  =========================
$("#todolist").blur(function() {
	localStorage.setItem('todoData', this.innerHTML);
});

if (localStorage.getItem('todoData')) {
	todo.innerHTML = localStorage.getItem('todoData');
}

$('#clear').click(function(){
	localStorage.clear();
	return false;
});

// ========================= removing all li elements  =========================
$('#removeAll').on('click', function() {
  $('li').fadeOut('slow', function() {
    $(this).remove();
  });
})

//  ========================= adding tasks & localSt.  =========================
$('#add_task').on('click',function(){
	var new_item = $('#new_task').val();
	$('#todolist').append('<li>' + new_item + ' <i class="fa fa-times" aria-hidden="true"></i> </li>');
  $('#new_task').val('');
	localStorage.setItem('todoData', todo.innerHTML);
});

//  ========================= removing li element by click X  =========================
$(document).on('click', '.fa', function() {
  $(this).parent().fadeOut('slow');
});

//  ========================= after PUSH enter -> add task to the list also  ==============
$('#new_task').keydown(function(event) {

  var toAddd = $('#new_task').val();

  if(event.which == 13) {
    $('ol').append('<li>' + toAddd + '<i class="fa fa-times" aria-hidden="true"></i>' + '</li>');
    event.preventDefault();
    $('#new_task').val('');
  };
});

// ========================= removing input =========================
