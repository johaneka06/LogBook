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
} else if(pathname == '/log/add') {
    var element = document.getElementById("addEntry");
    element.classList.add("active");

    document.querySelector("#date").value = new Date().toISOString().substr(0, 10);
}

$("#update").click(function() {

    document.getElementById("update").hidden = true;
    document.getElementById("save").hidden = false;

    document.getElementById("date").disabled = false;
    document.getElementById("title").disabled = false;
    document.getElementById("detail").disabled = false;
})