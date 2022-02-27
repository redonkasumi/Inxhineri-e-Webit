function checkMatching(form) {
    var password = form.password.value;
    var password2 = form.password2.value;


    if (password == '')
        alert("Please enter Password");

    else if (password2 == '')
        alert("Please enter confirm password");

    else if (password != password2) {
        alert("\nPassword did not match: Please try again...");
        return false;
    }

    else {

        window.location.href = 'index.php';

        return true;
    }


}









