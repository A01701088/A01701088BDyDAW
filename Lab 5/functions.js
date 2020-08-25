function verifyPassword(){
    let val1=document.getElementById("password1").value;
    let val2=document.getElementById("password2").value;

    if(val1==val2){
        alert("Las dos contraseñas coinciden")
    }
    else if(val1 != val2)
        alert("Las dos contraseñas son diferentes, intente de nuevo")
}

let camara=0;
let coche=0;
let silla=0;
let totalIVA=0;
let total=0;
let tax=0;


function tienda(producto,operacion){
    

    switch(producto){
        case 1:
            if(camara>=0){

                if(operacion==0){
                    total-=2000;
                    camara-=1;
                    document.getElementById("cameraAmount").innerHTML=camara;

                }
                if(operacion==1){
                    total+=2000;
                    camara+=1;
                    document.getElementById("cameraAmount").innerHTML=camara;

                }
            }
        break;

        
        case 2:
            {if(coche>=0){

                if(operacion==0){
                    total-=10000;
                    coche-=1;
                    document.getElementById("cocheAmount").innerHTML=coche;

                }
                if(operacion==1){
                    total+=10000;
                    coche+=1;
                    document.getElementById("cocheAmount").innerHTML=coche;

                }
            }




            }
        break;

        case 3:
            {if(silla>=0){

                if(operacion==0){
                    total-=500;
                    silla-=1;
                    document.getElementById("sillaAmount").innerHTML=silla;

                }
                if(operacion==1){
                    total+=500;
                    silla+=1;
                    document.getElementById("sillaAmount").innerHTML=silla;

                }
            }




            }
        break;
        case 4:
            camara=0;
            coche=0;
            silla=0;
            totalIVA=0;
            total=0;
            tax=0;
            document.getElementById("sillaAmount").innerHTML=silla;
            document.getElementById("cocheAmount").innerHTML=coche;
            document.getElementById("cameraAmount").innerHTML=camara;
            document.getElementById("totalIVA").innerHTML="Total Sin Iva: $" + total;
            document.getElementById("tax").innerHTML="IVA: $" + total;
            document.getElementById("total").innerHTML="Total: $"+ total;

            alert("Gracias por su compra!");

    }
    document.getElementById("totalIVA").innerHTML="Total Sin Iva: $" + total;
    document.getElementById("tax").innerHTML="IVA: $" + total*0.16;
    document.getElementById("total").innerHTML="Total: $"+ Math.floor(total*1.16);


}


function convertidorLibraKilo(){
    
    let cantidad = document.getElementById("cantidadConvertir").value;


    if(document.getElementById("libra").checked){
        cantidad = cantidad*2.204;
        document.getElementById("resultado").innerHTML = cantidad + "lb"
    }
    else if(document.getElementById("kilo").checked){
        cantidad=cantidad*0.45392;
        document.getElementById("resultado").innerHTML = cantidad + "kg"
    }

    console.log(cantidad);
    console.log(document.getElementById("kilo").checked)
    console.log(document.getElementById("libra").checked)

}