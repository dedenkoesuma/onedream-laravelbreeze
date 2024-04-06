@include('partials.head')
<header class="navbar sticky-menu-home sticky-top flex-md-nowrap p-0 shadow"  data-bs-theme="dark">
      <a class="navbar-brand col-md-3 col-lg-2 me-0 px-4" ><img src="{{ asset('img/logo/fw_logo.png')}}" alt="OneDream"></a>
        <div class="navbar-nav">
            <div class="nav-item text-nowrap">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="nav-link mt-2 px-4 border-0 text-white">Log Out</button>
                </form>
            </div>
        </div>
</header>
<div class="container-fluid pt-5">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-4">
        <ul class="nav flex-column ">
          <li class="nav-item">
            <a class="nav-link d-flex {{ Request::is('/dashboard') ? 'active' : 'text-dark' }}" href="/dashboard">
              <span data-feather="home" width="15" class="me-2"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link  d-flex {{ Request::is('/dashboard/post') ? 'active' : 'text-dark' }} " href="/dashboard/post">
              <span data-feather="file" width="15" class="me-2"></span>
              Portfolio
            </a>
          </li>
        </ul>
         <li class="nav-item px-3 pt-1">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            
              <a class="nav-link d-flex"href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
              <span data-feather="log-out" width="15"class="me-2"></span>
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
<!-- post IMAGE/VIDEO -->
<script>
  const categorySelect = document.getElementById('category');
  const imageInput = document.getElementById('imageInput');
  const videoInput = document.getElementById('videoInput');

  categorySelect.addEventListener('change', function () {
    if (categorySelect.value === 'videografi') {
      imageInput.style.display = 'block';
      videoInput.style.display = 'block';
    } else {
      imageInput.style.display = 'block';
      videoInput.style.display = 'none';
    }
  });
</script>