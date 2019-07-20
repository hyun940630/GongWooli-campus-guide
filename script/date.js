/* date.js */
$(document).ready(function () {
  printDate();
});

function printDate() {
    var clock = document.getElementById("date");
    var currentDate = new Date();
    var calendar = currentDate.getFullYear() + '.' + (currentDate.getMonth() + 1) + "." + currentDate.getDate();

    date.innerHTML = "<span>" + calendar + "</span>";

    setTimeout("printDate()", 1000);
}
