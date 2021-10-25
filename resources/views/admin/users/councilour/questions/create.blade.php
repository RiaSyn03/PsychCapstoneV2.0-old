<!DOCTYPE html>
        <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
            <head>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">

                <title>Laravel</title>

                <!-- Fonts -->
                <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

                <!-- Styles -->
                <style>
                    html, body {
                        background-color: #fff;
                        color: #636b6f;
                        font-family: 'Nunito', sans-serif;
                        font-weight: 200;
                        height: 100vh;
                        margin: 0;
                    }

                    .full-height {
                        height: 100vh;
                    }

                    .flex-center {
                        align-items: center;
                        display: flex;
                        justify-content: center;
                    }

                    .position-ref {
                        position: relative;
                    }

                    .top-right {
                        position: absolute;
                        right: 10px;
                        top: 18px;
                    }

                    .content {
                        text-align: center;
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

                    .m-b-md {
                        margin-bottom: 30px;
                    }
                </style>
            </head>
            
            <body>
            <div class="container">
            @include('admin.users.councilour.questions.message')
        </div>
                <div class="flex-center position-ref full-height">
                    <!-- @if (Route::has('login'))
                        <div class="top-right links">
                            @auth
                                <a href="{{ url('/home') }}">Home</a>
                            @else
                                <a href="{{ route('login') }}">Login</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}">Register</a>
                                @endif
                            @endauth
                        </div>
                    @endif -->

                    <div class="content">

                        <div class="title m-b-md">
                            Welcome to Psychcare!
                        </div>
                        <div class="links">
                            <a href="{{route('questions.create')}}">Add Question?</a>
                            <a href="{{ route('questions.index')}}">List of Questions</a>
                            <a> Exam Tab</a>
                            <a>Appointment</a>

                        </div>
                    </div>
                </div>

<br>
<H1>Create Question</H1>
<form method="POST" action="/questions">
@csrf
  	<div class="form-group">
	  <label for="category_type">Category Type</label>
		<br>
		<select name="category_type" id="category_type">
                         <optgroup label="Select Exam">
                         <option value="Psychological Exam">Psychological Exam</option>
                         <option value="Kind of Learners">Kind Of Learners</option>
                         <option value="Personality Exam">Computer Science(CS)</option>
                         <option value="Stress Exam">Industrial Engineering(IE)</option>
                         </optgroup>
                       </select>
	</div>
	<div class="form-group">
	  <label for="question_type">Question Type</label>
		<br>
		<select name="question_type" id="question_type">
                         <optgroup label="Question Type">
                         <option value="1">Agree-Slightly Agree-Slighly Disagree-Disagree</option>
                         <option value="2">Yes-Maybe-No</option>
                         <option value="3">Always-Sometimes-Rarely-Never</option>
                         </optgroup>
                       </select>
	</div>
	<div class="form-group">
                    <label for="question">Question</label>
                                <input id="question" type="text" name="question" placeholder="Add a Question">Question</input>
								
                           </div>
						</div>
							<input type="submit" value="Add Q"/>

	</form>
</body>
</html>
