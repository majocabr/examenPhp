function validar() {
	var nombre, apellido , correo, usuario, clave, expresion;
	nombre = document.getElementById("nombre").value;
	apellido = document.getElementById("apellido").value;
	correo = document.getElementById("correo").value;
	usuario = document.getElementById("usuario").value;
	clave = document.getElementById("clave").value;



	expresion= /\w+@\w+\.+[a-z]/ ;	

	if (nombre== ""||apellido == "" ||correo == ""||usuario == "" ||clave == "") {
		alert("Todos los campos son obligatorios");
		return false;
	}
	else if(nombre.length>30){
		alert("El nombre tiene demasiados caracteres");
		return false;
		
	}
	else if(correo.length>100){
		alert("El correo tiene demasiados caracteres");
		return false;
		
	}
	else if(!expresion.test(correo)){
		alert("EL correo no es valido");
		return false;
		
	}

	else if(clave.length>20){
		alert("La clave tiene demasiados caracteres");
		return false;
		
	}

}
