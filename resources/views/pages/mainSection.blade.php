@extends('layout.admin_layout')

@section('mainBody')
    
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Edit Main Section</h1>

        <div class="container">
            <div class="row">
                <div class="col">
                    <img src="{{asset('assets/img/header-bg.jpg')}}" class="img-thumbnail mb-3" alt="...">

                    <label for="formFile" class="form-label"><h4>Upload Image</h4></label>
                    <input class="form-control" name = "bg_img" type="file" id="formFile">
                </div>
                <div class="col">
                    <label for="floatingInputValue"><h4> Title </h4></label>
                    <input type="text" name = "title" class="form-control mb-4" placeholder="Type The Title" value="">
                    
                    <label for="floatingInputValue"><h4>Sub-Title</h4></label>
                    <input type="text" name = "sub_title" class="form-control mb-3" placeholder="Type The Sub-Title" value="">
                    
                    <label for="formFile" class="form-label"><h4>Upload Resume</h4></label>
                    <input class="form-control" name = "resume" type="file" id="formFile">
                </div>

            </div>

        </div>
                        
    </div>
</main>

@endsection