// var add = (function() {
//   var counter = 0;
//   return function() {
//     return counter += 1; }
// })();
//
// add();
// add();
// add();

a = 3;

var back = (function() {
  a++;
  if(a>2) {
    return true;
  }
  else {
    return false;
  }
})();

console.log(back);
console.log(back);
a++;
console.log(back);
