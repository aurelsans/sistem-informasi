import './bootstrap';
import 'flowbite';

const hamburger = document.querySelector("#hamburger")
const drawer = document.querySelector("#drawer")

hamburger.addEventListener("click", ()=>{
    menu.classList.toggle("hidden")
    hamburger.classList.toggle("bg-white")
})