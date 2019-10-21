@extends('parent')
@section('main')
<div align="right">
<a href="{{ route('crud.index')}}" class="btn btn-default">Back</a>

</div>
<br />    
<form method="post" action="{{ route('crud.update', $data->id)}}" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
      <div class="form-group">
       <label class="col-md-4 text-right">Name</label>
       <div class="col-md-8">
        <input type="text" name="name" value="{{ $data->name }}" class="form-control input-lg" />
       </div>
      </div>
      <br /><br /><br />
      <div class="form-group">
       <label class="col-md-4 text-right">Email</label>
       <div class="col-md-8">
        <input type="text" name="email" value="{{ $data->email }}" class="form-control input-lg" />
       </div>
      </div>
      <br /><br /><br />
      <div class="form-group">
       <label class="col-md-4 text-right">Tanggal Lahir</label>
       <div class="col-md-8">
        <input type="date" name="tgl_lahir" value="{{ $data->tgl_lahir }}" class="form-control input-lg" />
       </div>
      </div>
      <br /><br /><br />
      <div class="form-group">
       <label class="col-md-4 text-right">Nomer Telpon</label>
       <div class="col-md-8">
        <input type="text" name="no_tlpn" value="{{ $data->no_tlpn }}" class="form-control input-lg" />
       </div>
      </div>
      <br /><br /><br />
      <div class="form-group">
       <label class="col-md-4 text-right">Gender</label>
       <div class="col-md-8">
        <input type="text" name="gender" value="{{ $data->gender }}" class="form-control input-lg" />
       </div>
      </div>
      <br /><br /><br />
      <div class="form-group">
       <label class="col-md-4 text-right">Select Profile Image</label>
       <div class="col-md-8">
        <input type="file" name="image" />
              <img src="{{ URL::to('/') }}/images/{{ $data->image }}" class="img-thumbnail" width="100" />
                        <input type="hidden" name="hidden_image" value="{{ $data->image }}" />
       </div>
      </div>
      <br /><br /><br />
      <div class="form-group text-center">
       <input type="submit" name="edit" class="btn btn-primary input-lg" value="Edit" />
      </div>
 

</form>
@endsection