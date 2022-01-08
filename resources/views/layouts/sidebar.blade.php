<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
      <h3>General</h3>
      <ul class="nav side-menu">
        <li><a href="{{route('home')}}"><i class="fa fa-home"></i> Home</a>
        </li>
        <li><a href="{{route('student.create')}}"><i class="fa fa-edit"></i> Student Register</a>
        </li>
        <li><a href="{{route('student.index')}}"><i class="fa fa-users"></i> Student Details</a>
        </li>
        <li><a><i class="fa fa-graduation-cap"></i> Teacher<span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
              @if (Auth::user()->role == 1 )
              <li><a href="{{route('teacher.create')}}">Add Teachers</a></li>
              @endif
            <li><a href="{{route('teacher.index')}}">View Teachers</a></li>
          </ul>
        </li>
        <li><a><i class="fa fa-check-square-o"></i> Cours<span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            @if (Auth::user()->role == 1 )
            <li><a href="{{route('course.create')}}">Add Courses</a></li>
            @endif
            <li><a href="{{route('course.index')}}">View Courses</a></li>
          </ul>
        </li>
        <li><a><i class="fa fa-sitemap"></i> Branch <span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            @if (Auth::user()->role == 1 )
            <li><a href="{{route('branch.create')}}">Add Branch</a></li>
            @endif
            <li><a href="{{route('branch.index')}}">View Branch</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
