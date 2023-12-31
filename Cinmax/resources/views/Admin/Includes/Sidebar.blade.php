 <!-- Sidebar Start -->
 <div class="sidebar pe-4 pb-3">
     <nav class="navbar bg-secondary navbar-dark">
         <a href="/Dashboard" class="navbar-brand mx-4 mb-3">
             <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>DarkPan</h3>
         </a>
         <div class="d-flex align-items-center ms-4 mb-4">
             <div class="position-relative">
                 <img class="rounded-circle" src="{{ asset('assetsAdmin/Images/Female-Avatar-2.png') }}" alt="Female-Avatar" style="width: 40px; height: 40px;">
                 <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1">
                 </div>
             </div>
             <div class="ms-3">
                 <h6 class="mb-0">Admin name</h6>
                 <span>Admin</span>
             </div>
         </div>
         <div class="navbar-nav w-100">
             <a href="/Dashboard" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
             <a href="/AdminUsers" class="nav-item nav-link"><i class="fa fa-users me-2"></i>Users</a>
             <a href="/AdminCategories" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Categories</a>
             <a href="/AdminMovies" class="nav-item nav-link"><i class="fa-solid fa-masks-theater"></i>Movies</a>
             <a href="/AdminTheatres" class="nav-item nav-link"><i class="fa fa-clapperboard me-2"></i>Theatres</a>
             <a href="/ReservedTickets" class="nav-item nav-link"><i class="fa fa-ticket me-2"></i>Reserved
                 Tickets</a>
             <a href="/AdminLogin" class="nav-item nav-link"><i class="fa fa-arrow-right-from-bracket me-2"></i>Logout</a>

             <div class="nav-item dropdown">
                 <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Pages</a>
                 <div class="dropdown-menu bg-transparent border-0">
                     <a href="/AdminLogin" class="dropdown-item">Sign In</a>
                     <a href="/AdminSignup" class="dropdown-item">Sign Up</a>
                     <a href="/Admin404" class="dropdown-item">404 Error</a>
                 </div>
             </div>
         </div>
     </nav>
 </div>
 <!-- Sidebar End -->