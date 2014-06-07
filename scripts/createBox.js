var id = 0;
function newExtra(){
	var form = document.getElementById("boxCreationForm");
	var formChildren = form.childNodes;
	var titleLabel = document.createElement('label');
	var valueLabel = document.createElement('label');
	var titleinput = document.createElement('input');
	var valueinput = document.createElement('input');
	var extraDiv = document.createElement('div');
	var eraseButton = document.createElement('button');

	id++;
	setLabelAttr(titleLabel, "Titulo");
	setInputAttr(titleinput);
	setLabelAttr(valueLabel, "Valor");
	setInputAttr(valueinput);

	eraseButton.onclick = function(){
		form.removeChild(extraDiv);
		id = 0;
		var divChildren = form.getElementsByTagName('div');
		for (i = 0; i < divChildren.length; i++){
			id++;
			updateIndex(divChildren[i]);
		}
	}

	eraseButton.innerHTML = "eliminar";

	var array = new Array(titleLabel, titleinput, endl(), valueLabel, valueinput, endl(), eraseButton, endl());

	for (var i = 0; i < array.length; i++)
		extraDiv.appendChild(array[i]);

	form.insertBefore(extraDiv, formChildren[formChildren.length-2]);

}

function updateIndex(div){
	label = div.getElementsByTagName('label');
	input = div.getElementsByTagName('input');
	for (var i = 0; i < 2; i++){
		setLabelAttr(label[i]);
		setInputAttr(input[i]);
	}
}

function setLabelAttr(label, title){
	label.for = "title-"+id;
	label.innerHTML = title+" "+id+":";
}

function setInputAttr(input){
	input.id = "title-"+id;
	input.type = "text";
	input.name = "title-"+id;
	input.required = true;
}

function endl(){
	return document.createElement('br');
}