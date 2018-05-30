<!DOCTYPE html>
<html>
<head>

  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  
  <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">

  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
  
  <link rel="stylesheet" href="css/styles.css">

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>




</head>

<body>
  <div class="navbar-fixed">

    <nav>
      <div class="nav-wrapper purple darken-4">
        <a href="index.php" class="brand-logo">Logo ici</a>

        <ul class="right hide-on-med-and-down">
          <li><a href="#">Accueil</a></li>
          <li><a href="#test">Ou nous trouver</a></li>
          <li><a href="#slider">Qui sommes-nous?</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>


        <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>

      </div>
    </nav>
  </div>

  <ul id="slide-out" class="sidenav">
    <li><a href="#">Accueil</a></li>
    <li><a href="#test">Ou nous trouver</a></li>
    <li><a href="#slider">Qui sommes-nous?</a></li>
    <li><a href="#contact">Contact</a></li>
  </ul>


  <div class="parallax-container valign-wrapper" >
    <div class="container">
      <div class="row purple-text darken-4 center-align">
        <h1 id="test">In labore</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente quos atque illum culpa nam modi, inventore ut, blanditiis commodi hic. In nostrum debitis ullam cum dolore repudiandae illum modi ut?</p>
      </div>
    </div>
    <div class="parallax"><img src="../ImgFolder/cabaneroutebois.jpg" class="responsive-img"></div>
  </div>


  <div class="section white" id="test">
    <div class="row container">

      <article class="col m4 s12 center-align">
        <i class="material-icons medium pink-text darken-4">query_builder</i>
        <h2>Horaires</h2>
        <p>  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus voluptates iste, fuga ipsam dolore, dignissimos cum deleniti. Voluptate ab, illum optio hic nesciunt et explicabo ut facere quidem, nulla, praesentium!</p>
      </article>
      
      <article class="col m4 s12 center-align">
        <i class="material-icons medium green-text darken-4">location_on</i>
        <h2>Adresse</h2>
        <p>  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus voluptates iste, fuga ipsam dolore, dignissimos cum deleniti. Voluptate ab, illum optio hic nesciunt et explicabo ut facere quidem, nulla, praesentium!</p>
      </article>
      
      <article class="col m4 s12 center-align">
        <i class="material-icons medium blue-text darken-4">credit_card</i>
        <h2>Paiement</h2>
        <p>  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus voluptates iste, fuga ipsam dolore, dignissimos cum deleniti. Voluptate ab, illum optio hic nesciunt et explicabo ut facere quidem, nulla, praesentium!</p>
      </article>
    </div>
  </div>


  <div class="parallax-container">
    <div class="parallax"><img src="../ImgFolder/abeillebutine.jpg" class="responsive-img"></div>
  </div>
  <p id="slider"></p>
  <h1>Qui sommes-nous?</h1>
  <div class="slider">

    <ul class="slides">
      <li>
        <img src="../ImgFolder/Felin_26.jpg" alt="">
        <div class="caption black-text left-align darken-4">
          <h3>Image Felin</h3>
          <h5>Leopard!!!</h5>
        </div>
      </li>
      <li>
        <img src="../ImgFolder/spain.jpg" alt="">
        <div class="caption black-text right-align darken-4">
          <h3>Andalousie</h3>
          <h5>Don Quichotte un moulin !!!</h5>
        </div>
      </li>
      <li>
        <img src="../ImgFolder/modern.png" alt="">
        <div class="caption black-text center-align">
          <h3>Futur</h3>
          <h5>Le 22éme siécle arrive</h5>
        </div>
      </li>
    </ul>
  </div>

  <div class="container" id="contact">
    <h1>Contact</h1>
    <div class="row">
      <form class="col m6 s12">


        <div class="input-field col s12"> 
          <i class="material-icons prefix large">account_circle</i>
          <input id="first_name" type="text" class="validate">
          <label for="first_name">Prénom</label>
        </div>

        <div class="input-field col s12">
          <i class="material-icons prefix  white-text">account_circle</i>
          <input id="last_name" type="text" class="validate">
          <label for="last_name">Nom</label>
        </div>





        <div class="input-field col s12">
         <i class="material-icons prefix">mail_outline</i>
         <input id="email" type="email" class="validate">
         <label for="email">Email</label>
       </div>
       <div class="input-field col s12">
        <i class="material-icons prefix">local_phone</i>
        <input id="tel" type="tel" class="validate">
        <label for="tel">Telephone</label>
      </div>

      <div class="input-field col s12 left-align">
        <button class="btn waves-effect waves-light large">
          Envoyer
        </button>
        
      </div>
    </form>


  </div>
</div>


<footer class="page-footer">
  <div class="container">
    <div class="row">
      <div class="col l6 s12">
        <h5 class="white-text">Footer Content</h5>
        <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
      </div>
      <div class="col l4 offset-l2 s12">
        <h5 class="white-text">Links</h5>
        <ul>
          <li><a href="#">Accueil</a></li>
          <li><a href="#test">Ou nous trouver</a></li>
          <li><a href="#slider">Qui somme-nous?</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="footer-copyright">
    <div class="container">
      © 2018 Copyright Text
      <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
    </div>
  </div>
</footer>


























<!-- CDN jQuey 3.3.1 -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
<!-- Script menu hamburger SideNav -->
<script>
  $(document).ready(function(){
    $('.sidenav').sidenav();
  });
</script>
<!-- Script effet Parallax -->
<script>
  $(document).ready(function(){
    $('.parallax').parallax();
  });
</script>
<!-- Script Slider -->
<script>  
 $(document).ready(function(){
  $('.slider').slider({indicators:true, height:400, interval:3000, duration:500});
});
</script>
</body>
</html>

