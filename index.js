const menu_btn = document.querySelector(".hamburger");
const mobile_menu = document.querySelector(".nav-mobile");

menu_btn.addEventListener("click", () => {
	menu_btn.classList.toggle("is-active");
	mobile_menu.classList.toggle("is-active");
});
