@extends('dashboard.basedashbord') @section('title', 'addproperties') 
 @section('content')
<!-- Main Content -->
<!-- boostrap table for properties list -->
<!-- Main Content -->
<div class="content">
  <div id="loading" class="text-center d-none mt-3">
    <img src="https://i.sstatic.net/kOnzy.gif" alt="Loading..." style="width: 50px; height: 50px;">
  </div>
  
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4>Properties List</h4>
        </div>
        <div class="card-body">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Subtitle</th>               
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($properties as $property)
              <tr>
                <th scope="row">{{ $property->id }}</th>
                <td>{{ $property->title }}</td>
                <td>{{ $property->subtitle }}</td>               
                <td>
                  <a href="#" class="btn btn-primary">Edit</a>  
                  <a href="#" class="btn btn-danger">Delete</a>
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
</div>
@endsection