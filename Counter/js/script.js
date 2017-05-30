/* Count down timer */
function countdown() {
	var now = new Date();
	var target = new Date(2017, 12, 31);
	
	var time = now.getTime();
	var aim = target.getTime();
	
	var count = aim - time;
	
	var s = Math.floor(count / 1000);
	var m = Math.floor(s / 60);
	var h = Math.floor(m / 60);
	var d = Math.floor(h / 24);
	
	h %= 24;
	m %= 60;
	s %= 60;
	
	h = (h < 10) ? "0" + h : h;
	m = (m < 10) ? "0" + m : m;
	s = (s < 10) ? "0" + s : s;
	
document.getElementById("days").textContent = d;
document.getElementById("days").innerText = d;
	
	document.getElementById("hours").textContent = h;
	document.getElementById("minutes").textContent = m;
	document.getElementById("seconds").textContent = s;
	
	setInterval(countdown, 1000);
}
countdown();

/* Clock */
function CounterOn() {
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('txt').innerHTML =
    h + ":" + m + ":" + s;
    var t = setTimeout(startTime, 500);
}
function checkTime(i) {
    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
}







