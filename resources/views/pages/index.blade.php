@extends('layouts.app')

@section('content')
   <div class="index-section "  style="background-image: url('../images/webi.jpg');min-height:80vh;background-position:center;background-size:cover;background-attachment: scroll;" >
     <div class="container text-center  " style="padding-top: 100px;">
        <h1>Every problem has an IT related solution <br> and webicians as its agent of delivery</h1>
         <h4 class="homepage-content text-dark ">
            we offer quality and efficient services ranging from tech to networking to whatever IT entails
         </h4>
     </div>  
   </div> 

   {{-- end homepage --}}
   <a name="services-section"></a>

   <div class="services-section" style="min-height: 40vh">
       <div class="container text-center">
        <div  class="text-center">
          <h1>What we do best</h1>
        </div>
           <div class="row mt-5">
            
               <div class="col-lg-4 col-8  services">
                   
                   <a href="">                 
                       <div class="float-left">                       
                         <img src="../images/api.jpg" alt="" height="80px" width="80px" class="rounded-circle "> 
                       </div>
                       <div class="">
                        <h4 class="text-capitalize">api integratiom</h4>
                        <p class="text-white" >businesses are fast evolving to become online <br> we add payments options on your online business ie mpesa and paypal</p> 

                       </div>
                   </a>
                   
               </div>
               <div class="col-lg-4 col-8  services">
                <a href="">                 
                    <div class="float-left">                       
                      <img src="../images/IT.jpg" alt="" height="80px" width="80px" class="rounded-circle "> 
                    </div>
                    <div class="">
                     <h4 class="text-capitalize">it related services</h4>
                     <p class="text-white">we provide the best adequate and efficient IT services <br>in the country at an affordable price</p> 

                    </div>
                </a>
                
              </div>
            <div class="col-lg-4 col-8 services">
                <a href="">                 
                    <div class="float-left">                       
                      <img src="../images/mobile.jpg" alt="" height="80px" width="80px" class="rounded-circle "> 
                    </div>
                    <div class="">
                     <h4 class="text-capitalize">mobile app development</h4>
                     <p class="text-white">The world is moving fast to where everybody owns a <br>     smartphone <br>we design mobile apps that make it easier for users to interract </p> 

                    </div>
                </a>
                
            </div>
           </div>
       </div>
      
   </div>
   {{-- end services-section --}}


   <a name="about-section"></a>

<div class="aboutpage " style="background-image: url('../images/background4.jpg'); background-position:center; background-size:cover;min-height:60vh;background-attachment:fixed;background-color:#f1f1f2;">
    <div class="container">
      <div class="text-center"  >
        <h1 class="text-capitalize">Who are we?</h1>
      </div>
      <div class="row " >
        
        <div class="col aboutcol p-0" >
          <p>We are a group of soccer lovers who aim to attract  more fans to the gamewe are soccer lovers who aim to attract  more fans to the game<br>
            <br>
            We further instill more knowledge of the sport to those who are already in love with the game <br>
           We also provide some source of entertainment to non players <br> 
           <br>
         Doing this all with a bigger aim of uniting different individuals from various classes <br>we provide some sort of a plain ground for everyone without anyone feeling excluded <br>
        <br> Above all we try eradicate racism from our beautiful game <br>
         <br>
          #SayNoToRacism</p><br>
          <a href="/readmore"><button class="btn btn-primary btnn">read more </button> </a>
        </div>
        <div class="col  p-0">
            <img src="../images/tech1.jpeg" alt="img" width="350" height="400">
          </div>
      </div>
    </div>
      
     
  </div>
  {{-- end about --}}

  <a name="services-section"></a>

   <div class="services-section" style="min-height: 40vh; background-color:#002a64;">
       <div class="container text-center">
           <div  class="text-center text-white">
              <h1>Services we deliver</h1>
          </div>
           <div class="row" style="margin-left: " >
               <div class="col services">
                   
                   <a href="">                 
                       <div class="float-left">                       
                         <img src="../images/api.jpg" alt="" height="80px" width="80px" class="rounded-circle "> 
                       </div>
                       <div class="">
                        <h4 >M-pesa Web API's intergration</h4>
                        <p class="text-white" >we integarte online payment options such as mpesa on your website</p> 

                       </div>
                   </a>
                   
               </div>
               <div class="col services">
                <a href="">                 
                    <div class="float-left">                       
                      <img src="../images/db.jpg" alt="" height="80px" width="80px" class="rounded-circle "> 
                    </div>
                    <div class="">
                     <h4>Database Design</h4>
                     <p class="text-white">we offer the best databese sign services.Try us and we'll exceed your expectations..</p> 

                    </div>
                </a>
                
              </div>
            
           </div>

           <div class="row " style="margin-left:">
            <div class="col  services">
                
                <a href="">                 
                    <div class="float-left">                       
                      <img src="../images/data.jpg" alt="" height="80px" width="80px" class="rounded-circle "> 
                    </div>
                    <div >
                     <h4 class="text-capitalize">Web design and programming</h4>
                     <p class="text-white" >get us to create for you an nterractive business website or portfolio</p> 

                    </div>
                </a>
                
            </div>
            <div class="col  services">
             <a href="">                 
                 <div class="float-left">                       
                   <img src="../images/graphic.jpg" alt="" height="80px" width="80px" class="rounded-circle "> 
                 </div>
                 <div class="">
                  <h4>Graphics Design</h4>
                  <p class="text-white">we are experts in graphics design in the country</p> 

                 </div>
             </a>
             
           </div>
         

         

        </div>
        <div class="row" style="margin-left: " >
            <div class="col services">
                
                <a href="">                 
                    <div class="float-left">                       
                      <img src="../images/tech1.jpeg" alt="" height="80px" width="80px" class="rounded-circle "> 
                    </div>
                    <div class="">
                     <h4 >E-mail Marketing Development</h4>
                     <p class="text-white" >customize your business email hence great positive interractions with your clients</p> 

                    </div>
                </a>
                
            </div>
            <div class="col services">
             <a href="">                 
                 <div class="float-left">                       
                   <img src="../images/tech1.jpeg" alt="" height="80px" width="80px" class="rounded-circle "> 
                 </div>
                 <div class="">
                  <h4>Tech Consultation Services</h4>
                  <p class="text-white">Get the best consultation on matters to do with tech from experts in the field</p> 

                 </div>
             </a>
             
           </div>
         
        </div>

       </div>
      
   </div>
   {{-- end services-section --}}

   <a name="portfolio-section"></a>
<div class="portfolio-section" style="min-height:60vh; background-color:#3b5d8d;" >
    <div class="container text-center mr-5 " >
            
      <div class="img-slider mt-0" style="min-height:80vh">
          <div id="section" class="text-center text-white">
            <h1>Our Portfolio</h1>
          </div>
              <div class="slide active">
                  <a href="betfm.me">
                      <img src="../images/webi.jpg" alt="">
                      <div class="info">
                        <h2> <a href="betfm.me"> Betfm</a></h2>
                        <p>A web based application for gamblers.</p>
                      </div>
                  </a>
            </div>
            <div class="slide">
                <a href="soccer.me"> <img src="../images/webi.jpg" alt="">
                  <div class="info">
                      <h2> <a href="soccer.me">Soccer World</a> </h2>
                      <p>A web application for soccer lovers</p>
                  </div>
                </a>
            </div>
            <div class="slide">
                  <a href="betfm.me">
                      <img src="../images/webi.jpg" alt="">
                      <div class="info">
                        <h2> <a href="betfm.me"> Betfm</a></h2>
                        <p>A web based application for gamblers.</p>
                      </div>
                  </a>
              </div>
              <div class="slide">
                  <a href="soccer.me"> <img src="../images/webi.jpg" alt="">
                      <div class="info">
                          <h2> <a href="soccer.me">Soccer World</a> </h2>
                          <p>A web application for soccer lovers</p>
                      </div>
                    </a>
              </div>
              <div class="slide">
              <a href="betfm.me">
                <img src="../images/webi.jpg" alt="">
                <div class="info">
                  <h2> <a href="betfm.me"> Betfm</a></h2>
                  <p>A web based application for gamblers.</p>
                </div>
              </a>
              </div>
              <div class="navigation">
                <div class="btn active"></div>
                <div class="btn"></div>
                <div class="btn"></div>
                <div class="btn"></div>
                <div class="btn"></div>
              </div>
              
            
            <img src="../images/webi.jpg" alt="" style="width: 50%" class="float-left">
          </div>
    </div>
</div>
  <script type="text/javascript">
  var slides = document.querySelectorAll('.slide');
  var btns = document.querySelectorAll('.btn');
  let currentSlide = 1;

  // Javascript for image slider manual navigation
  var manualNav = function(manual){
    slides.forEach((slide) => {
      slide.classList.remove('active');

      btns.forEach((btn) => {
        btn.classList.remove('active');
      });
    });

    slides[manual].classList.add('active');
    btns[manual].classList.add('active');
  }

  btns.forEach((btn, i) => {
    btn.addEventListener("click", () => {
      manualNav(i);
      currentSlide = i;
    });
  });

  // Javascript for image slider autoplay navigation
  var repeat = function(activeClass){
    let active = document.getElementsByClassName('active');
    let i = 1;

    var repeater = () => {
      setTimeout(function(){
        [...active].forEach((activeSlide) => {
          activeSlide.classList.remove('active');
        });

      slides[i].classList.add('active');
      btns[i].classList.add('active');
      i++;

      if(slides.length == i){
        i = 0;
      }
      if(i >= slides.length){
        return;
      }
      repeater();
    }, 10000);
    }
    repeater();
  }
  repeat();
  </script>
       
    
    

{{-- end portfolio --}}
  <a name="contact-section"></a>

  <div class="contact-section pb-4 bg-dark mt-0 "  >
    <div class="container">
        <div class="contact-header text-center">
            <h1 class="text-capitalize text-white"><strong>get in touch</strong></h1>
        </div>
        <div class="row justify-content-between">
            <div class="col-md-6">
                <form action="" class="text-capitalize  contform" >
                    
                    <div class="form-group ">
                        <label for="name">name</label><br>
                        <input type="text" class="form-control" placeholder="Enter your name">
                    </div>
                    <div>
                        <label for="mail">Email</label><br>
                        <input type="text" class="form-control" placeholder="Your email">
                    </div>
                    <div>
                        <label for="message">message</label><br>
                        <textarea name="message" id="" cols="30" rows="7" class="form-control" placeholder="Enter text"></textarea>
                    </div>
                    <input type="submit" value="submit" class="btn-primary btn btnn btn-primary:hover">
                </form> 
            </div>

            <div class="col-md-4">
                <div class="contact-info">
                    <div class="d-block mb-5">
                        <span class="d-block text-uppercase ">Email</span>
                        <a href="paulyech96@gmail.com">Webicians@gmail.com</a>
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


<!--END CONTACT SECTION-->
   
<footer class=" footer-section">
    <div class="container">
            <div class=" social-md-sites text-center">
                <ul >
                    <li> <a href="https://www.facebook.com/Webicians"><i class="fab fa-facebook"></i></a></li>
                    <li><a href=""><i class="fab fa-twitter"></i></a></li>
                    <li><a href=""><i class="fab fa-instagram"></i></a></li>
                    <li><a href=""><i class="fab fa-linkedin-in"></i></a></li>
                    <li><a href=""><i class="fab fa-github"></i></a></li>

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
@endsection