@extends('parent')

@section('main')

<div class="jumbotron text-center">
   <div align="right">
      <a href="{{ route('crud.index') }}" class="btn btn-default">Back</a>
   </div>
   <br />
   <img src="{{ URL::to('/') }}/images/{{ $data->image }}" class="img-thumbnail" />
   <h3>Name - {{ $data->name }} </h3>
   <h3>Email - {{ $data->email }}</h3>
   <h3>Tanggal Lahir - {{ $data->tgl_lahir }}</h3>
   <h3>Nomer Telpon - {{ $data->no_tlpn }}</h3>
   <h3>gender - {{ $data->gender }}</h3>
   
</div>
@endsection