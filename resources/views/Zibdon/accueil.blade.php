<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZIBDONt</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{url('bootstrap/css/style.css')}}" rel="stylesheet">
  <script src="{{url('bootstrap/js/java.js')}}"></script>

</head>
<body>
<style>

    @media screen and (min-width: 768px) and (max-width: 1024px) {
      #monCanvas{
    height: 150px;
    margin-top: -220px;
    width: 200px;
    padding-right: 90px;
    margin-right: 100px;
    position: relative;
    z-index: 1;
  }
 }
  @media screen and (min-width: 1024px) {
    #monCanvas{
    height: 300px;
    margin-top: -250px;
    width: 350px;
    padding-right: 90px;
    margin-right: 100px;
    position: relative;
    z-index: 1;
  }
  }
  @media screen and (max-width: 768px) {
    #monCanvas{
    height: 300px;
    margin-top: -250px;
    width: 350px;
    padding-right: 90px;
    margin-right: 100px;
    position: relative;
    z-index: 1;
  }
 }
</style>
  
<div class="" id="acceuil" >
  <a name="acceuil"></a>
    <div class="container">
     <header class="d-flex flex-wrap justify-content-center py-1 mb-3">
      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <img class="bi me-2" width="150" height="70" src="{{url('image/logo.jpg')}}" alt="">
      </a>
      <ul class="nav nav-pills mt-3">
        <img class="rounded-5 ms-2" width="50" height="50" src="{{url('image/Flag_of_Burkina_Faso.png')}}" alt="">
        <img class="rounded-5 ms-2" width="50" height="50" src="{{url('image/Drapeau_du_Niger.jpg')}}" alt="">
        <img class="rounded-5 ms-2" width="50" height="50" src="{{url('image/Flag_of_Ghana.png')}}" alt="">
      </ul>
     </header>
    </div>
    <section id="navba">
      <nav class="navbar navbar-expand-lg text-bg-success"aria-label="Twelfth navbar example">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample10" aria-controls="navbarsExample10" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample10">
                <ul class="navbar-nav">
                    <li class="nav-item fs-4">
                        <a class="nav-link active text-white user-select-auto" aria-current="page" href="#acceuil">Acceuil</a>
                    </li>
                    <li class="nav-item fs-4 "><a href="#apropos" class="nav-link text-white">A Propos</a></li>
                    <li class="nav-item fs-4 "><a href="#expertise" class="nav-link text-white">Nos Expertises</a></li>
                    <li class="nav-item fs-4 "><a href="#portfolio" class="nav-link text-white">Portefolio</a></li>
                    <li class="nav-item fs-4 "><a href="#partenaire" class="nav-link text-white">Partenaire</a></li>
                    <li class="nav-item fs-4 "><a href="#contact" class="nav-link text-white">Contact</a></li>
                </ul>
            </div>
        </div>
      </nav>
    </section>   
  </div>
</div>
<!-- slider debut -->
<section>
   <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" style="height: 560px;">
      <div class="carousel-inner" style="height: 100%;">
    <div class="carousel-item active">
      <img src="{{url('image/slider/istockphoto-1284212903-1024x1024.jpg')}}" class="d-block w-100 h-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{url('image/slider/téléchargement (1).jfif')}}" class="d-block w-100 h-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{url('image/slider/téléchargement.jfif')}}" class="d-block w-100 h-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{url('image/slider/istockphoto-998333806-1024x1024.jpg')}}" class="d-block w-100 h-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next " type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
  </div>
</section>
<!-- slider fin -->
<!-- a propos -->
<canvas id="myCanvas" width="500" height="350"></canvas>
<section id="apropos" class="shadow-sm p-3 mb-5 bg-body-tertiary rounded z-0">
    <a name="propos"></a>
    <div class="p-4 p-md-5 mb-4 rounded">
        <div class="col-md-9 px-0">
            <div class="fs-2 text-souligne">
                <span id="souligne" class="fw-bold text-warning"> Bienvenue chez ZIBDON ECO-SERVICES </span>
                <span id="ligne" class="text-warning"><</span>
                <span id="ligne" class="text-success"><</span>
                <span id="ligne" class="text-warning" ><</span>
            </div>
            <p class="lead my-3">Bienvenue sur notre site web, dédié à notre entreprise de construction spécialisée dans le secteur du BTP. Que ce soit des bâtiments résidentiels, commerciaux ou industriels, explorez notre site pour découvrir nos constructions et nos rénovations.</p>
            <p class="lead mb-0 text-dark fw-bold">Notre équipe qualifiée et passionnée est prête à relever tous les défis. Forts d'une expérience de plusieurs années, nous mettons notre expertise au service de vos projets de réalisations, de nos valeurs et de nos services sur mesure. Contactez-nous dès aujourd'hui pour concrétiser vos projets de construction avec succès.</p>
        </div>
    </div>
    <div class="row mb-2">
     <div class="container">
        <div class="row">
            <div class="col-md-3" >
                <div id="dd1" class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <h3 class="mb-0"><strong class="d-inline-block mb-2 text-primary">Notre Mission</strong></h3>
                        <p class="mt-3 card-text mb-auto">Notre mission est d'être un leader reconnu dans l'industrie du BTP en fournissant des services de construction de haute qualité, fiables et durables</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3" >
                <div id="dd1" class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <h3 class="mb-0"><strong class="d-inline-block mb-2 text-success">Nos valeurs</strong></h3>
                        <p class="mb-auto mt-3">Viser l'excellence au travail en toute intégrité, innovation, durabilité et préservation de l'environnement</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
             <img src="{{url('image/istockphoto-1204135470-1024x1024.jpg')}}" class="card-img-top" alt="...">
           </div>
        </div>
    </div>
    <section id="head" class="col-md-6 text-bg-success z-2" id="countSection">
                <div class="row mx-3">
                    <div class="col-md-3">
                        <div class="fs-3 fw-bold text-light" id="count1">+15</div>
                        <h6 class="fw-bolder">Année d'expériences</h6>
                    </div>
                    <div class="col-md-3">
                        <div class="fs-3 text-light fw-bold" id="count2">+400</div>
                        <h6 class="fw-bolder">Projets</h6>
                    </div>
                    <div class="col-md-3">
                        <div class="fs-3 text-light fw-bold" id="count3">+290</div>
                        <h6 class="fw-bolder">Collaborateurs</h6>
                    </div>
                    <div class="col-md-3">
                        <div class="fs-3 text-light fw-bold" id="count4">+75</div>
                        <h6 class="fw-bolder">Collaborateurs</h6>
                    </div>
                </div>
            </section>
  </div>
  <canvas id="monCanvas" width="500" height="650" class="z-1"></canvas>
</section>
 <!-- a propos fin -->

 <!-- a expertise fin -->
<section class="apropos " id="expertise">
        <a name="expertise"></a>
        <div id="a1" class="mt-5">
            <img id="a2" src="{{url('image/slider/travailler-projet-logement.jpg')}}"  alt="Description de l'image" class="image">
            <div class="container-fluid mb-5" id="a3">
                <div>
                    <div id="a4" class="text-center">EXPERTISES</div>
                    <div id="a7" class="text-center">Nous fournissons les meilleurs prestations</div>
                </div>
            </div>
            <section class="container col-lg-12" id="a5">
                <div class="row">
                    <div class="col-md-6 col-lg-3">
                        <div class="" id="a6">Batiment <br> Travaux Public </div>
                        <hr class="as">
                        <div class="card" id="ab">
                            <img  src="{{url('image/slider/istockphoto-897664288-1024x1024.jpg')}}"  class="card-img-top" alt="...">
                            <div class="card-body" id="ad">
                                <p id="pa" class="card-text ">Nous nous engageons à redéfinir les normes de l'industrie de la construction, en offrant des solutions de construction innovantes et durables pour les projets de bâtiments et les travaux publics.</p>
                              </div>
                        </div>
                    </div>
                    <!-- Ajoutez les autres colonnes de la même manière -->
                    <div class="col-md-6 col-lg-3">
                        <div id="a6">Energie <br> Renouvellable</div>
                        <hr class="as">
                        <div class="card" id="ab">
                            <img src="{{url('image/slider/istockphoto-897664288-1024x1024.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body" id="ad">
                                <p id="pa" class="card-text">Chez ZIBDON, nous nous engageons à façonner un avenir durable en offrant des solutions énergétiques renouvelables novatrices et à la pointe de la technologie.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div id="a6">Gestion <br> des déchets</div>
                        <hr class="as">
                        <div class="card" id="ab">
                            <img src="{{url('image/slider/istockphoto-897664288-1024x1024.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body" id="ad">
                                <p id="pa" class="card-text">Nous disposons d'une équipe dévouée de professionnels expérimentés qui s'efforcent de mettre en œuvre des stratégies novatrices pour réduire, recycler et éliminer les déchets de manière responsable.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div id="a6"> Eau et <br>Assainissemen </div>
                        <hr class="as">
                        <div class="card" id="ab">
                            <img src="{{url('image/slider/istockphoto-897664288-1024x1024.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body" id="ad">
                                <p id="pa" class="card-text se">Nous nous efforçons de fournir des solutions complètes et innovantes pour répondre aux besoins croissants en matière d'accès à l'eau propre et d'assainissement adéquat.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
</section>
 <!-- a expertise fin -->
 <br>
<!-- portefolio debit -->
<section id="portfolio">
  <a name="portfolio"></a>
   <div class="col-md-6 col-lg-7 offset-md-3 mt-5 ">
        <div class="co text-bg-success">Ils nous ont fait confiance !</div>
   </div>
    <div id="carouselExampleControls" class="carousel slide col-md-12 mt-5" data-bs-ride="carousel" style="width: 70%; margin: auto;">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{url('image/slider/istockphoto-897664288-1024x1024.jpg')}}" class="d-block w-100" alt="...">
                </div>
                <div class="col-md-6">
                  <br><br>
                    <h3>IB Bank/Zibdon Ecoservice</h3>
                    <h5>Projet de construction d'un immeuble résidentiel de luxe</h5>
                    <p>Notre entreprise de succès la construction construction a réalisé avec d'un immeuble résidentiel de  prestige, offrant des logements
                    haut de gamme avec desfinitions de qualité supérieure.</p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{url('image/slider/istockphoto-897664288-1024x1024.jpg')}}" class="d-block w-100" alt="...">
                </div>
                <div class="col-md-6">
                  <br><br>
                    <h3>IB Bank/Zibdon Ecoservice</h3>
                    <h5>Projet de construction d'un immeuble résidentiel de luxe</h5>
                    <p>Notre entreprise de succès la construction construction a réalisé avec d'un immeuble résidentiel de  prestige, offrant des logements
                    haut de gamme avec desfinitions de qualité supérieure.</p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{url('image/slider/istockphoto-897664288-1024x1024.jpg')}}" class="d-block w-100" alt="...">
                </div>
                <div class="col-md-6">
                  <br><br>
                    <h3>IB Bank/Zibdon Ecoservice</h3>
                    <h5>Projet de construction d'un immeuble résidentiel de luxe</h5>
                    <p>Notre entreprise de succès la construction construction a réalisé avec d'un immeuble résidentiel de  prestige, offrant des logements
                    haut de gamme avec desfinitions de qualité supérieure.</p>
                </div>
            </div>
        </div>
        <!-- Ajoutez d'autres éléments de carrousel au besoin -->
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
  </div>
  <div class="mt-5">
    <div class="background-image">
     <div class="container-fluid mb-5" id="#aa1">
        <div>
            <div id="aa2" class="text-center">POURQUOI NOUS CHOISIR?</div>
        </div>
      </div>
    </div>
  </div>
  <section id="cal1" class="mt-3">
    <div class="container">
        <div class="row">
            <div id="as3" class="col-md-2 offset-md-1">
                <img id="as1" src="{{url('image/agenda1.jpg')}}" alt="">
                <p class="mt-5" id="as2">Respect des Normes / Qualité</p>
            </div>
            <div id="as3" class="col-md-2 offset-md-1">
                <img id="as1" src="{{url('image/etudiant.jpg')}}" alt="">
                <p class="mt-5" id="as2">Maîtrise des coûts</p>
            </div>
            <div id="as3" class="col-md-2 offset-md-1">
                <img id="as1" src="{{url('image/istockphoto-1288965449-612x612.jpg')}}" alt="">
                <p class="mt-5" id="as2">Respect de l'environnement</p>
            </div>
            <div id="as3" class="col-md-2 offset-md-1">
                <img id="as1" src="{{url('image/istockphoto-1395006831-612x612.jpg')}}" alt="">
                <p class="mt-5" id="as2">Norme / Qualité</p>
            </div>
        </div>
    </div>
  </section>
</section>
<!-- portefolio fin -->
<!-- partenaire debut  -->
<section id="partenaire">
  <a name="partenaire"></a>
    <div class="col-md-6 col-lg-7 offset-md-3 mt-5">
      <h1 class="co">Nos partenaires</h1>
    </div>
    <div class="container">
    <div class="row">
        <div class="col">
            <img class="img-fluid custom-img" src="{{url('image/partenaire/Qs - Copie.jpg')}}" alt="">
        </div>
        <div class="col">
            <img class="img-fluid custom-img" src="{{url('image/partenaire/QSDCV - Copie.png')}}" alt="">
        </div>
        <div class="col">
            <img class="img-fluid custom-img" src="{{url('image/partenaire/QSDWCF.jpg')}}" alt="">
        </div>
        <div class="col">
            <img class="img-fluid custom-img" src="{{url('image/partenaire/qsxc.jpg')}}" alt="">
        </div>
    </div>
    <div class="row">
        <div class="col">
            <img class="img-fluid custom-img" src="{{url('image/partenaire/alllll.png')}}" alt="">
        </div>
        <div class="col">
            <img class="img-fluid custom-img" src="{{url('image/partenaire/zertgyhs.png')}}" alt="">
        </div>
        <div class="col">
            <img class="img-fluid custom-img" src="{{url('image/partenaire/téléchargement.jpg')}}" alt="">
        </div>
        <div class="col">
            <img class="img-fluid custom-img" src="{{url('image/partenaire/zer.jpg')}}" alt="">
        </div>
    </div>
  </div>
</section>
<!-- partenaire fin  -->
<!-- contacte debut -->

<section class="mt-5 container-fluid border" id="contact">
  <a name="contact"></a>
  <div class="col-md-6 col-lg-7 offset-md-3 mt-5">
    <h1 class="co">Contactez-Nous!</h1>
    </div>
<section class="bg-image mt-5  d-flex justify-content-center align-items-center">
    <div id="cont" class="container  text-center text-white col-md-9 col-lg-9 col-xl-9">
        <div class="row col-md-8 col-lg-8 col-xl-8 offset-md-2">
            <div id="cv1" class="container col-md-6 col-lg-6 col-xl-6">
                <h3 id="des" class="text-center mb-4">Envoyez-nous un message</h3>
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control bg-black-50 mt-2" id="exampleInputName" placeholder="Entrez votre nom" required>
                    </div>
                    <div class="form-group mt-3">
                        <input type="email" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Entrez votre email" required>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control mt-3" id="exampleFormControlTextarea1" rows="3" placeholder="Entrez votre message" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-success mt-3">Envoyer</button>
                    <br>
                </form>
                <br>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-6">
              <h3 class="mt-4">Des Professionnels à votre ecoute!</h3>
                <img class="img-fluid" src="{{url('image/contract.png')}}" alt="">
            </div>
        </div>
    </div>
</section>
<!-- contacte fin -->
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3897.6731590899158!2d-1.5093699260868967!3d12.337771928459812!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xe2ebde13c218b0d%3A0xcd6edbf17085800a!2sDJAGO%20-%20INTERNATIONAL!5e0!3m2!1sfr!2sbf!4v1698854835863!5m2!1sfr!2sbf" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>


<section class="mt-5">
   <div class="row">
        <div class="col">
        <img class="bi me-2" width="150" height="70" src="{{url('image/logo.jpg')}}" alt="">
        </div>
        <div class="col nav-link px-2 text-muted">
        Bienvenue sur notre siteweb, dédié à notre entreprise de construction spécialisée dans le secteur du BTP. Forts d'une
        expérience de plusieurs années, nous mettons notre expertise au service de vos projets de construction et de rénovation
        </div>
        <div class="col">
          <ul>
            <li>Nos modèles</li>
            <li>Votre projet</li>
            <li>Gamme Patrimoine pour investir</li>
            <li>Nos annonces</li>
            <li>Nos valeurs et engagements</li>
            <li>Nos programmes immobiliers</li>
            <li>Nos valeurs et engagements</li>
          </ul>
        </div>
        <div class="col">
          <ul>
            <li>Qui sommes-nous</li>
            <li>Nous rejoindre</li>
            <li>Contact</li>
            <li>Presse</li>
          </ul>
        </div>
        <div class="col">
          <p>Nos Reseaux Sociaux</p>
          <div class="">
            <a href=""><img class="" src="{{url('image/Reseaux/icons8_facebook_48px_5.png')}}" alt=""></a>
            <a href=""><img class="" src="{{url('image/Reseaux/icons8_linkedin_48px.png')}}" alt=""></a>
            <a href=""><img class="" src="{{url('image/Reseaux/icons8_twitter_48px_2.png')}}" alt=""></a>
          </div>
        </div>
      </div>
</section>

  <div class="" id="foot">
  <footer class="py-3 my-4">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3 text-light">
      <li class="text-light"><a href="#" class="nav-link px-2 text-light">Accueil</a></li>
      <li class="text-light"><a href="#" class="nav-link px-2 text-light">Fonctionnalités</a></li>
      <li class="text-light"><a href="#" class="nav-link px-2 text-light">Tarification</a></li>
      <li class="text-light"><a href="#" class="nav-link px-2 text-light">FAQs</a></li>
      <li class="text-light"><a href="#" class="nav-link px-2 text-light">À propos</a></li>
    </ul>
    <p class="text-center text-light">&copy; 2022 Company, Inc</p>
  </footer>
</div>
<script>
    function animateValue(id, target) {
        const countElement = document.getElementById(id);
        let currentCount = 0;
        const timer = setInterval(() => {
            if (currentCount >= target) {
                clearInterval(timer); // Arrêter l'animation une fois que la cible est atteinte
            } else {
                currentCount++;
                countElement.textContent = currentCount; // Mettre à jour le contenu du HTML avec la valeur actuelle
            }
        }, 10); // Définir l'intervalle de temps en millisecondes (ici, 100 ms)
    }

    animateValue('count1', +15);
    animateValue('count2', +400);
    animateValue('count3', +290);
    animateValue('count4', +75);
</script>
<!-- canv1 -->
<script>
        var canvas = document.getElementById('myCanvas');
        var context = canvas.getContext('2d');
        var x = canvas.width / 3;
        var y = canvas.height / 3;
        var radius = 150;
        var startAngle = 0.3 * Math.PI;
        var endAngle = 1.6 * Math.PI;
        var counterClockwise = false;

        context.beginPath();
        context.arc(x, y, radius, startAngle, endAngle, counterClockwise);
        context.lineWidth = 10;
        context.strokeStyle = 'rgb(15, 219, 49)'; // Changer la couleur du contour en bleu
        context.stroke();
</script>
<!-- canva 2 -->
<script>
 var canvas = document.getElementById('monCanvas');
      var context = canvas.getContext('2d');
      var x = canvas.width / 30;
      var y = canvas.height /1.6;
      var radius = 280;
      var startAngle = 1.3 * Math.PI;
      var endAngle = 0.4 * Math.PI;
      var counterClockwise = false;

      context.beginPath();
      context.arc(x, y, radius, startAngle, endAngle, counterClockwise);
      context.lineWidth = 25;

      // line color
      context.strokeStyle = '#ed930d';
      context.stroke();
</script>
  <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="bootstrap/js/popper.min.js"></script>

</body>
</html>