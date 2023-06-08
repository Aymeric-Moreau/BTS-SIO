<div id="carouselExampleCaptions" class="carousel slide">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <style>
        .carousel-caption {
            position: absolute;/*
            */
            bottom: 2;
            left: 45%;
            transform: translateX(-50%);/*
            */
            background-color: beige;/*
                        padding: 10px;
                        display: inline-block;
            */
            margin: 5%;
            color: black;
            width: 20%;
                        border-radius: 30px;
        }
        .carousel{
            border-color: black;
            border-radius: 1px;

        }

    </style>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="assets/img/paysage.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block ">
                <h5>First slide label</h5>
                <button type="button" class="btn btn-primary">En savoir plus</button>
            </div>
        </div>
        <div class="carousel-item">
            <img src="assets/img/1186483.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block bs-body-color">
                <h5>Second slide label</h5>
                <a href="#" class="btn btn-primary">En savoir plus</a>
                <p>Some representative placeholder content for the second slide.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="assets/img/logo_esb.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <a href="#" class="btn btn-primary">En savoir plus</a>
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

