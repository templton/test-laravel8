<x-layout>
    <x-slot name="title">
        {{$cat->name}}
    </x-slot>
    <h1>Edit cat "{{$cat->name}}"</h1>
    <form action="{{ route('cats.update', $cat->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" id="name" value="{{$cat->name}}">
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Description</label>
            <input type="text" class="form-control" name="description" id="name" value="{{$cat->description}}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Description</label>
            <x-ownersSelector :owners="$owners"></x-ownersSelector>
        </div>
        <div class="mb-3">
            <input type="submit">
        </div>
    </form>
</x-layout>
