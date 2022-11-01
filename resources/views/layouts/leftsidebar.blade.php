<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('/') }}" class="brand-link text-sm">
      <img src="{{ asset('alte/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">{{ env('APP_NAME') }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      {{-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('alte/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div> --}}

      <!-- SidebarSearch Form -->
      <div class="form-inline mt-1">
        <div class="input-group input-group-sm" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills- nav-legacy nav-sidebar flex-column text-sm" data-widget="treeview" role="menu" data-accordion="true">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
               @can('user-list')
             

          <li class="nav-item {{ session('lsbm') == 'user' ? ' menu-open ' : '' }}">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Users
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('users.index') }}" class="nav-link {{ session('lsbsm') == 'alluser' ? ' active ' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Users</p>
                </a>
              </li>
              @can('user-create')
              <li class="nav-item">
                <a href="{{ route('users.create') }}" class="nav-link {{ session('lsbsm') == 'newuser' ? ' active ' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>New User</p>
                </a>
              </li>
              @endcan
             
             
            </ul>
          </li>

     
          @endcan


          @can('role-list')
          <li class="nav-item {{ session('lsbm') == 'role' ? ' menu-open ' : '' }}">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Roles & Permissions
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('roles.index') }}" class="nav-link {{ session('lsbsm') == 'allrole' ? ' active ' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Roles</p>
                </a>
              </li>
              {{-- <li class="nav-item">
                <a href="{{ route('roles.create') }}" class="nav-link {{ session('lsbsm') == 'newrole' ? ' active ' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>New Role</p>
                </a>
              </li> --}}

              <li class="nav-item">
                <a href="{{ route('permissions.index') }}" class="nav-link {{ session('lsbsm') == 'allPermission' ? ' active ' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Permissions</p>
                </a>
              </li>
              {{-- <li class="nav-item">
                <a href="{{ route('permissions.create') }}" class="nav-link {{ session('lsbsm') == 'newPermission' ? ' active ' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>New Permission</p>
                </a>
              </li> --}}
            </ul>
          </li>

          @endcan


          @can('buyer-list')
          <li class="nav-item {{ session('lsbm') == 'buyers' ? ' menu-open ' : '' }}">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Buyers
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('buyers.index') }}" class="nav-link {{ session('lsbsm') == 'allbuyers' ? ' active ' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Buyers</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('buyers.create') }}" class="nav-link {{ session('lsbsm') == 'newbuyers' ? ' active ' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>New Buyer</p>
                </a>
              </li>
            </ul>
          </li>
          @endcan
          @can('order-list')
          <li class="nav-item {{ session('lsbm') == 'orders' ? ' menu-open ' : '' }}">
            <a href="#" class="nav-link {{ session('lsbm') == 'orders' ? ' active ' : '' }} ">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Orders
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('orders.create') }}" class="nav-link {{ session('lsbsm') == 'createOrder' ? ' active ' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>New Order</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('orders.index') }}" class="nav-link {{ session('lsbsm') == 'allOrder' ? ' active ' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Orders</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('orders.latest') }}" class="nav-link {{ session('lsbsm') == 'latestOrder' ? ' active ' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Colorwise Orders</p>
                </a>
              </li>
            </ul>
          </li>
          @endcan
          <li class="nav-item {{ session('lsbm') == 'setting' ? ' menu-open ' : '' }}">
            <a href="#" class="nav-link {{ session('lsbm') == 'setting' ? ' active ' : '' }} ">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Settings
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('editPassword') }}" class="nav-link {{ session('lsbsm') == 'editPassword' ? ' active ' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Change Password</p>
                </a>
              </li>
              {{-- @can('reset-password')
              <li class="nav-item">
                <a href="{{ route('orders.latest') }}" class="nav-link {{ session('lsbsm') == 'latestOrder' ? ' active ' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Reset Password</p>
                </a>
              </li>
              @endcan --}}
              
            </ul>
          </li>
 
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>