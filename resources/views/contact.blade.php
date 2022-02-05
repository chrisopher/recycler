<!DOCTYPE html>
<html>
<head>
<title>Recycler Donation</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Recycler Donation</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/logo.png" />

    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap-theme.min.css" rel="stylesheet">

    <link href="assets/css/owl.carousel.css" rel="stylesheet">
    <link href="assets/css/owl.theme.default.min.css" rel="stylesheet">

    <link href="assets/css/magnific-popup.css" rel="stylesheet">

    <link href="assets/css/style.css" rel="stylesheet">

</head>
<body>
 <div id="menu-item" class="menu-item hide-menu">
        <div class="container">
            <ul>
                <a href="index.php">
                    <li>home</li>
                </a>
                <a href="index.php#about">
                    <li>about</li>
                </a>
                <a href="index.php#expertise">
                    <li>expertise</li>
                </a>
                <a href="index.php#workstation">
                    <li>workstation</li>
                </a>
                <a href="index.php#team">
                    <li>team</li>
                </a>
                <a href="index.php#contact">
                    <li>contact</li>
                </a>
                <a href="contact">
                    <li>Join our team</li>
                </a>
            </ul>
        </div>
    </div>
    <div class="main element">
        <nav class="navbar navbar-default navbar-vira">
            <div class="container">
                <div class="navigation-bar">
                    <div class="row">
                        <div class="col-xs-6">
                            <div class="logo">
                                <a href="index.php"><img src="assets/images/logo.png"  style="width:10%"/></a>
                            </div>
                        </div>
                        <div class="col-xs-6 text-right">
                            <div class="menu m">
                                <a href="#"><span class="ion-navicon _ion-android-menu"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="title mt80">Join Us!</h2>
                </div>
                <div class="col-sm-12">
                    <div class="headings">
                        <h1>Heading 1 with paragraph</h1>
                        <p>
                            Complimenten, bewonderend gefluit en lonkende blikken zijn enkele risico’s die The Garment
                            Club met zich meebrengt. Onze enige missie is dat jij de best geklede man van de omgeving
                            bent. Laat gratis een op eden box samenstellen door je personal shopper en betaal.
                            Complimenten, bewonderend gefluit en lonkende blikken zijn enkele risico’s die The Garment
                            Club met zich meebrengt. Onze enige missie is dat jij de best geklede man van de omgeving
                            bent. Laat gratis een op eden box samenstellen door je personal shopper en betaal.
                        </p>


                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <h2 class="mt80">Tell us about yourself</h2>
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
<script src="assets/js/jquery-3.1.1.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="https://use.fontawesome.com/55b73bf748.js"></script>
    <script src="assets/js/jquery.magnific-popup.js"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>