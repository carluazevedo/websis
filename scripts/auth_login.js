exibir.addEventListener('change', function() {
	if (this.checked == true) password.setAttribute("type", "text");
	if (this.checked == false) password.setAttribute("type", "password");
});
