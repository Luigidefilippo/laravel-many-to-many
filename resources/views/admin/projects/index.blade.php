@extends('layouts.admin')

@section('content')

@include('partials.session_message')
<div class="container"> 
    <h4 class=" mt-5">Hai un Appartamento da affittare ?!<br>Che aspetti caricalo subito!</h4>
    <button>
      <span>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"></path><path fill="currentColor" d="M11 11V5h2v6h6v2h-6v6h-2v-6H5v-2z"></path></svg> Create
      </span>
    </button>


</div>
<div class="container bg-white py-4 mt-2">
    <div class="row">
        <div class="col-md-6 ">
            <h2>Appartamenti</h2>
        </div>
    </div>
</div>
{{-- <div class="d-flex flex-row">
    <a href="{{route('admin.projects.create')}}" class="btn btn-success  ">Crea</a>
    <a class="btn btn-primary " href="{{ route('admin.dashboard') }}">Torna Indietro</a>
</div> --}}

{{-- <table class="table"> --}}
    {{-- <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Titolo</th>
            <th scope="col">Type</th>
            <th scope="col">Tecnology</th>
            <th scope="col">Identificativo</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($projects as $project)
            <tr>
                <th scope="row">{{ $project->id }}</th>
                <td>{{ $project->title }}</td>
                <td>{{$project->type?->name}}</td>
                 <td>
                    @forelse ($project->technologys as $technology)
                        {{$technology->name}}
                    @empty
                        Non specificato
                    @endforelse 
                </td>
                <td>{{ $project->slug }}</td>
                <td>
                    <div class="container d-flex flex-row  ">
                        <a href="{{route('admin.projects.show', $project->slug)}}" class="btn btn-success "><i class="fa-solid fa-eye"></i></a>
                 <a href="{{route('admin.projects.edit', $project->slug)}}" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                     <form action="{{route('admin.projects.destroy', $project->slug)}}" method="POST">
                         @csrf
                             @method('DELETE')
                         <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
            </form>
                    </div>
             
                </td>
            </tr>
        @endforeach
    </tbody>
</table> --}}
<div class="container">
  <div class="row mb-3">
    <div class="col-8">
      <div class="input-group">
        <input type="text" class="form-control form-control" placeholder="Cerca Appartamento">
      </div>
    </div>
    <div class="col-4 d-flex">
        <button class="btn btn-primary btn" type="button">Search Tools</button>
      <button class="btn btn-secondary btn float-end" type="button">Clear</button>
    </div>
  </div>
  

<table class="table">
    <thead>
      <tr>
        <th></th>
        <th>ID</th>
        <th>Titolo</th>
        <th>Rooms</th>
        <th>Costo a notte</th>
        <th>Stato</th>
        <th>Azioni</th>
      </tr>
    </thead>
    <tbody>
        <td>
            <input type="checkbox" class="form-check-input" id="checkbox1">
        </td>
        <td>
            <button class="btn btn-outline-info">1</button>
        </td>
        <td>Vialla faida room service</td>
        <td>Triple-Room</td>
        <td>$100</td>
        <td><div class="blink_text"><i class="fa-solid fa-signal" style="color:#6edb00"></i></span></div></td></td>
        <td>
          <button class="btn btn-primary">Modifica</button>
          <button class="btn btn-info">Dettagli</button>
          <button class="btn btn-danger">Elimina</button>
          
        </td>
      </tr>
      <tr>
        <td>
            <input type="checkbox" class="form-check-input" id="checkbox1">
        </td>
        <td>
            <button class="btn btn-outline-info">2</button>
        </td>
        <td>La collina Resort</td>
        <td>Outdoor-lounge</td>
        <td>$150</td>
        <td>
            <div class="blink_text" ><span><i class="fa-solid fa-signal" style="color:#6edb00"></i></span></div></td>
        <td>
          <button class="btn btn-primary">Modifica</button>
          <button class="btn btn-info">Dettagli</button>
          <button class="btn btn-danger">Elimina</button>
          
        </td>
      </tr>
    </tbody>
  </table>
</div>



  
  

  <style>
   button {
 border: 2px solid #24b4fb;
 background-color: #24b4fb;
 border-radius: 0.9em;
 padding: 0.8em 1.2em 0.8em 1em;
 transition: all ease-in-out 0.2s;
 font-size: 16px;
}

button span {
 display: flex;
 justify-content: center;
 align-items: center;
 color: #fff;
 font-weight: 600;
}

button:hover {
 background-color: #0071e2;
}



@endsection