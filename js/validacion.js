const nombre   = document.getElementById("nombre")
const correo   = document.getElementById("correo")
const asunto   = document.getElementById("asunto")
const telefono = document.getElementById("telefono")
const empresa  = document.getElementById("empresa")
const mensaje  = document.getElementById("mensaje")
const form     = document.getElementById('form')
const parrafo  = document.getElementById('warnings')

form.addEventListener("submit", e=>{
	e.preventDefault()
	let warnings = ""
	let entrar = false
	let regexEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/

	parrafo.innerHTML = ""

   // validacion nombre
	if (nombre.value.length <=2) {
		warnings  +='El Nombre no es Valido <br>'
		entrar = true
	}

	// validacion correo
	if (!regexEmail.test(correo.value)) {
		warnings  +='El correo no es Valido <br>'
		entrar = true
	}
	// validacion asunto
	if (asunto.value.length <5) {
		warnings  +='El Asunto no es Valido <br>'
		entrar = true
	}

	// validacion telefono
	if (telefono.value.length <8) {
		warnings  +='El telefono o celular no es Valido <br>'
		entrar = true
	}

	// validacion mensaje
	if (mensaje.value.length <25) {
		warnings  +='El mesaje o descripción no es Valido <br>'
		entrar = true
	}
	if (entrar) {
		parrafo.innerHTML = warnings
	}
	else
	{
		parrafo.innerHTML = "Mensaje Enviado"
	}
}) 
 function onSubmit(token) {
     document.getElementById("demo-form").submit();
   }