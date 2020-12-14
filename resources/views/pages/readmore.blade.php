<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Webicians') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://kit.fontawesome.com/cb35b84be5.js" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body >
  <nav class="navbar navbar-expand-md navbar-dark  navbar-trans shadow-sm sticky-top" style="background-color:#09153a; ">
    <div class="container">
     <a class="navbar-brand" href="{{ url('/') }}">
         <img src="../images/logo.jpg" width="30" height="30" class="d-inline-block align-top" alt="">
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
                 <a class="nav-link" href="/#services-section">services</a>
               </li>
               <li class="nav-item">
                <a class="nav-link" href="/#skill-section">skills</a>
              </li>
               <li class="nav-item">
                 <a class="nav-link " href="/#portfolio-section">portfolio</a>
               </li>
               <li class="nav-item">
                 <a class="nav-link" href="/#about-section">about</a>
               </li>
               <li class="nav-item">
                <a class="nav-link " href="/#contact-section">contacts</a>
              </li>
         </ul>

         
     </div>
 </div>
 
</nav>
        
<div class="readmore"   >
  <div class="container-fluid">
    <h2>Why us?</h2>
    
    <div class="row">
         <div class="col-lg-3">
               <p>We do a close watch on emerging trends in The Software Development
                   Industry therefore we use the best industry standard technology stacks as a tool to craft powerful,
                   elegant and scalable web applications.
               </p>
         </div>
         <div class="col-lg-3">
           <img src="../images/webi.jpg" alt="" width="200">
         </div>

  </div>

  <div>
    <h2 class="text-capitalize">our mission</h2>
    <p>Our mission is to help small to medium scale enterprises to take advantage of the modern web as a platform to market themselves.
    
    </p>
     <h2>VISION</h2>
     <p> To become a leading, trusted tech services provider in Africa and The World.</p>
  </div>
  </div>

  <div class="readmore" style="background-color:#526e94;font-weight:20px;min-height:40vh;">
      <div class="container-fluid" >
        <div  class="text-center">
          <h1 class="text-capitalize">meet our team</h1>
        </div>

        <div class="row text-white pt-5 text-center"  >
        
            
            <div class="col">
                          
                      <div >                       
                        <img src="../images/chacha.jpg" alt="" height="100px" width="100px" class="rounded-circle "> 
                        <div class=" rounded" style="background-color:#f5891f ">
                          <h2 class="text-capitalize">ian chacha</h2>
                          <p style="background-color: #05355c;">software-developer</p>
                        </div>
                        

                      </div>
            
                    </div>
                    <div class="col">
                          
                      <div >                       
                        <img src="../images/tech1.jpeg" alt="" height="100px" width="100px" class="rounded-circle "> 
                        <div class=" rounded" style="background-color:#f5891f ">
                          <h2 class="text-capitalize">ian chacha</h2>
                          <p style="background-color: #05355c;">graphic designer</p>
                      </div>
                        

                      </div>
            
                    </div>
                    <div class="col">
                          
                      <div >                       
                        <img src="../images/deno.jpg" alt="" height="100px" width="100px" class="rounded-circle "> 
                        <div class=" rounded" style="background-color:#f5891f ">
                          <h2 class="text-capitalize">denis musumbi</h2>
                          <p style="background-color: #05355c;">app-developer</p>
                      </div>
                        

                      </div>
            
                    </div>
                    <div class="col">
                          
                      <div >                       
                        <img src="../images/lyech.jpg" alt="" height="100px" width="100px" class="rounded-circle "> 
                        <div class=" rounded" style="background-color:#f5891f ">
                          <h2 class="text-capitalize">paul liech manyala</h2>
                          <p style="background-color: #05355c;">web-developer</p>
                      </div>
                        

                      </div>
            
                    </div>

        </div>
    </div>
</div>
  <div class="contact-section pb-4 bg-dark">
   <div class="container-fluid">
    <br />
    <br />
    <br />
    <div class="contact-header text-center">
      <h1 class="text-capitalize text-white"><strong>get in touch</strong></h1>
   </div>
    <div class="container" style="width:65%">
            @if (count($errors) > 0)
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
        @endif
    </div>

    <div class="row justify-content-between">
        <div class="col-md-6">
          @include('emailsend')
        </div>
        
           <div class="col-md-4">
               <div class="contact-info">
                   <div class="d-block mb-5">
                       <span class="d-block text-uppercase ">Email</span>
                       <a href="paulyech96@gmail.com">webicians@gmail.com</a>
                   </div>
                   <div class="d-block mb-5">
                       <span class="d-block  text-uppercase " >phone</span>
                       <a href="0715474420">+254 715 474 420</a>
                   </div>
                   <div class="d-block ">
                       <span class="d-block text-uppercase ">address</span>
                       <address class="text-capitalize ">nairobi, kenya</address>
                   </div>
               </div>
           </div>
       </div>
   </div>
</div>
</div>
<footer class=" footer-section">
  <div class="container">
          <div class=" social-md-sites text-center">
              <ul >
                  <li> <a href="https://www.facebook.com/Webicians"><i class="fab fa-facebook"></i></a></li>
                  <li><a href="https://twitter.com/webicians"><i class="fab fa-twitter"></i></a></li>
                  <li><a href="https://www.instagram.com/webicianske/"><i class="fab fa-instagram"></i></a></li>
                  <li><a href="https://www.linkedin.com/in/webicians-ke-458ba0201/"><i class="fab fa-linkedin-in"></i></a></li>
                  <li><a href="https://github.com/webicians"><i class="fab fa-github"></i></a></li>
                  <li><a href=""><i class="fab fa-whatsapp"></i></a></li>

              </ul>
              <p class="text-white text-capitalize text-center">
                  copyright &copy;
                  <script>
                      document.write(new Date().getFullYear() );
                  </script>
                  |all rights reserved|Designed by Paulyech
              </p>
          </div>       
  </div>
</footer>
    
</body>
</html>

