<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BaigAd</title>
    <link rel="stylesheet" href="index.css">    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel&family=Cormorant+SC:wght@400&family=Crimson+Text&family=Raleway:wght@300&family=Ubuntu:wght@400&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@200&family=Cinzel&family=Cormorant+SC:wght@300&family=Crimson+Text&family=Raleway:wght@200&family=Sen:wght@500&family=Ubuntu:wght@300&display=swap" rel="stylesheet">


</head>
<body>
<body>

<header>
        <a class="navbar-brand" href="#">Baig Advertising</a>
    </header>
    <div class="container">
        <div class="row">
            <nav class="navbar navbar-custom">
                <div class="justify-content-center">
                    <ul class="navbar-nav">
					<li class="nav-item active">
    <a class="nav-link" href="/">
        <span>&larrb;</span> Back to Home <span class="sr-only"></span>
    </a>
</li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
<script>
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
<!-- Start work from here pic grids -->
<style>

@media (max-width: 767px) {
            .navbar-custom .navbar-toggler {
                display: none; /* Hide the toggle button on smaller screens */
            }
            
            .navbar-nav {
                text-align: center;
				
            }

            .navbar-nav .nav-item {
                display: inline-block;
            }
        }



.photo-grid {
            padding-right:2%;
            padding-left:2%;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin-top: 20px;
            
        }

        .photo {
            width: 30%;
            height:30%;
            margin-bottom: 20px;
            position: relative;
        }

        .photo img {
            width: 100%;
            height: auto;
            border-radius:10px;
            box-shadow: 0px 4px 8px rgba(0.7, 0, 0, 0.8);
        }

        .photo-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            opacity: 0;
            transition: opacity 0.3s;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .photo:hover .photo-overlay {
            opacity: 1;
        }

        .photo-overlay-content {
            text-align: center;
        }

        .download-button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #fff;
            color: #000;
            text-decoration: none;
            font-size: 16px;
            font-weight: bold;
            margin-top: 10px;
        }
        .tagline {
            font-size: 1.8rem;
            font-weight: bold;
            margin-top: 75px;
            text-align:center;
            font-family: Brush Script MT;
        }  

        /* Description styles */
        .description {
            font-size: 1rem;
            margin-top: 10px;
            text-align:center;
            margin-bottom:30px;
        } 

        @keyframes white-line {
            0% {
                width: 0;
            }
            100% {
                width: 100%;
            }
        }








        .photo {
    position: relative;
    display: inline-block;
}

.photo-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: rgba(0, 0, 0, 0.5);
    opacity: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    transition: opacity 0.3s ease-in-out;
}

.full-view-button {
    display: none;
    padding: 10px 20px;
    background-color: white;
    color: black;
    text-decoration: none;
    border-radius: 5px;
    transition: opacity 0.3s ease-in-out;
}

.photo:hover .photo-overlay {
    opacity: 1;
}

.photo:hover .full-view-button {
    display: block;
}

        </style>
         <div class="photo-grid">
            <div class="photo">
                <img src="{{ asset('p1.jpg') }}" alt="Photo 1">
                <div class="photo-overlay">
                <div class="photo-overlay-content">
                        <a href="{{ asset('p1.jpg') }}" class="full-view-button">Full view</a>
                    </div>
                </div>
            </div>
            <div class="photo">
                <img src="{{ asset('p2.jpg') }}" alt="Photo 2">
                <div class="photo-overlay">
                <div class="photo-overlay-content">
                        <a href="{{ asset('p2.jpg') }}" class="full-view-button">Full view</a>
                    </div>
                </div>
            </div>
            <div class="photo">
                <img src="{{ asset('p3.jpg') }}" alt="Photo 3">
                <div class="photo-overlay">
                <div class="photo-overlay-content">
                        <a href="{{ asset('p3.jpg') }}" class="full-view-button">Full view</a>
                    </div>
                </div>
            </div>
            <div class="photo">
                <img src="{{ asset('p4.jpg') }}" alt="Photo 4">
                <div class="photo-overlay">
                <div class="photo-overlay-content">
                        <a href="{{ asset('p4.jpg') }}" class="full-view-button">Full view</a>
                    </div>
                </div>
            </div>
            <div class="photo">
                <img src="{{ asset('p5.jpg') }}" alt="Photo 5">
                <div class="photo-overlay">
                <div class="photo-overlay-content">
                        <a href="{{ asset('p5.jpg') }}" class="full-view-button">Full view</a>
                    </div>
                </div>
            </div>
            <div class="photo">
                <img src="{{ asset('p6.jpeg') }}" alt="Photo 6">
                <div class="photo-overlay">
                <div class="photo-overlay-content">
                        <a href="{{ asset('p6.jpeg') }}" class="full-view-button">Full view</a>
                    </div>
                </div>
            </div>
            <div class="photo">
                <img src="{{ asset('p7.jpg') }}" alt="Photo 7">
                <div class="photo-overlay">
                <div class="photo-overlay-content">
                        <a href="{{ asset('p7.jpg') }}" class="full-view-button">Full view</a>
                    </div>
                </div>
            </div>
            <div class="photo">
                <img src="{{ asset('p8.jpg') }}" alt="Photo 8">
                <div class="photo-overlay">
                <div class="photo-overlay-content">
                        <a href="{{ asset('p8.jpg') }}" class="full-view-button">Full view</a>
                    </div>
                </div>
            </div>
            <div class="photo">
                <img src="{{ asset('p9.jpg') }}" alt="Photo 9">
                <div class="photo-overlay">
                <div class="photo-overlay-content">
                        <a href="{{ asset('p9.jpg') }}" class="full-view-button">Full view</a>
                    </div>
                </div>
            </div>
            <div class="photo">
                <img src="{{ asset('p10.jpg') }}" alt="Photo 10">
                <div class="photo-overlay">
                    <div class="photo-overlay-content">
                        <a href="{{ asset('p10.jpg') }}" class="full-view-button">Full view</a>
                    </div>
                </div>
            </div>
            <div class="photo">
                <img src="{{ asset('p11.jpg') }}" alt="Photo 10">
                <div class="photo-overlay">
                    <div class="photo-overlay-content">
                        <a href="{{ asset('p11.jpg') }}" class="full-view-button">Full view</a>
                    </div>
                </div>
            </div>
            <div class="photo">
                <img src="{{ asset('p12.jpg') }}" alt="Photo 10">
                <div class="photo-overlay">
                    <div class="photo-overlay-content">
                        <a href="{{ asset('p12.jpg') }}" class="full-view-button">Full view</a>
                    </div>
                </div>
            </div>
            <div class="photo">
                <img src="{{ asset('p13.jpg') }}" alt="Photo 10">
                <div class="photo-overlay">
                    <div class="photo-overlay-content">
                        <a href="{{ asset('p13.jpg') }}" class="full-view-button">Full view</a>
                    </div>
                </div>
            </div>
            <div class="photo">
                <img src="{{ asset('p14.jpg') }}" alt="Photo 10">
                <div class="photo-overlay">
                    <div class="photo-overlay-content">
                        <a href="{{ asset('p14.jpg') }}" class="full-view-button">Full view</a>
                    </div>
                </div>
            </div>
            <div class="photo">
                <img src="{{ asset('p15.jpg') }}" alt="Photo 10">
                <div class="photo-overlay">
                    <div class="photo-overlay-content">
                        <a href="{{ asset('p15.jpg') }}" class="full-view-button">Full view</a>
                    </div>
                </div>
            </div>
            <div class="photo">
                <img src="{{ asset('p16.jpg') }}" alt="Photo 10">
                <div class="photo-overlay">
                    <div class="photo-overlay-content">
                        <a href="{{ asset('p16.jpg') }}" class="full-view-button">Full view</a>
                    </div>
                </div>
            </div>
            <div class="photo">
                <img src="{{ asset('p17.jpg') }}" alt="Photo 10">
                <div class="photo-overlay">
                    <div class="photo-overlay-content">
                        <a href="{{ asset('p17.jpg') }}" class="full-view-button">Full view</a>
                    </div>
                </div>
            </div>
            <div class="photo">
                <img src="{{ asset('p18.jpg') }}" alt="Photo 10">
                <div class="photo-overlay">
                    <div class="photo-overlay-content">
                        <a href="{{ asset('p18.jpg') }}" class="full-view-button">Full view</a>
                    </div>
                </div>
            </div>
            <div class="photo">
                <img src="{{ asset('p19.jpg') }}" alt="Photo 10">
                <div class="photo-overlay">
                    <div class="photo-overlay-content">
                        <a href="{{ asset('p19.jpg') }}" class="full-view-button">Full view</a>
                    </div>
                </div>
            </div>
            <div class="photo">
                <img src="{{ asset('p20.jpg') }}" alt="Photo 10">
                <div class="photo-overlay">
                    <div class="photo-overlay-content">
                        <a href="{{ asset('p20.jpg') }}" class="full-view-button">Full view</a>
                    </div>
                </div>
            </div>
            <div class="photo">
                <img src="{{ asset('p21.jpeg') }}" alt="Photo 10">
                <div class="photo-overlay">
                    <div class="photo-overlay-content">
                        <a href="{{ asset('p21.jpeg') }}" class="full-view-button">Full view</a>
                    </div>
                </div>
            </div>
            <div class="photo">
                <img src="{{ asset('p22.jpeg') }}" alt="Photo 10">
                <div class="photo-overlay">
                    <div class="photo-overlay-content">
                        <a href="{{ asset('p22.jpeg') }}" class="full-view-button">Full view</a>
                    </div>
                </div>
            </div>
            <div class="photo">
                <img src="{{ asset('p23.jpeg') }}" alt="Photo 10">
                <div class="photo-overlay">
                    <div class="photo-overlay-content">
                        <a href="{{ asset('p23.jpeg') }}" class="full-view-button">Full view</a>
                    </div>
                </div>
            </div>
            <div class="photo">
                <img src="{{ asset('p24.jpeg') }}" alt="Photo 10">
                <div class="photo-overlay">
                    <div class="photo-overlay-content">
                        <a href="{{ asset('p24.jpeg') }}" class="full-view-button">Full view</a>
                    </div>
                </div>
            </div>
            <div class="photo">
                <img src="{{ asset('p25.jpeg') }}" alt="Photo 10">
                <div class="photo-overlay">
                    <div class="photo-overlay-content">
                        <a href="{{ asset('p25.jpeg') }}" class="full-view-button">Full view</a>
                    </div>
                </div>
            </div>
            <div class="photo">
                <img src="{{ asset('p26.jpeg') }}" alt="Photo 10">
                <div class="photo-overlay">
                    <div class="photo-overlay-content">
                        <a href="{{ asset('p26.jpeg') }}" class="full-view-button">Full view</a>
                    </div>
                </div>
            </div>
            <div class="photo">
                <img src="{{ asset('p27.jpeg') }}" alt="Photo 10">
                <div class="photo-overlay">
                    <div class="photo-overlay-content">
                        <a href="{{ asset('p27.jpeg') }}" class="full-view-button">Full view</a>
                    </div>
                </div>
            </div>
            <div class="photo">
                <img src="{{ asset('p28.jpeg') }}" alt="Photo 10">
                <div class="photo-overlay">
                    <div class="photo-overlay-content">
                        <a href="{{ asset('p28.jpeg') }}" class="full-view-button">Full view</a>
                    </div>
                </div>
            </div>
            <div class="photo">
                <img src="{{ asset('p29.jpeg') }}" alt="Photo 10">
                <div class="photo-overlay">
                    <div class="photo-overlay-content">
                        <a href="{{ asset('p29.jpeg') }}" class="full-view-button">Full view</a>
                    </div>
                </div>
            </div>
            <div class="photo">
                <img src="{{ asset('p30.jpeg') }}" alt="Photo 10">
                <div class="photo-overlay">
                    <div class="photo-overlay-content">
                        <a href="{{ asset('p30.jpeg') }}" class="full-view-button">Full view</a>
                    </div>
                </div>
            </div>
            <!-- <div class="photo">
                <img src="{{ asset('p31.jpeg') }}" alt="Photo 10">
                <div class="photo-overlay">
                    <div class="photo-overlay-content">
                        <a href="{{ asset('p31.jpeg') }}" class="full-view-button">Full view</a>
                    </div>
                </div>
            </div> -->
            <div class="photo">
                <img src="{{ asset('p32.jpeg') }}" alt="Photo 10">
                <div class="photo-overlay">
                    <div class="photo-overlay-content">
                        <a href="{{ asset('p32.jpeg') }}" class="full-view-button">Full view</a>
                    </div>
                </div>
            </div>
            <div class="photo">
                <img src="{{ asset('p33.jpeg') }}" alt="Photo 10">
                <div class="photo-overlay">
                    <div class="photo-overlay-content">
                        <a href="{{ asset('p33.jpeg') }}" class="full-view-button">Full view</a>
                    </div>
                </div>
            </div>
            <div class="photo">
                <img src="{{ asset('p34.jpeg') }}" alt="Photo 10">
                <div class="photo-overlay">
                    <div class="photo-overlay-content">
                        <a href="{{ asset('p34.jpeg') }}" class="full-view-button">Full view</a>
                    </div>
                </div>
            </div>
            <div class="photo">
                <img src="{{ asset('p35.jpeg') }}" alt="Photo 10">
                <div class="photo-overlay">
                    <div class="photo-overlay-content">
                        <a href="{{ asset('p35.jpeg') }}" class="full-view-button">Full view</a>
                    </div>
                </div>
            </div>
            <div class="photo">
                <img src="{{ asset('p36.jpeg') }}" alt="Photo 10">
                <div class="photo-overlay">
                    <div class="photo-overlay-content">
                        <a href="{{ asset('p36.jpeg') }}" class="full-view-button">Full view</a>
                    </div>
                </div>
            </div>
            <div class="photo">
                <img src="{{ asset('p37.jpeg') }}" alt="Photo 10">
                <div class="photo-overlay">
                    <div class="photo-overlay-content">
                        <a href="{{ asset('p37.jpeg') }}" class="full-view-button">Full view</a>
                    </div>
                </div>
            </div>
            <div class="photo">
                <img src="{{ asset('p38.jpeg') }}" alt="Photo 10">
                <div class="photo-overlay">
                    <div class="photo-overlay-content">
                        <a href="{{ asset('p38.jpeg') }}" class="full-view-button">Full view</a>
                    </div>
                </div>
            </div>
            <div class="photo">
                <img src="{{ asset('p39.jpeg') }}" alt="Photo 10">
                <div class="photo-overlay">
                    <div class="photo-overlay-content">
                        <a href="{{ asset('p39.jpeg') }}" class="full-view-button">Full view</a>
                    </div>
                </div>
            </div>
            <div class="photo">
                <img src="{{ asset('p40.jpeg') }}" alt="Photo 10">
                <div class="photo-overlay">
                    <div class="photo-overlay-content">
                        <a href="{{ asset('p40.jpeg') }}" class="full-view-button">Full view</a>
                    </div>
                </div>
            </div>

       
            

                <script>
    const fullViewButton = document.querySelector('.full-view-button');
    const image = document.querySelector('.photo img');

    fullViewButton.addEventListener('click', () => {
        if (image.requestFullscreen) {
            image.requestFullscreen();
        } else if (image.mozRequestFullScreen) {
            image.mozRequestFullScreen();
        } else if (image.webkitRequestFullscreen) {
            image.webkitRequestFullscreen();
        }
    });
</script>
    
</body>
</html>