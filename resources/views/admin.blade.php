<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
      <script src="{{ asset('js/app.js') }}" crossorigin="anonymous"></script>
      <link rel="icon" href="images/favicon.ico" type="image/icon type">
      <link href="{{ asset('css/app.css') }}" rel="stylesheet" crossorigin="anonymous">
      @yield('title')
   </head>
   <body>
      <header class="p-3 bg-dark text-white">
         <div class="px-3 py-2">
            <div class="container d-flex flex-wrap justify-content-end">
               @if(session('status'))
               <h4 class="me-3 mt-1">
                  {{ session('status') }}
               </h4>
               @endif  
               @auth
               <h4 class="me-3 mt-1">
                  {{ auth()->user()->name }}
               </h4>
               <form action="{{ route('logout') }}" method="post">
                  @csrf
                  <button type="submit" class="btn btn-warning">Logout</button>
               </form>
               @endauth
               @guest
               @include('inc.login')
               @endguest
            </div>
         </div>
      </header>
    <div class="d-flex flex-wrap">
    <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 280px; border-bottom-right-radius: 5%;">
         <a href="/" class="d-flex justify-content-center">
         <img src="{{ asset('images/NA.jpg') }}" width="70" height="70" alt="Avatar" style="border-radius: 50%;">
         </a>
         <hr>
         <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
               <a id="welcome" href="{{ route('welcome_ed') }}" class="nav-link text-white">
                  Welcome
               </a>
            </li>
            <li>
               <a id="about" href="{{ route('about_ed') }}" class="nav-link text-white">
                  About me
               </a>
            </li>
            <li>
               <a id="projects" href="{{ route('projects_ed') }}" class="nav-link text-white">
                  My projects
               </a>
            </li>
            <li>
               <a id="skills" href="{{ route('skills_ed') }}" class="nav-link text-white">
                  Skills
               </a>
            </li>
            <li>
               <a id="experience" href="{{ route('experience_ed') }}" class="nav-link text-white">
                  Job experience
               </a>
            </li>
         </ul>
      </div>
      <div class="p-5">
        @yield('ed_welcome')
        @yield('ed_about')
        @yield('ed_projects')
        @yield('ed_skills')
        @yield('ed_experience')
      </div>
    </div>
      <script>
        document.addEventListener('DOMContentLoaded', function()
        {
            document.getElementById("welcome").onclick = current_page;
            document.getElementById("about").onclick = current_page;
            document.getElementById("projects").onclick = current_page;
            document.getElementById("skills").onclick = current_page;
            document.getElementById("experience").onclick = current_page;
        }, false);
        var tmp_id = "welcome";
        function current_page()
        {
            var btns = document.getElementsByTagName("a");
            var buttonsCount = btns.Count;
            document.getElementById(tmp_id).classList.remove("active");
            document.getElementById(tmp_id).classList.add("text-white");
            tmp_id = this.id;
            this.classList.remove("text-white");
            this.classList.add("active");
        }
      </script>
   </body>
</html>
