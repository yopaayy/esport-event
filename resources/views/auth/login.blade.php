<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XEsport - Event</title>

    <!--
    - favicon link
  -->
    <link rel="shortcut icon" href="{{ asset('template/favicon.svg') }}" type="image/svg+xml">

    <!--
    - custom css link
  -->
    <link rel="stylesheet" href="{{ asset('template/css/style.css') }}">

    <!--
    - google font link
  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&family=Poppins:wght@400;500;700&display=swap"
        rel="stylesheet">
</head>

<body id="top">

    <!--
    - #HEADER
  -->

    <header class="header">

        <!--
      - overlay
    -->
        <div class="overlay" data-overlay></div>

        <div class="container">

            <a href="#" class="logo">
                <img src="{{ asset('template/images/logo.svg') }}" alt="GameX logo">
            </a>

            <button class="nav-open-btn" data-nav-open-btn>
                <ion-icon name="menu-outline"></ion-icon>
            </button>

            <nav class="navbar" data-nav>

                <div class="navbar-top">

                    <a href="#" class="logo">
                        <img src="{{ asset('template/images/logo.svg') }}" alt="GameX logo">
                    </a>

                    <button class="nav-close-btn" data-nav-close-btn>
                        <ion-icon name="close-outline"></ion-icon>
                    </button>

                </div>

                <ul class="navbar-list">

                    <li>
                        <a href="#hero" class="navbar-link">Home</a>
                    </li>

                    <li>
                        <a href="#about" class="navbar-link">About</a>
                    </li>

                    <li>
                        <a href="#tournament" class="navbar-link">Tournament</a>
                    </li>

                    <li>
                        <a href="#team" class="navbar-link">Team</a>
                    </li>

                    <li>
                        <a href="#gears" class="navbar-link">Gears</a>
                    </li>

                    <li>
                        <a href="#contact" class="navbar-link">Contact</a>
                    </li>

                </ul>

                <ul class="nav-social-list">

                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-twitter"></ion-icon>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-instagram"></ion-icon>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-github"></ion-icon>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-youtube"></ion-icon>
                        </a>
                    </li>

                </ul>

            </nav>

            <div class="header-actions">

                <button class="search">
                    <ion-icon name="search-outline"></ion-icon>
                </button>

                <button class="btn-sign_in">

                    <div class="icon-box">
                        <ion-icon name="log-in-outline"></ion-icon>
                    </div>

                    <span>Log-in</span>

                </button>

            </div>

        </div>

    </header>





    <main>
        <article>

            <!--
        - #HERO
      -->


            <div class="section-wrapper">

                <!--
          - #ABOUT
        -->

                <section class="about" id="about">
                    <div class="container">

                        <figure class="about-banner">

                            <img src="{{ asset('template/images/about-img.png') }}" alt="M shape" class="about-img">

                            <img src="{{ asset('template/images/character-1.png') }}" alt="Game character"
                                class="character character-1">

                            <img src="{{ asset('template/images/character-2.png') }}" alt="Game character"
                                class="character character-2">

                            <img src="{{ asset('template/images/character-3.png') }}" alt="Game character"
                                class="character character-3">

                        </figure>

                        <div class="login-content">

                            <p class="login-subtitle">Join the gaming community</p>

                            <h2 class="login-title">Member <strong>Login</strong></h2>

                            <form class="login-form">
                              <div class="login-input-group">
                                <label for="login-username" class="login-label">Username</label>
                                <input type="text" id="login-username" class="login-input" placeholder="Enter your username">
                              </div>

                              <div class="login-input-group">
                                <label for="login-password" class="login-label">Password</label>
                                <input type="password" id="login-password" class="login-input" placeholder="Enter your password">
                              </div>

                              <button type="submit" class="login-button">Sign In</button>

                              <div class="login-options">
                                <label class="login-remember">
                                  <input type="checkbox"> Remember me
                                </label>
                                <a href="#" class="login-forgot">Forgot password?</a>
                              </div>
                            </form>

                            <p class="login-bottom-text">
                              <ion-icon name="arrow-forward-circle-outline"></ion-icon>
                              <span>Will sharpen your brain and focus</span>
                            </p>

                          </div>

                          <style>
                            /* Login Content Styles */
                            .login-content {
                              background: var(--raisin-black-1);
                              color: var(--white);
                              padding: 60px 40px;
                              border-radius: 8px;
                              box-shadow: 0 2px 4px hsla(0, 0%, 0%, 0.2);
                              max-width: 500px;
                              margin: 0 auto;
                            }

                            .login-subtitle {
                              color: var(--orange);
                              font-family: var(--ff-oswald);
                              font-size: var(--fs-8);
                              font-weight: var(--fw-500);
                              text-transform: uppercase;
                              margin-bottom: 15px;
                            }

                            .login-title {
                              font-family: var(--ff-oswald);
                              font-size: var(--fs-2);
                              line-height: 1.2;
                              text-transform: uppercase;
                              margin-bottom: 30px;
                            }

                            .login-title strong {
                              color: var(--orange);
                            }

                            /* Form Styles */
                            .login-form {
                              display: flex;
                              flex-direction: column;
                              gap: 20px;
                              margin-bottom: 30px;
                            }

                            .login-input-group {
                              display: flex;
                              flex-direction: column;
                              gap: 8px;
                            }

                            .login-label {
                              color: var(--light-gray);
                              font-family: var(--ff-oswald);
                              font-size: var(--fs-9);
                              text-transform: uppercase;
                              letter-spacing: 0.5px;
                            }

                            .login-input {
                              background: var(--raisin-black-2);
                              border: 1px solid var(--onyx);
                              border-radius: 4px;
                              padding: 12px 15px;
                              color: var(--white);
                              font-size: var(--fs-9);
                              transition: border-color 0.3s ease;
                            }

                            .login-input:focus {
                              outline: none;
                              border-color: var(--orange);
                            }

                            .login-input::placeholder {
                              color: var(--light-gray-70);
                            }

                            .login-button {
                              background: var(--orange);
                              color: var(--white);
                              border: none;
                              border-radius: 4px;
                              padding: 14px;
                              font-family: var(--ff-oswald);
                              font-size: var(--fs-8);
                              text-transform: uppercase;
                              font-weight: var(--fw-500);
                              cursor: pointer;
                              transition: background 0.3s ease;
                              margin-top: 10px;
                            }

                            .login-button:hover {
                              background: var(--orange-dark);
                            }

                            /* Login Options */
                            .login-options {
                              display: flex;
                              justify-content: space-between;
                              align-items: center;
                              font-size: var(--fs-10);
                            }

                            .login-remember {
                              color: var(--light-gray);
                              display: flex;
                              align-items: center;
                              gap: 5px;
                              cursor: pointer;
                            }

                            .login-forgot {
                              color: var(--orange);
                              text-decoration: none;
                              transition: color 0.3s ease;
                            }

                            .login-forgot:hover {
                              color: var(--orange-dark);
                            }

                            /* Bottom Text */
                            .login-bottom-text {
                              color: var(--light-gray);
                              font-size: var(--fs-9);
                              line-height: 1.8;
                              letter-spacing: 0.5px;
                              display: flex;
                              justify-content: flex-start;
                              align-items: flex-start;
                              gap: 8px;
                              margin-top: 30px;
                            }

                            .login-bottom-text ion-icon {
                              color: var(--orange);
                              font-size: 25px;
                              --ionicon-stroke-width: 45px;
                            }
                          </style>

                    </div>
                </section>

            </div>

        </article>
    </main>





    <!--
    - #FOOTER
  -->

    <footer>

        <div class="footer-top">
            <div class="container">

                <div class="footer-brand-wrapper">

                    <a href="#" class="logo">
                        <img src="{{ asset('template/images/logo.svg') }}" alt="GameX logo">
                    </a>

                    <div class="footer-menu-wrapper">
                        <div class="footer-input-wrapper">
                            <input type="text" name="message" required placeholder="Find Here Now"
                                class="footer-input">

                            <button class="btn btn-primary">
                                <ion-icon name="search-outline"></ion-icon>
                            </button>
                        </div>

                    </div>

                </div>

                <div class="footer-quicklinks">

                    <ul class="quicklink-list">

                        <li>
                            <a href="#" class="quicklink-item">Faq</a>
                        </li>

                        <li>
                            <a href="#" class="quicklink-item">Help center</a>
                        </li>

                        <li>
                            <a href="#" class="quicklink-item">Terms of use</a>
                        </li>

                        <li>
                            <a href="#" class="quicklink-item">Privacy</a>
                        </li>

                    </ul>

                    <ul class="footer-social-list">

                        <li>
                            <a href="#" class="footer-social-link">
                                <ion-icon name="logo-discord"></ion-icon>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="footer-social-link">
                                <ion-icon name="logo-twitch"></ion-icon>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="footer-social-link">
                                <ion-icon name="logo-xbox"></ion-icon>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="footer-social-link">
                                <ion-icon name="logo-youtube"></ion-icon>
                            </a>
                        </li>

                    </ul>

                </div>

            </div>
        </div>

        <div class="footer-bottom">
            <div class="container">
                <p class="copyright">
                    Copyright &copy; 2022 <a href="#">codewithsadee</a>. all rights reserved
                </p>

                <figure class="footer-bottom-img">
                    <img src="{{ asset('template/images/footer-bottom-img.png') }}"
                        alt="Online payment companies logo">
                </figure>
            </div>
        </div>

    </footer>





    <!--
    - #GO TO TOP
  -->

    <a href="#top" class="btn btn-primary go-top" data-go-top>
        <ion-icon name="chevron-up-outline"></ion-icon>
    </a>





    <!--
    - custom js link
  -->
    <script src="{{ asset('template/js/script.js') }}"></script>

    <!--
    - ionicon link
  -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>
