@extends('layouts.app')

@section('content')


<div class="container"> 
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card"  style=" height:500px;">
                  <div class="card-header" style="background-color:   #ccccb3">Logged as admin!


                </div>
                <div class="card-body" style=" height:200px;background-color:#ebebe0;">
        
                    
                        <div class="pull-right">
                <a href="{{route('course')}}" class="btn btn-primary">Back</a>
            </div>
                      
                      <br>

                      <div class="col-lg-offset-4 col-lg-4">
                      <center> <h1>ADD a new Course!</h1></center>
                      <form action="{{route('course.store')}}" method="post">
                        @csrf 

                        <p>Course Code:
                        <input type="text" name="Course_Code">
                        <br>
                        </p>


                        <p>Course Title: 
                        <input type="text" name="Course_Title">
                        <br></p>

                        <p>Color: 
                        <input type="text" name="Color">
                        <br></p>



                        <input type="submit" value="Add  Course"class="btn btn-primary">
                          








                      </form>
                  </div>    

            </div>
        </div>
    </div>
</div>
</div>











@endsection
