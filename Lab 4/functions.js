let num = [10,4,3,8,1,6,3,-1,-4,-2,-1];

function table(){

	var num = prompt("Ingresa un numero","0");

	if(isNaN(num)){
		num= prompt("Ingresa solamente un numero");

	}
	let tble = "";
	//concat() es usado para unir los arrays
	tble = tble.concat("<table>")
	tble = tble.concat("<tr>")
	tble = tble.concat("<td>"+"Numero"+"</td>");
	tble = tble.concat("<td>"+"Cuadrado"+"</td>");
	tble = tble.concat("<td>"+"Cubo"+"</td>");
	tble = tble.concat("</tr>");
	for(let i = 1;i<=num;i++){
		tble = tble.concat("<tr>");
		tble = tble.concat("<td>"+i+"</td>");
		tble = tble.concat("<td>"+i**2+"</td>");
		tble = tble.concat("<td>"+i**3+"</td>");
		tble = tble.concat("</tr>");


	}
	
	tble = tble.concat("</table>");
	document.getElementById("tabla").innerHTML= tble;
	//document.open();
	//document.write(tble);
	//document.close();
}

function numAleatorios() {

	const n1 = Math.random()*100;
	const n2 = Math.random()*100;

	let numGenerado =n1+n2;

	let start = new Date();
	
	let input;
	if(isNaN(input)){	
		let input = prompt("Ingresa un numero","0");

		if(input == numGenerado){
			document.getElementById("numAlea").innerHTML = ("<p> Correcto </p>");


		}
		else{
			document.getElementById("numAlea").innerHTML = ("<p> Incorrecto </p>");
		}
	}
	let end = (new Date()-start)/1000;
	document.getElementById("tiempoTardado").innerHTML = ("<p>Te tardaste "+ end + " segundos en responder</p>");

}

function contador(){

	const numArreglo = [];

	let neg=0, pos=0, zero=0;
	
	for(let i =0; i <20;i++){
		const num1 = (Math.random()*100);
		const num2 = (Math.random()*100);

		numArreglo[i]=Math.floor(num1-num2);
		if(numArreglo[i]<0){
			neg++;

		}
		if(numArreglo[i]==0){
			zero++;

		}
		if(numArreglo[i]>0){
			pos++;

		}
		

	}
	document.getElementById("contdr").innerHTML = "<p> Arreglo: " + numArreglo + "</p> <p>Numeros negativos: "+ neg + " Numeros Zeros: "+ zero + " Numeros Positivos " + pos+ "</p>";


}

function promedio(){

	const matriz = [];
	const matrizTam = 10;

	for(let i = 0;i<matrizTam;i++){
		matriz[i]= new Array();

		for(let j = 0; j<matrizTam; j++){
			matriz[i][j]=Math.floor(Math.random()*100);

		}


	}
	let table = "";
	table = table.concat("<table>")

	let promSum=0, prom=0; promArreg = [];
	for(let i = 0; i < matrizTam;i++){
		promSum = 0;
		table = table.concat("<tr>");
		for(let j = 0; j<matrizTam; j++){
			
			promSum+= matriz[i][j];
			table = table.concat("<td>"+matriz[i][j]+"</td>")
			console.log(promSum);
		
		}
		table = table.concat("</tr>");
		promArreg[i] = promSum/matrizTam; 

	}
	table = table.concat("</table>")
	document.getElementById("prom").innerHTML = table + "<br>" + "El promedio de los renglones son: " + promArreg;

}

function inversion(){
	let num = prompt("Ingresa numero", "0");

	if(isNaN(num)){
		num = prompt("Ingresa numero");

	}
	num = num + "";

	document.getElementById("inver").innerHTML = "Tu numero invertido es: " + num.split("").reverse("").join("");


}

function cambioMoneda(){
	
	let valorC = prompt("Ingresa la cantidad de dinero en pesos que quieres cambiar");
	
	if(isNaN(valorC)){
		valorC = prompt("Por favor ingresa un numero");

	}

	let valorM = prompt("¿A que moneda lo quieres cambiar? D = Dolares, L = Libra, E = Euros, C = Dolares Canadienses, Y = Yuan");

	

	var dinero = {
		valor: valorC,
		valorF: 0 

	};

	switch(valorM){
		case "D":
			dinero.valorF=dinero.valor*.045;
		case "L":
			dinero.valorF=dinero.valor*.034;
		case "E":
			dinero.valorF=dinero.valor*.038;
		case "C":
			dinero.valorF=dinero.valor*.060;
		case "Y":
			dinero.valorF=dinero.valor*.31;

	}
	console.log(dinero.valorF);
	document.getElementById("moned").innerHTML = "Valor: " + dinero.valorF;



}



