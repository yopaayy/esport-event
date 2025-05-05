<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XEsport - Event</title>

    @include('partials.style')

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


            {{-- Navbar --}}
            @include('partials.navbar')


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

                        <div class="about-content">

                            <p class="about-subtitle">Find team member</p>

                            <h2 class="about-title">Experience just for gamers <strong>offer</strong> </h2>

                            <p class="about-text">
                                Nullam quis ante. Maecenas ullamcorper, dui et placerat feugiat, eros pede varius nisi,
                                condimentum
                                viverra felis nunc
                                et lorem. In auctor lobortis lacus. Phasellus gravida semper nisi. Aliquam lobortis.
                            </p>

                            <p class="about-bottom-text">
                                <ion-icon name="arrow-forward-circle-outline"></ion-icon>

                                <span>Will sharpen your brain and focus</span>
                            </p>

                        </div>

                    </div>
                </section>
                <!--
      - #TOURNAMENT
    -->
                <section class="tournament" id="tournament">
                    <div class="container">

                        <div class="tournament-content">

                            <p class="tournament-subtitle">Check out our next</p>

                            <h2 class="h3 tournament-title">Gaming tournaments !</h2>

                            <p class="tournament-text">
                                Lpsum dolor sit amet, consectetur adipiscing elit, sed labore et dolore magna aliqua.
                            </p>

                            <button class="btn btn-primary">Join with us</button>

                        </div>

                        <div class="tournament-prize">

                            <h2 class="h3 tournament-prize-title">Prize pool</h2>

                            <data value="80000">$80000</data>

                            <figure>
                                <img src="{{ asset('template/images/prize-img.png') }}" alt="Prize image">
                            </figure>

                        </div>

                        <div class="tournament-winners">

                            <h2 class="h3 tournament-winners-title">Last winners</h2>

                            <ul class="tournament-winners-list">

                                <li>
                                    <div class="winner-card">

                                        <figure class="card-banner">
                                            <img src="{{ asset('template/images/winner-img-1.png') }}"
                                                alt="Winner image">
                                        </figure>

                                        <h3 class="h5 card-title">1st place</h3>

                                    </div>
                                </li>

                                <li>
                                    <div class="winner-card">

                                        <figure class="card-banner">
                                            <img src="{{ asset('template/images/winner-img-2.png') }}"
                                                alt="Winner image">
                                        </figure>

                                        <h3 class="h5 card-title">2nd place</h3>

                                    </div>
                                </li>

                            </ul>

                        </div>

                    </div>
                </section>

                <!--
      - #NEWSLETTER
    -->
                <section class="newsletter">
                    <div class="container">

                        <div class="newsletter-card">

                            <div class="newsletter-content">
                                <figure class="newsletter-img">
                                    <img src="{{ asset('template/images/newsletter-img.png') }}"
                                        alt="Newsletter image">
                                </figure>

                                <h2 class="h2 newsletter-title">Subscribe to our newsletter</h2>
                            </div>

                            <form action="" class="newsletter-form">
                                <input type="email" name="email" required placeholder="Your Email Address"
                                    class="input-field">

                                <button type="submit" class="btn btn-secondary">Subscribe</button>
                            </form>

                        </div>

                    </div>
                </section>
            </div>

        </article>
    </main>

    {{-- Footer --}}
    @include('partials.footer')

    <!--
    - #GO TO TOP
  -->

    <a href="#top" class="btn btn-primary go-top" data-go-top>
        <ion-icon name="chevron-up-outline"></ion-icon>
    </a>

    {{-- Javascript --}}
    @include('partials.script')

</body>

</html>
