@extends('dashboard/successlogin')
@section('content')

<form action="insertdata" method="POST" id="regForm">
        {{ csrf_field() }}
        <div>
                <center>
                    <h1>Add User</h1>
                </center>
                <center>
                <table border="6">
                    <tr>
                        <td>
                            <label for="name"><b> Name: </b></label>
                            <input type="text" id="name" placeholder="Enter Name" name="name" required>
                            <span class="text-danger">{{ $errors->first('name') }}</span></td>
                        <tr><td>
                        <label for="name"><b> Email: &nbsp&nbsp&nbsp</b></label>
                        <input type="email" id="userid" placeholder="Enter Email" name="email" required>
                        <span class="text-danger">{{ $errors->first('userid') }}</span></td></tr>
                        <br><br>
                        <tr><td>
                        <label for="email"><b> Password: </b></label>
                        <input type="password" id="password" placeholder="Enter Password" name="password" required>
                        <span class="text-danger">{{ $errors->first('password') }}</span> </td>
                        <br><br>
                        <tr><td>
                <center><input type="submit" id="show" class="btn btn-primary" value="Submit" name="submit"></center>
</td></tr></tr>
            </div>
        </table>
</center>
    </form>

        
           
@endsection