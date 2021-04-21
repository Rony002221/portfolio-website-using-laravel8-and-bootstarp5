@extends('layout.admin_layout')

@section('mainBody')
    
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Service List</h1>

        <div class="container mt-4">

            <table class="table table-dark table-striped">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Icon</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  
                  @foreach ($list as $lists)
                      
                  
                    <tr>
                    <th scope="row">{{$lists->id}}</th>
                    <td>{{$lists->icon}}</td>
                    <td>{{$lists->title}}</td>
                    <td>{{$lists->description}}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                            <button type="button" class="btn btn-success">Edit</button>
                            <button type="button" class="btn btn-danger">Delete</button>
                           
                            
                          </div>
                    </td>
                  </tr>
                  
                  @endforeach
                </tbody>
              </table>


        </div>
                        
    </div>
</main>

@endsection