@extends('dashboard/successlogin')
@section('content')
    <div>
<center>
    <a href="insertuser"><button type="button" class="btn btn-success">Add a user</button></a><br><br><br><br>
</center>

        @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <strong><i>{{ $message }}</i></strong>
        </div>
        @endif
        <center>
            <table id="example" class="table table-striped" border="2">
                <thead>
                    <tr>
                        <td><b> ID </b></td>
                        <td><b> Name </b></td>
                        <td><b> Email </b></td>
                        <td><b> Update </b></td>
                        <td><b> Delete </b></td>

                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $show)
                    <tr>
                    <td>{{$show->id}}</td>
                    <td>{{$show->name}}</td>
                        <td>{{$show->email}}</td>
                        <td><a href='edit/{{ $show->id }}'><button class="btn btn-info">Update</button></a></td>
                        <td><button class="btn btn-danger"><a href="deldata/{{ $show->id }}"> Delete </a></button></td>
                    </tr>
                    @endforeach
                </tbody>
                          </table>
    </div>
    </center>
    


@endsection