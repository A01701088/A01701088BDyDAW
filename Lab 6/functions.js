function helpTextAppear(){
    document.getElementById("help").style.display = "block";

}
function helpTextDissappear(){
    document.getElementById("help").style.display = "none";

}
//Cada veinte segundos la cantidad convertida se va a volver 0
var timerCantidad = setInterval(clearCantidad,20000);

function clearCantidad(){
    document.getElementById("resultado").innerHTML = "Unidad Convertida:0"

}



function textDissapear(){

    document.getElementById("hide").style.visibility = "hidden";



}
function textAppear(){

    document.getElementById("hide").style.visibility = "visible";

}
function convertidorLibraKilo(){
    
    let cantidad = document.getElementById("cantidadConvertir").value;
    if(isNaN(cantidad)){
        alert("Por favor introduzca un numero");
    }
    else{
        if(document.getElementById("libra").checked){
            cantidad = cantidad*2.204;
            document.getElementById("resultado").innerHTML ="Unidad Convertida: "+ cantidad + "lb";
        }
        else if(document.getElementById("kilo").checked){
            cantidad=cantidad*0.45392;
            document.getElementById("resultado").innerHTML = "Unidad Convertida: "+  cantidad + "kg";
        }

        console.log(cantidad);
        console.log(document.getElementById("kilo").checked);
        console.log(document.getElementById("libra").checked);
    }
}

function dropAllow(x){
    x.preventDefault();
    


}

function drag(x){
    x.dataTransfer.setData("text",x.target.id);

}

function drop(x){
    x.preventDefault();
    var xData= x.dataTransfer.getData("text");
    x.target.appendChild(document.getElementById(xData));



}