let ch = 0;
let pause = document.getElementById('pause');
let play = document.getElementById('play');
play.style.background = 'transparent';
pause.addEventListener('click', () => {
    ch = 1;
    pause.style.background = 'transparent';
    play.style.background = 'green';
})
play.addEventListener('click', () => {
    ch = 0;
    play.style.background = 'transparent';
    pause.style.background = 'red';
})
// function to check if character
// is operator or not
function isOperator(x) {
    switch (x) {
        case '+':
        case '-':
        case '/':
        case '*':
            return true;
    }
    return false;
}

function sleep(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
}

// Convert prefix to Postfix expression
async function preToPost(pre_exp) {

    let s = [];

    // length of expression
    let length = pre_exp.length;

    // reading from right to left
    for (let i = length - 1; i >= 0; i--) {

        // check if symbol is operator
        if (isOperator(pre_exp[i])) {
            // pop two operands from stack
            let op1 = s[s.length - 1];
            s.pop();
            while (ch == 1) {
                console.log('wait');
                await sleep(1000);
            }
            popit();
            await sleep(3000);
            let op2 = s[s.length - 1];
            s.pop();
            while (ch == 1) {
                console.log('wait');
                await sleep(1000);
            }
            popit();
            await sleep(3000);

            // concat the operands and operator
            let temp = op1 + op2 + pre_exp[i];

            // Push String temp back to stack
            s.push(temp);
            while (ch == 1) {
                console.log('wait');
                await sleep(1000);
            }
            pushit(temp);
            document.getElementById("pre").value = (s.join(""));
            await sleep(3000);

        }

        // if symbol is an operand
        else {
            // push the operand to the stack
            s.push(pre_exp[i] + "");
            while (ch == 1) {
                console.log('wait');
                await sleep(1000);
            }
            pushit(pre_exp[i]);
            document.getElementById("pre").value = (s.join(""));
            await sleep(3000);

        }
    }

    // stack contains only the Postfix expression

    while (ch == 1) {
        console.log('wait');
        await sleep(1000);
    }
    popit();
    document.getElementById("pre").value = (s[s.length - 1]);
    await sleep(3000);
}

function start_conversion() {
    let data = document.getElementById("num").value;
    // infixToPrefix(data);
    preToPost(data);
}

// let pre_exp = "*-A/BC-/AKL";
// console.log(preToPost(pre_exp));
