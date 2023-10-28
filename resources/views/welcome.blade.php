<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/iziToast.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <title>Comment System</title>
</head>
    <body>
        <section id="form">
            <div id="toggle-forms">
                <button class="waves-effect waves-light active" id="login">Login</button>
                <button class="waves-effect waves-light" id="register">Register</button>
            </div>
            <form action="{{route('login_submit')}}" method="post" class="col s12">
                @csrf
                <div class="row center-align">
                    <h4 class="white-text">login</h4>
                </div>
                <div class="row">
                    <div class="input-field">
                        <input id="email" type="email" class="validate" name="email">
                        <label for="email">Email</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field">
                        <input id="password" type="password" class="validate" name="password">
                        <label for="password">Password</label>
                    </div>
                </div>
                <div class="row center-align">
                    <button class="btn waves-effect waves-light">
                        Login
                    </button>
                </div>
                {{-- <p class="forgot">Forgot Password?</p> --}}
                <ul class="animate">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </form>
            <form  action="{{route('regiter_submit')}}" method="post" class="col s12">
                @csrf
                <div class="row center-align">
                    <h4 class="white-text">register</h4>
                </div>
                <div class="row">
                    <div class="input-field">
                        <input id="email" type="email" class="validate" name="email">
                        <label for="email">Email</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field">
                        <input id="password" type="password" class="validate" name="password">
                        <label for="password">Password</label>
                    </div>
                </div>
                <div class="row">
                        <div class="input-field">
                            <input id="password" type="password" class="validate" name="retype_password">
                            <label for="password">Re-Password</label>
                        </div>
                    </div>
                <div class="row center-align">
                    <button class="btn waves-effect waves-light">
                        Register
                    </button>
                </div>
                <ul class="animate">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </form>
        </section>
        <script src="{{asset('assets/js/main.js')}}"></script>
        <script src="{{asset('assets/js/iziToast.min.js')}}"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
        @if ($errors->any())
        @foreach ($errors->all() as $error)
        <script>
            iziToast.error({
            title: '',
            position: 'topRight',
            message: '{{ $error }}',
        });
        </script>
        @endforeach

        @endif

        @if (session()->get('error'))
        <script>
            iziToast.error({
            title: '',
            position: 'topRight',
            message: '{{ session()->get('error') }}',
        });
        </script>
        @endif

        @if (session()->get('succes'))
        <script>
            iziToast.success({
            title: '',
            position: 'topRight',
            message: '{{ session()->get('succes') }}',
        });
        </script>
        @endif
    </body>
</html>
