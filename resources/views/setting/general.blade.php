<x-admin-layout>
    <h2>General Settings</h2>

    <form action="" method="post">
        @foreach ($form as $e)
            {{ $e }}
            {{-- @if ($e['fild'] == 'text')
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">{{ $k }}</label>
                    <div class="col-sm-10">
                        <input type="text" name="{{ $e['name'] }}" class="form-control">
                        <div class="form-text">
                            {{ $e['info'] ?? '' }}
                        </div>
                    </div>
                </div>
            @endif --}}
        @endforeach
    </form>

</x-admin-layout>
