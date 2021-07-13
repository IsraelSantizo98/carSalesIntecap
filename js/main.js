const themeToggleBtn = document.querySelector("#theme-toggle-btn");
const toggleIcon = document.querySelector(".toggle-icon");
themeToggleBtn.addEventListener("change", function () {
    if (this.checked) {
        document.documentElement.setAttribute("data-theme", "dark");
        toggleIcon.classList.remove("fa-moon");
        toggleIcon.classList.add("fa-sun");
        localStorage.setItem("dark-mode", "true");
    } else {
    document.documentElement.setAttribute("data-theme", "light");
    toggleIcon.classList.remove("fa-sun");
    toggleIcon.classList.add("fa-moon");
    localStorage.setItem("dark-mode", "false");
    }
});
//Obtener el modo actual del modo
if (localStorage.getItem("dark-mode") === "true") {
    document.documentElement.setAttribute("data-theme", "dark");
    toggleIcon.classList.remove("fa-moon");
    toggleIcon.classList.add("fa-sun");
} else {
    document.documentElement.setAttribute("data-theme", "light");
    toggleIcon.classList.remove("fa-sun");
    toggleIcon.classList.add("fa-moon");
}
/* login validation */
let state = false;
let password = document.getElementById("password");
let passwordStrength = document.getElementById("password-strength");
let lowUpperCase = document.querySelector(".low-upper-case i");
let number = document.querySelector(".one-number i");
let specialChar = document.querySelector(".one-special-char i");
let eightChar = document.querySelector(".eight-character i");

password.addEventListener("keyup", function () {
let pass = document.getElementById("password").value;
    checkStrength(pass);
});
//Muestra la contraseña, en el if state es true o false es un valor booleano
function toggle() {
    if (state) {
        document.getElementById("password").setAttribute("type", "password");
        state = false;
    } else {
        document.getElementById("password").setAttribute("type", "text");
        state = true;
    }
}
//Muestra la contraseña al presionar el icono al igual que la funcion de arriba
function myFunction(show) {
    show.classList.toggle("fa-eye-slash");
}
//Funcion para validar que tenga caracteres especiales, numeros y letras
function checkStrength(password) {
    let strength = 0;

  //If password contains both lower and uppercase characters
    if (password.match(/([a-z].*[A-Z])|([A-Z].*[a-z])/)) {
        strength += 1;
        lowUpperCase.classList.remove("fa-circle");
        lowUpperCase.classList.add("fa-check");
    } else {
        lowUpperCase.classList.add("fa-circle");
        lowUpperCase.classList.remove("fa-check");
    }
  //If it has numbers and characters
    if (password.match(/([0-9])/)) {
        strength += 1;
        number.classList.remove("fa-circle");
        number.classList.add("fa-check");
    } else {
        number.classList.add("fa-circle");
        number.classList.remove("fa-check");
    }
  //If it has one special character
    if (password.match(/([!,%,&,@,#,$,^,*,?,_,~])/)) {
        strength += 1;
        specialChar.classList.remove("fa-circle");
        specialChar.classList.add("fa-check");
    } else {
        specialChar.classList.add("fa-circle");
        specialChar.classList.remove("fa-check");
    }
  //If password is greater than 7
    if (password.length > 7) {
        strength += 1;
        eightChar.classList.remove("fa-circle");
        eightChar.classList.add("fa-check");
    } else {
        eightChar.classList.add("fa-circle");
        eightChar.classList.remove("fa-check");
    }
  // If value is less than 2
    if (strength < 2) {
        passwordStrength.classList.remove("progress-bar-warning");
        passwordStrength.classList.remove("progress-bar-success");
        passwordStrength.classList.add("progress-bar-danger");
        passwordStrength.style = "width: 10%";
    } else if (strength == 3) {
        passwordStrength.classList.remove("progress-bar-success");
        passwordStrength.classList.remove("progress-bar-danger");
        passwordStrength.classList.add("progress-bar-warning");
        passwordStrength.style = "width: 60%";
    } else if (strength == 4) {
        passwordStrength.classList.remove("progress-bar-warning");
        passwordStrength.classList.remove("progress-bar-danger");
        passwordStrength.classList.add("progress-bar-success");
        passwordStrength.style = "width: 100%";
    }
}