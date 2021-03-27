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
    document.getElementById("clock_in").disabled = false;
    document.getElementById("clock_out").disabled = false;
})

$("#editBtn").click(function() {
    document.getElementById("updateBtn").hidden = false;
    document.getElementById("cancelBtn").hidden = false;

    document.getElementById("editBtn").hidden = true;

    document.getElementById("profileName").removeAttribute("readonly")
    document.getElementById("profileEmail").removeAttribute("readonly")
})

$("#cancelBtn").click(function() {
    document.getElementById("updateBtn").hidden = true;
    document.getElementById("cancelBtn").hidden = true;

    document.getElementById("editBtn").hidden = false;

    document.getElementById("profileName").readOnly = true
    document.getElementById("profileEmail").readOnly = true
})