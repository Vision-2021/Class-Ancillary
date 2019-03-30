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
                <a href="{{route('daily')}}" class="btn btn-primary">Back</a>
            </div>
                      
                      <br>

                      <div class="col-lg-offset-4 col-lg-4">
                      <center> <h1>Upload a new class schedule!</h1></center>
                      <form action="{{route('daily.store')}}" method="post">
                        @csrf 

                        <p>Subject:
                        <input type="text" name="Routine">
                        <br>
                    </p>
                        <p>Schedule: 
                        <input type="text" name="Class">
                        <br></p>

                        <p>Status:
                        <input type="checkbox" name="Status" value="1">
                        <br></p>



                        <input type="submit" value="Add to Routine"class="btn btn-primary">
                          








                      </form>
                  </div>    

            </div>
        </div>
    </div>
</div>
</div>











@endsection
