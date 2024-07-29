function showDate() {
// let today = new Date();

let hour = new Date();
hour.getHours();

let hours = document.getElementById('hour');
hours.textContent = hour.getHours();

let minute = new Date();
minute.getMinutes();

let minutes = document.getElementById('minute')
minutes.textContent = minute.getMinutes();

let second = new Date();
second.getSeconds();

let seconds = document.getElementById('second');
seconds.textContent = second.getSeconds();

  // create 6 variables to store Hours, Minutes, Seconds, Date, Months and Year.

  // check this website : https://www.w3schools.com/js/js_date_methods.asp
  // note:
  // the value of month is return us as number of index for each month so you can use it with array months to get value
  // the hours is return us as 0 - 23 (make sure it show us in 12-hour format)

  // add text content to hourElement, minElement, secElement 
  
  // add text content to dateElement as format(date month year)
  // ex: 01 January 2024 
}
const months = [
  "January",
  "February",
  "March",
  "April",
  "May",
  "June",
  "July",
  "August",
  "September",
  "October",
  "November",
  "December",
];

const hourElement = document.querySelector("#hour");
const minElement = document.querySelector("#minute");
const secElement = document.querySelector("#second");
const dateElement = document.querySelector("#date");

setInterval(showDate, 1000);



//=============================================
// new Date
// let hour = new Date();
// hour.getHours();

// let hours = document.getElementById('hour');
// hours.textContent = hour.getHours();

// let minute = new Date();
// minute.getMinutes();

// let minutes = document.getElementById('minute')
// minutes.textContent = minute.getMinutes();

// let second = new Date();
// second.getSeconds();

// let seconds = document.getElementById('second');
// seconds.textContent = second.getSeconds();