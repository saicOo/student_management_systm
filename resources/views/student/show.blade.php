@extends('layouts.app')

@section('content')


    <div class="x_panel">
        <div class="x_title">
            <h2>Student Report <small>Activity report</small></h2>
            <div class="clearfix"></div>
        </div>
        <div class="x_content row">
            <div class="col-md-6 col-sm-3 col-xs-12 profile_left">
                <div class="profile_img">
                    <div id="crop-avatar">
                        <!-- Current avatar -->
                        <img class="img-responsive avatar-view" src="{{ asset("post_Image/$student->image") }}"
                            alt="Avatar" title="Change the avatar" style="height: 200px;width:200px;object-fit:cover;">
                    </div>
                </div>
                <h3>{{ $student->fName }} {{ $student->lName }}</h3>

                <ul class="list-unstyled user_data">
                    <li><i class="fa fa-bookmark user-profile-icon"></i> {{$branch->branchName}}
                    </li>
                    <li><i class="fa fa-flask user-profile-icon"></i> {{$course->coursName}}
                    </li>

                    <li>
                        <i class="fa fa-phone user-profile-icon"></i> {{ $student->phone }}
                    </li>

                    <li class="m-top-xs">
                        <i class="fa fa-external-link user-profile-icon"></i>
                        <a href="#" target="_blank">{{ $student->email }}</a>
                    </li>
                </ul>

                <a class="btn btn-success" href="{{ route('student.edit', $student->id) }}"><i
                        class="fa fa-edit m-right-xs"></i>Edit Profile</a>
            </div>
            <!-- start skills -->
            <div class="col-md-3 col-xs-12 widget widget_tally_box">
                <div class="x_panel fixed_height_390 ui-ribbon-container ">
                    <h5>Instructor</h5>
                    <div class="ui-ribbon-wrapper" style="z-index: 50">
                        <div class="ui-ribbon">
                          30% Off
                        </div>
                      </div>
                  <div class="x_content">

                    <div class="flex">
                      <ul class="list-inline widget_profile_box">
                        <li>
                          <a>
                            <i class="fa fa-facebook"></i>
                          </a>
                        </li>
                        <li>
                          <img src="{{ asset("post_Image/".$student->teacher->image) }}" alt="..." class="img-circle profile_img" style=" object-fit: cover;" >
                        </li>
                        <li>
                          <a>
                            <i class="fa fa-twitter"></i>
                          </a>
                        </li>
                      </ul>
                    </div>

                    <h3 class="name"><a href="{{route('teacher.show', $student->teacher->id)}}">{{$student->teacher->fName}}</a></h3>

                    <p>
                      If you've decided to go in development mode and tweak all of this a bit, there are few things you should do.
                    </p>
                  </div>
                </div>
              </div>
            <!-- end of skills -->
        </div>
    </div>

@endsection
