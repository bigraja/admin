<x-admin-layout>


    <h1>Drivers</h1>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">
                        <input type="checkbox" class="form-check-input">
                    </th>
                    @foreach($thead as $text)
                    <th scope="col">{{$text}}</th>
                    @endforeach
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($model as $data)
                <tr>
                    <td><input type="checkbox" class="form-check-input"></td>
                    @foreach($tbody as $text)
                    <td>{{$data[$text]}}</td>
                    @endforeach
                    <td>
                        @foreach($action as $key => $value)
                        <a href="{{action_url_build($value, $data)}}">{{$key}}</a>
                        @endforeach
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</x-admin-layout>