let toggleNav = document.querySelector('.toggle');
let mainNav = document.querySelector('#menu-toggle');




toggleNav.addEventListener('click',function(){
	if(mainNav.classList.contains('active')){
		mainNav.classList.remove('active');
	} else{
		mainNav.classList.add('active');
	};
});