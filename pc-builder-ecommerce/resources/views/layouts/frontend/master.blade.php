<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>EZone</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous" />

    <style>
        .carousel-viewport {
            overflow: hidden;
        }

        .carousel-track {
            display: flex;
            transition: transform 0.5s ease;
        }

        .product-card {
            flex: 0 0 20%;
            margin: 5px;
            background: #fff;
            border-radius: 10px;
            border: 1px solid #ddd;
            text-align: center;
            overflow: hidden;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
        }

        .product-card img {
            width: 100%;
            height: 200px;
            object-fit: contain;
        }

        .product-card .btn {
            margin: 5px 3px;
        }

        .carousel-btn {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: #0d6efd;
            border: none;
            color: #fff;
            width: 45px;
            height: 45px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            z-index: 10;
        }

        .carousel-btn:hover {
            background: #0b5ed7;
        }

        .prevBtn {
            left: -10px;
        }

        .nextBtn {
            right: -10px;
        }

        @media(max-width:992px) {
            .product-card {
                flex: 0 0 33.33%;
            }
        }

        @media(max-width:768px) {
            .product-card {
                flex: 0 0 100%;
            }
        }
    </style>
</head>

<body>
    <!-- Top Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('home.index') }}"><img src="{{ asset('images') }}/ezone.png"
                    alt="EZone" style="width: 150px; height: 70px;"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Projects</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            About Us
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Contact Us</a></li>
                            <li><a class="dropdown-item" href="#">Meet The Team</a></li>
                            <li>
                                <a class="dropdown-item" href="#">Career</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                @auth
                    <a href="{{ route('admin.index') }}"><button class="btn btn-outline-primary">Dashboard</button></a>
                @else
                    <a href="{{ route('login') }}"><button class="btn btn-outline-primary">Login</button></a>
                @endauth
            </div>
        </div>
    </nav>
    <!-- Top Navbar End -->

    <div>
        @yield('content')
    </div>


    <!-- Footer Start -->
    <footer class="bg-dark text-white pt-4 pb-2">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-3">
                    <h5>About Us</h5>
                    <p>We provide high-quality computer components and accessories under the brand EZone.</p>
                </div>
                <div class="col-md-4 mb-3">
                    <h5>Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white text-decoration-none">Services</a></li>
                        <li><a href="#" class="text-white text-decoration-none">Projects</a></li>
                        <li><a href="#" class="text-white text-decoration-none">About Us</a></li>
                    </ul>
                </div>
                <div class="col-md-4 mb-3">
                    <h5>Follow Us</h5>
                    <a href="#" class="text-white me-3"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="text-white me-3"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="text-white"><i class="bi bi-youtube"></i></a>
                </div>
            </div>
            <hr class="border-light">
            <p class="text-center mb-0">© 2025 EZone</p>
        </div>
    </footer>
    <!-- Footer End -->



    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Js for sidenav hover effect Start -->
    <script>
        document.querySelectorAll('.dropend').forEach(function(dropdown) {
            dropdown.addEventListener('mouseenter', function() {
                const button = this.querySelector('.dropdown-toggle');
                const menu = this.querySelector('.dropdown-menu');
                const bsDropdown = new bootstrap.Dropdown(button);
                bsDropdown.show();
            });
            dropdown.addEventListener('mouseleave', function() {
                const button = this.querySelector('.dropdown-toggle');
                const menu = this.querySelector('.dropdown-menu');
                const bsDropdown = new bootstrap.Dropdown(button);
                bsDropdown.hide();
            });
        });
    </script>
    <!-- Js for sidenav hover effect End -->


    <!-- Js for Card Carousel Start -->
    <script>
        document.querySelectorAll(".carousel-wrapper").forEach(wrapper => {
            const track = wrapper.querySelector(".carousel-track");
            const cards = Array.from(track.children);
            const visible = 5;

            // Clone elements for seamless looping
            const clonesStart = cards.slice(-visible).map(card => card.cloneNode(true));
            const clonesEnd = cards.slice(0, visible).map(card => card.cloneNode(true));
            clonesStart.forEach(c => track.insertBefore(c, track.firstChild));
            clonesEnd.forEach(c => track.appendChild(c));

            let index = visible;
            const cardWidth = cards[0].offsetWidth + 10;
            track.style.transform = `translateX(-${cardWidth * index}px)`;

            function move(dir = 1) {
                index += dir;
                track.style.transition = "transform 0.6s ease-in-out";
                track.style.transform = `translateX(-${cardWidth * index}px)`;

                track.addEventListener("transitionend", () => {
                    if (index >= cards.length + visible) {
                        index = visible;
                        track.style.transition = "none";
                        track.style.transform = `translateX(-${cardWidth * index}px)`;
                    } else if (index < visible) {
                        index = cards.length + visible - 1;
                        track.style.transition = "none";
                        track.style.transform = `translateX(-${cardWidth * index}px)`;
                    }
                }, {
                    once: true
                });
            }

            wrapper.querySelector(".nextBtn").addEventListener("click", () => move(1));
            wrapper.querySelector(".prevBtn").addEventListener("click", () => move(-1));
            setInterval(() => move(1), 3000);
        });
    </script>
    <!-- Js for Card Carousel End -->

</body>

</html>

</div>
<!-- Catagory Card Carousel End -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
</script>
</body>

</html>
