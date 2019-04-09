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




  </style>
</head>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <h1>Class Ancillary</h1>
        <div class="slogan" style="color:red;">Live, learn, grow! </div>
        <button onclick="myfun1()" style="width:auto; background-color: red;">Logout</button>
      </div>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="current" in the li tag for the selected page - to highlight which page you're on -->
          <li ><a href="{{url('main')}}">Home</a></li>
          <li ><a href="{{url('examples')}}">Routine</a></li>
          <li class="current"><a href="{{url('page')}}">Files</a></li>
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
        <form method="get" action="{{route('page')}}" id="subscribe">
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
        
        <h2>Files:</h2>
        
        <table class ="table table-bordered" style="width:600px;  height:100px;">
         <tr>
            <th>Name</th>
            <th>Size</th>
            <th>Date</th>
            <th>Action</th>

          </tr>
          
          @forelse($files as $file)
          
          <tr>

            
            <td>{{$file->file}}</td>
            <td>{{$file->size}}</td>
            <td>{{$file->created_at}}</td>
              <td > <a href="{{route('file.download',$file->file)}}" class="btn btn-primary">Download</a> 
              </td> 

          </tr>
          @empty
          <tr>
            
            <td colspan="2"> No files found.</td>


          </tr>


          @endforelse
      

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
