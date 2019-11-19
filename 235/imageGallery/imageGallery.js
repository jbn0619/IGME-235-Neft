let cassieSpan = document.querySelector("#cassie");
let wolfSpan = document.querySelector("#wolf");
let sealSpan = document.querySelector("#seal");
let eagleSpan = document.querySelector("#eagle");

function spanClick(event) {
    let imgSpace = document.querySelector("#placeholder");
    console.log(event);
    imgSpace.src = "images/" + event.target.dataset.image;
}

cassieSpan.addEventListener("click", spanClick);
wolfSpan.addEventListener("click", spanClick);
sealSpan.addEventListener("click", spanClick);
eagleSpan.addEventListener("click", spanClick);