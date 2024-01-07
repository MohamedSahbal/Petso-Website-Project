<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" /></head>
    <link rel="stylesheet" href="pets style.css">
    <title>pets Website</title>
</head>
<body>
    <header>
        <nav>
        <a class="logo" href="">  <i class="fas fa-paw"></i> Petso</a>
        <a href="#form" >Booking</a>
        <a href="#services" > Services </a>
        <a href="#team"> Products</a>
        <a href="#test" > Training </a>
        <a href="#cont" > Contact Us </a>
    </nav> 
    <div>
<a href="login-Register/login.php" class="but"> <i class="fas fa-sign-in-alt"> </i> login</a>
  </div>
</header>
<div class="slider-container">
  <img src="img_pets/c2.jpg" alt="Slide 1" />
  <img src="img_pets/c1.jpg" alt="Slide 2" />
  <img class="active" src="img_pets/xa.jpg" alt="Slide 3" />
</div>
<div class="slider-controls">
  <button class="active"></button>
  <button></button>
  <button></button>
</div>
<div class="slider-info">
  <h2>Welcome to our Pets Website</h2>
  <p> The website provide information, resources, and products related to pets. This website typically includes articles, tips, and advice on pet care, as well as a directory of pet-related services, such as veterinarians, pet stores, and pet sitters. The website may also offer products such as pet food and accessories for purchase.</p>
  <a  href= "#client" class="slider-btn">Learn More</a>
</div>
      <script>
      const slides = document.querySelectorAll(".slider-container img");
      const dots = document.querySelectorAll(".slider-controls button");
      let currentSlide = 0;
      // function to set active slide and dot
      function setActiveSlide(index) {
        slides.forEach((slide) => slide.classList.remove("active"));
        dots.forEach((dot) => dot.classList.remove("active"));
        slides[index].classList.add("active");
        dots[index].classList.add("active");
      }
      // set active slide and dot when page loads
      setActiveSlide(currentSlide);
      // function to change slide when dot is clicked
      function changeSlide(index) {
        currentSlide = index;
        setActiveSlide(currentSlide);
      }

      // event listener for dot clicks
      dots.forEach((dot, index) => {
        dot.addEventListener("click", () => {
          changeSlide(index);
        });
      });

      // automatic slideshow
      setInterval(() => {
        currentSlide++;
        if (currentSlide >= slides.length) {
          currentSlide = 0;
        }
        setActiveSlide(currentSlide);
      }, 3000);
      </script>
     <div class="container" id="form">
            <div class="form">
                <div class="acform">
                    <h2>Book Now!</h2>
                    <form action="cksend.php" method="post">
                        <input type="text" placeholder="Name" name="Name" required>
                        <input type="email" placeholder="Email" name="Email"required>
                        <input type="date" placeholder="Reservation Date" name="d"required>
                        <input type="time" placeholder="Reservation Time" name="t"required>
                        <select name="Select" id="">
                            <option value="Service 1">medical check</option>
                            <option value="Service 2">Groming</option>
                            <option value="Service 3">Training</option>
                        </select>
                        <input type="submit" value="Submit" placeholder="Submit" class="butn">
                    </form>
                </div>
            </div>
            <div class="text">
                <h1>Booking Form</h1>
                    <br>
                <h3>Book Your Services in a Minuite</h3>
                <br><br>
                <h4>Now You Can Book Your Pet Services With Pre Reservation Way To Save Your Time</h4>
            </div>
        </div>
<section class="cards" id="services">
  <p class="title"> <span>Pets </span> Services</p>
  <div class="content">
      <div class="card">
          <div class="icon">
              <i class="fas fa-utensils"></i>
          </div>
          <div class="info">
              <h3>Pet Feeding </h3>
              <p>It’s crucial that pets enjoy a complete and balanced diet, meaning that each serving of food provides the more than 40 nutrients that pets need. </p>
          </div>
      </div>
      <div class="card">
          <div class="icon">
              <i class="fas fa-stethoscope"></i>               
           </div>
          <div class="info">
              <h3>Pet Treatment & Vaccination </h3>
              <p>The purpose of pet treatment is to help someone recover from or cope with a health problem or mental disorder.</p>
          </div>
      </div>
      <div class="card">
          <div class="icon">
              <i class="fas fa-dumbbell"></i>             
             </div>
          <div class="info">
              <h3>Pet Training  </h3>
              <p> pets Training builds confidence, provides mental stimulation and strengthens the human-animal bond.</p>
          </div>
      </div>
      <div class="card">
          <div class="icon">
              <i class="fas fa-house-damage"></i>             
             </div>
          <div class="info">
              <h3>Pet Boarding  </h3>
              <p> There are various types of accommodations available, depending on your pet's personality. Individual or group areas .</p>
          </div>
      </div>
      
  </div>
</section>
<section id="team">
    <h1 class="our-team">Pets <span>Products</span></h1>
    <p class="meet">
    Choose what you Need
    </p>
    <div class="flex">
        <div class="division">
            <a href="">

            <img class="avatar" src="img_pets/bestpetcat.webp" alt="">
        </a>
            <h3 class="jone">
                BestPet Adult Cat Salmon 
            </h3>

            <p>
                400g
                <br>
               55.00 EGP
               <br>
                   <br>
                            </p>
                      
        </div>
        <div class="division">
            <a href="">
            <img class="avatar" src="img_pets/bestpetdog.webp" alt="">
        </a>
            <h3 class="jone">
                Bestpet Adult Dog Beef

            </h3>

            <p>
                400g
                 <br>
                <br>
                55.00 EGP 

                <br>

                            </p>
        </div>


        <div class="division">
            <a href="">
            <img class="avatar" src="img_pets/carpet-remover.webp" alt="">
        </a>
            <h3 class="jone">
                Dr. Beckmann Carpet Stain 
            </h3>

            <p>
                Remover 6 
                <br> <br>
                200.00 EGP
                <br>
                            </p>
        </div>


        <div class="division">
            <a href="">
            <img class="avatar" src= "img_pets/compy-18kgd.webp" alt="">
        </a>
            <h3 class="jone">
                Compy Dog Adult 
            </h3>

            <p>
                18kg
                <br> <br>
                1,100.00 EGP
                <br>

                  </p>
        </div>
        </div>
        <div class="flex">
        <div class="division">
            <a href="">
            <img class="avatar" src="img_pets/4clamCat.webp" alt="">
        </a>
            <h3 class="jone">
                Kind Pet Clumping Lavander 

            </h3>

            <p>
                5L
                <br> <br>
                80.00 EGP

                <br>

                            </p>
        </div>
        <div class="division">
            <a href="">
            <img class="avatar" src="img_pets/pti-22.webp" alt="">
        </a>
            <h3 class="jone">
                PTI Heptone Organic Ingredient 

            </h3>

            <p>
                100ml
                <br> <br>
                120.00 EGP

                <br>

                            </p>
        </div>
        <div class="division">
            <a href="">
            <img class="avatar" src="img_pets/orgo-1.webp" alt="">
        </a>
            <h3 class="jone">
                Orgo Party Mix Beef 

            </h3>

            <p>
                1kg
                <br> <br>
                145.00 EGP

                <br>

                            </p>
        </div>
        <div class="division">
            <a href="">
            <img class="avatar" src="img_pets/toy16-1.webp" alt="">
        </a>
            <h3 class="jone">
             PET TOY

            </h3>

            <p>
               RED
                <br> <br>
                125.00 EGP

                <br>
                

                            </p>
        </div>

    </div>
</section>

   <!-- Testimonial Start -->
   <div class="py-5X" id="client">
        <div class="containerX py-5X">
            
            <!-- start block 0 -->
            <div class="d-flexX flex-columnX text-centerX">

                <h4 class="text-secondaryX Hz4">Testimonial</h4>
                <h1 class="display-4X Hz1" >Our Client <span class="text-primaryX">Says</span></h1>

            </div>
            <!-- end block 0 -->
                <!-- start block 1 -->
                <div class="mx-3X p-4X">
                    <div class="d-flexX">
                        <img class="img-fluidX" src="img/testimonial-1.jpg" style="width: 80px; height: 80px;" alt="">
                        <div class="ml-3X">

                            <h5 class="Hz5">John</h5>

                            <i>Doctor</i>
                        </div>
                    </div>
                    <p>Positive: Easy to navigate, useful information, adorable animal pictures.</p>
                </div>
                <!-- end block 1 -->
                
                <!-- start block 2 -->
                <div class="mx-3X p-4X">
                    <div class="d-flexX">
                        <img class="img-fluid" src="img/testimonial-2.jpg" style="width: 80px; height: 80px;" alt="">
                        <div class="ml-3X">
                            <h5 class="Hz5">Peter</h5>
                            <i>Engineer</i>
                        </div>
                    </div>
                    <p> Helpful information, cluttered layout, could use more resources for less common pets.</p>
                </div>
                <!-- end block 2 -->
                <!-- start block 3 -->
                <div class="mx-3X p-4X">
                    <div class="d-flexX">
                        <img class="img-fluid" src="img/testimonial-3.jpg" style="width: 80px; height: 80px;" alt="">
                        <div class="ml-3X">
                            <h5 class="Hz5">Robert</h5>
                            <i>Teacher</i>
                        </div>
                    </div>
                    <p>Positive for beginners Clear and concise information, great for first-time pet owners. Could use more advanced content.</p>
                </div>
                <!-- end block 3 -->
                <!-- start block 4 -->
                <div class=" mx-3X p-4X">
                    <div class="d-flexX">
                        <img class="img-fluid" src="img/testimonial-4.jpg" style="width: 80px; height: 80px;" alt="">
                        <div class="ml-3X">
                            <h5 class="Hz5">David</h5>
                            <i>Employee</i>
                        </div>
                    </div>
                    <p>Concerned about product recommendations: Worried about profit-driven recommendations, would like more transparency</p>
                </div>
            </div>
            <!-- start block 4 -->
        </div>
    </div>
    <style>
.our-work{
color: #fff;
}

.white h3{
    color: #ED6436;
}
.white{
    color:#fff;
}
    </style>
    <!-- Testimonial End -->
    <section class="gray" id="test">
        <div class="our-work" >
            <h2>
                How to Train your Pet 
            </h2>

            <p>
               Training a pet is a hard but not impossible task. It is worth saying right away that you can do it yourself without the help of a training centre or a dog and cat trainer. Of course, there are training schools that offer training courses for pets, but this is not a requirement, just a solution if your dog or cat is particularly difficult to train. You do not need to become a dog trainer or even a dog educator to succeed.
            </p>
        </div>

        <div class="white">
            <img class="snow" src="img_pets/german-training.jpg" alt="">

            <h3>
                Dog training
            </h3>

            <p>
                Teaching your dog basic obedience - such as sit, wait and coming back when called - 
                gives them the freedom to do the things they like to do.
            </p>
            

        </div>

        <div class="white">

            <img class="snow" src="img_pets/gray-stripped-cat-.webp" alt="">

            <h3>
                Cat training

            </h3>

            <p>
                A common misconception a lot of people have is that it is impossible to train a cat. That is simply not true.
                 If done correctly, cats are very receptive to any natural forms of training. 
                

            </p>


        </div>

        <div class="white">

            <img class="snow" src="img_pets/qsvsakqak1qdb6du89rl.webp" alt="">

            <h3>
                Benefits of Playing With Your Pet

            </h3>

            <p>
                Everyone knows that playing games with your pet is fun, but what we don’t often consider is that the benefits of play go well beyond just having fun.
                 It’s a great way to bond with your pet.
            </p>


        </div>

     </section>
  	<!--Contact Us--->
    <section id="cont" class="c">
      <p class="head">
          Contact Us
      </p>
      <div class="contact-us">
          <h1>
              Mohamed Sahbal
          </h1>
  
  <p>
      <i class="fab fa-facebook-f"></i> Mohamed Sahbal 
  </p>
  
  <p>
      <i class="fab fa-instagram"></i>   mo.sahbal 
  </p>
  <p>
      <i class="fas fa-map-marker-alt"></i>  Shebin-Elkom
  </p>
  <p>
      <i class="fas fa-phone-alt"></i>  0127645490
  </p> 
  <p>
      <i class="fas fa-envelope"></i> Mohamedsahbal@gmail.com
  </p>
  
      </div>
      <div class="contact-us">
          <h1>
              Mahmoud Tarek
          </h1>
  
  <p>
      <i class="fab fa-facebook-f"></i>  Mahmoud Tarek  
  </p>
  
  <p>
      <i class="fab fa-instagram"></i>  mahmoud tarek20
  </p>
  <p>
      <i class="fas fa-map-marker-alt"></i>  Alexandria
  <p>
      <i class="fas fa-phone-alt"></i>   01032718222
  </p> 
  <p>
      <i class="fas fa-envelope"></i>  MahmoudTarek@gamil.com
  </p>
  
      </div>
      <div class="contact-us">
          <h1>
              Mohamed Taha
          </h1>
  
  <p>
      <i class="fab fa-facebook-f"></i>  Mohamed Taha

  </p>
  
  <p>
      <i class="fab fa-instagram"></i>  mohamedtaha70
  </p>
  <p>
      <i class="fas fa-map-marker-alt"></i>  Alsanta
  </p>
  <p>
      <i class="fas fa-phone-alt"></i>   01022723189
  </p> 
  <p>
      <i class="fas fa-envelope"></i>  MohamedTaha@gmail.com
  </p>
  
      </div>
      <div class="contact-us">
          <h1>
              Mohamed Elsayed        
              </h1>
  
  <p>
      <i class="fab fa-facebook-f"></i>  Mohamed Elsayed
  </p>
  
  <p>
      <i class="fab fa-instagram"></i>  mohamedelsayed12
  </p>
  <p>
      <i class="fas fa-map-marker-alt"></i>  Elmahala 
  </p>
  <p>
      <i class="fas fa-phone-alt"></i>   01099315965
  </p> 
  <p>
      <i class="fas fa-envelope"></i>  mohamedelsayed@gmail.com
  </p>
  
      </div>
      <div class="contact-us">
        <h1>
Mahmoud Ibrahim     
   </h1>

<p>
    <i class="fab fa-facebook-f"></i> Mahmoud Ibrahim     

</p>

<p>
    <i class="fab fa-instagram"></i>   Mahmoudibrahim60     
 
</p>
<p>
    <i class="fas fa-map-marker-alt"></i>  Elmahala
</p>
<p>
    <i class="fas fa-phone-alt"></i>  01090223081
</p> 
<p>
    <i class="fas fa-envelope"></i> Mahmoudibrahim@gmail.com
</p>

    </div>
  
  </section>

    <!--Footer--->
  <footer>
      <p class="footer-title">Copyrights @ <span>5M Team</span></p>
      <p>
          Follow Us
      </p>
      <div class="main-icon">
          <div><i class="fab fa-facebook-f"></i></div>
          <div><i class="fab fa-twitter"></i></div>
          <div><i class="fab fa-instagram"></i></div>
          <div><i class="fab fa-youtube"></i></div>
      </div>
  </footer>
</body>
</html>