////////////////////  Aparecer o desaparecer Menú con el Toggle  ////////////////////////

let toggleNav = document.querySelector('.icon-toggle');
let exitNav = document.querySelector('.icon-exit');
let mainNav = document.querySelector('.main-toggle');


mainNav.addEventListener('click',function(){
	mainNav.classList.remove('active');
	exitNav.classList.remove('active');
	toggleNav.classList.add('active');
	toggleNav.classList.remove('none');
})

toggleNav.addEventListener('click',function(){
	if(mainNav.classList.contains('active')){
		mainNav.classList.remove('active');
		exitNav.classList.remove('active');
		toggleNav.classList.add('active');
	} else{
		mainNav.classList.add('active');
		exitNav.classList.add('active');
		toggleNav.classList.add('none');
	};
});

exitNav.addEventListener('click',function(){
	if(mainNav.classList.contains('active')){
		mainNav.classList.remove('active');
		exitNav.classList.remove('active');
		toggleNav.classList.remove('none');
	} else{
		mainNav.classList.add('active');
		exitNav.classList.add('active');
		toggleNav.classList.add('none');
	};
});





////////////////////  Mostrar los distintos Servicios según el botón en el INDEX/////////////////////////


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







////////////////////  Mostrar las opciones del MENU IZQUIERDO /////////////////////////

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





////////////////////  Cambiar de bloque de datos en Edit Profile  ////////////////////////

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


////////////////////  Scroll dentro de la página /////////////////////////


$('a[href=#contacto]').click(function (event){
	event.stopPropagation();
	var Position = jQuery('[id="contacto"]').offset().top;

	jQuery('html, body').animate({ scrollTop: Position }, 1100);

	return false;

});
