@extends('layout.admin_layout')

@section('mainBody')
    
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Edit Data</h1>

        <div class="container mt-4">

            {{-- @if (session('msg'))
            
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>{{session('msg')}}</strong>
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <!--<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">X</button>-->
                </div>



            @endif --}}
            
            <form action="{{route('update_service',$edit_data->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Font Awesome Icon Class Name</span>
                    <input type="text" name = "icon" class="form-control" value="{{$edit_data->icon}}" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                  </div>
                  <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Title</span>
                    <input type="text" name="title" class="form-control" value="{{$edit_data->title}}" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                  </div>
                  <div class="form-floating">
                    <label for="floatingTextarea2"><h4>Description</h4></label>
                    <textarea class="form-control" name="description" value="{{$edit_data->description}}"  id="floatingTextarea2" style="height: 100px"></textarea>
                    
                  </div>
                  <br><br>

                  <button type="submit" class="btn btn-primary">Update</button>
            </form>
        
        </div>
                        
    </div>
</main>

@endsection