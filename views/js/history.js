const dateInput = document.querySelector('#dateInput');
const inputDate = document.querySelector('#inputDate');
const dateSubmit = document.querySelector('#button-addon2');

dateInput.addEventListener('change', function() {
    inputDate.value = dateInput.value;
})

dateSubmit.addEventListener('submit', function(e) {
    e.preventDefault();
    inputDate.value = inputDate.value;
})

const dateTitle = document.querySelector('#dateTitle');
console.log(dateTitle.innerHTML);
var d = new Date(dateTitle.innerHTML);
console.log(d);
var options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
options.timeZone = 'UTC';
options.timeZoneName = 'short';
var d2 = new Intl.DateTimeFormat('en-US', options).format(d);
d3 = d2.split(" ");
d3.splice(4, 1);
var d4 = d3.join(" ");
var regEx = /\w+/gi;
var d5 = d4.match(regEx);
var d6 = d5.join(" ");
dateTitle.innerHTML = d6;


const deleteSubmit = document.querySelector('#delete');
deleteSubmit.addEventListener('submit', function () {
    dateInput.value = inputDate.value;
})