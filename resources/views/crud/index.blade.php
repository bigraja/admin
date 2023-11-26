<x-admin-layout>


    <h1>Drivers</h1>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">
                        <input type="checkbox" class="form-check-input">
                    </th>
                    @foreach($table_column as $key => $value)
                    <th scope="col">{{$value}}</th>
                    @endforeach
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($model as $data)
                <tr>
                    <td><input type="checkbox" class="form-check-input"></td>
                    @foreach($table_column as $key => $value)
                    <td>{{$data[$key]}}</td>
                    @endforeach
                    <td>
                       <a href="{{route($route_name . 'show', $data['id'])}}">Show</a>
                       <a href="{{route($route_name . 'edit', $data['id'])}}">Edit</a>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</x-admin-layout>