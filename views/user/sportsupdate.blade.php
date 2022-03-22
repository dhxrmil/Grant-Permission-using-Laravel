@extends('user/usersuccesslogin')
@section('content')
<center>
    <h1> Update User Information </h1><br>
    <form action="{{url ('user/sportsupdate', $updt->id) }}" method="post">
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

        <table border="3">
            <tr>
                <td>
                    <label><b> Sport Name </b></label>
                    <input type="text" name="sname" value="{{ $updt->sname }}">
                </td>
            </tr>
            <tr>
                <td>
                    <label><b> Sport Description </b></label>
                    &nbsp<input type="text  " name="sdesc" value="{{ $updt->sdesc }}">
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