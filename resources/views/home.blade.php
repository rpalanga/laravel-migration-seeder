@extends('layout/app')

@section('content')
    <div class="container">
        
            <h3 class="display-3"><span class=" text-danger ">Treni in partenza</span> <br> Affrettarsi</h3>

        <table class="table my-3">
            <thead class="table-primary rounded-3 ">
              <tr>
                
                <th scope="col">Compagnia</th>
                <th scope="col">Partenza</th>
                <th scope="col">Arrivi</th>
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