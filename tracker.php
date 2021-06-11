<html>
    <head>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sleep time calculator</title>
        <link rel="stylesheet" href="./tracker.css"/>
        </head>
        <div align="center" class="result">
            <form action="/action_page.php" method="get" id="form1">
    <body style="background-image: url('https://wallpapercave.com/wp/wp2581762.jpg'); background-size: 1500px;
  background-repeat: no-repeat; background-origin: center;">
       

        <div style="margin: 10px;background-image: url('https://wallpapercave.com/wp/wp2581762.jpg');
            width: 600px;
            background-size: center;
            text-align: center;
            box-shadow: 0 0 20px #6f87df;
            border: 3px solid white;
            padding: 10px;border-radius: 30px;">
    <h2 style="color: #daf8e3;font-family: Comic Sans MS;">
        SLEEP TRACKER
    </h2>

</div>
<br><br>
        
<div class="container"><br>
<label style="color:#fff4e6 ;font-family:monospace ;font-size: 180%;">PICK YOUR TIME TO SLEEP:</label>
<input type="time"  id="start" value="10:00" >
<br><br>
<label style="color:#fff4e6 ;font-family:monospace ;font-size: 180%;">PICK YOUR TIME TO WAKEUP:</label>
<input type="time" id="end" value="12:30" >
<br><br>
<label style="color:#fff4e6 ;font-family:monospace ;font-size: 180%;">YOUR TOTAL SLEEP  DURATION:</label>
<input id="diff">
<br><br>
<p>
        <label for="start" style="color:#fff4e6 ;font-family:monospace ;font-size: 180%;">Pick Your Date:</label>

        <input type="date" id="start" name="start"><br/>
        </p>
</div>


<script>
var start = document.getElementById("start").value;
var end = document.getElementById("end").value;

document.getElementById("start").onchange = function() {diff(start,end)};
document.getElementById("end").onchange = function() {diff(start,end)};


function diff(start, end) {
    start = document.getElementById("start").value; //to update time value in each input bar
    end = document.getElementById("end").value; //to update time value in each input bar
    
    start = start.split(":");
    end = end.split(":");
    var startDate = new Date(0, 0, 0, start[0], start[1], 0);
    var endDate = new Date(0, 0, 0, end[0], end[1], 0);
    var diff = endDate.getTime() - startDate.getTime();
    var hours = Math.floor(diff / 1000 / 60 / 60);
    diff -= hours * 1000 * 60 * 60;
    var minutes = Math.floor(diff / 1000 / 60);

    return (hours < 9 ? "0" : "") + hours + ":" + (minutes < 9 ? "0" : "") + minutes;
}

setInterval(function(){document.getElementById("diff").value = diff(start, end);}, 1000); //to update time every second (1000 is 1 sec interval and function encasing original code you had down here is because setInterval only reads functions) You can change how fast the time updates by lowering the time interval
</script>

        </form>
         </div>
         <br><br>

        <div align="center" class="rush">

       <a >
       <button type="reset" class="btn-1 btn-11" form="form1" value="Reset">RESET</button>
       </a>
       <a>
       <button type="submit" class="btn-1 btn-11" form="form1" value="Submit">SUBMIT</button>
       </a>
       <a>
       <input type="submit" class="btn-1 btn-11" form="form1" name="submit_button" value="CANCEL">         

        </a>
         </div>
         <br><br>
         <div>
             <p align="center"><a class="lgot" href="logout.php">LOGOUT</a></p>
         </div>
        </body>