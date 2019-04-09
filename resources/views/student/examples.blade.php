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
  <link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css')}}">

    
  
  <style>
    table,th,td {


    border:2px solid green;
    border-collapse:collapse;
    padding:8px;
    text-align:center;
    font-size: 20px;
    font-family:Garamond;


    }

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #4CAF50;
  color: white;}
  
    
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
        <div class="slogan" style="color:red;">Anchored in Excellence!</div>
        <button onclick="myfun1()" style="width:auto; background-color: red;">Logout</button>
      </div>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="current" in the li tag for the selected page - to highlight which page you're on -->
          <li ><a href="{{url('main')}}">Home</a></li>
          <li class="current"><a href="{{url('examples')}}">Routine</a></li>
          <li><a href="{{url('page')}}">Files</a></li>
          <li><a href="{{url('another_page')}}">Question Bank</a></li>
          <li><a href="{{url('contact')}}">Contact</a></li>
        </ul>
      </div>
    </div>
  <div id="site_content">
      
        
       
        
      
    
      <div id="content">
        <!-- insert the page content here -->
        <h1>Routine</h1>
        <p>This page contains the routine of respected courses.</p>
       
       
        <h2>Class Schedule:</h2>
        
        <table class ="table table-bordered" style="width:900px;  height:500px;">
          @foreach($routinemodel as $routine)
          
          <tr>
            
            <td>{{$routine['Routine']}}</td>
            <td>{{$routine['Class1']}}</td>
            <td>{{$routine['Class2']}}</td>
            <td>{{$routine['Class3']}}</td>
            <td>{{$routine['Class4']}}</td>
            <td>{{$routine['Class5']}}</td>
            <td>{{$routine['Class6']}}</td>


          </tr>

          @endforeach






        </table>

        
      </div>
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
