@extends('layouts.base')
@section('content')
<div class="contenedor">
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Email</th>
                <th>Edad</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($jugadores as $jugador)
            <tr>
                <td>{{$jugador->name}}</td>
                <td>{{$jugador->email}}</td>
                <td>{{$jugador->age}}</td>
                <td><form action="{{route('delete',$jugador)}}" method="POST">@csrf<input type="hidden" name="_method" value="DELETE"><button type="submit">Eliminar</button></form></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection