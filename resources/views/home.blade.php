@extends('layout/app')

@section('content')
    <div class="container">
            
        <table class="table">
            <thead class=" bg-body-secondary">
              <tr>
                
                <th scope="col">Company</th>
                <th scope="col">Departurs</th>
                <th scope="col">Arrivals</th>
                <th scope="col">Giorno della Partenza</th>
                <th scope="col">Orario di Partenza</th>
                <th scope="col">Orario di Arrivo</th>
                <th scope="col">N° Treno</th>
                <th scope="col">N° Carrozza</th>
                <th scope="col">In Arrivo</th>
                <th scope="col">Cancellato</th>
                



              </tr>
            </thead>
            <tbody>
                @foreach ($trains as $train)
              <tr>
                  <td>{{$train->company}}</td>
                  <td>{{$train->departurs}}</td>
                  <td>{{$train->arrivals}}</td>
                  <td>{{$train->date}}</td>
                  <td>{{$train->time_to_departurs}}</td>
                  <td>{{$train->time_to_arrive}}</td>
                  <td>{{$train->train_number}}</td>
                  <td>{{$train->train_carriages}}</td>
                  <td>{{$train->time? "In arrivo" : "Ritardo"}}</td>
                  <td>{{$train->canceled? "Siamo spiacenti" : "Il treno è in arrivo"}}</td>


                

               
                
            </tr>
                @endforeach
              
            </tbody>
          </table>
       
    </div>

@endsection