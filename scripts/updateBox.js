
function enableModify(){

	var form = document.getElementById('boxForm');
	var inputs = form.getElementsByTagName('input');
	var extras = form.getElementsByTagName('div');

	for (var i = 0; i < extras.length; i++){
		id++;
		var eraseButton = document.createElement('button');

		eraseButton.onclick = function(){
			form.removeChild(this.parentNode);
			id = 0;
			var divChildren = form.getElementsByTagName('div');
			for (i = 0; i < divChildren.length; i++){
				id++;
				updateIndex(divChildren[i]);
			}
		};

		eraseButton.innerHTML = "Eliminar";
		eraseButton.type = "button";
		extras[i].appendChild(eraseButton);
	}


	for (var i = 0; i < inputs.length; i++){
		inputs[i].readOnly = false;
	}


	var button = document.getElementById('modifyButton');
	button.parentNode.removeChild(button);
	var submit = document.createElement("input");
	submit.type = "submit";
	form.appendChild(submit);
	
	var noExtra = document.getElementById('noExtras');
	if (noExtra)
		form.removeChild(noExtra);

	var newExtraButton = document.createElement('button');
	newExtraButton.onclick = newExtra;
	newExtraButton.innerHTML = "Añadir Elemento";
	newExtraButton.type = "button";
	form.insertBefore(newExtraButton, submit);
}
