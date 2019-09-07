function is_username_valid(username) {
    var syarat = /^[a-z]{5,9}$/g;      
    return(console.log(syarat.test(username)));
}

function is_password_valid(password) {
    var syarat = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*\W).{8,}$/;      
    return(console.log(syarat.test(password)));
}

is_username_valid('cod3r');
is_username_valid('siska');
is_password_valid('p4s$gW');
is_password_valid('codeYourFuture!123');