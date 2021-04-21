@extends('layout.admin_layout')

@section('mainBody')
    
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Edit Service Section</h1>
        <div class="container mt-4">

            @if (session('msg'))
            
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>{{session('msg')}}</strong>
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <!--<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">X</button>-->
                </div>



            @endif
            
            <form action="{{route('add_service')}}" method="POST">
                @csrf

                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Font Awesome Icon Class Name</span>
                    <input type="text" name = "icon" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                  </div>
                  <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Title</span>
                    <input type="text" name="title" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                  </div>
                  <div class="form-floating">
                    <label for="floatingTextarea2"><h4>Description</h4></label>
                    <textarea class="form-control" name="description" placeholder="write description here....." id="floatingTextarea2" style="height: 100px"></textarea>
                    
                  </div>
                  <br><br>

                  <button type="submit" class="btn btn-primary">Change</button>
            </form>
        
        </div>   
        

    </div>
</main>

@endsection