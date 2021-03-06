<aside class="main-sidebar sidebar-light-primary elevation-0" style="background-color: rgb(174, 193, 216)">
    <!-- Brand Logo -->
    <a href="#" class="brand-link" style="background-color: rgb(28, 47, 97)">
        <img src="{{ asset('/img/logoeria.png')}}" alt="AdminLTE Logo" class="brand-image elevation-2">
        <span class="pl-1 brand-text" style="color: rgb(255, 255, 255); ">SMA Swasta Eria</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-2 pb-2 mb-2 d-flex" >
            <div class="image mt-2 mr-1">
                <img src="/img/user3.png" class="img-circle elevation-2 mt-2mr-1" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block font-weight-bold ">Tata Usaha</a> 
                <i class="fa fa-circle text-success fa-xs"></i> <a href="#" style="font-size: 13px;">Online</a>              
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
                    <a href="{{url('/tata_usaha/profil')}}" class="nav-link" action="">
                        <i class="nav-icon fas fa-user"></i>
                        <p> Profil </p>
                    </a>
                </li>

                {{-- 2 --}}
                <li class="nav-item">
                    <a href="{{url('/tata_usaha/dashboard')}}" class="nav-link" action="">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p> Dashboard </p>
                    </a>
                </li>

                <!-- 3  -->
                <li class="nav-item">
                    <a href="{{url('/tata_usaha/data_pendaftar')}}" class="nav-link">
                        <i class="nav-icon fas fa-clipboard-list"></i>
                        <p> Data Pendaftar </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
