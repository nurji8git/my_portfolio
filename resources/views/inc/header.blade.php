@section('header')
<div id="myHeader" class="header"></div>
<header>
    <div class="px-3 py-2 bg-dark text-white">
      <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
          <a href="/" class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none">
            <img src="images/NA.jpg" width="50" height="50" alt="Avatar" style="border-radius: 50%;">
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
                Experience
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
        <div class="nav-item dropdown">
				  <a onclick="show_login_form()" class="btn btn-dark text-white me-2">Login</a>
          <div id="login_form" class="dropdown-menu action-form">
					  <form method="post" action="{{ route('login') }}">
              @csrf
						  <div class="form-group" style="margin: 10px">
							  <input type="email" name="email" id="email" class="form-control" placeholder="E-mail" required="required">
						  </div>
						  <div class="form-group" style="margin: 10px">
							  <input type="password" name="password" id="password" class="form-control" placeholder="Password" required="required">
						  </div>
						  <input type="submit" class="btn btn-primary btn-block" value="Login" style="margin: 10px">
					  </form>
          </div>
			  </div>
      </div>
    </div>
  </header>