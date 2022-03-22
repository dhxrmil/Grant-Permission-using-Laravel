<!-- hi
{{$data['id']}}
{{$data['key'][0]['create']}}
{{$data['key'][1]['create']}}
{{$data['key'][2]['create']}} -->

<center>
    <form method="POST" @if($data['key'][0]['userid']!=$data['id']) action="insertpermission/{{ $data['id'] }}" @else action="updatepermissions/{{ $data['id'] }}"  @endif >
    @csrf
    <table border="3" id="demo" class="table table-striped">
        {{ $data['key'][0]['read']}}
        <tr>
            <td><b> CATEGORY </b></td>
            <td><b> CREATE </b></td>
            <td><b> READ </b></td>
            <td><b> UPDATE </b></td>
            <td><b> DELETE </b></td>
        </tr>
</div>
    <tr>
        <td> <span name="sports" value="sports"> Sports </span> 
        <input type="hidden" name="data[sports][create]" value="0">
        <td> <input type="checkbox" name="data[sports][create]" value="1" @if($data['key'][0]['create']==1) checked @endif> </td>

        <input type="hidden" name="data[sports][read]" value="0">
        <td> <input type="checkbox" name="data[sports][read]" value="1" @if($data['key'][0]['read']==1) checked @endif> </td>

        <input type="hidden" name="data[sports][update]" value="0">
        <td> <input type="checkbox" name="data[sports][update]" value="1" @if($data['key'][0]['update']==1) checked @endif> </td>

        <input type="hidden" name="data[sports][delete]" value="0">
        <td> <input type="checkbox" name="data[sports][delete]" value="1" @if($data['key'][0]['delete']==1) checked @endif> </td>

        </td>
    </tr>
       
    <tr>
        <td> <span name="electronics" value="electronics"> electronics </span> 
        <input type="hidden" name="data[electronics][create]" value="0">
        <td> <input type="checkbox" name="data[electronics][create]" value="1" @if($data['key'][1]['create']==1) checked @endif> </td>

        <input type="hidden" name="data[electronics][read]" value="0">
        <td> <input type="checkbox" name="data[electronics][read]" value="1" @if($data['key'][1]['read']==1) checked @endif> </td>

        <input type="hidden" name="data[electronics][update]" value="0">
        <td> <input type="checkbox" name="data[electronics][update]" value="1" @if($data['key'][1]['update']==1) checked @endif> </td>

        <input type="hidden" name="data[electronics][delete]" value="0">
        <td> <input type="checkbox" name="data[electronics][delete]" value="1" @if($data['key'][1]['delete']==1) checked @endif> </td>

        </td>
    </tr>

    <tr>
        <td> <span name="furniture" value="furniture"> furniture </span> 
        <input type="hidden" name="data[furniture][create]" value="0">
        <td> <input type="checkbox" name="data[furniture][create]" value="1" @if($data['key'][2]['create']==1) checked @endif> </td>

        <input type="hidden" name="data[furniture][read]" value="0">
        <td> <input type="checkbox" name="data[furniture][read]" value="1" @if($data['key'][2]['read']==1) checked @endif> </td>

        <input type="hidden" name="data[furniture][update]" value="0">
        <td> <input type="checkbox" name="data[furniture][update]" value="1" @if($data['key'][2]['update']==1) checked @endif> </td>

        <input type="hidden" name="data[furniture][delete]" value="0">
        <td> <input type="checkbox" name="data[furniture][delete]" value="1" @if($data['key'][2]['delete']==1) checked @endif> </td>

        </td>
    </tr>    

</table><br>
@if($data['key'][0]['userid']!=$data['id'])
<button type="submit" name="submit" class="btn btn-success"> Submit </button>
@else
<button type="submit" name="submit" class="btn btn-success"> Update </button>
@endif
</form>
</center>
