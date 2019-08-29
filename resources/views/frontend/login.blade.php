<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
{!! HTML::style('bootstrap/css/bootstrap.min.css') !!}
<!-- Theme style -->
{!! HTML::style('dist/css/AdminLTE.min.css') !!}
<!-- Styles -->
    <style>
        html, body {
            min-height: 100%;
            background: #ecf0f5;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            margin: 0;
        }
        .margin-top{
            margin-top: 100px;
        }
        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }


        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }
        section.content {
            border: 1px solid #ddd;
            background: #fff;
            border-radius: 5px;
        }
    </style>
</head>
<body>
<div class="top-right links">

    <a href="{{ url('/') }}">Home</a>
    @if(\Auth::guard('admin')->check())
        <a href="{{route('admin.dashboard')}}">Dashboard</a>
    @else
        <a href="{{route('admin.login')}}">Login</a>
    @endif

</div>
<div class="wrapper margin-top">
    <div>
        <div class="container">
            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <!-- form start -->
                    <form class="form-horizontal" method="POST" action="{{ route('admin.postlogin') }}">
                        @csrf
                        <div class="box-body">
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Email</label>

                                <div class="col-sm-10">
                                    <input name="email" type="email" class="form-control @error('email') is-invalid @enderror" id="inputEmail3" placeholder="Email"  value="{{ old('email') }}">
                                    @error('email')
                                    <span class="text-left text-danger invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label">Password</label>

                                <div class="col-sm-10">
                                    <input name="password" type="password" class="form-control" id="inputPassword3" placeholder="Password">
                                    @error('password')
                                    <span class="text-left text-danger invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember" value="1"> Remember me
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
{{--                            <button type="submit" class="btn btn-default">Cancel</button>--}}
                            <a  class="btn btn-danger" href="{{ url('/') }}">Cancel</a>
                            <button type="submit" class="btn btn-info pull-right">Sign in</button>
                        </div>
                        <!-- /.box-footer -->
                    </form>
                </div>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.box-header -->
    </div>
</div>
</body>
</html>
