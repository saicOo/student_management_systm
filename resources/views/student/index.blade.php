
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
    <h3>Students/List</h3>
    <div class="input-group">
        <input class="form-control" type="text" id="search" placeholder="Search for.....">
    </div>
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
          @include('student.studentDetails_ajax')

      </tbody>
    </table>
	<input type="hidden" name="hidden_page" id="hidden_page" value="1" />
  </div>
@endsection


@push('footer-scripts')
<script type="text/javascript">
	$(document).ready(function(){

  function fetch_data(page, search="") {
      $.ajax({
         url:"<?php echo url(''); ?>/studentdetails_ajax?page="+page+"&search="+search,
         success:function(data){
          $('tbody').html(data);
         }
      })
     }
       $(document).on('keyup', '#search', function(){
          var search = $('#search').val();
          var page = $('#hidden_page').val();
          fetch_data(page,search);
       });
       $(document).on('click', '.pag_link a', function(e){
           e.preventDefault();
          var search = $('#search').val();
          var page = $(this).attr('href').split('page=')[1];
          fetch_data(page,search);
     });
   });
</script>
@endpush
