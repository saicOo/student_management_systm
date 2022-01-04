
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
            <tr class="pag_link">
                <td colspan="8">{{$student->links()}}</td>
            </tr>
