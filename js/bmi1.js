function bmi(){
	var bmi = Number(document.getElementById('weight').value);
	var calories = 13.5*bmi+487;
	document.getElementById("dclr").innerHTML = + calories + ' kcal';

}