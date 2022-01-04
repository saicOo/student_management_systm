
  @extends('layouts.app')

  @section('content')
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
    <h3>Teachers/List</h3>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>teacher Name</th>
          <th>Father's Name</th>
          <th>Phone Number</th>
          <th>Branch</th>
          <th>Course</th>
          <th>Show</th>
          <th>Edit</th>
          <th>Delete</th>
        </tr>
      </thead>
      <tbody>
          @foreach ($teacher as $item)
          <tr>
              <td>{{$item->fName}}</td>
              <td>{{$item->lName}}</td>
              <td>{{$item->phone}}</td>
              <td>{{$item->branches->branchName}}</td>
              <td>{{$item->courses->coursName}}</td>
              <td><a class="btn btn-info" href="{{route('teacher.show', $item->id)}}">Show</a></td>
              <td><a class="btn btn-info" href="{{route('teacher.edit', $item->id)}}">Edit</a></td>
              <td><a class="btn btn-danger" href="{{route('teacher.destroy', $item->id)}}">Delete</a></td>
            </tr>
            @endforeach

      </tbody>
    </table>
    {{$teacher->links()}}
  </div>
    @endsection
