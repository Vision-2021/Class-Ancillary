@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb" style="margin-top: 20px;">
            <div class="pull-left">
                <h2>Edit Routine</h2>
            </div>
            <div class="pull-right">
                <a href="{{route('daily')}}" class="btn btn-primary">Back</a>
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

    <form action="{{route('daily.update',$id)}}" method="post" >



        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <input type="hidden" name="_method" value="PUT">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group{{$errors->has('name')?' has-error':''}}">
                    <strong style="color: white;">Subject:</strong>
                    <input type="text" name="Routine" value="{{ $dailymodel->Routine}}" class="form-control" placeholder="Enter class here!!">
                    <span class="text-danger">{{$errors->first('name')}}</span>
                </div>
            </div>


        <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group{{$errors->has('name')?' has-error':''}}">
                    <strong style="color: white;">class:</strong>
                    <input type="text" name="class" value="{{ $dailymodel->class }}" class="form-control" placeholder="Enter the class here!">
                    <span class="text-danger">{{$errors->first('name')}}</span>
                </div>
            </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group{{$errors->has('name')?' has-error':''}}">
                    <strong style="color: white;">Status:</strong>
                   <p style="color: white">Yes<input type="radio" name="Status" value="1"></p>
                    <p style="color: white">No<input type="radio" name="Status" value="0"></p>         
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

