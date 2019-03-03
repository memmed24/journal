@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="title" class="col-md-4 col-form-label text-md-right">Title</label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                           class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}"
                                           name="title" value="{{ old('title') }}"  >

                                    @if ($errors->has('title'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Ad</label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                           class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                           name="name" value="{{ old('name') }}"  >

                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="middle_name" class="col-md-4 col-form-label text-md-right">Middle ad</label>

                                <div class="col-md-6">
                                    <input type="text" id="mid_name"
                                           class="form-control{{ $errors->has('mid_name') ? 'is-invalid': '' }}"
                                           name="mid_name" value="{{old('mid_name')}}" autofocus>
                                    @if ($errors->has('mid_name'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('mid_name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="surname" class="col-md-4 col-form-label text-md-right">Soyad</label>

                                <div class="col-md-6">
                                    <input id="surname" type="text"
                                           class="form-control{{ $errors->has('surname') ? ' is-invalid' : '' }}"
                                           name="surname" value="{{ old('surname') }}"  >

                                    @if ($errors->has('surname'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('surname') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                         

                            <div class="form-group row">
                                <label for="username" class="col-md-4 col-form-label text-md-right">İstifadəçi adı</label>

                                <div class="col-md-6">
                                    <input id="username" type="text"
                                           class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}"
                                           name="username" value="{{ old('username') }}"  >

                                    @if ($errors->has('username'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="degree" class="col-md-4 col-form-label text-md-right">Dərəcə</label>

                                <div class="col-md-6">
                                    <input id="degree" type="text"
                                           class="form-control{{ $errors->has('degree') ? ' is-invalid' : '' }}"
                                           name="degree" value="{{ old('degree') }}" >

                                    @if ($errors->has('degree'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('degree') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nickname" class="col-md-4 col-form-label text-md-right">Nickname</label>

                                <div class="col-md-6">
                                    <input id="degree" type="text"
                                           class="form-control{{ $errors->has('nickname') ? ' is-invalid' : '' }}"
                                           name="nickname" value="{{ old('nickname') }}" >

                                    @if ($errors->has('nickname'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nickname') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="primary_phone" class="col-md-4 col-form-label text-md-right">Primary phone</label>

                                <div class="col-md-6">
                                    <input id="primary_phone" type="text"
                                           class="form-control{{ $errors->has('primary_phone') ? ' is-invalid' : '' }}"
                                           name="primary_phone" value="{{ old('primary_phone') }}"  >

                                    @if ($errors->has('primary_phone'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('primary_phone') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="secondary_phone" class="col-md-4 col-form-label text-md-right">Secondary phone</label>

                                <div class="col-md-6">
                                    <input id="secondary_phone" type="text"
                                           class="form-control{{ $errors->has('secondary_phone') ? ' is-invalid' : '' }}"
                                           name="secondary_phone" value="{{ old('secondary_phone') }}"  >

                                    @if ($errors->has('secondary_phone'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('secondary_phone') }}</strong>
                                    </span> 
                                    @endif
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="secondary_phone_aim" class="col-md-4 col-form-label text-md-right">Secondary phone is for</label>

                                <div class="col-md-6">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="" name="secondary_phone_aim"  value="mobile" >Mobile <br>
                                        <input type="radio" class="" name="secondary_phone_aim" value="beeper">Beeper <br>
                                        <input type="radio" class="" name="secondary_phone_aim" value="home">Home <br>
                                        <input type="radio" class="" name="secondary_phone_aim" value="work">Work <br>
                                        <input type="radio" class="" name="secondary_phone_aim" value="adminasst">Admin.asst <br>
                                    </div>

                                    <div class="custom-control custom-radio">
                                        {{-- <label class="custom-control-label" for="" >Serious</label> --}}
                                    </div>

                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email"
                                       class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                           class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                           name="email" value="{{ old('email') }}" >

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="primary_phone" class="col-md-4 col-form-label text-md-right">Fax number</label>

                                <div class="col-md-6">
                                    <input id="primary_phone" type="text"
                                           class="form-control{{ $errors->has('fax_number') ? ' is-invalid' : '' }}"
                                           name="fax_number" value="{{ old('fax_number') }}"  >

                                    @if ($errors->has('fax_number'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('fax_number') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="secondary_phone_aim" class="col-md-4 col-form-label text-md-right">prefered_contact_method</label>

                                <div class="col-md-6">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="" name="prefered_contact_method"  value="email" >E-mail <br>
                                        <input type="radio" class="" name="prefered_contact_method" value="fax">Fax<br>
                                        <input type="radio" class="" name="prefered_contact_method" value="postal_mail">Postal Mail<br>
                                        <input type="radio" class="" name="prefered_contact_method" value="telephone">Telephone<br>
                                    </div>

                                    <div class="custom-control custom-radio">
                                        {{-- <label class="custom-control-label" for="" >Serious</label> --}}
                                    </div>

                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="primary_phone" class="col-md-4 col-form-label text-md-right">Position</label>

                                <div class="col-md-6">
                                    <input id="primary_phone" type="text"
                                           class="form-control{{ $errors->has('position') ? ' is-invalid' : '' }}"
                                           name="position" value="{{ old('position') }}" >

                                    @if ($errors->has('position'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('position') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="primary_phone" class="col-md-4 col-form-label text-md-right">Insitution</label>

                                <div class="col-md-6">
                                    <input id="primary_phone" type="text"
                                           class="form-control{{ $errors->has('insitution') ? ' is-invalid' : '' }}"
                                           name="insitution" value="{{ old('insitution') }}"  >

                                    @if ($errors->has('insitution'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('insitution') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="primary_phone" class="col-md-4 col-form-label text-md-right">Department</label>

                                <div class="col-md-6">
                                    <input id="primary_phone" type="text"
                                           class="form-control{{ $errors->has('department') ? ' is-invalid' : '' }}"
                                           name="department" value="{{ old('department') }}"  >

                                    @if ($errors->has('department'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('department') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="street_address" class="col-md-4 col-form-label text-md-right">Street Address</label>

                                <div class="col-md-6">
                                    <input id="street_address" type="text"
                                           class="form-control{{ $errors->has('street_address') ? ' is-invalid' : '' }}"
                                           name="street_address" value="{{ old('street_address') }}"  autofocus>

                                    @if ($errors->has('street_address'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('street_address') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="primary_phone" class="col-md-4 col-form-label text-md-right">City </label>

                                <div class="col-md-6">
                                    <input id="primary_phone" type="text"
                                           class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}"
                                           name="city" value="{{ old('city') }}"  >

                                    @if ($errors->has('city'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="province" class="col-md-4 col-form-label text-md-right">Province </label>

                                <div class="col-md-6">
                                    <input id="province" type="text"
                                           class="form-control{{ $errors->has('province') ? ' is-invalid' : '' }}"
                                           name="province" value="{{ old('province') }}"  >

                                    @if ($errors->has('province'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('province') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="zip" class="col-md-4 col-form-label text-md-right">Zip </label>

                                <div class="col-md-6">
                                    <input id="zip" type="text"
                                           class="form-control{{ $errors->has('zip') ? ' is-invalid' : '' }}"
                                           name="zip" value="{{ old('zip') }}"  >

                                    @if ($errors->has('zip'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('zip') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="country" class="col-md-4 col-form-label text-md-right">Ölkə </label>

                                <div class="col-md-6">
                                    <input id="country" type="text"
                                           class="form-control{{ $errors->has('country') ? ' is-invalid' : '' }}"
                                           name="country" value="{{ old('country') }}"  >

                                    @if ($errors->has('country'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('country') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="secondary_phone_aim" class="col-md-4 col-form-label text-md-right">address_for</label>

                                <div class="col-md-6">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="" name="address_for"  value="work" >Work<br>
                                        <input type="radio" class="" name="address_for" value="home">Home<br>
                                        <input type="radio" class="" name="address_for" value="other">Other<br>
                                    </div>

                                    <div class="custom-control custom-radio">
                                        {{-- <label class="custom-control-label" for="" >Serious</label> --}}
                                    </div>

                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="secondary_phone_aim" class="col-md-4 col-form-label text-md-right">Available as a reaviewer</label>

                                <div class="col-md-6">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="" name="reviewer"  value="1">Yes<br>
                                        <input type="radio" class="" name="reviewer" value="2" checked>No<br>
                                    </div>

                                    <div class="custom-control custom-radio">
                                        {{-- <label class="custom-control-label" for="" >Serious</label> --}}
                                    </div>

                                </div>
                            </div>




                            <div class="form-group row">
                                <label for="password"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                           class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                           name="password" >

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                           name="password_confirmation" >
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
