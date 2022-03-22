@extends('dashboard/successlogin')
@section('content')
<center>
    <h1> Update User Information </h1><br>
    <form action="/update/ {{ $updt->id }}" method="post">
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

        <table border="3">
            <tr>
                <td>
                    <label><b> Name </b></label>
                    <input type="text" name="name" value="{{ $updt->name }}">
                </td>
            </tr>
            <tr>
                <td>
                    <label><b> Email </b></label>
                    &nbsp<input type="email" name="email" value="{{ $updt->email }}">
                </td>
            </tr>
            <tr>
                <td>
                    <label><b> Password </b></label>
                    <input type="password" name="password" value="{{ $updt->password }}">
                </td>
            </tr>
            <tr>
                <td>
                    <center><input type="submit" name="submit" value="Update"></center>
                </td>
        </table>
    </form>
</center>

@endsection