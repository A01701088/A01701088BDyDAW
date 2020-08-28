function helpTextAppear(){
    document.getElementById("help").style.display = "block";

}
function helpTextDissappear(){
    document.getElementById("help").style.display = "none";

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
            document.getElementById("resultado").innerHTML = cantidad + "lb";
        }
        else if(document.getElementById("kilo").checked){
            cantidad=cantidad*0.45392;
            document.getElementById("resultado").innerHTML = cantidad + "kg";
        }

        console.log(cantidad);
        console.log(document.getElementById("kilo").checked);
        console.log(document.getElementById("libra").checked);
    }
}