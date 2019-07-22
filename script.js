////////////////////  Aparecer o desaparecer Menú con el Toggle  ////////////////////////

let toggleNav = document.querySelector('.icon-toggle');
let mainNav = document.querySelector('.main-toggle');




toggleNav.addEventListener('click',function(){
	if(mainNav.classList.contains('active')){
		mainNav.classList.remove('active');
	} else{
		mainNav.classList.add('active');
	};
});







////////////////////  Mostrar los distintos Servicios según el botón en el INDEX/////////////////////////


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











////////////////////  Scroll dentro de la página /////////////////////////


$('a[href=#contacto]').click(function (event){
	event.stopPropagation();
	var Position = jQuery('[id="contacto"]').offset().top;

	jQuery('html, body').animate({ scrollTop: Position }, 1100);

	return false;

});
