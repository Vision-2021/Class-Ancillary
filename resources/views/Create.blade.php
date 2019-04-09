@extends('layouts.app')

@section('content')

              <div class="container">  

    <div class="row">
        <div class="col-lg-12 margin-tb" style="margin-top: 20px;">
            <div class="pull-left">
                <h2>Add New Routine</h2>
            </div>
            <div class="pull-right">
                <a href="{{route('admin.dashboard')}}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>
    <form action="{{route('routine.store')}}" method="post">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="row">
           

            <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group{{$errors->has('name')?' has-error':''}}">
                    <p style="color: white"><strong>Day:</strong></p>
                    <input type="text" name="Routine" class="form-control" placeholder="Enter the day here!">
                    <span class="text-danger">{{$errors->first('name')}}</span>
                </div>
            </div>


             <div class="col-xs-12 col-sm-12 col-md-12">
             <div class="form-group{{$errors->has('name')?' has-error':''}}">
                    <p style="color: white"><strong>Class1:</strong></p>
                    <input type="text" name="Class1" class="form-control" placeholder="Enter the class here!">
                    <span class="text-danger">{{$errors->first('name')}}</span>
                </div>
            </div>


                 <div class="col-xs-12 col-sm-12 col-md-12">
                 <div class="form-group{{$errors->has('name')?' has-error':''}}">
                    <p style="color: white"><strong>Class2:</strong></p>
                    <input type="text" name="Class2" class="form-control" placeholder="Enter the class here!">
                    <span class="text-danger">{{$errors->first('name')}}</span>
                </div>
            </div>


         <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group{{$errors->has('name')?' has-error':''}}">
                    <p style="color: white"><strong>Class3:</strong></p>
                    <input type="text" name="Class3" class="form-control" placeholder="Enter the class here!">
                    <span class="text-danger">{{$errors->first('name')}}</span>
                </div>
            </div>


            <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group{{$errors->has('name')?' has-error':''}}">
                    <p style="color: white"><strong>Class4:</strong></p>
                    <input type="text" name="Class4" class="form-control" placeholder="Enter the class here!">
                    <span class="text-danger">{{$errors->first('name')}}</span>
                </div>
            </div>


            <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group{{$errors->has('name')?' has-error':''}}">
                    <p style="color: white"><strong>Class5:</strong></p>
                    <input type="text" name="Class5" class="form-control" placeholder="Enter the class here!">
                    <span class="text-danger">{{$errors->first('name')}}</span>
                </div>
            </div>


            <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group{{$errors->has('name')?' has-error':''}}">
                    <p style="color: white"><strong>Class6:</strong></p>
                    <input type="text" name="Class6" class="form-control" placeholder="Enter the class here!">
                    <span class="text-danger">{{$errors->first('name')}}</span>
                </div>
            </div>



            <div class="col-xs-12 col-sm-12 col-md-12">
                <button type="submit" class="btn btn-primary">Add New Routine</button>
            </div>
        </div>
    </form>
</div>



@endsection
