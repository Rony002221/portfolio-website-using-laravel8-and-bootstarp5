@extends('layout.admin_layout')

@section('mainBody')
    
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Edit Main Section</h1>
        @if (session('msg'))
            
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>{{session('msg')}}</strong>
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <!--<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">X</button>-->
            </div>



        @endif
        <form action="{{route('update.mainSection')}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="container">
                <div class="row">
                    <div class="col">
                        <img src="{{url($main->bg_img)}}" class="img-thumbnail mb-3" alt="...">

                        <label for="formFile" class="form-label"><h4>Upload Image</h4></label>
                        <input class="form-control" name = "bg_img" type="file" id="formFile">
                    </div>
                    <div class="col">
                        <label for="floatingInputValue"><h4> Title </h4></label>
                        @error('title')
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{$message}}
                            </div>
                        @enderror
                        <input type="text" name = "title" value = "{{$main->title}}" class="form-control mb-4" placeholder="Type The Title" value="">
                        
                        <label for="floatingInputValue"><h4>Sub-Title</h4></label>
                        @error('sub_title')
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{$message}}
                            </div>
                         @enderror
                        <input type="text" name = "sub_title" value = "{{$main->sub_title}}" class="form-control mb-3" placeholder="Type The Sub-Title" value="">
                        
                        <label for="formFile" class="form-label"><h4>Upload Resume</h4></label>
                        <input class="form-control" name = "resume" type="file" id="formFile">
                    </div>

                </div>
                <button type="submit" class="btn btn-success mt-3">Submit</button>
            </div>
        </form>               
    </div>
</main>

@endsection