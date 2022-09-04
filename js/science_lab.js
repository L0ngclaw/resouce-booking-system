function displayForm() {
    let form = document.getElementById("hiddenForm");
    let cancelbtn = document.getElementById("cancelbtn");
    let reservebtn = document.getElementById("reservebtn");

    cancelbtn.style.display = "block";
    reservebtn.style.display = "none";
    form.style.display = "block";
}

function cancelForm() {
    let form = document.getElementById("hiddenForm");
    let cancelbtn = document.getElementById("cancelbtn");
    let reservebtn = document.getElementById("reservebtn");

    cancelbtn.style.display = "none";
    reservebtn.style.display = "block";
    form.style.display = "none"; 
}