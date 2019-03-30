@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb" style="margin-top: 20px;">
            <div class="pull-left">
                <h2>Edit Routine</h2>
            </div>
            <div class="pull-right">
                <a href="{{route('admin.dashboard')}}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>
    <br>

    @if(count($errors)> 0)
    <div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach

    </ul>
    @endif

    <form action="{{route('routine.update',$id)}}" method="post" >



        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <input type="hidden" name="_method" value="PUT">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group{{$errors->has('name')?' has-error':''}}">
                    <strong>Day:</strong>
                    <input type="text" name="Routine" value="{{ $routinemodel->Routine }}" class="form-control" placeholder="Enter Day here!">
                    <span class="text-danger">{{$errors->first('name')}}</span>
                </div>
            </div>


        <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group{{$errors->has('name')?' has-error':''}}">
                    <strong>Class1:</strong>
                    <input type="text" name="Class1" value="{{ $routinemodel->Class1 }}" class="form-control" placeholder="Enter the class here!">
                    <span class="text-danger">{{$errors->first('name')}}</span>
                </div>
            </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group{{$errors->has('name')?' has-error':''}}">
                    <strong>Class2:</strong>
                    <input type="text" name="Class2" value="{{ $routinemodel->Class2 }}" class="form-control" placeholder="Enter the class here!">
                    <span class="text-danger">{{$errors->first('name')}}</span>
                </div>
            </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group{{$errors->has('name')?' has-error':''}}">
                    <strong>Class3:</strong>
                    <input type="text" name="Class3" value="{{ $routinemodel->Class3 }}" class="form-control" placeholder="Enter the class here!">
                    <span class="text-danger">{{$errors->first('name')}}</span>
                </div>
            </div>


        <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group{{$errors->has('name')?' has-error':''}}">
                    <strong>Class4:</strong>
                    <input type="text" name="Class4" value="{{ $routinemodel->Class4}}" class="form-control" placeholder="Enter the class here!">
                    <span class="text-danger">{{$errors->first('name')}}</span>
                </div>
            </div>


        <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group{{$errors->has('name')?' has-error':''}}">
                    <strong>Class5:</strong>
                    <input type="text" name="Class5" value="{{ $routinemodel->Class5 }}" class="form-control" placeholder="Enter the class here!">
                    <span class="text-danger">{{$errors->first('name')}}</span>
                </div>
            </div>


        <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group{{$errors->has('name')?' has-error':''}}">
                    <strong>Class6:</strong>
                    <input type="text" name="Class6" value="{{ $routinemodel->Class6 }}" class="form-control" placeholder="Enter the class here!">
                    <span class="text-danger">{{$errors->first('name')}}</span>
                </div>
            </div>






           
            <div class="col-xs-12 col-sm-12 col-md-12">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </div>
    </form>
    </div>
    </div>
@endsection

