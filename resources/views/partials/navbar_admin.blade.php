    <!-- Topbar -->
    <nav class="main-header navbar navbar-expand navbar-success navbar-dark topbar static-top shadow"
        style="background-color: rgb(19, 42, 121)">

        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
        </ul>

        <ul class="navbar-nav ml-auto">
            <!-- Nav Item - User Information -->
            {{-- <li class="nav-item ">
                <a class="nav-link" href="/home">Home <span class="sr-only">(current)</span></a>
            </li> --}}
            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false" style="font-color:white;">
                    <span class="mr-2 d-none d-lg-inline" style="font-color:white;">Rara</span>
                </a>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="/admin/ubah_password">
                        <i class="fas fa-key fa-sm fa-fw mr-2 text-gray-400" href="{{url('/admin/ubah_password')}}"></i>
                        Ubah Password
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>                            
                        Keluar
                    </a>
                    {{-- <form id="logout-form" action="{{ route('logout') }}" class="d-none">
                        @csrf
                    </form> --}}
                </div>
            </li>
        </ul>
    </nav>
    <!-- End of Topbar -->
