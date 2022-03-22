@extends ('user/usersuccesslogin')
@section ('content')
@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
    <i> $message </i>
</div>
@endif

<center>
    @if ($data[0]['create'] != 0)
    <a href=" {{ url('user/addsports') }} "><button type="button" class="btn btn-info"> Add Sports </button></a><br><br>
    @endif
    <table class="table table-striped">
        <thead>
            <tr>
                @if($data[0]['read'] != 0)
                <td> ID </td>
                <td> Sports Name </td>
                <td> Sports Description </td>
                @endif
                @if($data[0]['update'] != 0)
                <td> Update </td>
                @endif
                @if($data[0]['delete'] != 0)
                <td> Delete </td>
                @endif
            </tr>
        </thead>
<tbody>
@foreach($datamod as $show)
<tr>
    @if($data[0]['read'] != 0)
    <td> {{ $show->id }} </td>
    <td> {{ $show->sname }} </td>
    <td> {{ $show->sdesc }} </td>
    @endif
    @if($data[0]['update'] != 0)
    <td><a href="{{ url('sportsedit',$show->id) }} "><button class="btn btn-info"> Update </button></a><br><br>
    @endif
    @if($data[0]['delete'] != 0)
    <td><button class="btn btn-info"><a href="{{url('sportsdelete', $show->id)}}"> Delete </a></button></a><br><br>
    @endif 
</tr>

            @endforeach
        </tbody>

    </table>
    </div>
</center>
<!-- script type="text/javascript">
    function deleteConfirmation(id)
 {
        swal({
            title: "Delete?",
            text: "Please Ensure and then Confirm!",
            type: "warning",
            showCancelButton: !0,
            confirmButtonText: "Yes, delete it!",
            cancelButtonText: "No, cancel!",
            reverseButtons: !0
        }).then(function(e) {

            if (e.value === true) {
                var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

                $.ajax({
                    type: 'POST',
                    url: "{{('/delete')}}/" + id,
                    data: {
                        _token: CSRF_TOKEN
                    },
                    dataType: 'JSON',
                    success: function(results) {
                        if (results.success === true) {
                            swal({
                                title: "Deleted Successfully",
                                type: "success"
                            }).then(function() {
                                location.reload();
                            });
                        } else {
                            swal("Error!", results.message, "error");
                        }
                    }
                });
            } else {
                e.dismiss;
            }
        }, function(dismiss) {
            return false;
        })
    }
</script> -->


@endsection

    </table>
</center>