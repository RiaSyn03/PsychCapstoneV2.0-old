<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
</head>

<body>
<div class="animation-area">
            <div class="bubbles">
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
     </div>
    
    <div class="cont">
        <div class="form sign-in">
            <br><br><br><br><br><br><br>
            <h2>Welcome back,</h2>
            <form method="POST" action="{{ route('login') }}">
                @csrf
            <label for="email">
                <span>Email</span>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                 @enderror
            </label>
            <label for="password">
                <span>Password</span>
                <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                
            </label>
            <button type="submit" class="submit">Sign In</button>
            <button type="button" class="fb-btn">Forgot password ?</button>
            </form> 
        </div>

        <div class="sub-cont">
            <div class="img">
                <div class="img__text m--up">
                    <h2>New here?</h2>
                    <p>Sign up and discover great amount of new opportunities!</p>
                </div>
                <div class="img__text m--in">
                    <h2>One of us?</h2>
                    <p>If you already has an account, just sign in. We've missed you!</p>
                </div>
                <div class="img__btn">
                    <span class="m--up">Sign Up</span>
                    <span class="m--in">Sign In</span>
                </div>
            </div>
            <div class="form sign-up">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                <label for="idnum">
                    <span>ID Number</span>
                    <input id="idnum" type="text" class="form-control @error('idnum') is-invalid @enderror" name="idnum" value="{{ old('idnum') }}" required autocomplete="idnum" autofocus/>
                    @error('idnum')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </label>
                <label for="fname">
                    <span>First Name</span>
                    <input id="fname" type="text" class="form-control @error('fname') is-invalid @enderror" name="fname" required autocomplete="fname" autofocus/>
                    @error('fname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                     @enderror
                </label>
                <label for="mname">
                    <span>Middle Initial</span>
                    <input id="mname" type="text" class="form-control @error('fname') is-invalid @enderror" name="mname" required autocomplete="mname" autofocus/>
                    @error('fname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                     @enderror
                </label>
                <label for="lname">
                    <span>Last Name</span>
                    <input id="lname" type="text" class="form-control @error('lname') is-invalid @enderror" name="lname" required autocomplete="lname" autofocus>
                    @error('lname')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                </span>
                    @enderror
                </label>
                <label for="email">
                    <span>Email Address</span>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                        @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                </label>
                <label for="password">
                <span>Password</span>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </label>
                <label for="password-confirm">
                <span>Confirm Password</span>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </label>
                <br> <br> <br>
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
                <span for="year">Year</span>
                         <select name="year" id="year">
                         <option value="1">1</option>
                         <option value="2">2</option>
                         <option value="3">3</option>
                         <option value="4">4</option>
                    </select>                
                <button type="submit" class="submit">Sign Up</button>
</form>
            </div>
        </div>
    </div>


    <script>
        document.querySelector('.img__btn').addEventListener('click', function() {
            document.querySelector('.cont').classList.toggle('s--signup');
        });
    </script>
</body>

</html>