var pathname = window.location.pathname;

if(pathname == '/') {
    var element = document.getElementById("home");
    element.classList.add("active");
} else if(pathname == '/login') {
    var element = document.getElementById("login");
    element.classList.add("active");
} else if(pathname =='/register') {
    var element = document.getElementById("register");
    element.classList.add("active");
}