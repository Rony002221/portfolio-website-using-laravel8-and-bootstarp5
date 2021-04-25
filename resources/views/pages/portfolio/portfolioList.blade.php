@extends('layout.admin_layout')

@section('mainBody')
    
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Service List</h1>

        {{-- @if (session('msg'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong>{{session('msg')}}</strong>
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <!--<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">X</button>-->
          </div>
        @endif --}}
        <div class="container mt-4">
          

            <table class="table table-dark table-striped">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Project Name</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Image</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>A</td>
                    <td>A</td>
                    <td>A</td>
                    <td>A</td>
                    <td>A</td>
                    <td>A</td>
                  </tr>
                  
                </tbody>
              </table>


        </div>
                        
    </div>
</main>

@endsection