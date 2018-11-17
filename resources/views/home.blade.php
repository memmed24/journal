@extends('layouts.app')

@section('content')

<div class="col-md-6 offset-md-3">
    <div class="card">
        <div class="card-body">
            <form action="{{route('documents.store')}}" method=post enctype="multipart/form-data">

                @csrf

                <div class="form-group row">
                    <label for="document" class="col-md-4 col-form-label text-md-right">Fayl</label>

                    <div class="col-md-6">
                        <input id="document" type="file"
                               class="form-control {{ $errors->has('document') ? ' is-invalid' : '' }}"
                               name=document value="{{ old('document') }}"  >

                        @if ($errors->has('document'))
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('document') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label for="document" class="col-md-4 col-form-label text-md-right"></label>

                    <div class="col-md-6">
                        <input type="submit" class="btn btn-success" value="Send">
                    </div>
                </div>
            </form>

            @if(Session::has('document'))

                @switch(Session::get('document'))
                    @case("success")
                        <div class="alert alert-success" role="alert">
                            Uğur ilə göndərildi
                        </div>
                        @break
                    @case("fail")
                        <div class="alert alert-danger" role="alert">
                            This is a success alert—check it out!
                          </div>
                        @break
                        
                @endswitch

            @endif
        </div>
    </div>
</div>



@endsection
