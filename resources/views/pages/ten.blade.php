<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Laravel {{ app()->version() }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- Styles -->

    </head>
    <body>
        <section class="hero is-info is-large" id="homeImg">
          <div class="hero-head">
            <nav class="navbar">
              <div class="container">
                <div class="navbar-brand">
                  <a class="navbar-item">
                    <img src="https://bulma.io/images/bulma-type-white.png" alt="Logo">
                  </a>
                  <span class="navbar-burger burger" data-target="navbarMenuHeroB">
                    <span></span>
                    <span></span>
                    <span></span>
                  </span>
                </div>
                <div id="navbarMenuHeroB" class="navbar-menu">
                  <div class="navbar-end">
                    <a class="navbar-item">
                      Tour
                    </a>
                    <a class="navbar-item">
                      Pricing
                    </a>
                    <a class="navbar-item">
                      Student Score
                    </a>
                    <span class="navbar-item">
                      <a class="button is-info is-inverted">
                        <span>5 DAY FREE TRIAL</span>
                      </a>
                    </span>
                    <span class="navbar-item">
                      <a class="button has-background-link">
                        <span>Login</span>
                      </a>
                    </span>
                  </div>
                </div>
              </div>
            </nav>
          </div>
          <div class="hero-body">
            <div class="container has-text-centered">
              <h1 class="title has-text-black">
                MEDICAL KNOWLEDGE DISTILLED
              </h1>
              <h2 class="subtitle has-text-black">
                Welcome to a new era of medical education
              </h2>
            </div>
          </div>
        </section>
        <section class="section">
            <div class="container">
                <div class="columns is-mobile">
                  <div class="column is-half is-offset-one-quarter">
                    <div>
                        <h2 class="title is-3">
                          Sign Up for
                      </h2> <br> <br>
                    </div>
                  </div>
                </div>
            </div>
        </section>
        <section class="section">
            <div class="container">
                <div class="columns">
                  <div class="column">
                    <div class="content">
                      <h1>How does it work?</h1>
                      <p>
                        Add your name to the group by midnight Saturday, 1st of December 2018. After the deadline, once we have reached 50 sign-ups, we will open the group discount for you to purchase your discounted AMBOSS access!
                      </p>
                    </div>
                  </div>
                  <div class="column">
                    <form action="">
                      <div class="field is-horizontal">
                          <div class="field-body">
                            <div class="field">
                              <p class="control is-expanded has-icons-left">
                                <input class="input is-medium" type="text" name="firstname" placeholder="first-name">
                              </p>
                            </div>
                            <div class="field">
                              <p class="control is-expanded has-icons-left has-icons-right">
                                <input class="input is-medium" type="text" name="lastname" placeholder="last-name">
                              </p>
                            </div>
                          </div>
                      </div>
                      <div class="field">
                        <div class="control is-medium">
                          <input class="input is-medium" type="email" name="email" placeholder="email">
                        </div>
                      </div>
                      <div class="field">
                        <div class="control is-medium">
                          <a class="button is-link is-medium is-fullwidth">Submit Payment</a>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
            </div>
        </section>
       <section class="section">
        <div class="container">
            <div class="columns">
              <div class="column">
                <div className="firstFooter">
                        <h1 className="title is-4 has-text-weight-bold has-text-white has-text-left has-text-grey-dark" id="mainFooter"><strong>COMPANY</strong></h1>
                        <div className="content">
                            <div className="subtitle is-5 has-text-white">
                                <div className="has-text-left has-text-weight-light has-text-grey">
                                    <p className="has-text-left" id="mainFooter">About Us</p>
                                    <p className="has-text-left" id="mainFooter">Blog</p>
                                    <p className="has-text-left" id="mainFooter">Jobs @ AMBOSS</p>
                                    <p className="has-text-left" id="mainFooter">Advisory Board</p>
                                </div>
                            </div>
                        </div>
                    </div>
              </div>
              <div class="column">
                <div className="firstFooter">
                        <h1 className="title is-4 has-text-weight-bold has-text-white has-text-left has-text-grey-dark" id="mainFooter"><strong>PLATFORM</strong></h1>
                        <div className="content">
                            <div className="subtitle is-5 has-text-white">
                                <div className="has-text-left has-text-weight-light has-text-grey">
                                    <p className="has-text-left" id="mainFooter">Our Story</p>
                                    <p className="has-text-left" id="mainFooter">Take the Tour</p>
                                    <p className="has-text-left" id="mainFooter">Knowledge</p>
                                </div>
                            </div>
                        </div>
                    </div>
              </div>
              <div class="column">
                <div className="firstFooter">
                        <h1 className="title is-4 has-text-weight-bold has-text-white has-text-left has-text-grey-dark" id="mainFooter"><strong>EXAMS</strong></h1>
                        <div className="content">
                            <div className="subtitle is-5 has-text-white">
                                <div className="has-text-left has-text-weight-light has-text-grey">
                                    <p className="has-text-left" id="mainFooter">USMLE</p>
                                    <p className="has-text-left" id="mainFooter">NBME</p>
                                    <p className="has-text-left" id="mainFooter">Step 1 Self-Assessment</p>
                                </div>
                            </div>
                        </div>
                    </div>
              </div>
              <div class="column">
                <div className="firstFooter">
                    <h1 className="title is-4 has-text-weight-bold has-text-white has-text-left has-text-grey-dark" id="mainFooter"><strong>SUPPORT</strong>
                    </h1>
                    <div className="content">
                        <div className="subtitle is-5 has-text-white">
                            <div className="has-text-left has-text-weight-light has-text-grey">
                                <p className="has-text-left" id="mainFooter">Contact Us</p>
                                <p className="has-text-left" id="mainFooter">Frequently Asked Questions</p>
                                <p className="has-text-left" id="mainFooter">Money Back Guarantee</p>
                                <p className="has-text-left" id="mainFooter">AMBOSS For Institutions</p>
                            </div>
                        </div>
                    </div>
                 </div>
              </div>
            </div>
        </div>
       </section>
       <section class="section">
        <div class="container">
            <footer class="footer">
              <div class="content has-text-centered">
                <p>
                  <a href="https://jgthms.com">AMBOSS</a>
                  <a href="http://opensource.org/licenses/mit-license.php">© 2018 AMBOSS. All rights reserved.</a>.
                </p>
              </div>
            </footer>
        </div>
      </section>
    </body>
</html>
