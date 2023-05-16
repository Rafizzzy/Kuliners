  <header>
      <div class="d-flex flex-column flex-md-row align-items-center p-4 fixed-top">
          <a href="/" class="d-flex align-items-center link-body-emphasis text-decoration-none">
              <h3 class="">Kuliner</h3>
          </a>

          <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
              <h6 class="me-3 py-2 link-body-emphasis text-decoration-none" href="#">None</h6>
              <h6 class="me-3 py-2 link-body-emphasis text-decoration-none" href="#">None</h6>
              <h6 class="me-3 py-2 link-body-emphasis text-decoration-none" href="#">None</h6>
              <h6 class="py-2 link-body-emphasis text-decoration-none" href="#">None</h6>
                  <h6 id="navbarDropdown" class="nav-link dropdown-toggle ms-4 rounded rounded-2 border bg-white p-1 border-dark" href="#" role="button"
                      data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      <strong>{{ Auth::user()->name }}</strong>
                  </h6>

                  <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                          {{ __('Logout') }}
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                          @csrf
                      </form>
                  </div>
          </nav>
      </div>
  </header>
  </div>
