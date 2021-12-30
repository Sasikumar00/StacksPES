//Setting Random colors and getting the total number of divs

let colorarr = ['orangegrad', 'bluegrad', 'cyangrad', 'purpgrad'];
let temp;
let divs = document.getElementById('container').childNodes;
let length1;
push = document.getElementById('push');

//PUSH OPERATION


push.addEventListener('click', () => {
    let color = Math.floor((Math.random() * 3));
    let randnum = Math.floor((Math.random() * 100));
    if (color == temp) {
        color++;
    }
    container.innerHTML += `<div class="stack" id=${colorarr[color]}>${randnum}</div>`;
    stack = Array.from(document.getElementsByClassName('stack'));
    gooback();
    temp = color;
    divs = document.getElementById('container').childNodes;
    length1 = divs.length
})


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
let container = document.getElementById('container');
container.addEventListener('mouseover', () => {
    stack.forEach(ele => {
        let move = i * 35
        ele.style.marginLeft = `${move}px`;
        ele.classList.add('hovereffect');
        i++;
    });
    i = 0;
});

//Stack hover effect close


container.addEventListener('mouseout', () => {
    stack.forEach(ele => {
        ele.style.marginLeft = `0px`;
        ele.classList.remove('hovereffect');
    });
});


//ANIMATION FUNCTIONS FOR POP OPERATION


function popit() {
    divs[length1 - 1].style.marginLeft = '400px';
    length1--;

}
function popitt() {
    length1++;
    divs[length1 - 1].remove();
    length1--;
}
let timeout1;
let timeout2;
function latestart() {
    timeout1 = setTimeout(popit, 800);
    timeout2 = setTimeout(popitt, 1100);
}

//POP OPERATION

let pop = document.getElementById('pop');
pop.addEventListener('click', () => {
    latestart();
})
