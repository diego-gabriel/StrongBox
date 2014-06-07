function togglePassword()
{
	var input = document.getElementById("password");
	var attribute = input.getAttribute("type");
	var button = document.getElementById("change");
	if(attribute == "password")
	{
		input.setAttribute("type", "text");
		button.value = "Ocultar";
	}
	else
	{
		input.setAttribute("type", "password");
		button.value = "Ver";
	}
}