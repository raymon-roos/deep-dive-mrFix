function validateForm() {
    const pass = document.forms.login.pass.value;
    const email = document.forms.login.email.value;

    if (pass == 'password' && email.length > 0) {
        window.location = './job_offer.html#screen1';
        return true;
    }

    if (pass == 'fixer' && email.length > 0) {
        window.location = './job_accepter.html#screen1';
        return true;
    }

    alert('log in failed');
    return false;
}
