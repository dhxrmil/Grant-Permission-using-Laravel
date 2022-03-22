@extends('user/usersuccesslogin')
@section('content')
<center>
    <h1> Update User Information </h1><br>
    <form action="{{url ('user/electronicsupdate', $updt->id) }}" method="post">
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

        <table border="3">
            <tr>
                <td>
                    <label><b> Electronics Name </b></label>
                    <input type="text" name="ename" value="{{ $updt->ename }}">
                </td>
            </tr>
            <tr>
                <td>
                    <label><b> Electronics Description </b></label>
                    &nbsp<input type="text  " name="edesc" value="{{ $updt->edesc }}">
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