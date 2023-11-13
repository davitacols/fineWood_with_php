<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')
    <style>
      .center-content {
        text-align: center;
        padding: 40px 0;
      }

      .title {
        font-size: 40px;
      }

      .styled-input {
        border: 1px solid #000;
        border-radius: 5px;
        padding: 10px;
        width: 50%;
        margin-bottom: 20px;
      }
      .center {
        margin: 0 auto;
        width: 50%;
        text-align: center;
        margin-top: 30px;
        border: 3px solid skyblue;
      }
    </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- Sidebar -->
      @include('admin.sidebar')

      <!-- Header -->
      @include('admin.header')

      <!-- Main content -->
      <div class="main-panel">
        <div class="content-wrapper">
          <!-- Alert -->
          @if(Session::has('message'))
            <div class="alert alert-success">
              <button type="button" class="close" data-dismise="alert" aria-hidden="true">x</button>
              {{ Session::get('message') }}
            </div>
          @endif
          
          <div class="center-content">
            <h2 class="title">Add Category</h2>
            <form action="{{ url('/add_category') }}" method="POST">
              @csrf
              <input class="styled-input" type="text" name="category" placeholder="Write category name">
              <input type="submit" class="btn btn-primary" name="submit" value="Add Category">
            </form>
          </div>
          <table class="table table-striped table-hover">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Category Name</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($category as $data)
              <tr>
                <td>{{ $data->category_name }}</td>
                <td>
                  <a onclick="return confirm('Are You Sure About Deleting?')" class="btn btn-danger" href="{{url('delete_category', $data->id)}}">Delete</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <!-- Scripts -->
    @include('admin.script')
  </body>
</html>
