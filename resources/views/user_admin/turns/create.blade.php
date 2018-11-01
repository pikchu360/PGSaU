@extends('home')
@section('content')

<script>
    $('.date').datepicker({
        autoclose: true,
        dateFormat: "yy-mm-dd"
    });
</script>
<?php
    $fecha = $_GET['date'];
?>
<div class="form-group" align="center">
    <h2><span class="badge badge-info">Creación de Turno</span></h2> 
    <form action="{{ route('turns.store') }}" method="post">
        {{ csrf_field() }}
        Titulo:
        <br />
        <input type="text" name="name" />
        <br /><br />
        Descripción:
        <br />
        <textarea name="description"></textarea>
        <br /><br />
        Fecha:
        <br />
        <input class="text-center" type="datetime" id="turn_date" name="turn_date" class="date" value=<?php echo $fecha?> readonly/>
        <br /><br />
        <a class="btn btn-primary" href="/turns"/>Back</a>
        <input class="btn btn-success" type="submit" value="Save" />
    </form>
</div>
@endsection('content')