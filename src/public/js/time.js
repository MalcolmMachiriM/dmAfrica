function showDateTime() {
  var lebs = document.getElementById("lebs");
  var yads = document.getElementById("yads");

  var date = new Date();
  var dayList = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
  var monthNames = [
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
    "December"
  ];
  var dayName = dayList[date.getDay()];
  var monthName = monthNames[date.getMonth()];
  var today = `${dayName}  ${date.getDate()} ${monthName} ${date.getFullYear()}`;
   var thisyear = `${date.getFullYear()}`;

  var hour = date.getHours();
  var min = date.getMinutes();
  var sec = date.getSeconds();

  var time = hour + ":" + min + ":" + sec;
  lebs.innerText = `${today}`;
  yads.innerText = `${thisyear}`;
}
setInterval(showDateTime, 1000);