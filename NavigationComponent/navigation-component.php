<?php
    echo 
        "<div class='navigation-component'>
            <nav class='navbar navbar-expand-sm fixed-top'>
                <span class='navbar-brand mb-0 h1'>
                    <img src='assets/JTC_Logo.png' width='30' height='30' class='d-inline-block align-top' alt=''>
                    Jorhat Trade Centre
                </span>
                <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarNav' onclick='togglerClick()' aria-controls='navbarNav' aria-expanded='false' aria-label='Toggle navigation'>
                    <span class='' role='button'>
                        <i class='fa fa-bars' aria-hidden='true'></i>
                    </span>
                </button>
                <div class='collapse navbar-collapse justify-content-end' id='navbarNav'>
                    <ul class='navbar-nav'>
                        <li class='nav-item'>
                            <a class='nav-link' href='home.php'>Home</a>
                        </li>
                        <li class='nav-item'>
                            <a class='nav-link' href='products.php'>Products</a>
                        </li>
                        <li class='nav-item'>
                            <a class='nav-link' href='contact.php'>Contact</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <script>
            const navbar = document.querySelector('.navigation-component .navbar');
            const navbarToggler = document.querySelector('.navigation-component .navbar-toggler');

            window.onscroll = () => {
                if (window.pageYOffset > 0) {
                    navbar.classList.add('nav-scrolled');
                } else {
                    navbar.classList.remove('nav-scrolled');
                }
            };

            function togglerClick() {
                if ($('.navigation-component .navbar-toggler').hasClass('toggler-active')) {
                    navbar.classList.remove('toggler-active');
                    navbarToggler.classList.remove('toggler-active');
                } else {
                    navbar.classList.add('toggler-active');
                    navbarToggler.classList.add('toggler-active');
                }
            }
        </script>";
?>
