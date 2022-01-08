
  @extends('layouts.app')

  @section('content')
  @if (Auth::user()->role == 1 )
  @if (Session::has('done'))
<div class="alert alert-success" role="alert">
   {{Session::get("done")}}
</div>
@endif
  @if (Session::has('delete'))
<div class="alert alert-danger" role="alert">
   {{Session::get("delete")}}
</div>
@endif
<div class="x_content" style="overflow-x: auto;">
    <h3>Admins/List</h3>

    <table class="table table-bordered">
      <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            @if (Auth::user()->role == 1 )
          <th>Delete</th>
          @endif
        </tr>
      </thead>
      <tbody>
          @foreach ($admin as $item)
          <tr>
              <td>{{$item->name}}</td>
              <td>{{$item->email}}</td>
              @if (Auth::user()->role == 1 )
              <td><a class="btn btn-danger" href="{{route('admins.destroy',$item->id)}}">Delete</a></td>
              @endif
            </tr>
            @endforeach

      </tbody>
    </table>

  </div>
  @else
  <!-- page content 404 -->
  <div class="col-md-12">
     <div class="col-middle">
       <div class="text-center text-center">
         <h1 class="error-number">404</h1>
         <h2>Sorry but we couldn't find this page</h2>
         <p>This page you are looking for does not exist
         </p>
       </div>
     </div>
   </div>
   <!-- /page content 404 -->
  @endif
    @endsection
