@extends('layout.admin_layout')

@section('mainBody')
    
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Edit Portfolio Section</h1>
        <div class="container mt-4">

            @if (session('msg'))
            
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>{{session('msg')}}</strong>
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <!--<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">X</button>-->
                </div>

            @endif
            
            <form action="{{route('insert_portfolio')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="container">
                  <div class="row">
                      <div class="col">
                          <img src="" name = "" class="img-thumbnail mb-3" alt="...">

                          <label for="formFile" class="form-label"><h4>Upload Image</h4></label>
                          <input class="form-control" name = "photo" type="file" id="formFile">
                      </div>
                      <div class="col">
                          <label for="floatingInputValue"><h4> Project Name :  </h4></label>
                          {{-- @error('title')
                              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                  {{$message}}
                              </div>
                          @enderror --}}
                          <input type="text" name = "p_name" class="form-control mb-4" placeholder="Type Your Project Name here ..." value="">
                        
                          <label for="floatingInputValue"><h4>Title</h4></label>
                          {{-- @error('sub_title')
                              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                  {{$message}}
                              </div>
                           @enderror --}}
                          <input type="text" name = "p_title" value = "" class="form-control mb-3" placeholder="Type The Title ..." value="">
                        
                          <div class="form-floating">
                            <label for="floatingTextarea2"><h4>Description</h4></label>
                            <textarea class="form-control" name="p_description" placeholder="write description here....." id="floatingTextarea2" style="height: 100px"></textarea>
                      
                          </div>
                          <br><br>
                          
                      </div>

                  </div>
                  <button type="submit" class="btn btn-success mt-3">Submit</button>
              </div>
            </form>
        
        </div>   
        

    </div>
</main>

@endsection