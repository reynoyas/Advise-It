let form = document.getElementById("save-plan");
function submitForm(event){
    // Preventing page refresh
    event.preventDefault();
}

form.addEventListener('submit', submitForm);