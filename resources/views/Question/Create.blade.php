@extends('layouts.app')

@section('content')

<div class="container"> 
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header" style="background-color:   #ccccb3">Logged as admin!


                </div>
        
                <div class="card-body" style=" height:200px;background-color:#ebebe0;">
                    <div class="row">
                      
                      <br>

                      <div class="col-lg-offset-4 col-lg-4">
                      <center> <h1>Upload Question</h1></center>
                      <form action="{{route('question.store')}}" method="post" enctype="multipart/form-data">
                        @csrf 
                        <input type="file" name="file">
                        <br>

                        <input type="submit" value="Upload Question"class="btn btn-primary">
                          

                      </form>
          </div>

                        





</div>     

            </div>
        </div>
    </div>
</div>
</div>
</div>



@endsection
