@extends('layouts.app')

@section('content')
  <div class="section">
      <div class="columns">
        <aside class="column is-2 has-background-primary">
          <nav class="menu">
            <p class="menu-label">
              General
            </p>
            <ul class="menu-list">
              <li><a class="is-active">AMBOSS Dashboard</a></li>
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
              Existing Users
            </p>
            <ul class="menu-list">
              <li><a href="{{ route('users.index') }}">List of Existing User Signups</a></li>
            </ul>
            <p class="menu-label">
              Manage Discount Groups
            </p>
            <ul class="menu-list">
              <li><a href="{{ route('tengroups.index') }}">10% Group Discount</a></li>
              <li><a href="{{ route('twentygroups.index') }}">20% Group Discount</a></li>
              <li><a href="{{ route('thirtygroups.index') }}">30% Group Discount</a></li>
              <li><a href="{{ route('fiftygroups.index') }}">50% Group Discount</a></li>
            </ul>
            <p class="menu-label">
              Manage Tables
            </p>
            <ul class="menu-list">
              <li><a href="{{ route('ten.index') }}">Plan A [10%] Form</a></li>
              <li><a href="{{ route('twenty.index') }}">Plan B [20%] Form</a></li>
              <li><a href="{{ route('thirty.index') }}">Plan C [30%] Form</a></li>
              <li><a href="{{ route('fifty.index') }}">Plan D [50%] Form</a></li>
            </ul>
             <p class="menu-label">
              Manage Pages
            </p>
            <ul class="menu-list">
              <li><a href="{{ ('/') }}">Langing Page</a></li>
              <!-- <li><a href="{{ ('/ten/create') }}">Plan A - 10%</a></li>
              <li><a href="{{ ('/twenty/create') }}">Plan B - 20%</a></li>
              <li><a href="{{ ('/thirty/create') }}">Plan C - 30%</a></li>
              <li><a href="{{ ('/fifty/create') }}">Plan D - 50%</a></li> -->
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
@endsection
