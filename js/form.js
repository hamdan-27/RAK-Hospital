function validate() {
    var fname = document.getElementById('fname').value;
    var pass = document.getElementById('pwd-input').value;
    var email = document.getElementById('email-input').value;
    var cpass = document.getElementById('cpwd-input').value;

    if (fname == '') {
        alert('Sorry, the name field cannot be empty');
    } else if (fname != 'Hamdan') {
        alert('Hello ' + fname);
    }

    if (email == '') {
        alert('Sorry');
    } else if (email != 'hamdan102703@gmail.com') {
        alert('Sorry, the email is incorrect');
    }

    if (pass != cpass) {
        alert('Incorrect password');
    }
}