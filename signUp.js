function checkMatching(form) {
    var password1 = form.password1.value;
    var password2 = form.password2.value;


    // If password not entered 
    if (password1 == '')
        alert("Please enter Password");

    // If confirm password not entered 
    else if (password2 == '')
        alert("Please enter confirm password");

    // If Not same return False.     
    else if (password1 != password2) {
        alert("\nPassword did not match: Please try again...");
        return false;
    }

    // If same return True. 
    else {

        //check for terms and conditions
        var check = document.getElementById("terms").checked;
        if (!check) {
            alert('You must agree to the terms first.');
            return false;
        }
        //after check return true
        alert("Welcome!");
        var user = form.username.value;
        localStorage.setItem("user_name", user);
        var pass = form.password1.value;
        localStorage.setItem("pass_word", pass);
        window.location.href = 'index.html';

        return true;
    }


}