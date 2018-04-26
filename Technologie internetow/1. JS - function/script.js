=======================  Exercise 1    ========================= //
=================  Task 1   =================== //
var x = pow(prompt("Write Your Number: "));
document.write("Enhanced number = " + x);
function pow(a)
{
  a *= a;
  return a;
}

 =======================   Exercise 1    ======================== //
=================    Task 2   =================== //
// a.   == FOR LOOP ==
var tab = [2,3,4,5,6,7];
document.write('<h4>Loop for</h4>');
for (var i = 0; i < tab.length; i++) {
  tab[i] *= tab[i];
  document.write("<br>Score: "+ tab[i] );
}

//  b.  == FOR OF LOOP ==
var tab2 = [8,6,4,2,1];
document.write('<br><br><h4>Loop for of</h4>');
for (var value of tab2) {
  value *= value;
  document.write("<br>Score: "+value);
}

//  c.   == FOR in LOOP ==
var tab3 = [9,3,7,2,8];
document.write('<br><br><h4>Loop for in</h4>');
for(let i in tab3)
{
  let x = tab3[i] *= tab3[i];
  document.write("<br>"+x);
}

//  d.   == FOR EACH LOOP  ==
var tab4 = [1,1,2,13,8];
document.write('<br><br><h4>Loop for each</h4>');
tab4.forEach(function(element) {
  document.write("<br>"+element*element);
})

//  =======================   Exercise 1    ======================== //
// =================    Task 3   =================== //
//     == FOR EACH LOOP -> ES6  ==
var tab4 = [1,1,2,13,8];
document.write('<br><br><h4>Loop for each in ES6</h4>');
var values = tab4.map ( x => x * x)
document.write(values);

//  =======================   Exercise 2    ======================== //
var count = function() {
  var counter = 0;
  return function () {
    return counter += 1;}
})();

count();
count();
