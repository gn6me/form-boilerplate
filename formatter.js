var ssnInput = document.getElementById('ssn');
if (ssnInput) {
    new Formatter(ssnInput, {
        'pattern': '{{999}}-{{99}}-{{9999}}'
    });
}
var phoneInput = document.getElementById('phone');
if (phoneInput) {
    new Formatter(phoneInput, {
        'pattern': '({{999}}) {{999}}-{{9999}}'
    });
}
var mobileInput = document.getElementById('mobile');
if (mobileInput) {
    new Formatter(mobileInput, {
        'pattern': '({{999}}) {{999}}-{{9999}}'
    });
}