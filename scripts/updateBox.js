function enableModify(){
	var form = document.getElementById('updateBoxForm');
	var inputs = form.getElementsByTagName('input');

	for (var i = 0; i < inputs.length; i++)
		inputs[i].readonly = false;

	console.log("blu");
}