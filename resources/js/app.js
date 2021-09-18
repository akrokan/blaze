require('./bootstrap');

require('alpinejs');
/*
window.onload = function () {
	var addr1 = document.getElementById("off").addEventListener('click', onoff(), false);
    var addr2 = document.getElementById("on").addEventListener ('click', onoff(), false);
}

function onoff()
{
	if (addr1.id == "on")	addr1.id = "off";
	else			        addr1.id = "on";
	if (addr2.id == "on")	addr2.id = "off";
	else			        addr2.id = "on";
}
*/

while(hr = document.querySelector('hr')) {
	center = document.createElement("center");
	content = document.createTextNode("***");
	center.appendChild(content);
	hr.replaceWith(center);  
  }