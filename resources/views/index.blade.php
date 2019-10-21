@extends('parent')

@section('main')
<br>
<div>
@if(isset(Auth::user()->email))
<div align="center">
    <strong>Welcome {{ Auth::user()->email }}</strong>
<br><br><br><br></div>    

<div class="row">
    <div class="col-md-5">
        <div class="col-md-2 text-right" >
        <a href="{{route('crud.create')}}" class="btn btn-success">Add</a>
    </div>
    </div>
    {{-- <form action="search" method="get">
   <div class="col-sm-5 form-group">
                <div class="input-group">
                    <input class="form-control" id="search"
                           placeholder="Search name" name="search"
                           type="text" id="search"/>
                    <div class="input-group-btn">
                        <button type="submit" class="btn btn-primary">
                            Search
                        </button>
                    </div>
                </div>
            </div>
        {{-- <input type="hidden" value="{{request('field')}}" name="field"/>
        <input type="hidden" value="{{request('sort')}}" name="sort"/> --}}

</div>
<br><br>
@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Tanggal Lahir</th>
            <th>Nomer Telpon</th>
            <th>Gender</th>
            <th>Image</th>
            <th width="230">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach ( $data as $row)
    <tr>
        <td>{{ $row->name }}</td>
        <td>{{ $row->email }}</td>
        <td>{{ $row->tgl_lahir }}</td>
        <td>{{ $row->no_tlpn }}</td>
        <td>{{ $row->gender }}</td>
        <td><img src="{{ URL::to('/') }}/images/{{ $row->image }}" class="img-thumbnail" width="75" /></td>
        <td>
            <form action="{{ route('crud.destroy', $row->id) }}" method="post">
                <a href="{{ route('crud.show', $row->id) }}" class="btn btn-info">Show</a>
                <a href="{{ route('crud.edit', $row->id) }}" class="btn btn-warning">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>      
    @endforeach
    </tbody>
</table>   
{!! $data->links() !!}
<div align="right">
    <a href="{{ url('logout') }}" class="btn btn-danger">Logout</a>
            </div>
                @else
                    <script>window.location = "/";</script>
                @endif
                <br><br><br>
</div>
@endsection