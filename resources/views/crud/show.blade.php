<x-admin-layout>
    <ul class="list-group list-group-flush">
        @foreach($show_data as $key => $value)
        <li class="list-group-item">{{$value}} : {{$model[$key]}}</li>
        @endforeach
    </ul>
</x-admin-layout>