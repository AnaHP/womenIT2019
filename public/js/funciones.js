window.addEventListener('load', cargar, true);

function cargar() {
	c1 = document.querySelector('.circulo-a');
	c2 = document.querySelector('.circulo-b');
	c3 = document.querySelector('.circulo-c');
	logo = document.querySelector('.logo');
	animar();
}

function animar(){
	c1.style.transform="scale(1)";
	c1.style.opacity="1";
	
	setTimeout(function(){
		c2.style.transform="scale(1)";
		c2.style.opacity="1";
	},300);
	
	setTimeout(function(){
		c3.style.transform="scale(1)";
		c3.style.opacity="1";
	},600);

	setTimeout(function(){
		logo.style.transform="scale(1)";
		logo.style.opacity="1";
	},1000);
}

function irprogra(){
	// document.querySelector('.programa').classList.add('verprogra');
	// document.querySelector('.main').classList.add('vermain');
	// document.querySelector('.main').classList.remove('vermain');
}