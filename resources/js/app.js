require('./bootstrap');

require('alpinejs');

/*
	A nicer kind of <hr>
*/
while(hr = document.querySelector('hr')) {
	center = document.createElement("center");
	content = document.createTextNode("***");
	center.appendChild(content);
	hr.replaceWith(center);  
}

/*
	Modalify each <img>
*/
const imgs = document.querySelectorAll("img");

imgs.forEach(function(img) {
	img.setAttribute('x-on:click','modal = true; window.livewire.emit("showImg", { src : "'+img.src+'" })');
});