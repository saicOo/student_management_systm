@extends('layouts.app')

@section('content')
       <!-- page content -->
       <div class="">
        <div class="page-title">
          <div class="title_left">
            <h3>Management System Status </h3>
          </div>

        </div>

        <div class="clearfix"></div>

        <div class="row">
          <div class="col-md-12">
            <div class="">
              <div class="x_content">
                <div class="row">
                  <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="tile-stats">
                      <div class="icon"><i class="fa fa-graduation-cap"></i>
                      </div>
                      <div class="count">{{$teachersCount}}</div>

                      <h3>Teachers</h3>
                      <p><a href="{{route('teacher.index')}}">Open the list of teachers</a></p>
                    </div>
                  </div>
                  <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="tile-stats">
                      <div class="icon"><i class="fa fa-users"></i>
                      </div>
                      <div class="count">{{$studentsCount}}</div>

                      <h3>Students</h3>
                      <p><a href="{{route('student.index')}}">Open the list of students</a></p>
                    </div>
                  </div>
                  <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="tile-stats">
                      <div class="icon"><i class="fa fa-sitemap"></i>
                      </div>
                      <div class="count">{{$branchsCount}}</div>

                      <h3>Branches</h3>
                      <p><a href="{{route('branch.index')}}">Open the list of Branches</a></p>
                    </div>
                  </div>
                  <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="tile-stats">
                      <div class="icon"><i class="fa fa-check-square-o"></i>
                      </div>
                      <div class="count">{{$coursesCount}}</div>

                      <h3>Courses</h3>
                      <p><a href="{{route('course.index')}}">Open the list of teachers</a></p>
                    </div>
                  </div>
                </div>




                <br />
                <div class="row">
@foreach ($teachers as $item)
                  <div class="col-md-3 col-xs-12 widget widget_tally_box">
                    <div class="x_panel fixed_height_390 ui-ribbon-container ">
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
                              <img src="{{ asset("post_Image/$item->image") }}" alt="..." class="img-circle profile_img" style=" object-fit: cover;" >
                            </li>
                            <li>
                              <a>
                                <i class="fa fa-twitter"></i>
                              </a>
                            </li>
                          </ul>
                        </div>

                        <h3 class="name"><a href="{{route('teacher.show', $item->id)}}">{{$item->fName}}</a></h3>

                        <div class="flex">
                          <ul class="list-inline count2">
                            <li>

                              <h3>100</h3>
                              <span>studing</span>
                            </li>
                            <li>
                              <h3>5</h3>
                              <span>Experience</span>
                            </li>
                            <li>
                              <h3>3</h3>
                              <span>courses</span>
                            </li>
                          </ul>
                        </div>
                        <p>
                          If you've decided to go in development mode and tweak all of this a bit, there are few things you should do.
                        </p>
                      </div>
                    </div>
                  </div>
                  @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /page content -->
  @endsection

