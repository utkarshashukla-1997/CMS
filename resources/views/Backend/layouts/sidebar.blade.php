@section('sidebar')
      <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="p-t-30">
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a></li>

                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Users </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="{{route('users.index')}}" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu">All Users </span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Roles </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="{{route('roles.index')}}" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu">All Roles </span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Posts </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu">All Posts </span></a></li>
                                @can('category-list')
                                <li class="sidebar-item"><a href="{{route('category.index')}}" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu">Categories </span></a></li>
                                @endcan 
                                <li class="sidebar-item"><a href="" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu">Tags </span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Settings </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu">Profile </span></a></li>
                                <li class="sidebar-item"><a href="" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu">General </span></a></li>
                                <li class="sidebar-item"><a href="" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu">Privacy </span></a></li>
                                <li class="sidebar-item"><a href="" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu">Mail </span></a></li>

                                <li class="sidebar-item"><a href="{{route('password.index')}}" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu">Password </span></a></li>

                            </ul>
                        </li>

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
