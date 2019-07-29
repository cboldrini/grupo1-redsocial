

////////////////////////////////////////////////////////////////////////////////
//////////////////////////////// GENERALES /////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////






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






///////////////////////  CAMBIAR DE PASO EN REGISTRO  /////////////////////////

if (document.querySelector('.btn-siguiente') && 
	document.querySelector('.btn-anterior') && 
	document.querySelector('.btn-paso1') && 
	document.querySelector('.btn-paso2') && 
	document.querySelector('.wrapper-paso1') && 
	document.querySelector('.wrapper-paso2')
 ) {

	let btn_siguiente = document.querySelector('.btn-siguiente');
	let btn_anterior = document.querySelector('.btn-anterior');
	let btn_paso_1 = document.querySelector('.btn-paso1');
	let btn_paso_2 = document.querySelector('.btn-paso2');
	let wrapper_paso_1 = document.querySelector('.wrapper-paso1');
	let wrapper_paso_2 = document.querySelector('.wrapper-paso2');


	btn_siguiente.addEventListener('click',function(){
		wrapper_paso_1.classList.add('none');
		wrapper_paso_1.classList.remove('active');
		wrapper_paso_2.classList.add('active');
		wrapper_paso_2.classList.remove('none');
		btn_paso_1.classList.add('not-focus');
		btn_paso_2.classList.remove('focus');
		btn_paso_2.classList.add('focus');
		btn_paso_2.classList.remove('not-focus');
	});

	btn_paso_1.addEventListener('click',function(){
		wrapper_paso_1.classList.remove('none');
		wrapper_paso_1.classList.add('active');
		wrapper_paso_2.classList.remove('active');
		wrapper_paso_2.classList.add('none');
		btn_paso_2.classList.add('not-focus');
		btn_paso_2.classList.remove('focus');
		btn_paso_1.classList.add('focus');
		btn_paso_1.classList.remove('not-focus');
	});

	btn_paso_2.addEventListener('click',function(){
		wrapper_paso_1.classList.add('none');
		wrapper_paso_1.classList.remove('active');
		wrapper_paso_2.classList.add('active');
		wrapper_paso_2.classList.remove('none');
		btn_paso_1.classList.add('not-focus');
		btn_paso_2.classList.remove('focus');
		btn_paso_2.classList.add('focus');
		btn_paso_2.classList.remove('not-focus');
	});

	btn_anterior.addEventListener('click',function(){
		wrapper_paso_1.classList.remove('none');
		wrapper_paso_1.classList.add('active');
		wrapper_paso_2.classList.remove('active');
		wrapper_paso_2.classList.add('none');
		btn_paso_2.classList.add('not-focus');
		btn_paso_2.classList.remove('focus');
		btn_paso_1.classList.add('focus');
		btn_paso_1.classList.remove('not-focus');
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





