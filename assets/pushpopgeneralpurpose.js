//Setting Random colors and getting the total number of divs

let colorarr = ['orangegrad', 'bluegrad', 'cyangrad', 'purpgrad'];
let temp;
let divs = document.getElementById('container').childNodes;
let length1;
let length2;
//let push = document.getElementById('push');
let container = document.getElementById('container');
let body = document.getElementById('body');
let reset = document.getElementById('reset');

//RESET
reset.addEventListener('click', () => {
    container.innerHTML = "";
})

//PUSH OPERATION
function pushit(e) {
    if ((divs.length) > 14) {
        alert("STACK IS FULL!!!");
    }
    else {
        let color = Math.floor((Math.random() * 3));
        let randnum = Math.floor((Math.random() * 100));
        if (color == temp) {
            color++;
        }
        container.innerHTML += `<div class="stack" id=${colorarr[color]}>${e}</div>`;
        stack = Array.from(document.getElementsByClassName('stack'));
        gooback();
        temp = color;
        divs = document.getElementById('container').childNodes;
        length1 = divs.length
        length2 = divs.length
    }
}

//push.addEventListener('click', pushit)

//PUSH ANIMATION


stack = Array.from(document.getElementsByClassName('stack'));
let timeout;
function gooback() {
    timeout = setTimeout(goback, 600);
}
function goback() {
    stack.forEach(ele => {
        ele.style.margin = '0';
    })
};

//Stack hover effect open


let i = 0;
function stackanimateopen() {
    stack.forEach(ele => {
        let move = i * 35
        ele.style.marginLeft = `${move}px`;
        ele.classList.add('hovereffect');
        i++;
    });
    i = 0;
}
container.addEventListener('mouseover', stackanimateopen);

//Stack hover effect close


function stackanimateclose() {
    stack.forEach(ele => {
        ele.style.marginLeft = `0px`;
        ele.classList.remove('hovereffect');
    });
}
container.addEventListener('mouseout', stackanimateclose);

//POP function
//let pop = document.getElementById('pop');
function popit() {
    // console.log(length1);
    if ((length1 - 1) > 0) {
        stack.forEach(ele => {
            let move = i * 35
            ele.style.marginLeft = `${move}px`;
            ele.classList.add('hovereffect');
            i++;
        });
        let timeout = setTimeout(() => {
            divs[length1 - 1].style.marginLeft = '100%';
        }, 900)
        let t = setTimeout(() => {
            divs[length1 - 1].remove();
            let t2 = setTimeout(() => {
                stack.forEach(ele => {
                    ele.style.marginLeft = `0px`;
                    ele.classList.remove('hovereffect');
                });
            }, 900)
            length1--;
        }, 2000);
        i = 0;
    }
    else {
        alert("STACK IS EMPTY!!!\n PUSH ELEMENTS TO THE STACK");
    }

}
//pop.addEventListener('click', popit)
