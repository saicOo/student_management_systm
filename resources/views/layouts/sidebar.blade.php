<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
      <h3>General</h3>
      <ul class="nav side-menu">
        <li><a href="{{route('student.create')}}"><i class="fa fa-home"></i> Student Register</a>
        </li>
        <li><a href="{{route('student.index')}}"><i class="fa fa-edit"></i> Student Details</a>
        </li>
        <li><a><i class="fa fa-desktop"></i> Teacher<span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <li><a href="{{route('teacher.create')}}">Add Teachers</a></li>
            <li><a href="{{route('teacher.index')}}">View Teachers</a></li>
          </ul>
        </li>
        <li><a><i class="fa fa-desktop"></i> Cours<span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <li><a href="{{route('course.create')}}">Add Courses</a></li>
            <li><a href="{{route('course.index')}}">View Courses</a></li>
          </ul>
        </li>
        <li><a><i class="fa fa-table"></i> Branch <span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <li><a href="{{route('branch.create')}}">Add Branch</a></li>
            <li><a href="{{route('branch.index')}}">View Branch</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <div class="menu_section">
      <h3>Live On</h3>
      <ul class="nav side-menu">
        <li><a href="javascript:void(0)"><i class="fa fa-laptop"></i> Landing Page <span class="label label-success pull-right">Coming Soon</span></a></li>
      </ul>
    </div>

  </div>
