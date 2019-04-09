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
        <div class="slogan" style="color:red;" >Be educated, be empowered!</div>
        <button onclick="myfun1()" style="width:auto;background-color: red;">Logout</button>
      </div>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="current" in the li tag for the selected page - to highlight which page you're on -->
          <li ><a href="{{url('main')}}">Home</a></li>
          <li><a href="{{url('examples')}}">Routine</a></li>
          <li><a href="{{url('page')}}">Files</a></li>
          <li><a href="{{url('another_page')}}">Question Bank</a></li>
          <li class="current"><a href="{{url('contact')}}">Contact</a></li>
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
        <h5>1st November 2013</h5>
        <p>Put your latest news item here, or anything else you would like in the sidebar!<br /><a href="https://www.tutorialspoint.com/index.htm" target="_blank">read more</a></p>
        </div>
        <img class="paperclip" src="style/paperclip.png" alt="paperclip" />
        <div class="sidebar">
          <h3>Newsletter</h3>
          <p>If you would like to receive our newletter, please enter your email address and click 'Subscribe'.</p>
         <form method="get" action="{{route('contact')}}" id="subscribe">
            <p style="padding: 0 0 9px 0;"><input class="search" type="text" name="email_address" value="your email address" onclick="javascript: document.forms['subscribe'].email_address.value=''" /></p>
            <p><input class="subscribe" name="subscribe" type="submit" value="Subscribe" /></p>
          </form>
        </div>
        <img class="paperclip" src="style/paperclip.png" alt="paperclip" />
        <div class="sidebar">
          <h3>Latest Blog</h3>
          <h4>Website Goes Live</h4>
          <h5>1st November 2013</h5>
          <p>We have just launched our new website. Take a look around, we'd love to know what you think.....<br /><a href="https://www.facebook.com/groups/312429152601653/?ref=bookmarks" target="_blank">read more</a></p>
        </div>
      </div>
      <div id="content">
        <!-- insert the page content here -->
        <h1>Help?</h1>
        <p>Go through the process written below:</p>
        <form method="get" action="{{route('contact')}}" id="subscribe">
          <div class="form_settings">
            <p><span>Name</span><input class="contact" type="text" name="your_name" value="" /></p>
            <p><span>Email Address</span><input class="contact" type="text" name="your_email" value="" /></p>
            <p><span>Message</span><textarea class="contact textarea" rows="8" cols="50" name="your_enquiry"></textarea></p>
            <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="contact_submitted" value="submit" /></p>
          </div>
        </form>
        <p><br /><br />NOTE: A contact form such as this would require some way of emailing the input to an email address.</p>
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
