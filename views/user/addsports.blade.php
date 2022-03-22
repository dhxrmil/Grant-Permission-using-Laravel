@extends ('user/usersuccesslogin')
@section ('content')
<center>
<form method="post" action="{{ url ('insertsports') }}" id="regform">
    {{ csrf_field() }}
<div id="sport">
    <label><b style="font-size:18px;font-family:cursive"> Enter Sports Name: </b></label> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    <input type="text" name="sname" id="sname">
    <span class="text-danger"> {{ $errors->first('name') }} </span><br><br>

    <label><b style="font-size:18px;font-family:cursive"> Description </b></label> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    <input type="text" name="sdesc" id="sdesc">
    <span class="text-danger"> {{ $errors->first('userid') }} </span><br><br>

    <input type="submit" name="submit" value="submit" class="btn btn-info">

</div>
</form>
</center>
@endsection