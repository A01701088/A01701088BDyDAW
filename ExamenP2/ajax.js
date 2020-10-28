function getRequestObject(){
    


    if(window.XMLHttpRequest){
    
        return(new XMLHttpRequest());
    }
    
    else if(window.ActiveXObject){
        return(new ActiveXObject("Microsoft.XMLHTTP"));
    }else{
        return(null);
    }
    
    }
    
    function sendRequest(){
        console.log("hello");
        request=getRequestObject();
        if(request!=null)
        {
          var userInput = document.getElementById("vegNO");
          var url='vegetal.php?vegNO='+userInput.value;
          request.open('GET','createTable.php',true);
          console.log("hello");
          request.onreadystatechange = 
                 function() { 
                     if((request.readyState==4)){
                         var ajaxResponse=document.getElementById("ajaxResponse");
                         var table = document.getElementById("tableButton");
                         ajaxResponse.innerHTML=request.responseText;
                         table.style.visibility="hidden";
                         ajaxResponse.style.visibility="visible";
                         console.log("hello");
                         
                     }     
                 };
          request.send(null);
        }
     }
    
     function selectValue() {
    
        var list=document.getElementById("list");
        var userInput=document.getElementById("vegNO");
        var ajaxResponse=document.getElementById("ajaxResponse");
        userInput.value=list.options[list.selectedIndex].text;
        ajaxResponse.style.visibility="hidden";
        userInput.focus();
     }
     
     