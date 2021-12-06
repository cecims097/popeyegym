@extends('layouts.app')

@section('content')
<link href="css/home.css"rel="stylesheet" type="text/css">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Reservaciones Realizadas</div>
                     
                <div class="card-body">

                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>usuario</th>
                                    <th>Numero</th>
                                    <th>Fecha de cita</th>
                                    <th>Comentario</th>
                                    
                                    <th>&nbsp;</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($reservacion as $reserva )
                            

                                    <tr>
                                        <td>{{ $reserva->id }}</td>
                                        <td>{{ $reserva->nombre }}</td>
                                        <td>{{ $reserva->numero }}</td>
                                        <td>{{ $reserva->fecha }}</td>  
                                        <td>{{ $reserva->comentario}}</td>
                                       
                                        
                                             

                                    </tr>
                                   
                @endforeach
                            </tbody>
                        </table>

            
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
