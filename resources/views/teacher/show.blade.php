@extends('layouts.app')

@section('content')


    <div class="x_panel">
        <div class="x_title">
            <h2>Teacher Report <small>Activity report</small></h2>
            <div class="clearfix"></div>
        </div>
        <div class="x_content row">
            <div class="col-md-6 col-sm-3 col-xs-12 profile_left">
                <div class="profile_img">
                    <div id="crop-avatar">
                        <!-- Current avatar -->
                        <img class="img-responsive avatar-view" src="{{ asset("post_Image/$teacher->image") }}"
                            alt="Avatar" title="Change the avatar" style="height: 200px;width:200px;object-fit:cover;">
                    </div>
                </div>
                <h3>{{ $teacher->fName }} {{ $teacher->lName }}</h3>

                <ul class="list-unstyled user_data">
                    <li><i class="fa fa-bookmark user-profile-icon"></i> {{$branch->branchName}}
                    </li>
                    <li><i class="fa fa-flask user-profile-icon"></i> {{$course->coursName}}
                    </li>

                    <li>
                        <i class="fa fa-phone user-profile-icon"></i> {{ $teacher->phone }}
                    </li>
                    <li>
                        <i class="fa fa-users user-profile-icon"></i> number of students: {{ $countStudent }}
                    </li>
                </ul>

                <a class="btn btn-success" href="{{ route('teacher.edit', $teacher->id) }}"><i
                        class="fa fa-edit m-right-xs"></i>Edit Profile</a>
            </div>
            <!-- start skills -->
            <div class="col-md-6">
                <h4>Skills</h4>
                <ul class="list-unstyled user_data">
                    <li>
                        <p>Web Applications</p>
                        <div class="progress progress_sm">
                            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="50"></div>
                        </div>
                    </li>
                    <li>
                        <p>Website Design</p>
                        <div class="progress progress_sm">
                            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="70"></div>
                        </div>
                    </li>
                    <li>
                        <p>Automation & Testing</p>
                        <div class="progress progress_sm">
                            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="30"></div>
                        </div>
                    </li>
                    <li>
                        <p>UI / UX</p>
                        <div class="progress progress_sm">
                            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="50"></div>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- end of skills -->
        </div>
    </div>

@endsection
