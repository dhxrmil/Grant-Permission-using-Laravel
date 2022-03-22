@extends('dashboard/successlogin')
@section('content')

<center>
    <div>
        <label for="name" style="color:blue;font-size:20px;font-family:sans" ;> Select a User to Grant Permissions </label><br>
        <select name="name" id="submit">
            <option value=""> Select a user </option>
            @foreach($abc as $show)
            <option value="{{$show->id}} "> {{ $show->name }} </option>
            @endforeach
        </select>
    </div><br>
</center>
<div class="getdata">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <script>
        $(document).ready(function() {
            tkn = "{{ csrf_token()}}";
            $("#submit").change(function() {
                var usr = $("#submit").val();
                console.log(usr);
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': tkn
                    }
                });
                $.ajax({
                    type: "POST",
                    url: '/grant_permissions/'+usr,
                    data: {
                       "id" :usr,
                       "_token" : tkn,
                    },
                    success: function(response) {
                        console.log(response);
                        
                        $('.getdata').html(response.html)
                         
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr);
                    }
                });

            });

        });
    </script>
    </div>
@endsection

