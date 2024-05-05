<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BaigAd</title>
    <link rel="stylesheet" href="index.css">
   <!-- Bootstrap JavaScript -->
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel&family=Cormorant+SC:wght@400&family=Crimson+Text&family=Raleway:wght@300&family=Ubuntu:wght@400&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@200&family=Cinzel&family=Cormorant+SC:wght@300&family=Crimson+Text&family=Raleway:wght@200&family=Sen:wght@500&family=Ubuntu:wght@300&display=swap" rel="stylesheet">
    <script src="index.js"></script>
</head>
<body>
<body>
    <header>
        <a class="navbar-brand" href="#">Baig Advertising</a>
    </header>
    <div class="container">
    <div class="row">
    <nav class="navbar navbar-custom">
    <nav class="navbar navbar-light bg-transparent navbar-expand-md">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarContent">
                    <ul class="navbar-nav">
            
                    <li class="nav-item active">
                    <a class="nav-link" href="/">Home <span class="sr-only"></span></a>
                    </li>

                    <li class="nav-item active">
                        <a class="nav-link" href="itservices">IT Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#container2">Our Work</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#footer">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
</div>
<script>
// JavaScript to make the navbar fixed while scrolling and change styles
window.addEventListener("scroll", function () {
    const navbar = document.querySelector(".navbar");
    const navbarLinks = document.querySelectorAll(".navbar-nav .nav-link");

    if (window.scrollY > 0) {
        navbar.style.position = "fixed";
        navbar.style.top = "0";
        navbar.style.backgroundColor = "black";
        navbar.style.transition = "background-color 0.3s ease-in-out"; // Add transition

        // Change text color of navbar links
        navbarLinks.forEach(function (link) {
            link.style.color = "white";
            link.style.transition = "color 0.3s ease-in-out"; // Add transition
        });
    } else {
        navbar.style.position = "static";
        navbar.style.backgroundColor = "transparent";
        navbar.style.transition = "background-color 0.3s ease-in-out"; // Add transition

        // Reset text color of navbar links
        navbarLinks.forEach(function (link) {
            link.style.color = "rgb(0, 0, 0)";
            link.style.transition = "color 0.3s ease-in-out"; // Add transition
        });
    }
});

</script>


    </nav>
    </nav>
    <section id="news">
    <div class="hwrap"><div class="hmove">
        <div class="hitem">ADVERTISING</div>
        <div class="hitem">MARKETING</div>
        <div class="hitem">ADVERTISING</div>
        <div class="hitem">MARKETING</div>
        </div></div>
    </section>

    <!-- Bootstrap JavaScript and jQuery links -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


    <div class="container">
    <div class="row">
        <div class="col-md-5">
            <h1 id="tagline">From Ideas to Illumination<br>We Create the Signs that Define You</h1>
            <h3 id="tagline2">We deal in all kinds of advertisement</h3>
        </div>
        <div class="col-md-7">
            <img src="b1.jpg" alt="sign" class="img-fluid rounded" style="margin-top:5%">
        </div>
    </div>
</div>


    <script>
        
    </script>
    

    <!-- <section id="container1" class="swipe-up">
        

         <div id="textcontainer1">
         <h1 class="ml2">Welcome to our world of innovation <br>and visual brilliance</h1>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
         <p id="textp1">
         At <strong>Baig Advertising</strong>, we specialize in crafting captivating sign boards, 3D letter boards, and dynamic light boards that transcend traditional marketing. Our designs not only communicate your brand's identity but also illuminate it with a touch of artistry. Whether it's indoor or outdoor signage, our expert team ensures each creation reflects your unique vision and resonates with your target audience. Get ready to stand out from the crowd and make a luminous impact with our exceptional signage solutions.
         </p>
         <div id="imgcontainer1">
            <img src="b2.jpg" alt="sign" >
         </div>
    </section> -->
    <style>
        .container1 {
            max-width: 92%;
            height: auto;
            background: rgb(0, 0, 0);
            border-radius: 20px;
            margin: 50px auto; 
            padding: 20px;
        }
    
        .hcontainer1 {
            
            color: beige;
            font-family: 'Ubuntu', sans-serif;
            padding: 5%;
            text-align: left;
            opacity: 0; /* Start with opacity 0 */
            transform: translateY(20px); /* Initial position above */
            transition: opacity 1s, transform 1s;
        }
        .pcontainer1 {
            color: beige;
            font-family: 'Ubuntu', sans-serif;
            padding: 5%;
            text-align: justify;
        }
    
        img{
            position: relative;
            width: 100%;
            height: 90%;
            margin-top: 20px;
            margin-right: 20px;
            border-radius: 10px;
        }
    </style>
    </head>
    <body>
        <div class="row container1">
            <!-- <div class="col-8 col-xs-12 col-sm-12 col-md-8 col-lg-8 col-xl-8"> -->
            <div class="col-12 col-md-8 col-lg-8 col-xl-8">
                <h1 class="hcontainer1">Welcome to our world of innovation <br>and visual brilliance</h1>
             <p class="pcontainer1">At <strong>Baig Advertising</strong>, we specialize in crafting captivating sign boards, 3D letter boards, and dynamic light boards that transcend traditional marketing. Our designs not only communicate your brand's identity but also illuminate it with a touch of artistry. Whether it's indoor or outdoor signage, our expert team ensures each creation reflects your unique vision and resonates with your target audience. Get ready to stand out from the crowd and make a luminous impact with our exceptional signage solutions.
             </p>
            </div>
            <div class=" col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                <img src="./b2.jpg" alt="">
            </div>
        </div>
    
        <script>
            // Function to check if an element is in the viewport
            function isElementInViewport(el) {
                const rect = el.getBoundingClientRect();
                return (
                    rect.top >= 0 &&
                    rect.left >= 0 &&
                    rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                    rect.right <= (window.innerWidth || document.documentElement.clientWidth)
                );
            }
    
            // Function to handle the animation
            function handleScrollAnimation() {
                const hcontainer1 = document.querySelector('.hcontainer1');
                if (isElementInViewport(hcontainer1)) {
                    hcontainer1.style.opacity = '1';
                    hcontainer1.style.transform = 'translateY(0)';
                }
            }
    
            // Listen for scroll events and trigger the animation
            window.addEventListener('scroll', handleScrollAnimation);
            
            // Trigger the animation once when the page loads (in case it's already in the viewport)
            handleScrollAnimation();
        </script>

   <script>
<section id="container1" class="swipe-up">
    <!-- Your content here -->
</section>

<script>

function isInViewport(element) {
    const rect = element.getBoundingClientRect();
    return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
}

function addSwipeUpAnimation() {
    const container1 = document.getElementById('container1');
    
    if (isInViewport(container1)) {
        container1.classList.add('swipe-up');
    } else {
        container1.classList.remove('swipe-up');
    }
}

// Listen for scroll events and check for the animation trigger
window.addEventListener('scroll', addSwipeUpAnimation);

// Initial check on page load
<script>
let hasScrolledDown = false; // Flag to track if user has scrolled down

// Function to check if an element is in the viewport
function isInViewport(element) {
    const rect = element.getBoundingClientRect();
    return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
}

// Function to add swipe-up animation when #container2 is in the viewport and user has scrolled down
function addSwipeUpAnimation() {
    const container1 = document.getElementById('container1');
    
    if (isInViewport(container1) && hasScrolledDown) {
        container1.classList.add('swipe-up');
    } else {
        container1.classList.remove('swipe-up');
    }
}

// Listen for scroll events and check for the animation trigger
window.addEventListener('scroll', function() {
    if (window.scrollY > 0) {
        hasScrolledDown = true;
    }
    addSwipeUpAnimation();
});

// Initial check on page load
addSwipeUpAnimation();
</script>

<section id="container2" class="text-center">
    <ul class="list-unstyled d-flex justify-content-between px-5">
        <li>Worked all over Pakistan</li>
        <li>Worked with Big brands</li>
        <li>Satisfied Clients <span class="counter" id="clientCounter">0%</span></li>
    </ul>
    <hr class="line-1 my-3">
</section>

    



<style media="screen">

#slider {
    // margin-bottom:20px;
  position: relative;
  width: 40%;
  height: 340px;
  margin: 40px auto;
  font-family: 'Helvetica Neue', sans-serif;
  perspective: 1400px;
  transform-style: preserve-3d;
}

input[type=radio] {
  position: relative;
  top: 108%;
  left: 50%;
  width: 18px;
  height: 18px;
  margin: 20px auto;
    // margin-bottom:50px;
opacity: 0.4;
  transform: translateX(-83px);
  cursor: pointer;
}


input[type=radio]:nth-child(5) {
  margin-right: 0px;
}

input[type=radio]:checked {
  opacity: 1;
}




#slider label,
#slider label img {
  position: absolute;
  width: 100%;
  height: 100%;
  left: 0;
  top: 0;
  color: white;
  font-size: 70px;
  font-weight: bold;
  border-radius: 3px;
  cursor: pointer;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: transform 400ms ease;
}



/* Slider Functionality */

/* Active Slide */
#s1:checked ~ #slide1,
 #s2:checked ~ #slide2,
  #s3:checked ~ #slide3,
   #s4:checked ~ #slide4,
    #s5:checked ~ #slide5 {
  box-shadow: 0 13px 26px rgba(0,0,0, 0.3), 0 12px 6px rgba(0,0,0, 0.2);
  transform: translate3d(0%, 0, 0px);
}

/* Next Slide */
#s1:checked ~ #slide2,
 #s2:checked ~ #slide3,
  #s3:checked ~ #slide4,
   #s4:checked ~ #slide5,
    #s5:checked ~ #slide1 {
  box-shadow: 0 6px 10px rgba(0,0,0, 0.3), 0 2px 2px rgba(0,0,0, 0.2);
  transform: translate3d(20%, 0, -100px);
}


/* Next to Next Slide */
#s1:checked ~ #slide3,
 #s2:checked ~ #slide4,
  #s3:checked ~ #slide5,
   #s4:checked ~ #slide1,
    #s5:checked ~ #slide2 {
  box-shadow: 0 1px 4px rgba(0,0,0, 0.4);
  transform: translate3d(40%, 0, -250px);
}

/* Previous to Previous Slide */
#s1:checked ~ #slide4,
 #s2:checked ~ #slide5,
  #s3:checked ~ #slide1,
   #s4:checked ~ #slide2,
    #s5:checked ~ #slide3 {
  box-shadow: 0 1px 4px rgba(0,0,0, 0.4);
  transform: translate3d(-40%, 0, -250px);
}

/* Previous Slide */
#s1:checked ~ #slide5,
 #s2:checked ~ #slide1,
  #s3:checked ~ #slide2,
   #s4:checked ~ #slide3,
    #s5:checked ~ #slide4 {
  box-shadow: 0 6px 10px rgba(0,0,0, 0.3), 0 2px 2px rgba(0,0,0, 0.2);
  transform: translate3d(-20%, 0, -100px);
}


  </style>
</head>
<body>
<h2 id='gallery'>Gallery</h2>
<section id="slider">
  <input type="radio" name="slider" id="s1" checked>
  <input type="radio" name="slider" id="s2">
  <input type="radio" name="slider" id="s3">
  <input type="radio" name="slider" id="s4">
  <input type="radio" name="slider" id="s5">

  <label for="s1" id="slide4"><img src="p4.jpg" alt=""></label>
  <label for="s2" id="slide1"><img src="p1.jpg" alt=""></label>
  <label for="s3" id="slide2"><img src="p11.jpg" alt=""></label>
  <label for="s4" id="slide3"><img src="p7.jpg" alt=""></label>
  <label for="s5" id="slide5"><img src="p19.jpg" alt=""></label>
</section>    




    <div class="col-md-8" id="containerb">
    <div class="containerbutton">
        <a class="custom-button" href="{{ route('portfolio.index') }}" style="--color: Black;">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            Click here to see all Projects
        </a>
    </div>
</div>


    </section>

    <div class="container3">
    <section class="row justify-content-center">
        <div class="col-md-6">
            <h1 id="WWO">What We <strong>Offer</strong></h1>
        </div>
    </section>

    <section class="row justify-content-center mt-4">
        <div class="col-md-3">
            <div class="card" id="card1">
                <h2 class="ctitle" id="ctitle1">3D letter boards</h2>
                <div class="back">
                    <p>3D letter signboards add a dynamic and eye-catching dimension to any storefront or signage, making a lasting impression</p>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card" id="card2">
                <h2 class="ctitle" id="ctitle2">Stainless steel letters</h2>
                <div class="back">
                    <p>Stainless steel sign boards combine durability with a sleek, modern aesthetic, ensuring long-lasting and professional signage solutions</p>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card" id="card3">
                <h2 class="ctitle" id="ctitle3">Neon</h2>
                <div class="back">
                    <p>Neon lighting emits a vibrant and nostalgic glow, infusing spaces with a retro charm or contemporary allure</p>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card" id="card4">
                <h2 class="ctitle" id="ctitle4">Pana-flex Sign Boards</h2>
                <div class="back">
                    <p>Pana-flex sign boards are highly flexible, making them a popular choice for businesses seeking eye-catching and weather-resistant signage.</p>
                </div>
            </div>
        </div>

    </section>
</div>


    
 




<!-- for cards animation -->






<!-- for button  -->
<script>
let animationStarted = false;

function startCounterAnimation(targetElement, finalValue, duration) {
    if (animationStarted) return; // Check if animation has already started
    animationStarted = true;

    let startTime;
    const element = document.getElementById(targetElement);

    function updateCounter(timestamp) {
        if (!startTime) startTime = timestamp;
        const progress = timestamp - startTime;
        const percentComplete = Math.min(progress / duration, 1);
        const value = Math.floor(finalValue * percentComplete);

        element.textContent = value + "%";

        if (percentComplete < 1) {
            requestAnimationFrame(updateCounter);
        }
    }

    requestAnimationFrame(updateCounter);
}

const clientCounter = document.getElementById("clientCounter");

function isInViewport(element) {
    const rect = element.getBoundingClientRect();
    return (
        rect.top >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight)
    );
}

window.addEventListener("scroll", function () {
    if (isInViewport(clientCounter)) {
        startCounterAnimation("clientCounter", 99, 2000);
    }
});
    </script>


<style>
#cucontainer{
    padding:4%;
}

#submitButton{
    color:white;
    background-color:black;
    border:1px solid black;
}
#contacth1{
    // text-align:center;
}
.popup {
  position: fixed;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  background-color: rgba(0, 0, 0, 0.8);
  color: white;
  padding: 20px;
  border-radius: 5px;
  opacity: 0;
  transition: opacity 0.3s, transform 0.3s;
  z-index: 9999;
  text-align: center;
}

.show-popup {
  opacity: 1;
  transform: translate(-50%, -50%) scale(1);
}


</style>
<div class="container-fluid contact-us-container" id="cucontainer">
    <div class="row">
        <!-- Left column for heading and description -->
        <div class="col-md-4">
            <h1 id="contacth1">Contact Us</h1>
            <p id="contactp">Have a question? <br>or need to get in touch?<br>Fill out the form below<br>and we'll get back to you as soon as possible.</p>
        </div>
        <div class="col-md-8">
            <form action="{{route('contact.store')}}" method="POST" id="myForm">
                @csrf

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" id="name" class="form-control" required>
                    </div>

                    <div class="col-md-6">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" id="email" class="form-control" required>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea name="message" id="message" class="form-control" rows="4" required></textarea>
                </div>

                <button type="submit" class="btn btn-primary" id="submitButton">Submit</button>
            </form>
        </div>
    </div>
</div>
<script>

document.getElementById('submitButton').addEventListener('click', function(event) {
  event.preventDefault(); // Prevent the form from submitting normally

  // Perform custom validation here
  var nameInput = document.getElementById('name');
  var emailInput = document.getElementById('email');
  var messageInput = document.getElementById('message');

  if (nameInput.value.trim() === '' || emailInput.value.trim() === '' || messageInput.value.trim() === '') {
    // Show an error message with animation
    var popup = document.createElement('div');
    popup.className = 'popup';
    popup.innerText = 'Please fill in all the required fields';
    document.body.appendChild(popup);

    setTimeout(function() {
      popup.classList.add('show-popup');
    }, 10);

    // Hide the popup after a few seconds
    setTimeout(function() {
      popup.classList.remove('show-popup');
      setTimeout(function() {
        document.body.removeChild(popup);
      }, 300);
    }, 2000);

    return;
  }

  // If all fields are filled, show the success message with animation
  var successPopup = document.createElement('div');
  successPopup.className = 'popup success-popup';
  successPopup.innerText = 'Message sent';
  document.body.appendChild(successPopup);

  setTimeout(function() {
    successPopup.classList.add('show-popup');
  }, 10);

  // Hide the success popup after a few seconds
  setTimeout(function() {
    successPopup.classList.remove('show-popup');
    setTimeout(function() {
      document.body.removeChild(successPopup);
    }, 300);
  }, 3000);

  // Submit the form
  document.getElementById('myForm').submit(); // Submit the form
});
</script>
    
    
  
  
   





  <!-- Footer -->
  <footer class="text-center text-lg-start text-white full-width-footer" style="background-color: black ; margin-top:20px" >
    
    <div class="container p-4 pb-0" id="footer">
      <section class="">
        <div class="row">
          <div class="col-md-3 col-lg-3 col-xl-3 col-12 mx-auto mt-3">
            <h4 class="text-uppercase mb-4 font-weight-bold " style="
            font-family: 'Cormorant SC', serif;font-size: 30px;font-weight:600;letter-spacing:2px">
              Baig Advertising
            </h4>
            <p>
              We Deals in all kind of advertisement  
            </p>
          </div>

          <div class="col-md-2 col-lg-2 col-xl-2 col-12 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">Products</h6>
            <p>
              3D signboards
            </p>
            <p>
            Stainless steel signs
            </p>
            <p>
              Neon
            </p>
  
          </div>
          <div class="col-md-4 col-lg-3 col-xl-3 col-12 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
            <p><i class="fas fa-home mr-3"></i> 0300-6653407  /  0321-6653407</p>
          
            <p><i class="fas fa-envelope mr-3"></i> baigadvertising@outlook.com</p>
            <p><i class="fas fa-phone mr-3"></i> Faisalabad</p>
          </div>

        </div>
      </section>
    </div>
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
      © 2023 Copyright:
      <a class="text-white" href="/">baigad.com</a>
    </div>
  </footer>
  <!-- Footer -->
</div>


    


</body>
</html>