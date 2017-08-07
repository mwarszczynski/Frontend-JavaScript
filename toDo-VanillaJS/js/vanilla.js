// cookies
function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+ d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

// color picker
function initPicker() {
  textColor = document.querySelector('text-color-picker');
  textColor.addEventListener('change', TextColorChange, false);

  backgroundColor = document.querySelector('background-color-picker');
  backgroundColor.addEventListener('change', BackgroundColorChange, false);
}
// IN WORKING ===================================
function textColorChange() {
  var color = textColor.value;

  var elements = document.getElementByClassName('cameleon-txt');

  for(var i = 0; i< elements.length; i++) {
    elements[i].style.color = color;
  }
}

function BackgroundColorChange() {
  var color = BackgroundColor.value;

  var elements = document.getElementByClassName('cameleon-bg');

  for(var i = 0; i< elements.length; i++) {
    elements[i].style.bakgroundColor = color;
  }
}
