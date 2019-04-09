<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
   <link rel="stylesheet" type="text/css" href="{{asset('http://fonts.googleapis.com/css?family=Tangerine&amp;v1')}}" />
  <link rel="stylesheet" type="text/css" href="{{asset('http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz')}}" />
  <link rel="stylesheet" type="text/css" href="{{asset('style/style.css')}}" />

        <title>Class Ancillary</title>

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
                position: center;
                
                
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

           

            .m-b-md {
                margin-bottom: 30px;
            }
            button{
                 background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
            }

button:hover {
  opacity: 0.8;
}

.dropbtn {
 background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #b3ffb3}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: #3e8e41;
}

        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            
            


            <div class="content">
                <div class="title m-b-md">
                    Class Ancillary
                </div>

                @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <button onclick="myfun()" style="width:auto;">Home</button>
                    @else
                    <div class="dropdown">
  <button class="dropbtn">Login</button>
  <div class="dropdown-content">
  <a href="{{ route('login') }}">Student</a>
  <a href="{{ route('admin.login') }}">Admin</a>
  </div>
</div>
                        <!-- <button onclick="myfun1()" style="width:auto;">Login</button> -->
                        

                        @if (Route::has('register'))

                                 <div class="dropdown">
  <button class="dropbtn">Register</button>
  <div class="dropdown-content">
  <a href="{{ route('register') }}">Register as Student</a>
  <a href="{{ route('admin.register') }}">Register as Admin</a>

  </div>
</div>
       
                            <!-- <button onclick="myfun2()" style="width:auto;">Register</button> -->
                           
                        @endif
                    @endauth
                </div>
            @endif

                
            </div>
        </div>




        <script>
    
    function myfun(){
        location.href="{{ route('main') }}";
    }
</script>


    <script>
    
    function myfun1(){
        location.href="{{ route('login') }}";
    }
</script>



    <script>
    
    function myfun2(){
        location.href="{{ route('register') }}";
    }
</script>
    </body>
</html>
