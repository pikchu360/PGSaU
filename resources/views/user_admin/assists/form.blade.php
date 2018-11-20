<div class="form-group row">
    <label for="lastname" class="col-md-4 col-form-label text-md-right">ID:</label>
    <div class="col-md-6">
        {!! Form::text('patient_id', $patient->id, array('class'=>'form-control','readonly')) !!}
    </div>
</div>
<div class="form-group row">
    <label for="lastname" class="col-md-4 col-form-label text-md-right">Apellido:</label>
    <div class="col-md-6">
        <label id="lastname" class="form-control" disabled>{{ $patient->lastname }}</label>
    </div>
</div>
<div class="form-group row">
    <label for="firstname" class="col-md-4 col-form-label text-md-right">Nombre:</label>
    <div class="col-md-6">
        <label id="firstname" class="form-control">{{ $patient->firstname }}</label>
    </div>
</div>
<div class="form-group row">
    <label for="dni" class="col-md-4 col-form-label text-md-right">N° de DNI:</label>
    <div class="col-md-6">
        <label for="dni" class="form-control">{{ $patient->dni }}</label>
    </div>
</div>
<div class="form-group row">
    <label for="license_id" class="col-md-4 col-form-label text-md-right">Tipo de Licencia:</label>
    <div class="col-md-6">
        <select id="license_id" name="license_id" class="form-control" onchange="ShowSelected();">  
            <option selected="true" disabled="disabled">Tipo de licencia</option>
            @foreach($lic as $tlic)
            <option value="{{ $tlic->id }}">{{ $tlic->name }} </option>
            @endforeach
        </select>
    </div>
</div>
<div class="form-group row">
    <label id="lbl_day" name="lbl_day" class="col-md-4 col-form-label text-md-right">Cantidad de días:</label>
    <div class="col-md-6">
        <label id="lbl_days" name="lbl_days"></label>
    </div>
</div>
<div class="form-group row">
    <label for="start_date" class="col-md-4 col-form-label text-md-right">Fecha Inicial:</label>
    <div class="col-md-6">
        <input type="date" name="start_date" id="start_date">
    </div>
</div>
<div class="form-group row">
    <label for="end_date" class="col-md-4 col-form-label text-md-right">Fecha Final:</label>
    <div class="col-md-6">
        <input type="date" name="end_date" id="end_date">
    </div>
</div>

<script type="text/javascript"> 
    function ShowSelected() {  
        /* Para obtener el texto */
        var combo = document.getElementById("license_id"); 
        var selected = combo.options[combo.selectedIndex].text; 
        var licenses = [
            @foreach ($lic as $t_lice)
                ["{{$t_lice->name}}","{{$t_lice->days}}"],
            @endforeach
                    
        ];

        for (i = 0; i < licenses.length; i++) {
            if(selected == licenses[i][0]) { 
                var tdia = licenses[i][1];            
            }
        } 

        document.querySelector('#lbl_days').innerText = tdia;
    } 
</script>