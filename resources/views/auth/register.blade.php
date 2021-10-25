<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8">   
        <title> Registration Form </title>
        <link href="{{ asset('css/register.css') }}" rel="stylesheet">
        <meta name="viewport" content="width=device-width,  initial-scale=1.0">
    </head> 
<body>
<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
            <div class="title">Registration</div>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                    <div class="user-details">
                    <div class="input-box">
                    <span for="idnum" class="details">{{ __('ID Number') }}</span>
                                <input id="idnum" type="text" class="form-control @error('idnum') is-invalid @enderror" name="idnum" value="{{ old('idnum') }}" required autocomplete="idnum" autofocus>
                                @error('idnum')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="input-box">
                            <span for="fname" class="details">{{ __('First Name') }}</span>
                                <input id="fname" type="text" class="form-control @error('fname') is-invalid @enderror" name="fname" required autocomplete="fname" autofocus>
                                @error('fname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="input-box">
                            <span for="mname" class="details">{{ __('Middle Initial') }}</span>
                                <input id="mname" type="text" class="form-control @error('mname') is-invalid @enderror" name="mname" required autocomplete="mname" autofocus>
                                @error('mname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        <div class="input-box">
                        <span for="lname" class="details">{{ __('Last Name') }}</span>
                                <input id="lname" type="text" class="form-control @error('lname') is-invalid @enderror" name="lname" required autocomplete="lname" autofocus>
                                @error('lname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="input-box">
                            <span for="course" class="details">{{ __('Course') }}</span>
                         <select name="course" id="course">
                         <optgroup label="Bachelour of Science">
                         <option value="IT">Information Technology(IT)</option>
                         <option value="ICT">Information and Communication Technologies(ICT)</option>
                         <option value="CS">Computer Science(CS)</option>
                         <option value="IE">Industrial Engineering(IE)</option>
                         <option value="CE">Computer Engineering(CE)</option>
                         </optgroup>
                         <optgroup label="Engineering">
                         <option value="comp">Computer</option>
                         <option value="gols">Gols</option>
                         <option value="ind">Industrial</option>
                         </optgroup>
                       </select>
                        </div>
                        <div class="input-box">
                        <span for="year" class="details">{{ __('Year') }}</span>
                         <select name="year" id="year">
                         <option value="1">1</option>
                         <option value="2">2</option>
                         <option value="3">3</option>
                         <option value="4">4</option>
                    </select>                     
                        </div>
                        <div class="input-box">
                            <span for="email" class="details">{{ __('E-Mail Address') }}</span>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        <div class="input-box">
                        <span for="password" class="details">{{ __('Password') }}</span>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        <div class="input-box">
                        <span for="password-confirm" class="details">{{ __('Confirm Password') }}</span>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                            </div>
                            <div class="button">
                            <input type="submit" value="Register">
                        </div>
                    </form>
                </div>
    </body>
</html>
