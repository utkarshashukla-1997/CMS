@section('sidebar')
   <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Dashboard
                            </li>



                            <li class="nav-divider">
                                SET-UPS
                            </li>
                             @can('user-list')
                            <li class="nav-item ">
                                <a class="nav-link active" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-user-circle"></i>Users <span class="badge badge-success">6</span></a>
                                <div id="submenu-1" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">

                                                    <li class="nav-item">
                                                        <a class="nav-link" href="{{route('users.index')}}">View Users</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        @endcan
                                        @can('role-list')
                                        <li class="nav-item ">
                                            <a class="nav-link active" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fa fa-fw fa-user-circle"></i>Roles <span class="badge badge-success">6</span></a>
                                            <div id="submenu-2" class="collapse submenu" style="">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">

                                                                <li class="nav-item">
                                                                    <a class="nav-link" href="{{route('roles.index')}}">View Roles</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    @endcan 
                                                    <li class="nav-divider">
                                                        SETTINGS
                                                    </li>
                                                    <li class="nav-item ">
                                                        <a class="nav-link active" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3"><i class="fa fa-fw fa-user-circle"></i>Change Password <span class="badge badge-success">6</span></a>
                                                        <div id="submenu-3" class="collapse submenu" style="">
                                                            <ul class="nav flex-column">
                                                                <li class="nav-item">

                                                                            <li class="nav-item">
                                                                                <a class="nav-link" href="{{route('password.index')}}">Change Password</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </li>

                                    </ul>
                                </div>
                            </li>






                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->

@endsection
