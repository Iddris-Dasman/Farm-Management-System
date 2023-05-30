function toggleMenu() {
	var nav = document.querySelector('nav ul');
	if (nav.style.display === "flex") {
		nav.style.display = "none";
	} else {
		nav.style.display = "flex";
	}
}
