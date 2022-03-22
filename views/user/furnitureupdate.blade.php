@extends('user/usersuccesslogin')
@section('content')
<center>
    <h1> Update User Information </h1><br>
    <form action="{{url ('user/furnitureupdate', $updt->id) }}" method="post">
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

        <table border="3">
            <tr>
                <td>
                    <label><b> Furniture Name </b></label>
                    <input type="text" name="fname" value="{{ $updt->fname }}">
                </td>
            </tr>
            <tr>
                <td>
                    <label><b> Furniture Description </b></label>
                    &nbsp<input type="text  " name="fdesc" value="{{ $updt->fdesc }}">
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