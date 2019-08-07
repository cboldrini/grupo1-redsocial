$( document ).ready(function() {


////////////////////////////////////////////////////////////////////////////////
//////////////////////////////// GENERALES /////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////


///////////////////////  CAMBIAR TEMA  /////////////////////////


$("#wrp-change-theme").click(darkMode);

var themeMode = "l";

function darkMode(){
   let root = document.documentElement;
   let btn = document.querySelector("#btn-change-theme");
   
   if (themeMode == "l") {

   	   themeMode = "d";
   	   root.style.setProperty('--blanco', '#222');
	   root.style.setProperty('--blanco-2', '#333');
	   root.style.setProperty('--blanco-3', '#444');
	   root.style.setProperty('--blanco-4', '#555');
	   root.style.setProperty('--blanco-5', '#666');
	   root.style.setProperty('--gris-oscuro', '#eee');
	   root.style.setProperty('--azul-claro', '#eee');
	   root.style.setProperty('--azul-medio', '#ddd');
	   root.style.setProperty('--azul-oscuro', '#ccc');
	   btn.style.setProperty("float","right");
   } 

   else{
   		themeMode = "l";
   	   root.style.setProperty('--blanco', '#fff');
	   root.style.setProperty('--blanco-2', '#eee');
	   root.style.setProperty('--blanco-3', '#ddd');
	   root.style.setProperty('--blanco-4', '#ccc');
	   root.style.setProperty('--blanco-5', '#bbb');
	   root.style.setProperty('--gris-oscuro', '#333');
	   root.style.setProperty('--azul-claro', '#3A7CA5');
	   root.style.setProperty('--azul-medio', '#2F6690');
	   root.style.setProperty('--azul-oscuro', '#16425B');
	   btn.style.setProperty("float","left");
	   btn.style.setProperty("transition",".3s");
   }
   

   

};





////////////////////////////////////////////////////////////////////////////////
///////////////////////////////// REGISTRO /////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////



//////////////////////  VALIDAR LONGITUD DE CONTRASEÑA  ////////////////////////


$("#password").keyup(checkLengthPassword);
$("#password").blur(checkLengthPassword);



function checkLengthPassword() {
	var password = $("#password").val();
	var longitudPassword = password.length;

	if (longitudPassword < 6) {
		$("#validacionPassword").html("<span><i class='icon-alert fas fa-exclamation-circle'></i>Debe tener al menos 6 caracteres.</span>");
		val_pass1_registro = "0";
		cambiarPasoRegistro();
	} 

	else{
		$("#validacionPassword").html("<span><i class='icon-check fas fa-check'></i></span>");
		val_pass1_registro = "1";
		cambiarPasoRegistro();
	}
};



//////////////////////  VALIDAR IGUALDAD EN PASSWORDS  /////////////////////////


$("#password").keyup(checkPasswordMatch);
$("#password").blur(checkPasswordMatch);
$("#password2").keyup(checkPasswordMatch2);
$("#password2").blur(checkPasswordMatch2);

var val_pass1_registro = "0";
var val_pass2_registro = "0";


function checkPasswordMatch() {
	var password = $("#password").val();
	var password2 = $("#password2").val();

	if (password != password2 && password != "" && password2 != "") {
		$("#validacionPassword2").html("<span><i class='icon-alert fas fa-exclamation-circle'></i>Las contraseñas no coinciden.</span>");
		val_pass1_registro = "0";
		val_pass2_registro = "0";
		cambiarPasoRegistro();
	} 

	else if(password == password2 && password != "" && password2 != "") {
		$("#validacionPassword2").html("<span><i class='icon-check fas fa-check'></i>Las contraseñas son iguales.</span>");
		val_pass1_registro = "1";
		val_pass2_registro = "1";
		cambiarPasoRegistro();
	}
}

function checkPasswordMatch2() {
	var password = $("#password").val();
	var password2 = $("#password2").val();



	if (password != password2) {
		$("#validacionPassword2").html("<span><i class='icon-alert fas fa-exclamation-circle'></i>Las contraseñas no coinciden.</span>");
		val_pass2_registro = "0";
		val_pass1_registro = "0";
		cambiarPasoRegistro();
	} 

	else if(password == password2 && password != "" && password2 != "") {
		$("#validacionPassword2").html("<span><i class='icon-check fas fa-check'></i></span>");
		val_pass2_registro = "1";
		val_pass1_registro = "1";
		cambiarPasoRegistro();
	}
}



////////////////////////  VALIDAR LONGITUD DE NOMBRE  //////////////////////////


$("#nombre").keyup(checkNombre);
$("#nombre").blur(checkNombre);

var val_nombre_registro = "0";


function checkNombre() {


	var nombre = $("#nombre").val();
	var longitudNombre = nombre.length;

	if (longitudNombre < 3) {
		$("#validacionNombre").html("<span><i class='icon-alert fas fa-exclamation-circle'></i>El nombre debe tener al menos 3 letras.</span>");
		val_nombre_registro = "0";
		cambiarPasoRegistro();
	} 

	else {
		$("#validacionNombre").html("<span><i class='icon-check fas fa-check'></i></span>");
		val_nombre_registro = "1";
		cambiarPasoRegistro();
	}
}


///////////////////////  VALIDAR LONGITUD DE APELLIDO  /////////////////////////


$("#apellido").keyup(checkLengthApellido);
$("#apellido").blur(checkLengthApellido);

var val_apellido_registro = "0";


function checkLengthApellido() {
	var apellido = $("#apellido").val();
	var longitudApellido = apellido.length;

	if (longitudApellido < 3) {
		$("#validacionApellido").html("<span><i class='icon-alert fas fa-exclamation-circle'></i>El apellido debe tener al menos 3 letras.</span>");
		val_apellido_registro = "0";
		cambiarPasoRegistro();
	} 
	

	else {
		$("#validacionApellido").html("<span><i class='icon-check fas fa-check'></i></span>");
		val_apellido_registro = "1";
		cambiarPasoRegistro();
	}
}





///////////////////////////////  VALIDAR EMAIL  ////////////////////////////////

var val_email_registro = "0";

$('#email').blur(checkEmail);
$('#email').keyup(checkEmail);


function checkEmail(){
	var email = $("#email").val();
	var longitudEmail = email.length;

	if (longitudEmail == 0) {
		$("#validacionEmail").html("<i class='icon-alert fas fa-exclamation-circle'></i>Debes ingresar un email.<input id='emailChecker' type='hidden' value='0' name='emailChecker'> ");
		val_email_registro = "0";
		cambiarPasoRegistro();
		
	} 

	else { 
		var caract = new RegExp(/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/);

		if (caract.test(email) == false) {
		$("#validacionEmail").html("<i class='icon-alert fas fa-exclamation-circle'></i>El email ingresado es inválido.<input id='emailChecker' type='hidden' value='0' name='emailChecker'> ");
		val_email_registro = "0";
		cambiarPasoRegistro();
	} 
	

	else {

		$.ajax(

			'check_email.php',
			{method: "GET", //Le indicas el metodo
       		data: {email: email}, //le pasas el archivo con los datos que queres mandar al php
		    success: function(respuesta) {
		   		if (respuesta == 1) {
		   			$("#validacionEmail").html("<i class='icon-alert fas fa-exclamation-circle'></i><span id='mensajeEmail'>El email ya está registrado.</span><input id='emailChecker' type='hidden' value='0' name='emailChecker'> ");
					val_email_registro = "0";
					cambiarPasoRegistro();
		    	} 

		    	else {
		    		$("#validacionEmail").html("<i class='icon-check fas fa-check'></i><span id='mensajeEmail'></span><input id='emailChecker' type='hidden' value='0' name='emailChecker'> ");
					val_email_registro = "1";
					cambiarPasoRegistro();
		    	}
		   	}

		   
		   }
		);

	}



		
	}



};








//////////////////////////  CAMBIAR DE PASO //////////////////////////////
// let btn_siguiente = $('.icon-btn-siguiente');
// btn_siguiente.removeClass('disabled');

function cambiarPasoRegistro(){
	let btn_siguiente = $('#btn-siguiente');

if ($('.btn-siguiente') && 
	$('.btn-anterior') && 
	$('.btn-paso1') && 
	$('.btn-paso2') && 
	$('.wrapper-paso1') && 
	$('.wrapper-paso2') && 
	val_email_registro == "1" &&
	val_nombre_registro == "1" &&
	val_apellido_registro == "1" &&
	val_pass1_registro == "1" &&
	val_pass2_registro == "1"
 ) {

	

	let btn_siguiente = $('#btn-siguiente');
	let btn_anterior = $('.btn-anterior');
	let btn_paso_1 = $('.btn-paso1');
	let btn_paso_2 = $('.btn-paso2');
	let wrapper_paso_1 = $('.wrapper-paso1');
	let wrapper_paso_2 = $('.wrapper-paso2');


	btn_siguiente.removeClass('disabled');
	$('#btn-enviar-registro').attr("disabled", false);


	btn_siguiente.click(function(){
		wrapper_paso_1.addClass('none');
		wrapper_paso_1.removeClass('active');
		wrapper_paso_2.addClass('active');
		wrapper_paso_2.removeClass('none');
		btn_paso_1.addClass('not-focus');
		btn_paso_2.removeClass('focus');
		btn_paso_2.addClass('focus');
		btn_paso_2.removeClass('not-focus');
	});

	btn_paso_1.click(function(){
		wrapper_paso_1.removeClass('none');
		wrapper_paso_1.addClass('active');
		wrapper_paso_2.removeClass('active');
		wrapper_paso_2.addClass('none');
		btn_paso_2.addClass('not-focus');
		btn_paso_2.removeClass('focus');
		btn_paso_1.addClass('focus');
		btn_paso_1.removeClass('not-focus');
	});

	btn_paso_2.click(function(){
		wrapper_paso_1.addClass('none');
		wrapper_paso_1.removeClass('active');
		wrapper_paso_2.addClass('active');
		wrapper_paso_2.removeClass('none');
		btn_paso_1.addClass('not-focus');
		btn_paso_2.removeClass('focus');
		btn_paso_2.addClass('focus');
		btn_paso_2.removeClass('not-focus');
	});

	btn_anterior.click(function(){
		wrapper_paso_1.removeClass('none');
		wrapper_paso_1.addClass('active');
		wrapper_paso_2.removeClass('active');
		wrapper_paso_2.addClass('none');
		btn_paso_2.addClass('not-focus');
		btn_paso_2.removeClass('focus');
		btn_paso_1.addClass('focus');
		btn_paso_1.removeClass('not-focus');
	});

}

else{
	btn_siguiente.addClass('disabled');
	$('#btn-enviar-registro').attr("disabled", true);
}

}



//////////////////////  HABILITAR/DESHABILITAR BOTONES  ///////////////////////









//////////////////////////  MOSTRAR FOTO AL CARGAR  ///////////////////////////









////////////////////////////////////////////////////////////////////////////////
///////////////////////////////// POSTS ////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////



/////////////////////////////  CARGAR NUEVO POST  /////////////////////////////

$("#nuevo_post").submit(nuevo_post)


   function nuevo_post(e){

   e.preventDefault();
	var mensaje = new FormData($("#nuevo_post")[0])

	var contenedor = $("#wrapper-loader");
	contenedor.css("visibility","visible");
	contenedor.css("opacity","1");
	

   $.ajax({
            url         : 'timeline.php',
            type        : 'POST',
            data        : mensaje, 
            processData : false,
            contentType : false,
            success: function(response)
            {
            	

               $("#recarga_posts").load('recargar_posts.php');
               $("#message").val("");
               	
               	contenedor.css("visibility","hidden");
				contenedor.css("opacity","0");

               return false;

            },
            error : function(response)
            {
                alert(response)
            }
   
})

}



////////////////////////////////  LOADER  //////////////////////////////////////

// window.onload * function(){
// 	var contenedor = $(".wrapper-loader");
// 	contenedor.style.visibility = 'hidden';
// 	contenedor.style.opacity = '0';
// };







////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////// CHAT ///////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////


//////////////////////////////  NUEVO MENSAJE  /////////////////////////////////

$("#new-msg").submit(nuevo_mensaje);


   function nuevo_mensaje(e){

   e.preventDefault();
	var mensaje = new FormData($("#new-msg")[0])

	var contenedor = $("#wrapper-loader");
	contenedor.css("visibility","visible");
	contenedor.css("opacity","1");
	

   $.ajax({
            url         : 'recargar_mensajes.php',
            type        : 'POST',
            data        : mensaje, 
            processData : false,
            contentType : false,
            success: function(response)
            {
            	
            	console.log(response);
               $("#recargar-mensajes").html(response);
               $("#message").val("");
               	
               	contenedor.css("visibility","hidden");
				contenedor.css("opacity","0");

               return false;

            },
            error : function(response)
            {
                alert(response)
            }
   
})

}



///////////////////////////  MOSTRAR CONVERSACION  /////////////////////////////

$(".conv-contact").click(mostrarConversacion);


   function mostrarConversacion(e){

   e.preventDefault();

   	var idConversacion = $(this).attr("id");
   	var mensaje = {"idConversacion" : idConversacion};
	var contenedor = $("#wrapper-loader");
	contenedor.css("visibility","visible");
	contenedor.css("opacity","1");
	

   $.ajax({
            url         : 'mostrar_conversacion.php',
            type        : 'POST',
            data        : mensaje, 
            // processData : false,
            // contentType : false,
            success: function(response)
            {
            	
            console.log(response);
               $("#conversation").html(response);
               $("#message").val("");
               	
               	contenedor.css("visibility","hidden");
				contenedor.css("opacity","0");


               return false;

            },
            error : function(response)
            {
                alert(response)
            }
   
})

}

////////////////////////////////////////////////////////////////////////////////
///////////////////////////////// MENUS ////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////



////////////////////  Mostrar/ocultar menú con el Toggle  //////////////////////

let toggleNav = document.querySelector('.icon-toggle');
let exitNav = document.querySelector('.icon-exit');
let menuNav = document.querySelector('.menu-toggle');


menuNav.addEventListener('click',function(){
	menuNav.classList.remove('active');
	exitNav.classList.remove('active');
	toggleNav.classList.add('active');
	toggleNav.classList.remove('none');
})

toggleNav.addEventListener('click',function(){
	if(menuNav.classList.contains('active')){
		menuNav.classList.remove('active');
		exitNav.classList.remove('active');
		toggleNav.classList.add('active');
	} else{
		menuNav.classList.add('active');
		exitNav.classList.add('active');
		toggleNav.classList.add('none');
	};
});

exitNav.addEventListener('click',function(){
	if(menuNav.classList.contains('active')){
		menuNav.classList.remove('active');
		exitNav.classList.remove('active');
		toggleNav.classList.remove('none');
	} else{
		menuNav.classList.add('active');
		exitNav.classList.add('active');
		toggleNav.classList.add('none');
	};
});




/////////////////////  Mostrar/ocultar menú del perfil ////////////////////////

if (document.querySelector('.menu-profile') && 
	document.querySelector('.btn-menu-profile')
 ) {

let menu_profile = document.querySelector('.menu-profile');
let btn_menu_profile = document.querySelector('.btn-menu-profile');


btn_menu_profile.addEventListener('click',function(){
	if(menu_profile.classList.contains('active')){
		menu_profile.classList.remove('active');
		menu_profile.classList.add('none');
	} else{
		menu_profile.classList.add('active');
		menu_profile.classList.remove('none');
	};
});

};









////////////////////  Mostrar las opciones del MENU IZQUIERDO /////////////////////

if( document.querySelector("#menu_left_groups") && 
	document.querySelector(".menu-left-groups-options") && 
	document.querySelector("#menu_left_meetings") && 
	document.querySelector(".menu-left-meetings-options") && 
	document.querySelector("#menu_left_contacts") && 
	document.querySelector(".menu-left-contacts-options")
	){

	let btn_groups = document.querySelector("#menu_left_groups");
	let options_groups = document.querySelector(".menu-left-groups-options");
	let btn_meetings = document.querySelector("#menu_left_meetings");
	let options_meetings = document.querySelector(".menu-left-meetings-options");
	let btn_contacts = document.querySelector("#menu_left_contacts");
	let options_contacts = document.querySelector(".menu-left-contacts-options");

	btn_groups.addEventListener('click',function(){
		if (options_groups.classList.contains('active')) {
			options_groups.classList.remove('active');
		}
		else {
			options_groups.classList.add('active');
		}	
	});

	

	btn_meetings.addEventListener('click',function(){
		if (options_meetings.classList.contains('active')) {
			options_meetings.classList.remove('active');
		}
		else {
			options_meetings.classList.add('active');
		}	
	});

	

	btn_contacts.addEventListener('click',function(){
		if (options_contacts.classList.contains('active')) {
			options_contacts.classList.remove('active');
		}
		else {
			options_contacts.classList.add('active');
		}	
	});


};

















////////////////////////////////////////////////////////////////////////////////
///////////////////////////////// MODALS ///////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////


/////////////////////////  MOSTRAR MODAL NEW GROUP  ////////////////////////////

if (document.querySelector(".btn-new-group")) {

	let btn_new_group = document.querySelector(".btn-new-group");
	let modal_new_group = document.querySelector(".modal-new-group");
	let body_modal = document.querySelector('.body-modal');
	let modal_exit = document.querySelector('.modal-exit');

	btn_new_group.addEventListener('click',function(){
		modal_new_group.classList.add('active');
		body_modal.classList.add('active');
	});

	modal_exit.addEventListener('click',function(){
		modal_new_group.classList.remove('active');
		body_modal.classList.remove('active');
	});

}















////////////////////////////////////////////////////////////////////////////////
///////////////////////////////// FILTROS //////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////




/////////////////  CAMBIAR DE BLOQUE DE DATOS EN EDIT PROFILE  /////////////////

if (document.querySelector("#profile_edit")) {

let btn_datos_personales = document.querySelector("#btn_datos_personales");
let btn_datos_contacto = document.querySelector("#btn_datos_contacto");
let btn_datos_intereses = document.querySelector("#btn_datos_intereses");
let btn_datos_grupos = document.querySelector("#btn_datos_grupos");
let btn_datos_proyectos = document.querySelector("#btn_datos_proyectos");
let btn_datos_configuracion = document.querySelector("#btn_datos_configuracion");
let datos_personales = document.querySelector(".datos-personales");
let datos_contacto = document.querySelector(".datos-contacto");
let datos_proyectos = document.querySelector(".datos-proyectos");
let datos_grupos = document.querySelector(".datos-grupos");
let datos_intereses = document.querySelector(".datos-intereses");
let datos_configuracion = document.querySelector(".datos-configuracion");

btn_datos_personales.addEventListener('mouseover',function(){
	btn_datos_personales.classList.add('filter-active');
	btn_datos_personales.classList.remove('filter-none');
	btn_datos_contacto.classList.remove('filter-active');
	btn_datos_contacto.classList.add('filter-none');
	btn_datos_intereses.classList.remove('filter-active');
	btn_datos_intereses.classList.add('filter-none');
	btn_datos_grupos.classList.remove('filter-active');
	btn_datos_grupos.classList.add('filter-none');
	btn_datos_proyectos.classList.remove('filter-active');
	btn_datos_proyectos.classList.add('filter-none');
	btn_datos_configuracion.classList.remove('filter-active');
	btn_datos_configuracion.classList.add('filter-none');
	datos_personales.classList.add('active');
	datos_personales.classList.remove('none');
	datos_contacto.classList.remove('active');
	datos_contacto.classList.add('none');
	datos_intereses.classList.remove('active');
	datos_intereses.classList.add('none');
	datos_grupos.classList.remove('active');
	datos_grupos.classList.add('none');
	datos_proyectos.classList.remove('active');
	datos_proyectos.classList.add('none');
	datos_configuracion.classList.remove('active');
	datos_configuracion.classList.add('none');
})

btn_datos_contacto.addEventListener('mouseover',function(){
	btn_datos_personales.classList.remove('filter-active');
	btn_datos_personales.classList.add('filter-none');
	btn_datos_contacto.classList.add('filter-active');
	btn_datos_contacto.classList.remove('filter-none');
	btn_datos_intereses.classList.remove('filter-active');
	btn_datos_intereses.classList.add('filter-none');
	btn_datos_grupos.classList.remove('filter-active');
	btn_datos_grupos.classList.add('filter-none');
	btn_datos_proyectos.classList.remove('filter-active');
	btn_datos_proyectos.classList.add('filter-none');
	btn_datos_configuracion.classList.remove('filter-active');
	btn_datos_configuracion.classList.add('filter-none');
	datos_personales.classList.remove('active');
	datos_personales.classList.add('none');
	datos_contacto.classList.add('active');
	datos_contacto.classList.remove('none');
	datos_intereses.classList.remove('active');
	datos_intereses.classList.add('none');
	datos_grupos.classList.remove('active');
	datos_grupos.classList.add('none');
	datos_proyectos.classList.remove('active');
	datos_proyectos.classList.add('none');
	datos_configuracion.classList.remove('active');
	datos_configuracion.classList.add('none');
})

btn_datos_intereses.addEventListener('mouseover',function(){
	btn_datos_personales.classList.remove('filter-active');
	btn_datos_personales.classList.add('filter-none');
	btn_datos_contacto.classList.remove('filter-active');
	btn_datos_contacto.classList.add('filter-none');
	btn_datos_intereses.classList.add('filter-active');
	btn_datos_intereses.classList.remove('filter-none');
	btn_datos_grupos.classList.remove('filter-active');
	btn_datos_grupos.classList.add('filter-none');
	btn_datos_proyectos.classList.remove('filter-active');
	btn_datos_proyectos.classList.add('filter-none');
	btn_datos_configuracion.classList.remove('filter-active');
	btn_datos_configuracion.classList.add('filter-none');
	datos_personales.classList.remove('active');
	datos_personales.classList.add('none');
	datos_contacto.classList.remove('active');
	datos_contacto.classList.add('none');
	datos_intereses.classList.add('active');
	datos_intereses.classList.remove('none');
	datos_grupos.classList.remove('active');
	datos_grupos.classList.add('none');
	datos_proyectos.classList.remove('active');
	datos_proyectos.classList.add('none');
	datos_configuracion.classList.remove('active');
	datos_configuracion.classList.add('none');
})

btn_datos_grupos.addEventListener('mouseover',function(){
	btn_datos_personales.classList.remove('filter-active');
	btn_datos_personales.classList.add('filter-none');
	btn_datos_contacto.classList.remove('filter-active');
	btn_datos_contacto.classList.add('filter-none');
	btn_datos_intereses.classList.remove('filter-active');
	btn_datos_intereses.classList.add('filter-none');
	btn_datos_grupos.classList.add('filter-active');
	btn_datos_grupos.classList.remove('filter-none');
	btn_datos_proyectos.classList.remove('filter-active');
	btn_datos_proyectos.classList.add('filter-none');
	btn_datos_configuracion.classList.remove('filter-active');
	btn_datos_configuracion.classList.add('filter-none');
	datos_personales.classList.remove('active');
	datos_personales.classList.add('none');
	datos_contacto.classList.remove('active');
	datos_contacto.classList.add('none');
	datos_intereses.classList.remove('active');
	datos_intereses.classList.add('none');
	datos_grupos.classList.add('active');
	datos_grupos.classList.remove('none');
	datos_proyectos.classList.remove('active');
	datos_proyectos.classList.add('none');
	datos_configuracion.classList.remove('active');
	datos_configuracion.classList.add('none');
})

btn_datos_proyectos.addEventListener('mouseover',function(){
	btn_datos_personales.classList.remove('filter-active');
	btn_datos_personales.classList.add('filter-none');
	btn_datos_contacto.classList.remove('filter-active');
	btn_datos_contacto.classList.add('filter-none');
	btn_datos_intereses.classList.remove('filter-active');
	btn_datos_intereses.classList.add('filter-none');
	btn_datos_grupos.classList.remove('filter-active');
	btn_datos_grupos.classList.add('filter-none');
	btn_datos_proyectos.classList.add('filter-active');
	btn_datos_proyectos.classList.remove('filter-none');
	btn_datos_configuracion.classList.remove('filter-active');
	btn_datos_configuracion.classList.add('filter-none');
	datos_personales.classList.remove('active');
	datos_personales.classList.add('none');
	datos_contacto.classList.remove('active');
	datos_contacto.classList.add('none');
	datos_intereses.classList.remove('active');
	datos_intereses.classList.add('none');
	datos_grupos.classList.remove('active');
	datos_grupos.classList.add('none');
	datos_proyectos.classList.add('active');
	datos_proyectos.classList.remove('none');
	datos_configuracion.classList.remove('active');
	datos_configuracion.classList.add('none');
})

btn_datos_configuracion.addEventListener('mouseover',function(){
	btn_datos_personales.classList.remove('filter-active');
	btn_datos_personales.classList.add('filter-none');
	btn_datos_contacto.classList.remove('filter-active');
	btn_datos_contacto.classList.add('filter-none');
	btn_datos_intereses.classList.remove('filter-active');
	btn_datos_intereses.classList.add('filter-none');
	btn_datos_grupos.classList.remove('filter-active');
	btn_datos_grupos.classList.add('filter-none');
	btn_datos_proyectos.classList.remove('filter-active');
	btn_datos_proyectos.classList.add('filter-none');
	btn_datos_configuracion.classList.add('filter-active');
	btn_datos_configuracion.classList.remove('filter-none');
	datos_personales.classList.remove('active');
	datos_personales.classList.add('none');
	datos_contacto.classList.remove('active');
	datos_contacto.classList.add('none');
	datos_intereses.classList.remove('active');
	datos_intereses.classList.add('none');
	datos_grupos.classList.remove('active');
	datos_grupos.classList.add('none');
	datos_proyectos.classList.remove('active');
	datos_proyectos.classList.add('none');
	datos_configuracion.classList.add('active');
	datos_configuracion.classList.remove('none');
})
}



/////////////////  CAMBIAR DE CUADRO DE SERVICIOS EN INDEX ////////////////////


if (document.querySelector('.btn-servicio-chat') && 
	document.querySelector('.btn-servicio-redsocial') && 
	document.querySelector('.btn-servicio-grupos') && 
	document.querySelector('.btn-servicio-adp') && 
	document.querySelector('.btn-servicio-dashboard') && 
	document.querySelector('.servicio-chat') && 
	document.querySelector('.servicio-redsocial') && 
	document.querySelector('.servicio-grupos') && 
	document.querySelector('.servicio-adp') && 
	document.querySelector('.servicio-dashboard')
 ) {
     

let btn_servicio_chat = document.querySelector('.btn-servicio-chat');
let btn_servicio_redsocial = document.querySelector('.btn-servicio-redsocial');
let btn_servicio_grupos = document.querySelector('.btn-servicio-grupos');
let btn_servicio_adp = document.querySelector('.btn-servicio-adp');
let btn_servicio_dashboard = document.querySelector('.btn-servicio-dashboard');

let servicio_chat = document.querySelector('.servicio-chat');
let servicio_redsocial = document.querySelector('.servicio-redsocial');
let servicio_grupos = document.querySelector('.servicio-grupos');
let servicio_adp = document.querySelector('.servicio-adp');
let servicio_dashboard = document.querySelector('.servicio-dashboard');



btn_servicio_chat.addEventListener('mouseover',function(){
	servicio_chat.classList.add('servicio-active');
	servicio_chat.classList.remove('servicio-none');
	servicio_redsocial.classList.remove('servicio-active');
	servicio_grupos.classList.remove('servicio-active');
	servicio_adp.classList.remove('servicio-active');
	servicio_dashboard.classList.remove('servicio-active');
});

btn_servicio_redsocial.addEventListener('mouseover',function(){
	servicio_chat.classList.remove('servicio-active');
	servicio_chat.classList.add('servicio-none');
	servicio_redsocial.classList.add('servicio-active');
	servicio_grupos.classList.remove('servicio-active');
	servicio_adp.classList.remove('servicio-active');
	servicio_dashboard.classList.remove('servicio-active');
});

btn_servicio_grupos.addEventListener('mouseover',function(){
	servicio_chat.classList.remove('servicio-active');
	servicio_chat.classList.add('servicio-none');
	servicio_redsocial.classList.remove('servicio-active');
	servicio_grupos.classList.add('servicio-active');
	servicio_adp.classList.remove('servicio-active');
	servicio_dashboard.classList.remove('servicio-active');
});

btn_servicio_adp.addEventListener('mouseover',function(){
	servicio_chat.classList.remove('servicio-active');
	servicio_chat.classList.add('servicio-none');
	servicio_redsocial.classList.remove('servicio-active');
	servicio_grupos.classList.remove('servicio-active');
	servicio_adp.classList.add('servicio-active');
	servicio_dashboard.classList.remove('servicio-active');
});

btn_servicio_dashboard.addEventListener('mouseover',function(){
	servicio_chat.classList.remove('servicio-active');
	servicio_chat.classList.add('servicio-none');
	servicio_redsocial.classList.remove('servicio-active');
	servicio_grupos.classList.remove('servicio-active');
	servicio_adp.classList.remove('servicio-active');
	servicio_dashboard.classList.add('servicio-active');
});

}












/////////////////  CIERRE DEL DOCUMENT.READY ////////////////////

});