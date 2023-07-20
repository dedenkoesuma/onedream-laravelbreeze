@include('partials.head')
<div class="container-fluid pt-5" >
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('/dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
              <span data-feather="home" width="15" class="float-left mr-2"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link {{ Request::is('/dashboard/post') ? 'active' : '' }}" href="/dashboard/post">
              <span data-feather="file" width="15" class="float-left mr-2"></span>
              Orders
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="shopping-cart" width="15" class="float-left mr-2"></span>
              Products
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="users" width="15"class="float-left mr-2"></span>
              Customers
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="bar-chart-2" width="15"class="float-left mr-2"></span>
              Reports
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="layers" width="15"class="float-left mr-2"></span>
              Integrations
            </a>
          </li>
        </ul>
        </ul>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
             <li class="nav-item">
              <a class="nav-link"href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
              <span data-feather="log-out" width="15"class="float-left mr-2"></span>
                Log out
              </a>
            </li>
        </form>
        </ul>
      </div>
    </nav>
   <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 ">
        @yield('container')
   </main>
  </div>
</div>
@include('partials.script')