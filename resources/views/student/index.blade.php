
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
<div class="x_content">
    <h3>Students/List</h3>

    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Student Name</th>
          <th>Father's Name</th>
          <th>Phone Number</th>
          <th>Email</th>
          <th>teacher Name</th>
          <th>Show</th>
          <th>Edit</th>
          <th>Delete</th>
        </tr>
      </thead>
      <tbody>
          @foreach ($student as $item)
          <tr>
              <td>{{$item->fName}}</td>
              <td>{{$item->lName}}</td>
              <td>{{$item->phone}}</td>
              <td>{{$item->email}}</td>
              <td><a href="{{route('teacher.show', $item->teacherId)}}"><i class="fa fa-external-link user-profile-icon"></i> {{$item->teacher->fName}}</a></td>
              <td><a class="btn btn-info" href="{{route('student.show', $item->id)}}">Show</a></td>
              <td><a class="btn btn-info" href="{{route('student.edit', $item->id)}}">Edit</a></td>
              <td><a class="btn btn-danger" href="{{route('student.destroy', $item->id)}}">Delete</a></td>
            </tr>
            @endforeach

      </tbody>
    </table>
    {{$student->links()}}
  </div>
    @endsection
