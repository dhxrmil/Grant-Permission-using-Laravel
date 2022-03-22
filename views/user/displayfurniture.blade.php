@extends ('user/usersuccesslogin')
@section ('content')
@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
    <i> $message </i>
</div>
@endif

<center>
    @if ($data[2]['create'] != 0)
    <a href=" {{ url('user/addfurniture') }} "><button type="button" class="btn btn-warning"> Add Furniture </button></a><br><br>
    @endif
    <table class="table table-striped">
        <thead>
            <tr>
                @if($data[2]['read'] != 0)
                <td> ID </td>
                <td> Furniture Name </td>
                <td> Furniture Description </td>
                @endif
                @if($data[2]['update'] != 0)
                <td> Update </td>
                @endif
                @if($data[2]['delete'] != 0)
                <td> Delete </td>
                @endif
            </tr>
        </thead>
<tbody>
@foreach($datamod as $show)
<tr>
    @if($data[2]['read'] != 0)
    <td> {{ $show->id }} </td>
    <td> {{ $show->fname }} </td>
    <td> {{ $show->fdesc }} </td>
    @endif
    @if($data[2]['update'] != 0)
    <td><a href="{{ url('furnitureedit',$show->id) }} "><button class="btn btn-info"> Update </button></a><br><br>
    @endif
    @if($data[2]['delete'] != 0)
    <td><button class="btn btn-info"><a href="{{url('furnituredelete', $show->id)}}"> Delete </a></button></a><br><br>
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