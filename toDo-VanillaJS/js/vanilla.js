// cookies
function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+ d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

// watch
function beginWatch() {
  var today = new Date();
  var h = today.getHours();
  var m = today.getMinutes();
  var s = today.getSeconds();

  m = checkDetails(m);
  s = checkDetails(s);

  document.getElementById('watch').innerHTML = h + ":" + m + ":" + s;
  var time = setTimeout(beginWatch, 500);

};

function checkDetails(i) {
  if(i < 10) {
    i = '0' + i;
  }
  return i;
}

beginWatch()

// color picker  - IN WORKING ===================================
function initPicker() {
  textColor = document.querySelector('text-color-picker');
  textColor.addEventListener('change', TextColorChange, false);

  backgroundColor = document.querySelector('background-color-picker');
  backgroundColor.addEventListener('change', BackgroundColorChange, false);
}

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
