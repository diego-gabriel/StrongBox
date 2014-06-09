var id = 0;
function newExtra(){
	var form = document.getElementById("boxForm");
	var formChildren = form.childNodes;
	var titleLabel = document.createElement('label');
	var valueLabel = document.createElement('label');
	var titleinput = document.createElement('input');
	var valueinput = document.createElement('input');
	var extraDiv = document.createElement('div');
	var eraseButton = document.createElement('button');

	id++;
	setLabelAttr(titleLabel, "Titulo", "title");
	setInputAttr(titleinput, "title");
	setLabelAttr(valueLabel, "Valor", "value");
	setInputAttr(valueinput, "value");

	eraseButton.onclick = function(){
		form.removeChild(extraDiv);
		id = 0;
		var divChildren = form.getElementsByTagName('div');
		for (i = 0; i < divChildren.length; i++){
			id++;
			updateIndex(divChildren[i]);
		}
	}
	eraseButton.type = "button";
	eraseButton.innerHTML = "Eliminar";

	var array = new Array(titleLabel, titleinput, endl(), valueLabel, valueinput, eraseButton, endl());

	for (var i = 0; i < array.length; i++)
		extraDiv.appendChild(array[i]);

	form.insertBefore(extraDiv, formChildren[formChildren.length-4]);

}

function updateIndex(div){
	label = div.getElementsByTagName('label');
	input = div.getElementsByTagName('input');
	setLabelAttr(label[0], "Titulo", "title");
	setInputAttr(input[0], "title");
	setLabelAttr(label[1], "Valor", "value");
	setInputAttr(input[1], "value");
}

function setLabelAttr(label, title, name){
	label.htmlFor = name+"-"+id;
	label.innerHTML = title+" "+id+":";
}

function setInputAttr(input, name){
	input.id = name+"-"+id;
	input.type = "text";
	input.name = name+"-"+id;
	input.required = true;
}

function endl(){
	return document.createElement('br');
}