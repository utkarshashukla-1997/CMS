@section('sidebar')
      <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="p-t-30">
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="index.html" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a></li>

                         @can('user-list')
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"> <i class="nav-icon fa fa-users"></i><span class="hide-menu">Users </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="{{route('users.index')}}" class="sidebar-link">  <i class="nav-icon fa fa-users"></i><span class="hide-menu"> View Users </span></a></li>
                            </ul>
                        </li>
                        @endcan
                        @can('role-list')
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"> <i class="nav-icon fa fa-users"></i><span class="hide-menu">Roles </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="{{route('roles.index')}}" class="sidebar-link"> <i class="nav-icon fa fa-users"></i><span class="hide-menu"> View Roles</span></a></li>
                            </ul>
                        </li>
                        @endcan
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('password.index')}}" aria-expanded="false"><i class="nav-icon fa fa-cog"></i><span class="hide-menu">Password Settings</span></a></li>





                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->

@endsection
