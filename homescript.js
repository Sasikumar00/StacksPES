let i = 0;
stack = Array.from(document.getElementsByClassName('stack'));
let container = document.getElementById('container');

//Open stack animation

function openstack() {
    stack.forEach(ele => {
        let move = i * 60
        ele.classList.add('hovereffect');
        ele.style.marginLeft = `${move}px`;
        ele.style.boxShadow = "-10px 0px 15px 0px rgba(0, 0, 0, 0.727)"
        i++;
    });
    i = 0;
    let timeout = setTimeout(closestack, 3000)
}

//Close stack animation

function closestack() {
    stack.forEach(ele => {
        let move = i * 5;
        ele.style.marginLeft = `${move}px`;
        ele.classList.remove('hovereffect');
        ele.style.boxShadow = "none";
        i++;
    });
    i = 0;
}

setInterval(openstack, 5000);