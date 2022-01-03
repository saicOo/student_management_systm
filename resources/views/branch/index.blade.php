
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
<h3>Branches/List</h3>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Branch Name</th>
          <th>Edit</th>
          <th>Delete</th>
        </tr>
      </thead>
      <tbody>
          @foreach ($branch as $item)
          <tr>
              <td>{{$item->branchName}}</td>
              <td><a class="btn btn-info" href="{{route('branch.edit',$item->id)}}">Edit</a></td>
              <td><a class="btn btn-danger" href="{{route('branch.destroy',$item->id)}}">Delete</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{$branch->links()}}

  </div>
    @endsection
