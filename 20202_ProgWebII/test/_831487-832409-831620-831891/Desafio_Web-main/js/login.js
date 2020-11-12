function helpEmail(){
    if (document.getElementById("inputEmail").value  != ""){
        document.querySelector("#emailHelp").hidden = true;
    }else{
        document.querySelector("#emailHelp").hidden = false;
    }
}

let button = document.querySelector('form button.btn');
    button.addEventListener("click", () =>{
        location.href = "views/dashboard.html"
})

