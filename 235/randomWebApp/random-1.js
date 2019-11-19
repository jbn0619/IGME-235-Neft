"use strict";

let paragraph = document.querySelector("p");

let quotes = ["The pessimist sees difficulty in every opportunity. The optimist sees opportunity in every difficulty.", "Don’t let yesterday take up too much of today.", "You learn more from failure than from success. Don’t let it stop you. Failure builds character.", "People who are crazy enough to think they can change the world, are the ones who do.", "We may encounter many defeats but we must not be defeated."];

let randomNum = Math.floor(Math.random() * quotes.length);

paragraph.innerHTML = quotes[randomNum];

let button = document.querySelector("button");

button.addEventListener("click", newQuote());

function newQuote() {
    let newRandomNum = Math.floor(Math.random() * quotes.length);
    paragraph.innerHTML = quotes[newRandomNum];
}

