<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fullcalendar.min.css') }}"/>

    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/moment.min.js') }}"></script>
    <script src="{{ asset('js/fullcalendar.min.js') }}"></script>

</head>
<body>
<h3>Calendario</h3>
    <div id='calendar'>
    </div>
    <script>
        $(document).ready(function(){
            $('#calendar').fullCalendar({
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay'
                },
                events : [
                    @foreach($turns as $turn) {
                        title : "{{ $turn->name }}",
                        start : '{{ $turn->turn_date }}',
                        color : 'black',
                        backgroundColor : ' #58d68d ',
                        textColor: 'white',
                        url : "{{ route('shifts.show', $turn->id ) }}"
                    },
                    @endforeach
                ],
                dayClick: function(date, jsEvent, view){
                    window.location.replace("/shifts.create?date="+date.format());
                },
            })
        });
</script>
</body>
</html>