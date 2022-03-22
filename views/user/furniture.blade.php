@extends ('user/usersuccesslogin')
@section ('content')
<center>

<div id="furniture">
    
    <label><b style="font-size:20px;font-family:cursive"> View Furniture </b></label> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    <a href=" {{ url('furniturelisting') }}" class="btn btn-primary"> View Furniture </a>
            
</div>
</center>
@endsection