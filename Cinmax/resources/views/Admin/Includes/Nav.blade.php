<nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                <a href="/Dashboard" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>


                <div class="d-none d-md-flex ms-4 pt-2">
                    <h6> WELCOME :</h6>
                </div>
                <div class="d-none d-md-flex ms-4 pt-3">
                    <P>ADMIN</P>
                </div>
                <!-- search Start -->

                <!-- <form class="d-none d-md-flex ms-4">
                    <input class="form-control bg-dark border-0" type="search" placeholder="Search">
                </form> -->



                <div class="navbar-nav align-items-center ms-auto">


                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="{{ asset('assetsAdmin/Images/Female-Avatar-2.png') }}" alt="Female-Avatar"
                                style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">ADMIN</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="/Profile" class="dropdown-item">My Profile</a>
                            <a href="/AdminLogin" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>