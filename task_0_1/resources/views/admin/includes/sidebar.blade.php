   <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <div class="sidebar">
   <ul class="pt-5 nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        
        <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Home
              </p>
            </a>
          </li>  

<!-- Admin - Start -->

@auth

@if(Auth::user()->role_id === 1)


<li class="nav-item">
            <a href="{{ route('admin.user.index') }}" class="nav-link">
              <i class="fas fa-users"></i>
              <p>
                User
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('admin.category.index') }}" class="nav-link">
              <i class="nav-icon fas fa-th-list"></i>
              <p>
                Category
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.product.index') }}" class="nav-link">
              <i class="nav-icon far fa-clipboard"></i>
              <p>
                Product
              </p>
            </a>
          </li>


@endif

@endauth
<!-- Admin - End -->


<!-- Manager - Start -->

@auth

@if(Auth::user()->role_id === 2)

          <li class="nav-item">
            <a href="{{ route('admin.product.index') }}" class="nav-link">
              <i class="nav-icon far fa-clipboard"></i>
              <p>
                Product
              </p>
            </a>
          </li>


@endif

@endauth

<!-- Manager - End -->


<!-- User - Start -->

@auth

@if(Auth::user()->role_id === 3)


<li class="nav-item">
            <a href="{{ route('admin.user.index') }}" class="nav-link">
              <i class="fas fa-users"></i>
              <p>
                User
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('admin.category.index') }}" class="nav-link">
              <i class="nav-icon fas fa-th-list"></i>
              <p>
                Category
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.product.index') }}" class="nav-link">
              <i class="nav-icon far fa-clipboard"></i>
              <p>
                Product
              </p>
            </a>
          </li>


@endif

@endauth

<!-- User - End -->

     
          
    </ul>
  </div>
    <!-- /.sidebar -->
  </aside>