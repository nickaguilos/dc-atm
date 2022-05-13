var today = new Date();
var date = today.getFullYear()+ '-' + (today.getMonth()+1)+ '-' +today.getDate();
var time = today.getHours()+ ':' +today.getMinutes();
document.getElementById('date').value = date;
document.getElementById('time').value = time;