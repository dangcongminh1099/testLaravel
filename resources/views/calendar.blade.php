
<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8' />
<link href="{{asset('css/core/main.css')}}" rel='stylesheet' />
<link href="{{asset('css/daygrid/main.css')}}"  rel='stylesheet' />
<link href="{{asset('css/list/main.css')}}" rel='stylesheet' />
<script src="{{asset('js/core/main.js')}}"></script>
<script src="{{asset('js/interaction/main.js')}}"></script>
<script src="{{asset('js/daygrid/main.js')}}"></script>
<script src="{{asset('js/list/main.js')}}"></script>
<script src="{{asset('js/google-calendar/main.js')}}"></script>
<script>

  document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {

      plugins: [ 'interaction', 'dayGrid', 'googleCalendar' ],

      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,listYear'
      },

      displayEventTime: false, // don't show the time column in list view

      // THIS KEY WON'T WORK IN PRODUCTION!!!
      // To make your own Google API key, follow the directions here:
      // http://fullcalendar.io/docs/google_calendar/
      googleCalendarApiKey: 'AIzaSyDcnW6WejpTOCffshGDDb4neIrXVUA1EAE',


      dateClick: function(date) {
        alert(date.dateStr);
      },

      loading: function(bool) {
        document.getElementById('loading').style.display =
          bool ? 'block' : 'none';
      }

    });

    calendar.render();
  });

</script>
<style>

  body {
    margin: 40px 10px;
    padding: 0;
    font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
    font-size: 14px;
  }

  #loading {
    display: none;
    position: absolute;
    top: 10px;
    right: 10px;
  }

  #calendar {
    max-width: 900px;
    margin: 0 auto;
  }

</style>
</head>
<body>

  <div id='loading'>loading...</div>

  <div id='calendar'></div>

</body>
</html>
