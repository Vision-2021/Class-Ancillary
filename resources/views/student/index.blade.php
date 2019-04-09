<!DOCTYPE HTML>
<html>

<head>
  <title>Class Ancillary</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
   <link rel="stylesheet" type="text/css" href="{{asset('http://fonts.googleapis.com/css?family=Tangerine&amp;v1')}}" />
  <link rel="stylesheet" type="text/css" href="{{asset('http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz')}}" />
  <link rel="stylesheet" type="text/css" href="{{asset('style/style.css')}}" />
  <style>
    
            button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin-left: 1000px;
  margin-bottom: px;
  border: none;
  cursor: pointer;
  width: 100%;
  right: 10px;
  top: 18px;
}

button:hover {
  opacity: 0.8;
}
.dot{

height: 10px;
width: 10px;
background-color: #ff0000;
border-radius: 50%;
display: inline-block;

}




  </style>
</head>

<body>



  <div id="main">
    <div id="header">
      <div id="logo">
        <h1>Class Ancillary </h1>
        <div class="slogan" style="color:red;">Don't hate, educate!</div>




        <button onclick="myfun1()" style="width:auto; background-color: red;">Logout</button>


      </div>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="current" in the li tag for the selected page - to highlight which page you're on -->
          <li class="current"><a href="{{url('main')}}">Home</a></li>
          <li><a href="{{url('examples')}}">Routine</a></li>
          <li><a href="{{url('page')}}">Files</a></li>
          <li><a href="{{url('another_page')}}">Question Bank</a></li>
          <li><a href="{{url('contact')}}">Contact</a></li>
        </ul>
      </div>
    </div>
    <div id="site_content">
      <div id="sidebar_container">
        <img class="paperclip" src="style/paperclip.png" alt="paperclip" />
        <div class="sidebar">
        <!-- insert your sidebar items here -->
        <h3>Latest News</h3>
        <h4>What's the News?</h4>
        <h5>26th January 2019</h5>
        <p>Exam is knocking at the door.So keep yourself secured from scrolling facebook and keep studying!<br /><a href="https://www.tutorialspoint.com/index.htm" target="_blank">read more</a></p>
        </div>
        <img class="paperclip" src="style/paperclip.png" alt="paperclip" />
        <div class="sidebar">
          <h3>Exam Medicine!</h3>
          <p>Click here to get rid of exam! </p>
        <form method="get" action="{{route('main')}}" id="subscribe">
            <p style="padding: 0 0 9px 0;"><input class="search" type="text" name="email_address" value="your email address" onclick="javascript: document.forms['subscribe'].email_address.value=''" /></p>
            <p><input class="subscribe" name="subscribe" type="submit" value="Subscribe" /></p>
          </form>
        </div>
        <img class="paperclip" src="style/paperclip.png" alt="paperclip" />
        <div class="sidebar">
          <h3>Latest News</h3>
          <h4>Tours are coming...</h4>
          <h5>20 February 2019</h5>
          <p>We have just made a plan of having another dept. tour after finishing our monotonous exams to refresh out minds."Khela Hoppe"<br /><a href="https://www.facebook.com/groups/312429152601653/?ref=bookmarks" target="_blank">read more</a></p>
        </div>
      </div>
      <div id="content">
        <!-- insert the page content here -->
        <h1>Welcome to the Class Ancillary Book of <a href="www.sec.ac.bd">SEC</a></h1>
        <p>A website that helps you to get upadated with the class so that you wouldn't miss any of it.</p>
		<p>This provides you with the class lectures,exam schedules,short questions,questions etc.</p>
		<p>It will make a notification whether the class would happen or not.And the confirmation would come through the CR or the Course Teacher.</p>
        <h2>Contains:</h2>
        
       <!--  <ul>
          <li>Scheduled Routine</li>
          <li>Tricky Questions</li>
          <li>Important Files</li>
          <li>Sudden Updated Class</li>
          <li>Term Test Questons</li>
          
        </ul> -->
        @foreach($subjects as $routine)
          
          <ul>
            
            <li>{{$routine['Course_Code']}}</td>
            <p>{{$routine['Course_Title']}}</p> 
   
          </ul>

          @endforeach


                <table class ="table table-bordered" style="width:600px;  height:100px;">

                   <thead>
            <tr>
        <th>Routine</th>
        <th>class</th>
        <th>Status</th>
            </tr>
            </thead>
            <tbody>
          @foreach($dailymodels as $routine)
          
          <tr>
            
            <td>{{$routine['Routine']}}</td>
            <td>{{$routine['class']}}</td>

            @if($routine->Status==false)
            <td><span class="dot"></span></td>
            
            @else
            <td><span class="dot" style="background-color: #00cc00"></span></td>
            @endif
            


          </tr>

          @endforeach

           </tbody>




        </table>








      </div>
    </div>
    <div id="footer">
      <p>Copyright &copy; sylhet_engineering_college</p>
    </div>
  </div>





   <script>
    
    function myfun1(){
        location.href="{{ route('user.logout') }}";
    }
</script>


</body>
</html>
