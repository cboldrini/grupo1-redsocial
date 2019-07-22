

////////////////////  Funcionamiento del Toggle /////////////////////////

let toggleNav = document.querySelector('.icon-toggle');
let mainNav = document.querySelector('.main-toggle');




toggleNav.addEventListener('click',function(){
	if(mainNav.classList.contains('active')){
		mainNav.classList.remove('active');
	} else{
		mainNav.classList.add('active');
	};
});










////////////////////  Scroll dentro de la página /////////////////////////


$('a[href=#conacto]').click(function (event){
	event.stopPropagation();
	var Position = jQuery('[id="contacto"]').offset().top;

	jQuery('html, body').animate({ scrollTop: Position }, 1100);

	return false;

});
