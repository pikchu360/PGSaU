<div class="modal fade" id="search-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <h5 class="modal-title text-white icon-search" id="exampleModalLabel">Ficha Médicas</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body bg-light">
                <script>    
                    function myFunction() {
                        // Declare variables 
                        var input, filter, table, tr, td, i, j, visible;
                        input = document.getElementById("dni-search");
                        filter = input.value.toUpperCase();
                        table = document.getElementById("tbl-patient");
                        tr = table.getElementsByTagName("tr");

                        // Loop through all table rows, and hide those who don't match the search query
                        for (i = 1; i < tr.length; i++) {
                            visible = false;
                            /* Obtenemos todas las celdas de la fila, no sólo la primera */
                            td = tr[i].getElementsByTagName("td");
                            for (j = 0; j < td.length; j++) {
                                if (td[j] && td[j].innerHTML.toUpperCase().indexOf(filter) > -1) {
                                    visible = true;
                                }
                            }
                            if (visible === true) {
                                tr[i].style.display = "";
                            } else {
                                tr[i].style.display = "none";
                            }
                        }
                    }
                </script>
                <input type="text" id="dni-search" onkeyup="myFunction()" placeholder="Search for names..">
                <table class="table table-bordered" id="tbl-patient">
                    <tr>
                        <th>Id</th>
                        <th>N° de DNI</th>
                        <th>Apellido</th>
                        <th>Nombres</th>
                        <th>Email</th>
                        <th width="280px">Acciones
                            <a class="btn btn-warning icon-plus" href="{{ route('patients.index') }}"></a>
                        </th>
                    </tr>
                    @foreach ($pat as $patient)
                    <tr>
                        <td>{{ $patient->id }}</td>
                        <td>{{ $patient->dni }}</td>
                        <td>{{ $patient->lastname }}</td>
                        <td>{{ $patient->firstname }}</td>
                        <td>{{ $patient->email}}</td>
                        <td>
                            <a class="btn btn-success icon-checkmark" href="{{ route('createInassist', $patient->id) }}">Ok</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>