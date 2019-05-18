function renderTime(){
    var mydate= new Date();
    var year = mydate.getYear();
        if (year < 1000) {
            year +=1900
        }

    var day = mydate.getDay();
    var month = mydate.getMonth();
    var daym = mydate.getDate();

    var dayarray = new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
    var montharray = new Array("January","February","March","April","May","June","July","August","September","October","November","December");

var now = new Date();
var hours = now.getHours();
var minutes = now.getMinutes();
var seconds = now.getSeconds()
var timeValue = "" + ((hours >12) ? hours -12 :hours)
if (timeValue == "0") timeValue = 12;
timeValue += ((minutes < 10) ? ":0" : ":") + minutes
timeValue += ((seconds < 10) ? ":0" : ":") + seconds
timeValue += (hours >= 12) ? " PM" : " AM"

        var myClock = document.getElementById("txt");
        myClock.textContent =   montharray[month]+ " " + daym + " " + year +"| " + dayarray[day] + " | " + timeValue   ;
        myClock.innerText =  montharray[month]+ " " + daym + " " + year +"| " + dayarray[day] + " | " + timeValue   ;

        setTimeout("renderTime()", 1000);
}
renderTime();