function verifyPassword(){
    let val1=document.getElementById("password1").value;
    let val2=document.getElementById("password2").value;

    if(val1==val2){
        alert("Las dos contraseñas coinciden")
    }
    else if(val1 != val2)
        alert("Las dos contraseñas son diferentes, intente de nuevo")
}

