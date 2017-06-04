var location1 = 1;
var location2 = 2;
var location3 = 3;

var quess  ;	// komorka wskazana przez uzytkownika do sprawdzenia

var hits = 0;  	// liczba trafień
var guesses = 0;   	// liczba prób

var isSunk = false;  // czy zatopiony

while (isSunk == false) {
	guess = prompt('Podaj liczbę z zakresu 0 - 6 ');
	if(guess < 0 || guess > 6) {
		alert('Nie poprawny numer komórki! ');
	} else {
		guesses = guesses + 1;
		
		if (guess == location1 || guess == location2 || guess == location3) {
			alert("TRAFIONY");
			hits = hits + 1;
			
			
			if(hits = 3 ) {
				isSunk = true;
				alert('Zatopiles statek!');
			}
			else {
				alert('Pudło');
			}
		}
	}
}

var stats = "Potrzebowales " + guesses + " prob, by zatapic okret, " +
 "czyli Twoja efektywnoĂÊ wynosi: " + (3/guesses) + ".";
alert(stats); 

// STRONA 100