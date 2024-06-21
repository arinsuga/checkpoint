<!-- Sidebar Menu -->
<nav class="mt-2">
  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

    
    @if(!\Arins\Facades\Role::deny(Auth::user()->roles, 'hrd-admin'))
      <!-- Home -->
      <li class="nav-item has-treeview menu-open">
        <a href="{{ route('absen') }}" class="nav-link">
          <i class="nav-icon fas fa-home"></i>
          <p>
            Home
          </p>
        </a>
      </li>
    @endif

    @if(\Arins\Facades\Role::allow(Auth::user()->roles, 'dnb-super', 'hrd-admin', 'dnb-admin'))

        <!-- Daftar Absensi -->
        <!-- Home -->
        <li class="nav-item has-treeview menu-open">
          <a href="{{ route('absen.history.admin') }}" class="nav-link">
            <i class="nav-icon fa-regular fa-calendar-days"></i>
            <p>
              Daftar Absen
            </p>
          </a>
        </li>

    @endif

    <!-- Logout -->
    <li class="nav-item has-treeview menu-open">
      <a href="{{ route('logout') }}" class="nav-link"
         onclick="event.preventDefault();
         document.getElementById('logout-form').submit();">
         <i class="nav-icon fas fa-sign-out-alt"></i>
        <p>
          Logout
        </p>
      </a>

      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
      </form>

    </li>

  </ul>
</nav>
<!-- /.sidebar-menu -->
