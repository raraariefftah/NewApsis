        {{-- Navbar Halaman Utama --}}
        <nav  class="navbar navbar-expand-lg navbar-white navbar-light topbar static-top shadow"
            style="background-color: rgb(255, 255, 255)">
            <h5 id="navbar" href="#" class="mt-2" style="font-family: Arial; font-weight:bold"><img src="/img/logoeria.png" alt=""
                    width="40" height="42" class=" ml-3 mr-2">Apsis SMA Swasta Eria</h5>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <!-- Nav Item - User Information -->
                            <li class="nav-item ">
                                <a class="nav-link" href="/tata_usaha/dashboard">Dashboard<span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item dropdown no-arrow">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                    style="font-color:white;">
                                    <span class="mr-2 d-none d-lg-inline" style="font-color:white;">Tata_Usaha</span>
                                </a>
                                <!-- Dropdown - User Information -->
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                    aria-labelledby="userDropdown">
                                    <a class="dropdown-item" href="/tata_usaha/ubah_password">
                                        <i class="fas fa-key fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Ubah Password
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal"
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();"><i
                                            class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        {{ __('Keluar') }}
                                    </a>
                                    <form id="logout-form" action="#" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                </ul>
            </div>
        </nav>
