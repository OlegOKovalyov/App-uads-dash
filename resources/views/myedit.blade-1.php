@extends('theme.default')
@section('content')

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">User Edit</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>

<div class="card-body">
    <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
        @csrf

        <div class="form-group row">
            <label for="login" class="col-md-4 col-form-label text-md-right">{{ __('Login') }}</label>

            <div class="col-md-6">
                <input id="login" type="text" class="form-control{{ $errors->has('login') ? ' is-invalid' : '' }}" login="login" value="{{$uadsusers->login}}" required autofocus>

                @if ($errors->has('login'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('login') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

            <div class="col-md-6">
                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{$uadsusers->name}}" required autofocus>

                @if ($errors->has('name'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{$uadsusers->email}}" required>

                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group row">
            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

            <div class="col-md-6">
                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" value="{{$uadsusers->password}}" required>

                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Role') }}</label>

            <div class="col-md-6">
                <input id="role" type="text" class="form-control{{ $errors->has('role') ? ' is-invalid' : '' }}" name="role" value="{{$uadsusers->role}}" required autofocus>

                @if ($errors->has('name'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('role') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <!-- <div class="form-group row">
            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

            <div class="col-md-6">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
            </div>
        </div> -->

        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Update') }}
                </button>
            </div>
        </div>
    </form>
</div>






    <div class="container">
      <h2>Edit A Form</h2><br  />
        <form method="post" action="{{action('UadsuserController@update', $id)}}">
        @csrf
        <input name="_method" type="hidden" value="PATCH">
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="name">Name:</label>
            <input type="text" class="form-control" name="name" value="{{$uadsusers->name}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="email">Email</label>
              <input type="text" class="form-control" name="email" value="{{$uadsusers->email}}">
            </div>
          </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="number">Phone Number:</label>
              <input type="text" class="form-control" name="number" value="{{$uadsusers->number}}">
            </div>
          </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4" style="margin-left:38px">
                <lable>Passport Office</lable>
                <select name="office">
                  <option value="Mumbai"  @if($uadsusers->office=="Mumbai") selected @endif>Mumbai</option>
                  <option value="Chennai"  @if($uadsusers->office=="Chennai") selected @endif>Chennai</option>
                  <option value="Delhi" @if($uadsusers->office=="Delhi") selected @endif>Delhi</option>  
                  <option value="Bangalore" @if($uadsusers->office=="Bangalore") selected @endif>Bangalore</option>
                </select>
            </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4" style="margin-top:60px">
            <button type="submit" class="btn btn-success" style="margin-left:38px">Update</button>
          </div>
        </div>
      </form>
    </div>


@endsection