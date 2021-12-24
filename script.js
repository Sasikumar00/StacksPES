//Setting Random colors

let temp;
let colorarr = ['orangegrad', 'bluegrad', 'cyangrad', 'purpgrad'];
push = document.getElementById('push');
push.addEventListener('click', () => {
    let color = Math.floor((Math.random() * 3));
    let randnum = Math.floor((Math.random() * 100));
    if (color == temp) {
        color++;
    }
    container.innerHTML += `<div class="stack" id=${colorarr[color]}>
    ${randnum}
    </div>`;
    stack = Array.from(document.getElementsByClassName('stack'));
    gooback();
    temp = color;
})

//Push stack animation

stack = Array.from(document.getElementsByClassName('stack'));
let timeout;
function gooback() {
    timeout = setTimeout(goback, 900);
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
