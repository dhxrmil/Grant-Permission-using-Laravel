@extends ('user/usersuccesslogin')
@section ('content')

<center>
<h2>  Hello </h2>
@if($data)
@if($data['0']['create'] != 0 || $data['0']['read'] != 0 || $data['0']['update'] != 0 || $data['0']['delete'] != 0 ||
$data['1']['create'] != 0 || $data['1']['read'] != 0 || $data['1']['update'] != 0 || $data['1']['delete'] != 0 ||
$data['2']['create'] != 0 || $data['2']['read'] != 0 || $data['2']['update'] != 0 || $data['2']['delete'] != 0 )
<h2 style="color:green"> Welcome! you got permissions! </h1>
@else 
@endif
@else
<h2 style="color:red"> You don't have any permissions! </h1>
@endif

</center>
@endsection