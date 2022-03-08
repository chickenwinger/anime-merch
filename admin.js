function addNewOpen() {
    document.querySelector('.add-new-form-background').style.display = "block";
}

function addNewClose() {
    document.querySelector('.add-new-form-background').style.display = "none";
    location.reload(true);
}

function modifyOpen() {
    document.querySelector('.modify-form-background').style.display = "block";
}

function modifyClose() {
    document.querySelector('.modify-form-background').style.display = "none";
    window.location.href = "admin.php";
}