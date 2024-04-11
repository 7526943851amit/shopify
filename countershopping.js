var timer1, timer2;
var Cdate1 = "{{ settings.timer1 }}"; 
var compareDate1 = new Date(Cdate1);
timer1 = setInterval(function() {
  timeBetweenDates(compareDate1, 'c_hrs1', 'c_mins1', 'c_sec1');
}, 1000);

var Cdate2 = "{{ settings.timer2 }}"; 
var compareDate2 = new Date(Cdate2);
timer2 = setInterval(function() {
  timeBetweenDates(compareDate2, 'c_hrs2', 'c_mins2', 'c_sec2');
}, 1000);

function timeBetweenDates(toDate, hrsId, minsId, secId) {
  var dateEntered = toDate;
  var now = new Date();
  var difference = dateEntered.getTime() - now.getTime();

  if (difference <= 0) {
    document.getElementById("countdown").style.display = "none";
    clearInterval(timer);
  } else {
    var seconds = Math.floor(difference / 1000);
    var minutes = Math.floor(seconds / 60);
    var hours = Math.floor(minutes / 60);
    var days = Math.floor(hours / 24);

    hours %= 24;
    minutes %= 60;
    seconds %= 60;

    document.getElementById(hrsId).textContent = hours;
    document.getElementById(minsId).textContent = minutes;
    document.getElementById(secId).textContent = seconds;
  }
}



<div class="counter">
    {% if block.settings.homecount_timer %}
        <div id="clockdiv2" style="background:{{block.settings.homebackground_color2 }}">
            <div class="custom_count">
                <div class="Hour_sale">
                    {% if  block.settings.homesaletiming2 != blank %}
                        <h3 style="color:{{ block.settings.font_color }}" hidden>{{ block.settings.homesaletiming2 }}</h3>
                    {% endif %}
                </div>  
                <div id="countdown2">
                    <div id='tiles2'></div>
                    <div class="labels">
                        <ul>
                            <li><span class="c_timevalue" id="c_hrs2"></span><span class="c_label">Hours</span></li>
                            <li><span class="c_timevalue" id="c_mins2"></span><span class="c_label">Minutes</span></li>
                            <li><span class="c_timevalue" id="c_sec2"></span><span class="c_label">Seconds</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    {% endif %}
</div>
