@extends('home')
@section('content')
<div class="card bg-home" style="width: 100rem;">
    <center><h1><span class="badge badge-pill badge-info">Turnos</span></h1></center>
    <br><br>
    <div id='calendar'></div>

    <script>
        var m=moment();
        $(document).ready(function(){
            $('#calendar').fullCalendar({
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'agendaWeek,month,agendaDay'
                    
                },
                defaultView: 'agendaWeek',
                events : [
                    @foreach($turns as $turn) {
                        title : "{{ $turn->name }}",
                        start : '{{ $turn->turn_date }}',
                        color : 'black',
                        backgroundColor : ' #58d68d ',
                        textColor: 'white',
                        url : "{{ route('turns.show', $turn->id ) }}"
                    },
                    @endforeach
                ],

                dayClick: function(date, jsEvent, view){
                    
                    if(date.format() >= m.format('YYYY-MM-DD')){
                        window.location.replace("turns/create?date="+date.format());
                    }else{
                        alert('Por Favor, elija una fecha correcta! Mayor o igual a ' + m.format('DD-MM-YYYY'))
                    }
                },

                businessHours: [
                    {
                        start: '8:00', // hora final
                        end: '18:00', // hora inicial
                        dow: [ 1, 2, 3, 4, 5 ] // dias de semana, 0=Domingo
                    },
                    {
                        start: '8:00', // hora final
                        end: '12:00', // hora inicial
                        dow: [ 6 ] // dias de semana, 0=Domingo
                    },
                ],
                dayRender: function (date, cell) {
                    if(date.format() < m.format('YYYY-MM-DD')){
                        cell.css("background-color", " #f5b7b1");
                    }
                },
            })
        });
    </script>
</div>
@endsection('content')