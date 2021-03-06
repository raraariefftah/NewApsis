<aside class="main-sidebar sidebar-light-primary elevation-0" style="background-color: rgb(174, 193, 216)">
    <!-- Brand Logo -->
    <a href="#" class="brand-link" style="background-color: rgb(19, 42, 121)">
        <img src="{{ asset('/img/logoeria.png')}}" alt="AdminLTE Logo" class="brand-image elevation-2">
        <span class="pl-1 brand-text" style="color: rgb(255, 255, 255);  font-family: Nunito Sans,
        Arial; letter-spacing: 1px;"  >
            SMA Swasta Eria
        </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-2 pb-2 mb-2 d-flex" >
            <div class="image mt-2 mr-1">
                <img src="/img/user3.png" class="img-circle elevation-2 mt-2mr-1" alt="User Image"  >
            </div>
            <div class="info">
                <a href="#" class="d-block font-weight-bold ">Admin</a> 
                <i class="fa fa-circle text-success fa-xs"></i> <a href="#" style="font-size: 13px;" >Online</a>              
            </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <!-- 1 -->
                <li class="nav-header">DAFTAR MENU</li>
                {{-- <li class="nav-item">
                    <a href="{{url('/')}}" class="nav-link" action="">
                        <i class="nav-icon fas fa-home"></i>
                        <p> Halaman Utama </p>
                    </a>
                </li> --}}
                <li class="nav-item">
                    <a href="{{url('/admin/profil')}}" class="nav-link" action="">
                        <i class="nav-icon fas fa-user"></i>
                        <p> Profil </p>
                    </a>
                </li>

                {{-- 2 --}}
                <li class="nav-item">
                    <a href="{{url('/admin/dashboard')}}" class="nav-link" action="">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p> Dashboard </p>
                    </a>
                </li>

                <!-- 4  -->
                <li class="nav-item">
                    <a href="{{url('/admin/data_user')}}" class="nav-link">
                        <i class="nav-icon fas fa-clipboard-list"></i>
                        <p> Data User </p>
                    </a>
                </li>

                {{-- 3 --}}
                <li class="nav-item">
                    <a href="{{url('/admin/tambah_user')}}" class="nav-link">
                        <i class="nav-icon fas fa-user-plus"></i>
                        <p> Tambah Data User </p>
                    </a>
                </li>

                {{-- 4 --}}
                {{-- <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-pencil-alt"></i>
                        <p>
                            Edit Halaman Utama
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('/admin/edit_home')}}" class="nav-link">
                                <p style="color: black">Edit Home</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/admin/edit_profil')}}" class="nav-link">
                                <p style="color: black">Edit Profil</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/admin/edit_fasilitas')}}" class="nav-link">
                                <p style="color: black">Edit fasilitas</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/admin/edit_lulusPTN')}}" class="nav-link">
                                <p style="color: black">Edit Lulus PTN</p>
                            </a>
                        </li>
                    </ul>
                </li> --}}
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
