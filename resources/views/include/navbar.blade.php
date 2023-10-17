@include('include.navbar')
<nav class="navbar navbar-expand-md">
      
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span><i class="fas fa-bars navbar-icon custom-icon"></i></span>
      </button>
      
      <a class="navbar-brand" href="#" >
        <img src="image/logo2.png" alt="">
        <h5 class="logo-icon"><br>Md. Mahabubur Rahman</h5>
      </a>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="{{Route('homePage')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{Route('aboutPage')}}">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{Route('contectPage')}}">Contact</a>
          </li>
        </ul>
      </div>
    </nav>