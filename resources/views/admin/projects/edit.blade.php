@extends('layouts.admin')

@section('content')
<form action="{{ route('admin.projects.update', $project->slug) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="title" class="form-label">title</label>
        <input type="text" class="form-control" id="title" name="title" value="{{old('title', $project->title)}}">
    </div>

    <div class="mb-3">
        <label for="type">Select Type</label>
        <select class="form-select" id="type" name="type_id">
            <option selected value=""></option>
            @foreach ($types as $type)
                <option value="{{ $type->id }}"  @selected($type->id == old('type_id', $project->type?->id))>{{ $type->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-4">
        <h5>Technology</h5>
        @foreach ($technologys as $technology)
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="technologys[]" value="{{$technology->id}}" id="technology-{{$technology->id}}" @checked(old('technologys') ? in_array($technology->id , old('technologys' , [])) : $project->technologys->contains($technology)) >
            <label for="technology-{{$technology->id}}" class="form-check-label">{{$technology->name}}</label>
        </div>
            
        @endforeach
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">content</label>
        <textarea class="form-control"  id="description" name='description' rows="3">{{old('description', $project->description)}}</textarea>
    </div>

    <div class="mb-3">
        <label for="image" class="form-label">Immagine</label>
        <input type="file" class="form-control" id="image" name="image">

        @if ($project->image)
        <img src="{{asset('storage/' . $project->image)}}" alt="{{$project->title}}">
            
        @endif
    </div>

    <button type="submit" class="btn btn-success">invia</button>
</form>
@endsection