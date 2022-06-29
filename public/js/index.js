import {aggInput} from "./appendInput.js"

const book = document.getElementById("for-book");
const inputs =  document.getElementById("inputs");
const ci = document.getElementById('for-ci');
const btnSubmit = document.getElementById('submit-btn');
const author = document.querySelector('.form-check #for-author');
const editorial = document.querySelector('.form-check #for-editorial');

aggInput(book, inputs, "Libro", "filter_book", btnSubmit);
if (document.body.contains(ci)) aggInput(ci, inputs, "Cedula", "filter_ci", btnSubmit);

aggInput(author, inputs, "Autor", "filter_author", btnSubmit);
aggInput(editorial, inputs, "Editorial" , "filter_editorial", btnSubmit);