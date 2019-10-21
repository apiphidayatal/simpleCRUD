@extends('parent')

@section('main')
@if($errors->any())
<div class="alert alert-denger">
    <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif
<div align="right">
    <a href="{{ route('crud.index') }}" class="btn btn-default">Back</a>
</div>
<form method="post" action="{{ route('crud.store') }}" enctype="multipart/form-data">

    @csrf
    <div class="form-group">
        <label class="col-md-4 text-right">Name</label>
        <div class="col-md-8">
            <input type="text" name="name" class="form-control input-lg" />
        </div>
    </div>
    <br /><br /><br />
    <div class="form-group">
        <label class="col-md-4 text-right">Email</label>
        <div class="col-md-8">
            <input type="text" name="email" class="form-control input-lg" />
        </div>
    </div>
    <br /><br /><br />
    <div class="form-group">
        <label class="col-md-4 text-right">Tanggal Lahir</label>
        <div class="col-md-8">
            <input type="date" name="tgl_lahir" class="form-control input-lg" />
        </div>
    </div>
    <br /><br /><br />
    <div class="form-group">
        <label class="col-md-4 text-right">Nomer Telpon</label>
        <div class="col-md-8">
            <input type="text" name="no_tlpn" class="form-control input-lg" />
        </div>
    </div>
    <br /><br /><br />
    <div class="form-group">
        <label class="col-md-4 text-right">Gender</label>
        <div class="col-md-8">
            <input type="text" name="gender" class="form-control input-lg" />
        </div>
    </div>
    <br /><br /><br />
    <div class="form-group">
        <label class="col-md-4 text-right">Select Profile Image</label>
        <div class="col-md-8">
            <input type="file" name="image" />
            </div>
            </div>
            <br /><br /><br />
            <div class="form-group text-center">
                <input type="submit" name="add" class="btn btn-primary input-lg" value="Add" />
            </div>
</form>
@endsection