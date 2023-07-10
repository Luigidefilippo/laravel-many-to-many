@extends('layouts.admin')

@section('content')
<h1>{{$project->title }}</h1>
<a class="btn btn-primary mt-4" href="{{ route('admin.projects.index') }}">Torna Indietro</a>



<div class="post-image">
    @if ($project->image)
        <img src="{{asset('storage/' . $project->image) }}" alt="{{ $project->title}}">
    @else
    <div class="p-5 bg-secondary text-white mt-3">
        No Image
    </div>
    @endif
</div>

<div class="d-flex justify-content-between">
    @if ($project->type)
    <p class="text-center">{{ $project->type?->name }}</p>
    @else
    <p class="text-center">Non è impostata nessun Type</p>
    @endif
</div>
<div>
    <h5>Techonologies</h5>
    <ul>
        @forelse ($project->technologys as $technology)
            <li>{{$technology->name}}</li>
        @empty
            <li>Nessuna tecnologia presente</li>
        @endforelse
    </ul>
</div>
<p class="mt-4">{{$project->description}}</p>
    
@endsection


