<!-- ============================================
     SMARTAGRO - Authentication Carousel
     Reusable Bootstrap 4 / AdminLTE 3 carousel
     Used on: Login, Register, Forgot Password, Reset Password
     ============================================ -->
<div class="login-carousel-col">
    <div id="authCarousel" class="carousel slide" data-ride="carousel" data-interval="5000">
        <!-- Carousel Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#authCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#authCarousel" data-slide-to="1"></li>
            <li data-target="#authCarousel" data-slide-to="2"></li>
            <li data-target="#authCarousel" data-slide-to="3"></li>
            <li data-target="#authCarousel" data-slide-to="4"></li>
        </ol>

        <!-- Carousel Images -->
        <div class="carousel-inner">
            <!-- Slide 1: Modern Agriculture Technology -->
            <div class="carousel-item active">
                <img src="{{ asset('dist/img/agri-tech.jpg') }}" alt="Modern Agriculture Technology">
                <div class="carousel-overlay"></div>
                <div class="carousel-caption d-none d-md-block">
                    <h3 data-text="Modern Agriculture Technology"><span class="typed-text"></span><span class="typewriter-cursor">|</span></h3>
                    <p data-text="Smart farming systems, drones, and IoT sensors for precision agriculture"><span class="typed-text"></span><span class="typewriter-cursor">|</span></p>
                </div>
            </div>

            <!-- Slide 2: Crop Production -->
            <div class="carousel-item">
                <img src="{{ asset('dist/img/crop-production.jpg') }}" alt="Crop Production">
                <div class="carousel-overlay"></div>
                <div class="carousel-caption d-none d-md-block">
                    <h3 data-text="Crop Production"><span class="typed-text"></span><span class="typewriter-cursor">|</span></h3>
                    <p data-text="Healthy crops and modern cultivation methods for maximum yield"><span class="typed-text"></span><span class="typewriter-cursor">|</span></p>
                </div>
            </div>

            <!-- Slide 3: Agricultural Machinery -->
            <div class="carousel-item">
                <img src="{{ asset('dist/img/farm-machinery.jpg') }}" alt="Agricultural Machinery">
                <div class="carousel-overlay"></div>
                <div class="carousel-caption d-none d-md-block">
                    <h3 data-text="Agricultural Machinery"><span class="typed-text"></span><span class="typewriter-cursor">|</span></h3>
                    <p data-text="Tractors and modern farming equipment for mechanized operations"><span class="typed-text"></span><span class="typewriter-cursor">|</span></p>
                </div>
            </div>

            <!-- Slide 4: Agribusiness and Crop Marketing -->
            <div class="carousel-item">
                <img src="{{ asset('dist/img/agribusiness.jpg') }}" alt="Agribusiness and Crop Marketing">
                <div class="carousel-overlay"></div>
                <div class="carousel-caption d-none d-md-block">
                    <h3 data-text="Agribusiness and Crop Marketing"><span class="typed-text"></span><span class="typewriter-cursor">|</span></h3>
                    <p data-text="Farmers selling products, packaging, storage, and supply chains"><span class="typed-text"></span><span class="typewriter-cursor">|</span></p>
                </div>
            </div>

            <!-- Slide 5: Sustainable Farming -->
            <div class="carousel-item">
                <img src="{{ asset('dist/img/sustainable-farm.jpg') }}" alt="Sustainable Farming">
                <div class="carousel-overlay"></div>
                <div class="carousel-caption d-none d-md-block">
                    <h3 data-text="Sustainable Farming"><span class="typed-text"></span><span class="typewriter-cursor">|</span></h3>
                    <p data-text="Greenhouses, irrigation systems, and eco-friendly farming practices"><span class="typed-text"></span><span class="typewriter-cursor">|</span></p>
                </div>
            </div>
        </div>

        <!-- Carousel Controls -->
        <a class="carousel-control-prev" href="#authCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#authCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
