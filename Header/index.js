function selector(element, root) {
    const select = root || document;
    return [...select.querySelectorAll(element)];
};

const btns = selector(".Header_open");
const btn = [...btns];
const menu = selector(".Header_menu");
const main = selector("main");

function translate() {
    menu.style.transform = "translate(300px)";
    console.log(main);
}

btn.addEventListener("click", translate);