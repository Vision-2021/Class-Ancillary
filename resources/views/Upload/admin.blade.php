
@extends('layouts.app')

@section('content')

<div class="container">
    
    <div id="menubar">
        <ul id="menu">
           <table>         <tr>  
           <td> <a href="{{route('daily')}}" class="btn btn-success">Daily Routine
                </a> </td>   


            <td > <a href="{{route('admin.dashboard')}}" class="btn btn-success">Semester Routine
                </a> </td>

               <td class="current"> <a href="{{route('file')}}" class="btn btn-success">Upload Files</a></td>
           
               <td> <a href="{{route('question')}}" class="btn btn-success">Upload Questions</a></td>
               <td> <a href="{{route('course')}}" class="btn btn-success">Course</a></td>
           </tr>
        </table>
              </ul>
              
 

          </div>




</div>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="background-color: #d6d6c2">Logged as admin!


                </div>
                

                <div class="card-body" style="background-color: #d6d6c2">
                    <div class="row">
        <div class="col-lg-12 margin-tb" style="margin-top: 20px;">
            <div class="pull-left">
                <h2>Class Ancillary</h2>
            </div>
            <div class="pull-right">
                <a href="{{route('Upload.create')}}" class="btn btn-dark">Upload Files</a>
                <a href="{{route('file.truncate')}}" class="btn btn-dark"> Remove All</a>
            </div>
        </div>
    </div>
   <!--  @if($message=Session::get('success'))
        <div class="alert alert-success">
            <p>{{$message}}</p>
        </div>
    @endif -->
    
 <div class="table-responsive">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>id</th>
                <th>Name</th>
                <th>Size</th>
              
                <th width="280px">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($files as $file)

                <tr>
                    <td>{{$file->id}}</td>
                    <td>{{$file->file}}</td>
                    <td>{{$file->size}}</td>
                    <td>
                         <form action="{{route('file.destroy',['id'=>$file->id])}}" method="post" role="form" class="delete_form">
                            
                            
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-danger">Remove</button>
                        </form>


                        


                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>


    </div>


                    

                    
    
            </div>
        </div>
    </div>
</div>
<script>
$(document).ready(function()
{

    $('.delete_form').on('submit',function()
    {
        if(confirm("Sure to delete?"))
        {

            return true;
        }
        else
        {
            return false;
        }
    });
}); 

</script>

@endsection
