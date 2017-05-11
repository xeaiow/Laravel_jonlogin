
    @extends('layout.main')

    @section('content')


        <table border="1">
            <tr>
                <th>id</th>
                <th>帳號</th>
                <th>登入時間</th>
            </tr>
            @foreach ($record as $records)

                <tr>
                    <td>{{ $records->id }}</td>
                    <td>{{ $records->username }}</td>
                    <td>{{ $records->created_at }}</td>
                </tr>

            @endforeach
        </table>


    @endsection
