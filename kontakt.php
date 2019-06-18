<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="strona.css" type="text/css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="icon" href="images\ikona.ico">
  <title>SzybkieUprawnienia</title>
</head>

<body>
  <nav class="navbar navbar-expand-md text-capitalize navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="index.html" id="logo" style="opacity: 0.5;"> <b class="text-lowercase">szybkieUprawnienia.pl</b></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent" aria-controls="navbar2SupportedContent" aria-expanded="false"
        aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
      <div class="collapse navbar-collapse text-center justify-content-end" id="navbar2SupportedContent">
        <a class="btn btn-default navbar-btn btn-dark text-secondary" href="index.html">Strona Główna</a>
        <a class="btn btn-default navbar-btn btn-dark text-secondary" href="nauka.html">Nauka</a>
        <a class="btn btn-default navbar-btn text-secondary btn-dark">Egzamin</a>
        <a class="btn btn-default navbar-btn text-secondary btn-dark">akty prawne</a>
        <a class="btn btn-default navbar-btn btn-dark text-secondary" href="index.html#cennik">Cennik</a>
        <a class="btn btn-default navbar-btn btn-dark text-secondary" href="kontakt.html">Kontakt</a>
        <a class="btn navbar-btn ml-2 text-white btn-lg btn-dark" data-toggle="modal" data-target="#modal-login"><i class="fa d-inline fa-lg fa-user-circle-o"></i>&nbsp; Zaloguj się</a>
      </div>
    </div>
  </nav>
  <div class="text-white bg-light formularzkontaktowy">
    <div class="container">
    <div id="message"></div>
      <div class="row">
        <div class="col-md-6">
          <iframe width="800" height="400" frameborder="0" style="width:100%; height:100%;" allowfullscreen="" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8040.404171391!2d23.233804150528314!3d53.19226754816593!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471ffe0540f05635%3A0xa29f19665c8a0ac6!2s3+Maja%2C+16-010+Nowodworce!5e0!3m2!1spl!2spl!4v1506080439905"></iframe>
        </div>
        <div class="col-md-6 bg-dark p-2">
          <h3 contenteditable="true">Formularz kontaktowy</h3>
          <p><b>SzybkieUprawnienia.pl</b> ul.3 Maja 42, 16-010 Nowodworce, woj. podlaskie
            <br>tel. 510 334 653 e-mail: szybkieuprawnienia@gmail.com NIP:1234567890</p>
          <form id="form" action="mail.php" method="POST">
            <div class="form-group"> <label for="InputName">Imię:</label>
              <input type="text" class="form-control" id="InputName" name="your-name" placeholder="Imię"> </div>
            <div class="form-group"> <label for="InputEmail1">Adres e-mail:</label>
              <input type="email" class="form-control" id="InputEmail1" name="your-email" placeholder="Adres e-mail"> </div>
            <div class="form-group"> <label for="Textarea">Treść wiadomości:</label> 
            <textarea class="form-control" id="Textarea" rows="3" name="your-message" placeholder="Treść wiadomości"></textarea> </div>
            <button type="submit" class="btn btn-warning">Wyślij</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="bg-dark text-white">
    <div class="container">
      <div class="row">
        <div class="p-4 col-md-3">
          <h5 class="mb-4 text-secondary" contenteditable="true">SzybkieUprawnienia.pl</h5>
          <p class="text-white">A company for whatever you may need, from website prototyping to publishing</p>
        </div>
        <div class="p-4 col-md-3">
          <h5 class="mb-4 text-secondary">Menu</h5>
          <ul class="list-unstyled">
            <a href="index.html" class="text-white">Strona główna</a>
            <br>
            <a href="#" class="text-white">Nauka</a>
            <br>
            <a href="#" class="text-white">Egzamin</a>
            <br>
            <a href="index.html#cennik" class="text-white">Cennik</a>
            <br>
            <a href="" class="text-white">Polityka prywatności</a>
            <br>
            <a href="#" class="text-white">Kontakt</a>
          </ul>
        </div>
        <div class="p-4 col-md-3">
          <h5 class="mb-4 text-secondary">Kontakt</h5>
          <p>
            <a href="mailto:info@pingendo.com" class="text-white"><span class="fa d-inline mr-3 text-secondary fa-envelope-o"></span>szybkieuprawnienia@gmail.com</a>
          </p>
          <p>
            <a href="tel:+246 - 542 550 5462" class="text-white"><i class="fa d-inline mr-3 text-secondary fa-phone"></i>510 334 653</a>
          </p>
          <p>
            <a href="https://goo.gl/maps/AUq7b9W7yYJ2" class="text-white" target="blank"><i class="fa d-inline mr-3 fa-map-marker text-secondary"></i>adresik jakiś</a>
          </p>
        </div>
        <div class="p-4 col-md-3">
          <h5 class="mb-4 text-center text-secondary" contenteditable="true">Polub nas na facebooku!</h5>
          <p class="lead">
            <a href="mailto:info@pingendo.com" class="text-white"><i class="fa d-inline mr-3 fa-facebook-square fa-2x text-white"></i><b>SzybkieUprawnienia.pl</b></a>
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 mt-3">
          <p class="text-center text-white">© Copyright 2017 ZajkorGroup All rights reserved. </p>
        </div>
      </div>
    </div>
  </div>
  <script src="mojeJS/kontakt/ajax.js"></script>
  <script src="mojeJS/kontakt/scriptsKontakt.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>

</html>