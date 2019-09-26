@extends('layouts.app')

@section('content')
    <section class="hero is-info is-large" id="heroImg">
          <div class="hero-head">
          </div>
          <div class="hero-body">
            <div class="container has-text-left">
              <h1 class="title has-text-black is-1">
                MEDICAL KNOWLEDGE DISTILLED
              </h1>
              <h2 class="subtitle has-text-black is-3">
                Welcome to a new era of medical education
              </h2>
            </div>
          </div>
        </section>
        <section class="section">
            <div class="container">
                <div class="columns is-mobile">
                  <div class="column is-half is-offset-one-quarter">
                      <h1 class="title is-1  has-text-centered">
                      <!-- American University of Antigua Group Discount -->
                      @if(count($discounts))
                        @foreach($discounts as $discount)
                          {{ $discount->university }}
                        @endforeach
                      @endif  
                      <br>
                       Sign-up</h1> <br><br>
                      <h3 class="subtitle">Join us in empowering global health</h3>
                      <h4 class="subtitle">We promote the growth of great doctors to try and make the world a healthier place.</h4>
                      <p>AMBOSS was created by a team of physicians, clinicians and medical students just like you who believe there is a smarter way to study and practice medicine. Our platform is continuously updated and written with the highest quality standards.</p>
                  </div>
                </div>
            </div>
        </section>
        <section class="section">
            <div class="container">
                <div class="columns is-mobile">
                  <div class="column">
                    <div>
                        <h2 class="title is-3  has-text-centered">
                          The most concise learning platform for medical students
                      </h2> <br>
                      <h4 class="title is-5  has-text-centered">
                          Our Study Library
                      </h4>
                       <br>
                    </div>
                    <div class="learn">
                      <div class="columns">
                          <div class="column">
                            <div class="card">
                                <div class="card-image">
                                  <figure class="image is-4by3">
                                    <img src="/img/hush-naidoo-yo01Z-9HQAw-unsplash.jpg" alt="Placeholder image">
                                  </figure>
                                </div>
                                <div class="card-content">
                                    <div class="content-media">
                                        <p><strong>Medical</strong></p>
                                    </div>
                                  <div class="content">
                                    <p class="is-text-6"><strong>200 series</strong> | 55 videos 
                                    </p>
                                  </div>
                                </div>
                              </div>
                          </div>
                          <div class="column">
                            <div class="card">
                                <div class="card-image">
                                  <figure class="image is-4by3">
                                    <img src="/img/robina-weermeijer-iuuWGXEC50U-unsplash.jpg" alt="Placeholder image">
                                  </figure>
                                </div>
                                <div class="card-content">
                                    <div class="content-media">
                                        <p><strong>Dentistry</strong></p>
                                    </div>
                                  <div class="content">
                                    <p>15 series | 202 videos
                                    </p>
                                  </div>
                                </div>
                              </div>
                          </div>
                          <div class="column">
                            <div class="card">
                                <div class="card-image">
                                  <figure class="image is-4by3">
                                    <img src="/img/hush-naidoo-yo01Z-9HQAw-unsplash.jpg" alt="Placeholder image">
                                  </figure>
                                </div>
                                <div class="card-content">
                                     <div class="content-media">
                                        <p><strong>Podiatry</strong></p>
                                    </div>
                                  <div class="content">
                                    <p><strong>67 series</strong> | 220 Courses
                                    </p>
                                  </div>
                                </div>
                              </div>
                          </div>
                          <div class="column">
                            <div class="card">
                                <div class="card-image">
                                  <figure class="image is-4by3">
                                    <img src="/img/robina-weermeijer-qIK_fc-4fmw-unsplash.jpg" alt="Placeholder image">
                                  </figure>
                                </div>
                                <div class="card-content">
                                     <div class="content-media">
                                        <p><strong>Optometry</strong></p>
                                    </div>
                                  <div class="content">
                                    <p><strong>120 series</strong> | 220 Courses
                                    </p>
                                  </div>
                                </div>
                              </div>
                          </div>
                          <div class="column">
                            <div class="card">
                                <div class="card-image">
                                  <figure class="image is-4by3">
                                    <img src="/img/hush-naidoo-yo01Z-9HQAw-unsplash.jpg" alt="Placeholder image">
                                  </figure>
                                </div>
                                <div class="card-content">
                                     <div class="content-media">
                                        <p><strong>Chiropracty</strong></p>
                                    </div>
                                  <div class="content">
                                    <p><strong>300 series</strong> | 22 Courses
                                    </p>
                                  </div>
                                </div>
                              </div>
                          </div>
                          <div class="column">
                            <div class="card">
                                <div class="card-image">
                                  <figure class="image is-4by3">
                                    <img src="/img/hush-naidoo-yo01Z-9HQAw-unsplash.jpg" alt="Placeholder image">
                                  </figure>
                                </div>
                                <div class="card-content">
                                     <div class="content-media">
                                        <p><strong>Pharmacy</strong></p>
                                    </div>
                                  <div class="content">
                                    <p><strong>44 series</strong> | 22 Courses 
                                    </p>
                                  </div>
                                </div>
                              </div>
                          </div>
                          <div class="column">
                            <div class="card">
                                <div class="card-image">
                                  <figure class="image is-4by3">
                                    <img src="/img/hush-naidoo-yo01Z-9HQAw-unsplash.jpg" alt="Placeholder image">
                                  </figure>
                                </div>
                                <div class="card-content">
                                     <div class="content-media">
                                        <p><strong>Veterinary Medicine</strong></p>
                                    </div>
                                  <div class="content">
                                    <p><strong>200 series</strong>| 20 Courses 
                                    </p>
                                  </div>
                                </div>
                              </div>
                          </div>
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class=" has-text-centered">
                        <a href="#" class="button is-info">Browse Our Library</a>
                    </div>
                  </div>
                </div>
            </div>
        </section>
        <section class="section">
            <div class="container">
              <h4 class="title is-5  has-text-centered">
                  Our Courses, Modules and Tracks
              </h4> <br>
                <div class="columns is-multiline is-mobile">
                <div class="column">
                  <div class="card">
                    <div class="card-image">
                      <figure class="image is-4by3">
                        <img src="/img/hush-naidoo-yo01Z-9HQAw-unsplash.jpg" alt="Placeholder image">
                      </figure>
                    </div>
                    <div class="card-content">
                      <div class="media">
                        <div class="media-content">
                          <p class="title is-4">Medicine - Some Areas of Specialization</p>
                        </div>
                      </div>
                      <div class="content">
                        <p>Allergology,
                          Anesthesiology,
                          Cardiology,
                          Dermatology,
                          Emergency Medicine 
                        </p>
                      </div>
                      <a href="#" class="button is-info">EXPLORE FIELD</a>
                    </div>
                  </div>
                </div>
                <div class="column">
                  <div class="card">
                    <div class="card-image">
                      <figure class="image is-4by3">
                        <img src="/img/quang-tri-nguyen-4YZyBNA1UeA-unsplash.jpg" alt="Placeholder image">
                      </figure>
                    </div>
                    <div class="card-content">
                      <div class="media">
                        <div class="media-content">
                          <p class="title is-4">Dentistry - Some Areas of Specialization</p>
                        </div>
                      </div>

                      <div class="content">
                        <p>Endodontics
                          Oral Pathology
                          Oral & Maxillofacial Radiology
                          Oral & Maxillofacial Surgery
                          Orthodontics
                          Pediatric Dentistry
                          Periodontics
                          Prosthodontics
                          Public Health
                          Research
                        </p>
                      </div>
                      <a href="#" class="button is-info">EXPLORE FIELD</a>
                    </div>
                  </div>
                </div>
                <div class="column">
                  <div class="card">
                    <div class="card-image">
                      <figure class="image is-4by3">
                        <img src="/img/robina-weermeijer-Pw9aFhc92P8-unsplash.jpg" alt="Placeholder image">
                      </figure>
                    </div>
                    <div class="card-content">
                      <div class="media">
                        <div class="media-content">
                          <p class="title is-4">Podiatry - Some Areas of Specialization </p>
                        </div>
                      </div>

                      <div class="content">
                        <p>Surgery
                          Orthopedics
                          Primary Care
                          Sports Medicine
                          Pediatrics
                          Dermatology
                          Radiology
                          Geriatrics
                          Diabetic Foot Care
                        </p>
                      </div>
                      <a href="#" class="button is-info">EXPLORE FIELD</a>
                    </div>
                  </div>
                </div>
                <div class="column">
                  <div class="card">
                    <div class="card-image">
                      <figure class="image is-4by3">
                        <img src="/img/robina-weermeijer-iuuWGXEC50U-unsplash.jpg" alt="Placeholder image">
                      </figure>
                    </div>
                    <div class="card-content">
                      <div class="media">
                        <div class="media-content">
                          <p class="title is-4">Optometry - Some Areas of Specialization </p>
                        </div>
                      </div>

                      <div class="content">
                        <p>
                          Family Practice
                          Pediatric Optometry
                          Geriatric Optometry
                          Vision Therapy
                          Contact Lenses
                          Hospital-Based Optometry
                          Primary Care Optometry
                          Ocular Disease
                          Public Health
                          Research
                        </p>
                      </div>
                      <a href="#" class="button is-info">EXPLORE FIELD</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class=" has-text-centered">
                  <a href="#" class="button is-large is-info">Browse All Courses</a>
              </div>
            </div>
          </section>
          <section class="section">
            <div class="container">
              <div class="columns is-mobile">
                  <div class="column is-half is-offset-one-quarter">
                    <div>
                        <h2 class="title is-3 has-text-centered">
                          Choose the plan that fits your needs. 
                      </h2> <br>
                      <p class="subtitle is-5">
                          Joining takes less than a minute, and, if your peers are correct, is the best decision you'll make as class, study group and even your batch year. If you're still on the fence, we have a plan called "Super Saver" - and it’s not like the gym.
                      </p>
                      <!-- <br> -->
                      <!-- <h3 class="title is-3 has-text-centered">
                          How does it work?
                      </h3>
                      <p class="subtitle is-5">
                          Add your name to the group by midnight <strong>Saturday, 1st of December 2019.</strong> After the deadline, once we have reached 50 sign-ups, we will open the group discount for you to purchase your discounted AMBOSS access!
                      </p> -->
                    </div>
                    <br>
                    <br>
                  </div>
                </div>
                <div class="columns">
                  <div class="column">
                  <div class="card">
                      <div class="card-image">
                        <figure class="image is-4by3">
                          <img src="/img/tenten.png" alt="Placeholder image">
                        </figure>
                      </div>
                      <div class="card-content">
                        <div class="media">
                          <div class="media-content">
                            <p class="title is-4">
                              Get 10% off when you sign up for 10+ people
                            </p> 
                            <p class="title is-4">
                              How does it work?
                            </p>
                            <p class="subtitle is-5">
                              @if(count($discounts))
                                @foreach($discounts as $discount)
                                  Add your name to the group to {{ $discount->university }} list by midnight 
                                  <strong>{{ $discount->enddate }}</strong>. {{ $discount->discountrules }}.
                                @endforeach
                              @endif  
                            </p>                            
                          </div>
                        </div>
                        <div class="content">
                          <div class=" has-text-centered">
                            <a href="{{ ('/ten/create') }}" class="button is-medium is-info">Proceed to Sign Up</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="column">
                    <div class="card">
                      <div class="card-image">
                        <figure class="image is-4by3">
                          <img src="/img/20.png" alt="Placeholder image">
                        </figure>
                      </div>
                      <div class="card-content">
                        <div class="media">
                          <div class="media-content">
                            <p class="title is-4">Get 20% off when you sign up for 20+ people</p>
                            <p class="title is-4">
                              How does it work?
                            </p>
                            <p class="subtitle is-5">
                              @if(count($discounttwo))
                                @foreach($discounttwo as $discounttw)
                                  Add your name to the group to {{ $discounttw->university }} list by midnight 
                                  <strong>{{ $discounttw->enddate }}</strong>. {{ $discounttw->discountrules }}.
                                @endforeach
                              @endif  
                            </p> 
                          </div>
                        </div>
                        <div class="content">                          
                          <div class=" has-text-centered">
                            <a href="{{ ('/twenty/create') }}" class="button is-medium is-info">Proceed to Sign Up</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
            <div class="container">
                <div class="columns">
                  <div class="column">
                    <div class="card">
                      <div class="card-image">
                        <figure class="image is-4by3">
                          <img src="/img/30.png" alt="Placeholder image">
                        </figure>
                      </div>
                      <div class="card-content">
                        <div class="media">
                          <div class="media-content">
                            <p class="title is-4">Get 30% off when you sign up for 30+ people</p>
                            <p class="title is-4">
                              How does it work?
                            </p>
                            <p class="subtitle is-5">
                              @if(count($discountthree))
                                @foreach($discountthree as $discountthre)
                                  Add your name to the group to {{ $discountthre->university }} list by midnight 
                                  <strong>{{ $discountthre->enddate }}</strong>. {{ $discountthre->discountrules }}.
                                @endforeach
                              @endif  
                            </p> 
                          </div>
                        </div>
                        <div class="content">
                          <div class=" has-text-centered">
                            <a href="{{ ('/thirty/create') }}" class="button is-medium is-info">Proceed to Sign Up</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="column">
                    <div class="card">
                      <div class="card-image">
                        <figure class="image is-4by3">
                          <img src="/img/50.png" alt="Placeholder image">
                        </figure>
                      </div>
                      <div class="card-content">
                        <div class="media">
                          <div class="media-content">
                            <p class="title is-4">Get 50% off when you sign up for 50+ people</p>
                            <p class="title is-4">
                              How does it work?
                            </p>
                            <p class="subtitle is-5">
                              @if(count($discountfive))
                                @foreach($discountfive as $discountfiv)
                                  Add your name to the group to {{ $discountfiv->university }} list by midnight 
                                  <strong>{{ $discountfiv->enddate }}</strong>. {{ $discountfiv->discountrules }}.
                                @endforeach
                              @endif  
                            </p> 
                          </div>
                        </div>
                        <div class="content">
                          <div class=" has-text-centered">
                            <a href="{{ ('/fifty/create') }}" class="button is-medium is-info">Proceed to Sign Up</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
       </section>
@endsection
