@extends ('user/usersuccesslogin')
@section ('content')
<center>

<div id="sport">
    
    <label><b style="font-size:20px;font-family:cursive"> View Sports </b></label> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    <a href=" {{ url('sportslisting') }}" class="btn btn-primary"> View Sports </a>
            
</div>
</center>
@endsection