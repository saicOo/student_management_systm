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
            <tr class="pag_link">
                <td colspan="8">{{$teacher->links()}}</td>
            </tr>
