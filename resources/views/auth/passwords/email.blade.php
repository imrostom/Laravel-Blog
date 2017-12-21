@include('frontend/inc/header')
<div id="content">
    <div id="posts">
        <style type="text/css">
            .login_form{width:100%;}
            .login_form form{width:300px;margin:0px auto}
            .login_form form input{padding: 5px;width: 100%;margin-bottom: 10px;}
            .login_form form button{padding: 5px;margin-bottom: 10px;}
        </style>
        <div class="login_form">
            <h1>Reset Password Here</h1>
            <br/>
            @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Send Password Reset Link
                                </button>
                            </div>
                        </div>
                    </form>
        </div>
    </div>


</div>

@include('frontend/inc/footer')      