@section('header')
<div id="myHeader" class="header"></div>
<header>
    <div class="px-3 py-2 bg-dark text-white">
      <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
          <a href="/" class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none">
            <img src="images/NA.jpg" width="50" height="50">
          </a>

          <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
            <li>
              <a href="#C1" class="nav-link text-secondary">
                <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#home"></use></svg>
                Main
              </a>
            </li>
            <li>
              <a href="#C2" class="nav-link text-white">
                <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#speedometer2"></use></svg>
                About me
              </a>
            </li>
            <li>
              <a href="#C3" class="nav-link text-white">
                <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#table"></use></svg>
                My projects
              </a>
            </li>
            <li>
              <a href="#C4" class="nav-link text-white">
                <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#grid"></use></svg>
                Skills
              </a>
            </li>
            <li>
              <a href="#C5" class="nav-link text-white">
                <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#people-circle"></use></svg>
                Career
              </a>
            </li>
            <li>
              <a href="#C6" class="nav-link text-white">
                <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#people-circle"></use></svg>
                Contacts
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="px-3 py-2 border-bottom mb-3">
      <div class="container d-flex flex-wrap justify-content-end">
        <div class="text-end">
          <button type="button" class="btn btn-light text-dark me-2">Login</button>
          <button type="button" class="btn btn-primary">Sign-up</button>
        </div>
      </div>
    </div>
  </header>