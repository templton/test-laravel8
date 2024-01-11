<x-layout>
    <x-slot name="title">
        Добавление владельца
    </x-slot>
    <form action="{{ route('owners.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" id="name">
        </div>
        <div class="mb-3">
            <label for="old" class="form-label">Years</label>
            <input type="text" class="form-control" name="old" id="old">
        </div>
        <div class="mb-3">
            <input type="submit">
        </div>
    </form>
</x-layout>
