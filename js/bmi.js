function bmi(){
	var height = Number(document.getElementById('height').value);
	var weight = Number(document.getElementById('weight').value);
	var result = weight/ (height*height) *10000;
	var calories = 13.5*weight+487;
	var bmi = result.toFixed(2);
	document.getElementById("result").innerHTML = + bmi;
	document.getElementById("dclr").innerHTML = + calories + ' kcal';
	if (bmi < 18.5){
		alert("You Are Underweight");		
	}
	else if (bmi > 18.5 && bmi < 24.9) {
		alert("You Are Normal");
	}
	else if (bmi > 24.9 && bmi < 29.9){
		alert("You Are Overweight");
	}
	else if (bmi > 30 && bmi < 35) {
		alert("You Are Obese");
	}
	else {
		alert("You Are Extremely Obese");
	}
}