
    window.onload = function () {
        var pass = document.getElementById("pass");
        var passc = document.getElementById("pass2");
        pass.onchange = ConfirmPassword;
        passc.onkeyup = ConfirmPassword;
        function ConfirmPassword() {
            passc.setCustomValidity("");
            if (pass.value !== passc.value) {
                passc.setCustomValidity("las contraseñas no son iguales.");
            }
        }
    };