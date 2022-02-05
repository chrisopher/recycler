<!DOCTYPE html>
<html lang="en">
  <head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Recycler</title> 
    <link rel="shortcut icon"type="image/x-icon" href="assets/images/logo.png"/>
<link rel="stylesheet" href="assets/css/magnific-popup.css" type="text/css">
<link rel="stylesheet" href="assets/css/owl.theme.default.min.css" type="text/css">
<link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
<link rel="stylesheet" href="assets/css/bootstrap-theme.min.css" type="text/css">
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
 <link rel="stylesheet" href="assets/css/style.css" type="text/css">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
 
    <div id="menu-item" class="menu-item hide-menu">
      <div class="container">
        <ul>
          <a href="index.html"><li>home</li></a>
          <a href="#about"><li>about</li></a>
          <a href="#expertise"><li>Blogs and Articles</li></a>
          <a href="#workstation"><li>projects</li></a>
          <a href="#team"><li>team</li></a>
          <a href="#contact"><li>contact</li></a>
          
        </ul>
      </div>
    </div>
    <div class="main">
      <header class="bg-img header">
        <nav class="navbar navbar-default navbar-vira">
          <div class="container">
            <div class="navigation-bar">
              <div class="row">
                <div class="col-xs-6">
                  <div class="logo">

                    <a href="index.php"><img src="assets/images/logno.png"  style="width:10%"/></a>
                  </div>
                </div>
                <div class="col-xs-6 text-right">
                  <div class="menu m">
                    <a href="#"
                      ><span class="ion-navicon _ion-android-menu"></span
                    ></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </nav>
        <div class="container">
          <div class="row">
            <div class="intro-box">
              <div class="intro">
                <h1>Recycler</h1>
                <p>The Environmental Army</p>
                <!-- <a class="btn vira-btn" href="#">Explore us</a> -->
              </div>
            </div>
          </div>
        </div>
      </header>
      <section id="about" class="about section">
        <div class="container">
          <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
              <h2 class="title">About Us</h2>
              <p>
               We are a team of passionate youth working together towards making this world a better place by creating a new sustainable approaches to the waste problem in Lebanon.
              </p>
              <img src="assets/images/signature.png" />
              <span>Recycler inc-ceo</span>
            </div>
          </div>
        </div>
      </section>
      <section class="purpose section">
        <div class="container">

          <h2 class="title">What we do</h2>
          <div class="row">

            @foreach($process as $proces)
            <div class="col-sm-4">
              <div class="vira-card">
                <div class="vira-card-header">
                  <div class="card-icon">
                    <span class="{{ $proces->icons }}" aria-hidden="true"></span>
                  </div>
                </div>
                <div class="vira-card-content">
                  <h3><p>{{ $proces->processtitle }}</p> </h3>
                 <p>{{ $proces->processbody }}</p>
                </div>
              </div>
            </div>
             @endforeach
         </div>
          </div>

      </section>
      <section id="expertise" class="expert">
        <div class="container-fluid">
          <div class="row">
            
            <div class="col-sm-6 bg-img">

              <div></div>
            </div>
            <div class="col-sm-5 section">
              <h2 class="title">THE LATEST NEWS</h2>
              <div id="expert-slider" class="owl-carousel">
                <div class="item">
                  <p>
                    Le « bateau recycleur » est la première innovation dans son genre au Moyen-Orient et l’une des premières au Liban dans le cadre de la lutte contre les déchets plastiques jetés dans la Méditerranée et ses affluents. L’idée a été développée par Christopher Daccache avec l’aide d’une équipe de jeunes volontaires au sein de l’association Recycler Donation qu’il a fondée.
                  </p>
                </div>
                <div class="item">
                  <p>
                    Ce bateau modèle est lui-même fabriqué à l’aide de déchets auxquels le recyclage a donné une nouvelle vie. Amarré au niveau du barrage de la Compagnie phénicienne des forces hydroélectriques de Nahr Ibrahim, il est composé de tonneaux de 200 litres recyclés et de plaques formées chacune de 3 500 sacs en plastique réutilisés, rendant l’embarcation totalement écologique.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="vira-quote section bg-img">
        <div class="container">
          <div class="row">
            <div class="col-sm-11">
              <img class="quote" src="assets/images/quote.png" />
               @foreach($quot as $q)

              
             <p>{{ $q->quotebody }}</p>  
              <p class="author">{{ $q->quoteauthor }}</p>
              @endforeach 
            </div>
          </div>
        </div>
      </section>
      
      <section id="workstation" class="work section">
        <div class="container">
          <h2 class="title">Our projects</h2>
          <div id="workstation-slider" class="owl-carousel">
@foreach($project as $post)
            <div class="item">
              <div class="vira-card">
                 
                <div class="vira-card-header">
                 
                
                     <img src="{{ Voyager::image( $post->image ) }}"style="height:10%"  >
                     
                 </a>
                </div>
                <div class="vira-card-content">
                  <h3><span>{{ $post->nameproject }}</span></h3>
                  <p>
                    <span>{{ $post->descriptionproject }}</span>
                  </p>
                </div>
              </div>
            </div>   

                @endforeach 
          </div>
        </div>
      </section>

                
       <section class="watch bg-img">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <span>Watch showreel</span>
              <a
                class="popup-youtube btn"
                href="https://www.youtube.com/watch?v=nO67hAI2_3g"
                ><span class="fa fa-play"></span
              ></a>
              <span>with us</span>
            </div>
          </div>
        </div>
      </section>
    
      <section id="team" class="team section">
        <div class="container">
          <h2 class="title">Our team members</h2>
          <div class="row">
@foreach($membr as $membo)


           
             <div class="col-sm-12">
              <div class="vira-card">
                <div class="vira-card-header">
                   <a href="/members/{{ $membo->slug }}">
                     <img src="{{ Voyager::image( $membo->image) }}" style="width: 70%" >
                     
                 </a>
                </div>
                <div class="vira-card-content">
                  <h3><span>{{ $membo->name }}</span></h3>
                  <!-- <p>
                  <span>{{ $membo->title }}</span>
                  </p> -->
                  <!-- <div class="social-icons">
                    <ul>
                      <a href="#"
                        ><li><span class="ion-social-linkedin"></span></li
                      ></a>
                      <a href="#"
                        ><li><span class="ion-social-instagram"></span></li
                      ></a>
                    </ul>
                  </div> -->
                </div>
              </div>
            </div>
            @endforeach 
            
          </div>
        </div>
      </section>








      <section class="subscribe section bg-img">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <p>Subscribe to our newsletter to get update</p>
              <!-- <form class="form-inline">
                <div class="form-group">
                  <input
                    type="email"
                    class="form-control"
                    id="user-email"
                    placeholder="Write your email here...."
                  />
                </div>
                <button type="submit" class="btn vira-btn">Send me</button>
              </form> -->


                <div class="form-inline">
@if(Session::has('success'))
   <div class="form-control">
     {{ Session::get('success') }}
   </div>
@endif

{!! Form::open(['route'=>'email.store']) !!}

<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
   
    {!! Form::text('email', old('email'), ['class'=>'form-control', 'placeholder'=>'Write your email here....']) !!}
<span class="text-danger">{{ $errors->first('email') }}</span>
</div>


<div class="form-group">
<button class="btn vira-btn">Send mail</button>
</div>
</div>
{!! Form::close() !!}


            </div>
          </div>
        </div>
      </section>





 <!--  <section id="workstation" class="work section">
        <div class="container">
          <h2 class="title">data</h2>
          <div id="workstation-slider" class="owl-carousel">
@foreach($dat as $dt)
            <div class="item">
              <div class="vira-card">
                 
                <div class="vira-card-header">
                 
                
                     <img src="{{ Voyager::image( $dt->picture ) }}"style="height:10%"  >
                     
                 </a>
                </div>
                <div class="vira-card-content">
                  <h3><span>{{ $dt->type }}</span></h3>
                  <p>
                    <span>{{ $dt->qt }}</span>
                  </p>
                </div>
              </div>
            </div>   

                @endforeach 
          </div>
        </div>
      </section> -->







      <section id="contact" class="contact section">
        <div class="container">
          <h2 class="title">Contact us</h2>

 <section>
        
<div class="container">


@if(Session::has('success'))
   <div class="alert alert-success">
     {{ Session::get('success') }}
   </div>
@endif

{!! Form::open(['route'=>'contact.store']) !!}
<div class="col-sm-6">
<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
    {!! Form::label('Name:') !!}
    {!! Form::text('name', old('name'), ['class'=>'form-control', 'placeholder'=>'Name']) !!}
<span class="text-danger">{{ $errors->first('name') }}</span>
</div>
</div>


<div class="col-sm-6">
<div class="form-group {{ $errors->has('phone') ? 'has-error' : '' }}">
    {!! Form::label('Phone number:') !!}
    {!! Form::text('phone', old('phone'), ['class'=>'form-control', 'placeholder'=>'Phone Number']) !!}
<span class="text-danger">{{ $errors->first('phone') }}</span>
</div>
</div>


<div class="col-sm-6">
<div class="form-group {{ $errors->has('dateb') ? 'has-error' : '' }}">
    {!! Form::label('Date of Birth:') !!}
    {!! Form::text('dateb', old('dateb'), ['class'=>'form-control', 'placeholder'=>'Date of Birth']) !!}
<span class="text-danger">{{ $errors->first('dateb') }}</span>
</div>
</div>


<div class="col-sm-6">
<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
    {!! Form::label('Email:') !!}
    {!! Form::text('email', old('email'), ['class'=>'form-control', 'placeholder'=>'Email']) !!}
<span class="text-danger">{{ $errors->first('email') }}</span>
</div>
</div>



<div class="col-sm-12">
<div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}">
    {!! Form::label('Message:') !!}
    {!! Form::textarea('message', old('message'), ['class'=>'form-control', 'placeholder'=>'Message']) !!}
<span class="text-danger">{{ $errors->first('message') }}</span>
</div>
</div>

<div class="form-group">
<div class="col-sm-12">
<button class="btn vira-btn mr60">Send</button>
</div>
</div>

{!! Form::close() !!}

</div>



</section>


          <div class="row">
            <div class="col-sm-4">
              <div class="vira-card">
                <div class="vira-card-header">
                  <span class="fa fa-map-o" aria-hidden="true"></span>
                </div>
                <div class="vira-card-content">
                  <h3>Address</h3>
                  <p>
                    Level 5, 25 pitt st, US
                  </p>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="vira-card">
                <div class="vira-card-header">
                  <span class="fa fa-phone" aria-hidden="true"></span>
                </div>
                <div class="vira-card-content">
                  <h3>Phone</h3>
                  <p>
                    +961 79 187 175 
                  </p>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="vira-card">
                <div class="vira-card-header">
                  <span class="fa fa-paper-plane" aria-hidden="true"></span>
                </div>
                <div class="vira-card-content">
                  <h3>Email</h3>
                  <p>
                    Recycler.Donation@gmail.com
                  </p>
                </div>
              </div>
            </div>
            <div class="col-sm-12">
              <div class="social-icons">
                <ul>
                  <a href="https://www.facebook.com/recyclerdonation/"
                    ><li><span class="ion-social-facebook"></span></li
                  ></a>
                  <a href="#"
                    ><li><span class="ion-social-twitter"></span></li
                  ></a>
                  <a href="https://instagram.com/recycler_donation?igshid=8v9elg01n9zh"
                    ><li><span class="ion-social-instagram"></span></li
                  ></a>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>

    <script src="assets/js/jquery-3.1.1.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="https://use.fontawesome.com/55b73bf748.js"></script>
    <script src="assets/js/jquery.magnific-popup.js"></script>
    <script src="assets/js/script.js"></script>
  </body>
</html>
