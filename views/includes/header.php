<header>
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid text-white">
            <a href="<?php echo SERVER_URL ?>" class="p-0">
                <img class="navbar-brand" src="assets/imgs/logo_nav.png">
            </a>
            <button class="btn-classic-outline navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuNav" aria-controls="menuNav" aria-expanded="false">
                <span class="fas fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="menuNav">
                <ul class="navbar-nav list-unstyled align-items-center">
                    <?php if ($is_principal) : ?>
                        <li class="nav-item">
                            <a href="#services">Services</a>
                        </li>
                        <li class="nav-item">
                            <a href="#clients">Customers</a>
                        </li>
                        <li class="nav-item">
                            <a href="#about">About</a>
                        </li>
                        <li class="nav-item">
                            <a href="#pricing">Pricing</a>
                        </li>
                    <?php else : ?>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown">Services</a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="<?php echo SERVER_URL ?>ambulance-stretchervan">
                                        <i class="fas fa-ambulance me-1"></i> Ambulance & Strecher Van
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="<?php echo SERVER_URL ?>wheelchair">
                                        <i class="fas fa-wheelchair me-2"></i> Wheelchair
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="<?php echo SERVER_URL ?>long-distance">
                                        <i class="fas fa-road me-2"></i> Long Distance
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="<?php echo SERVER_URL ?>groups">
                                        <i class="fas fa-users me-2"></i> Groups
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown">Customers</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Medical Appointments</a></li>
                                <li><a class="dropdown-item" href="#">Senior Living</a></li>
                                <li><a class="dropdown-item" href="#">Outpatient Procedures</a></li>
                                <li><a class="dropdown-item" href="#">Hospital Discharge</a></li>
                                <li><a class="dropdown-item" href="#">Bariatric</a></li>
                                <li><a class="dropdown-item" href="#">Special Events</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo SERVER_URL ?>#about">About</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo SERVER_URL ?>#pricing">Pricing</a>
                        </li>
                    <?php endif; ?>
                    <li class="nav-item">
                        <button id="home-btn" class="btn btn-classic" onclick="begin()" home="<?php echo SERVER_URL ?>" type="button">Begin now</button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <?php if ($is_principal) : ?>
    <div id="carouselExampleCaptions" class="carousel slide carousel-fade mt-5 pt-3" data-bs-ride="false">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/imgs/wallpapers/medical_transportation.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-flex flex-column justify-content-center h-100" style="top: 0">
                    <h1>Ambulance & Stretcher Van</h1>
                    <p>Transport by ambulance or strecher van for your medical transport needs</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/imgs/wallpapers/medical_appointments.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-flex flex-column justify-content-center h-100" style="top: 0">
                    <h1>Medical Appointments</h1>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/imgs/wallpapers/medical_tratment.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-flex flex-column justify-content-center h-100" style="top: 0">
                    <h1>Medical Treatments</h1>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/imgs/wallpapers/senior_living.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-flex flex-column justify-content-center h-100" style="top: 0">
                    <h1>Senior Living</h1>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <?php endif; ?> 
</header>
