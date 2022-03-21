var stackarr = [];

// Variable topp initialized with -1
var topp = -1;

// Push function for pushing
// elements inside stack
function pushfunc(e) {
    topp++;
    stackarr[topp] = e;
}

function sleep(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
}

// Pop function for returning top element
function popfunc() {
    if (topp == -1)
        return 0;
    else {
        var popped_ele = stackarr[topp];
        topp--;
        return popped_ele;
    }
}

// Function to check whether the passed
// character is operator or not
function operator(op) {
    if (op == '+' || op == '-' ||
        op == '^' || op == '*' ||
        op == '/' || op == '(' ||
        op == ')') {
        return true;
    } else
        return false;
}

// Function to return the precedency of operator
function precedency(pre) {
    if (pre == '@' || pre == '(' || pre == ')') {
        return 1;
    } else if (pre == '+' || pre == '-') {
        return 2;
    } else if (pre == '/' || pre == '*') {
        return 3;
    } else if (pre == '^') {
        return 4;
    } else
        return 0;
}

// Function to convert Infix to Postfix
async function InfixtoPostfix() {

    // Postfix array created
    var postfix = [];
    var temp = 0;
    pushfunc('@');
    infixval = document.getElementById("infixvalue").value;

    // Iterate on infix string
    for (var i = 0; i < infixval.length; i++) {
        var el = infixval[i];

        // Checking whether operator or not
        if (operator(el)) {
            if (el == ')') {
                while (stackarr[topp] != "(") {
                    postfix[temp++] = popfunc();
                    popit();
                    await sleep(3000);
                    document.getElementById("post").value =(postfix.join(""));
                }
                popfunc();
                popit();
                await sleep(3000);
                
            }

            // Checking whether el is (  or not
            else if (el == '(') {
                pushfunc(el);
                pushit(el);
                await sleep(3000);

            }

            // Comparing precedency of el and
            // stackarr[topp]
            else if (precedency(el) > precedency(stackarr[topp])) {
                pushfunc(el);
                pushit(el);
                await sleep(3000);
                


            } else {
                while (precedency(el) <=
                    precedency(stackarr[topp]) && topp > -1) {
                    postfix[temp++] = popfunc();
                    popit();
                    await sleep(3000);
                    document.getElementById("post").value =(postfix.join(""));

                }
                pushfunc(el);
                pushit(el);
                await sleep(3000);

            }
        } else {
            postfix[temp++] = el;
            document.getElementById("post").value =(postfix.join(""));
        }
    }

    // Adding character until stackarr[topp] is @
    while (stackarr[topp] != '@') {
        postfix[temp++] = popfunc();
        popit();
        await sleep(3000);
        document.getElementById("post").value =(postfix.join(""));

    }
    //popit();
    //await sleep(3000);


    // String to store postfix expression
    var st = "";
    for (var i = 0; i < postfix.length; i++)
        st += postfix[i];

    // To print postfix expression in HTML
    // console.log(stackarr);
    document.getElementById("post").value = st;
    // console.log(st)
}