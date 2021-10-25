<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/calendar.css') }}" rel="stylesheet">
    <title>
        Calendar
    </title>
    <link rel="stylesheet" href="app.css">
</head>

<body class="light">

    <div class="calendar" id="blur">
        <div class="calendar-header">
            <span class="month-picker" id="month-picker">February</span>
            <div class="year-picker">
                <span class="year-change" id="prev-year">
                    <pre><</pre>
                </span>
                <span id="year">2021</span>
                <span class="year-change" id="next-year">
                    <pre>></pre>
                </span>
            </div>
        </div>
        <div class="calendar-body">
            <div class="calendar-week-day">
                <div style='color:red'>Sun</div>
                <div>Mon</div>
                <div>Tue</div>
                <div>Wed</div>
                <div>Thu</div>
                <div>Fri</div>
                <div>Sat</div>
            </div>
            <div class="calendar-days"></div>
        </div>
        <div class="calendar-footer">
            <div class="toggle">
                <span>Dark Mode</span>
                <div class="dark-mode-switch">
                    <div class="dark-mode-switch-ident"></div>
                </div>
            </div>
        </div>
        <div class="month-list"></div>
    </div>
    <div id="popup">
        <h2><div><center>Description</center></div></h2>
        
        <p id="appointmentDate"></p>
        <p>No Appointment in this current Date<p><br>
        <h3><div><center>Want to make an Appointment ?</center></div></h3>
        <p>Please select Time: <p>
        <a href="/stdnttime"><button>Appoint</button></a>
        <div onclick="toggle()"><center>Close</center></div>
    </div>
    <script src="js/calendar.js"></script>
</body>
</html>