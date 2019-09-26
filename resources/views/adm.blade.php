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
        <div class="section">
            <div class="columns">
              <aside class="column is-2 has-background-primary">
                <nav class="menu">
                  <p class="menu-label">
                    General
                  </p>
                  <ul class="menu-list">
                    <li><a class="is-active">Dashboard</a></li>
                    <li><a>Customers</a></li>
                  </ul>
                  <p class="menu-label">
                    Administration
                  </p>
                  <ul class="menu-list">
                    <li>
                      <a class="">Manage Your Team</a>
                      <ul>
                        <li><a>Members</a></li>
                      </ul>
                    </li>
                  </ul>
                  <p class="menu-label">
                    Forms
                  </p>
                  <ul class="menu-list">
                    <li><a>Plan A Form</a></li>
                    <li><a>Plan B Form</a></li>
                    <li><a>Plan C Form</a></li>
                    <li><a>Plan D Form</a></li>
                  </ul>
                   <p class="menu-label">
                    Pages
                  </p>
                  <ul class="menu-list">
                    <li><a>Langing Page</a></li>
                    <li><a>Plan A - 10%</a></li>
                    <li><a>Plan B - 20%</a></li>
                    <li><a>Plan C - 30%</a></li>
                    <li><a>Plan D - 50%</a></li>
                  </ul>
                </nav>
              </aside>
              
              <main class="column">
                <div class="level">
                  <div class="level-left">
                    <div class="level-item">
                      <div class="title">Dashboard</div>
                    </div>
                  </div>
                  <div class="level-right">
                    <div class="level-item">
                      <button type="button" class="button is-small">
                        March 8, 2017 - April 6, 2017
                      </button>
                    </div>
                  </div>
                </div>
                
                <div class="columns is-multiline">
                  <div class="column">
                    <div class="box">
                      <div class="heading">Top Seller Total</div>
                      <div class="title">56,950</div>
                      <div class="level">
                        <div class="level-item">
                          <div class="">
                            <div class="heading">Sales $</div>
                            <div class="title is-5">250,000</div>
                          </div>
                        </div>
                        <div class="level-item">
                          <div class="">
                            <div class="heading">Overall $</div>
                            <div class="title is-5">750,000</div>
                          </div>
                        </div>
                        <div class="level-item">
                          <div class="">
                            <div class="heading">Sales %</div>
                            <div class="title is-5">25%</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="column">
                    <div class="box">
                      <div class="heading">Revenue / Expenses</div>
                      <div class="title">55% / 45%</div>
                      <div class="level">
                        <div class="level-item">
                          <div class="">
                            <div class="heading">Rev Prod $</div>
                            <div class="title is-5">30%</div>
                          </div>
                        </div>
                        <div class="level-item">
                          <div class="">
                            <div class="heading">Rev Serv $</div>
                            <div class="title is-5">25%</div>
                          </div>
                        </div>
                        <div class="level-item">
                          <div class="">
                            <div class="heading">Exp %</div>
                            <div class="title is-5">45%</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="column">
                    <div class="box">
                      <div class="heading">Feedback Activity</div>
                      <div class="title">78% &uarr;</div>
                      <div class="level">
                        <div class="level-item">
                          <div class="">
                            <div class="heading">Positive</div>
                            <div class="title is-5">1560</div>
                          </div>
                        </div>
                        <div class="level-item">
                          <div class="">
                            <div class="heading">Negative</div>
                            <div class="title is-5">368</div>
                          </div>
                        </div>
                        <div class="level-item">
                          <div class="">
                            <div class="heading">Pos/Neg %</div>
                            <div class="title is-5">77% / 23%</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="column">
                    <div class="box">
                      <div class="heading">Orders / Returns</div>
                      <div class="title">75% / 25%</div>
                      <div class="level">
                        <div class="level-item">
                          <div class="">
                            <div class="heading">Orders $</div>
                            <div class="title is-5">425,000</div>
                          </div>
                        </div>
                        <div class="level-item">
                          <div class="">
                            <div class="heading">Returns $</div>
                            <div class="title is-5">106,250</div>
                          </div>
                        </div>
                        <div class="level-item">
                          <div class="">
                            <div class="heading">Success %</div>
                            <div class="title is-5">+ 28,5%</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                
                <div class="columns is-multiline">
                  <div class="column is-6">
                    <div class="panel">
                      <p class="panel-heading">
                        Expenses: Daily - $700
                      </p>
                      <div class="panel-block">
                        <figure class="image is-16x9">
                          <img src="https://placehold.it/1280x720">
                        </figure>
                      </div>
                    </div>
                  </div>
                  <div class="column is-6">
                    <div class="panel">
                      <p class="panel-heading">
                        Refunds: Daily - $200
                      </p>
                      <div class="panel-block">
                        <figure class="image is-16x9">
                          <img src="https://placehold.it/1280x720">
                        </figure>
                      </div>
                    </div>
                  </div>
                  <div class="column is-6">
                    <div class="panel">
                      <p class="panel-heading">
                        Something
                      </p>
                      <div class="panel-block">
                        <figure class="image is-16x9">
                          <img src="https://placehold.it/1280x720">
                        </figure>
                      </div>
                    </div>
                  </div>
                  <div class="column is-6">
                    <div class="panel">
                      <p class="panel-heading">
                        Something Else
                      </p>
                      <div class="panel-block">
                        <figure class="image is-16x9">
                          <img src="https://placehold.it/1280x720">
                        </figure>
                      </div>
                    </div>
                  </div>
                </div>
              </main>
            </div>
          </div>
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
