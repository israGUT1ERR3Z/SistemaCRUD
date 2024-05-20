function tipoCampo(){
    const contenedor=document.getElementById("campo");
    const tipo=document.getElementsByName("combo")[0].value;
    var caja=document.createElement("input");
    contenedor.innerHTML="";
    switch(tipo){
  
      case "SELECT":
        return;
      break;
  
      case "nombres":
        caja.type="text"; caja.id="nuevo"; caja.name="nuevo"; caja.required=true;
      break;
  
      case "apellidos":
        caja.type="text"; caja.id="nuevo"; caja.name="nuevo"; caja.required=true;
      break;
  
      case "correo":
        caja.type="email"; caja.id="nuevo"; caja.name="nuevo"; caja.required=true;
      break;
  
      case "celular":
        caja.type="tel"; caja.id="nuevo"; caja.name="nuevo"; caja.required=true;
      break;
  
      case "password":
        caja.type="password"; caja.id="nuevo"; caja.name="nuevo"; caja.required=true;
      break;
  
    }
  
    contenedor.appendChild(document.createElement("input").appendChild(document.createTextNode("Dato nuevo:")));
    contenedor.appendChild(caja);
    contenedor.innerHTML+="<input type=\"submit\" value=\"Modificar\">";
  
    document.getElementsByName("combo")[0].addEventListener('change', tipoCampo);
  
  }