var todo = document.getElementById('todolist');

// storage functions
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

// removing all li elements
$('#removeAll').on('click', function() {
  $('li').fadeOut('slow', function() {
    $(this).remove();
  })
})

// removing li element by db click
  $(document).on('dblclick','li', function(){
    $(this).toggleClass('remove').fadeOut(1500);
  });

//adding tasks & localSt.
$('#add_task').on('click',function(){
	var new_item = $('#new_task').val();
	$('#todolist').append('<li>'+new_item+'</li>');
  $('#new_task').val('');
	localStorage.setItem('todoData', todo.innerHTML);
});

// after PUSH enter -> add task to the list also
$('#new_task').keydown(function(event) {

  var toAddd = $('#new_task').val();

  if(event.which == 13) {
    $('ol').append('<li>' + toAddd + '</li>');
    event.preventDefault();
    $('#new_task').val('');
  };
});
