let pressed;
let button = document.querySelector(".eyes");

button.addEventListener("click", badEyes);

function badEyes() 
{
    if (pressed)
    {
        document.querySelector('link[href="./css/badEyes.css"]').remove();
        pressed = false;
    }
    else
    {
        document.head.innerHTML += '<link rel="stylesheet" href="./css/badEyes.css">';
        pressed = true;
    }
}