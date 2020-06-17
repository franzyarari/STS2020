const nombre   = document.getElementsByTagName("name")
const correo   = document.getElementsByTagName("correo")
const telefono = document.getElementsByTagName("telefono")
const empresa  = document.getElementsByTagName("empresa")
const mensaje  = document.getElementsByTagName("mensaje")
const form     = document.getElementsByTagName('form')
const parrafo  = document.getElementsByTagName('warnings')

form.addEventListener("submit", e=>{
	if (nombre.value.length <6) {
		alert("nombre muy corto")

	}
}) 
