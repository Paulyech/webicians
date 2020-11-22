<nav class="navbar navbar-expand-md navbar-dark  navbar-trans shadow-sm sticky-top" style="background-color:#09153a; ">
       <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="../images/webi.jpg" width="50" height="30" class="d-inline-block align-top rounded-circle" alt="">
            {{ config('app.name', 'Webicians') }}
          </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                  </li>      
                  <li class="nav-item">
                    <a class="nav-link" href="#services-section">services</a>
                  </li>
                  <li class="nav-item">
                   <a class="nav-link" href="#skill-section">skills</a>
                 </li>
                  <li class="nav-item">
                    <a class="nav-link " href="#portfolio-section">portfolio</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#about-section">about</a>
                  </li>
                  <li class="nav-item">
                   <a class="nav-link " href="#contact-section">contacts</a>
                 </li>
            </ul>

            
        </div>
    </div>
    
</nav>
