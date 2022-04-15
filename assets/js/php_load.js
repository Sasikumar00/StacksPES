
setTimeout(function () {
    if (document.getElementById('infixvalue').value.length > 0) {
        console.log('infixvalue: ' + document.getElementById('infixvalue').value);
        InfixtoPostfix(document.getElementById('infixvalue').value);
        console.log('executed');
    }
}, 500);