let chh=0;
let pause=document.getElementById('pause');
let play=document.getElementById('play');
play.style.background='transparent';
pause.addEventListener('click',()=>{
    chh=1;
    pause.style.background='transparent';
    play.style.background='green';
})
play.addEventListener('click',()=>{
    chh=0;
    play.style.background='transparent';
    pause.style.background='red';
})
// Infix to Prefix Conversion
// Stack class to define a stack
class Stack {
    constructor(length) {
        this.stack = Array(length);
        this.top = -1;
        this.length = length;
    }

    // Pushing element inside stack
    push(val) {
        if (this.top == this.length - 1)
            return -999;
        this.stack[++this.top] = val;
        return 1;
    }

    // Pop element from stack
    pop() {
        if (this.top == -1)
            return -999;
        return this.stack[this.top--];
    }
}

function sleep(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
}


// Check if character in string is
// an opertor or any alphabet or digit
function isOperator(ch) {
    var x = ch.match("^[A-Za-z0-9]+$") === null;
    return x;
}

// Checking operator precedence
function priority(ch) {
    if (ch === '+' || ch === '-')
        return 1;
    if (ch === '*' || ch === '/')
        return 2;
    if (ch === '^')
        return 3;
    return 0;

}

async function infixToPrefix(infix) {
    var prefix = "";
    var revInfix = "";
    let dataa = document.getElementById("pre");

    // Replacing '(' with ')' and
    // reversing the input string
    for (var i = infix.length - 1; i >= 0; i--) {
        var ch = infix.charAt(i);
        if (ch === '(')
            ch = ')';
        else if (ch === ')')
            ch = '(';
        revInfix += ch;
    }
    infix = revInfix;

    // Declaration of stack
    stackk = new Stack(infix.length);
    for (var j = 0; j < infix.length; j++) {
        var i = infix.charAt(j);
        // If character is '(' push it to stack
        if (i == '(') {
            stackk.push(i);
            pushit(i);
            while(chh==1){
                console.log('wait');
                await sleep(1000);
            }
            await sleep(3000);
        }

        // if character is ')' pop out elements
        // from stack until '(' is found or
        // the stack becomes empty
        else if (i == ')') {
            ch = stackk.stack[stackk.top];
            while (stackk.top > -1 && ch != '(') {
                prefix += stackk.pop();
                popit();
                while(chh==1){
                    console.log('wait');
                    await sleep(1000);
                }
                await sleep(3000);
                dataa.value = prefix;
                ch = stackk.stack[stackk.top];
            }
            stackk.pop();
        }

        // if the character is a digit or alphabet
        // add it to the answer string  
        else if (!isOperator(i)) {
            prefix += i;
            dataa.value = prefix;
        }

        // if the character is any operator
        // pop out elements from stack until
        // the stack is empty or a symbol with
        // a higher precedence is found in the stack
        else if (isOperator(i)) {
            ch = stackk.stack[stackk.top];
            while (stackk.top > -1 && (priority(i) <= priority(ch))) {
                prefix += stackk.pop();
                popit();
                while(chh==1){
                    console.log('wait');
                    await sleep(1000);
                }
                await sleep(3000);
                dataa.value = prefix;
                ch = stackk.stack[stackk.top];
            }
            stackk.push(i);
            pushit(i);
            while(chh==1){
                console.log('wait');
                await sleep(1000);
            }
            await sleep(3000);
        }
    }

    // Pop out all remaning elements in
    // the stack and add it to answer string
    while (stackk.top > -1) {
        prefix += stackk.pop();
        popit();
        while(chh==1){
            console.log('wait');
            await sleep(1000);
        }
        await sleep(3000);
        dataa.value = prefix;
    }

    while((length1 - 1) > 0){
        popit();
        while(chh==1){
            console.log('wait');
            await sleep(1000);
        }
        await sleep(3000);
    }

    
    // Return the reversed answer string
    dataa.value = prefix.split('').reverse().join('');
}

function start_conversion(){
    let data = document.getElementById("num").value;
    // infixToPrefix(data);
    console.log(infixToPrefix(data));
}

