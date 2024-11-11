<div id="layoutSidenav_nav">
    <nav class="sidenav shadow-right sidenav-light">
        <div class="sidenav-menu">
            <div class="nav accordion" id="accordionSidenav">
                
                <!-- Sidenav Menu Heading (Core)-->
                <div class="sidenav-menu-heading">Core</div>
                
                <!-- Sidenav Link (Dashboard)-->
                <a class="nav-link" href="{{url('dashboard')}}">
                    <div class="nav-link-icon"><i data-feather="bar-chart"></i></div>
                    Dashboard
                </a>

                <!-- User Dropdown-->
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseUser" aria-expanded="false" aria-controls="collapseUser">
                    <div class="nav-link-icon"><i data-feather="user"></i></div>
                    User
                    <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseUser" data-bs-parent="#accordionSidenav">
                    <nav class="sidenav-menu-nested nav">
                        <a class="nav-link" href="{{url('user.create')}}">New User</a>
                        <a class="nav-link" href="{{url('user.index')}}">User List</a>
                    </nav>
                </div>
                
            </div>
        </div>
        
        <!-- Sidenav Footer-->
        <div class="sidenav-footer">
            <div class="sidenav-footer-content">
                <div class="sidenav-footer-subtitle">Logged in as:</div>
                <div class="sidenav-footer-title">Bilal</div>
            </div>
        </div>
    </nav>
</div>
