<div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body">
    <div class="offcanvas-md offcanvas-end bg-body" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="sidebarMenuLabel">Rens Blog</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="Open"></button>
      </div>
      <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2 text-dark{{ Request::is('dashboard') ? 'active' : '' }}" href="/dashboard">
              <svg class="bi"><use xlink:href="#house-fill"/></svg>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2 text-dark{{ Request::is('dashboard/posts*') ? 'active' : '' }}" href="/dashboard/posts">
              <svg class="bi"><use xlink:href="#file-earmark"/></svg>
              My Posts
            </a>
            <li class="nav-item">
                <form action="/logout" method="POST">
                  @csrf
                  <button type="submit" class="nav-link text-danger px-3 border-0"><i class="bi bi-box-arrow-left"></i> Log out</button>
                </form>
            </li>
          </li>
        </ul>
      </div>
    </div>
</div>