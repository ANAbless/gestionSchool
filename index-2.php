
<?php
$hostname = base64_encode("ABJ-LAP-297\OPERASLOCAL");
$port = 1433;
$dbname = base64_encode("GESTIONSCHOOL");
$username = base64_encode("sa");
$pw = base64_encode("Operas@db22"); 
try {
  $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
  $pdo_options[PDO::MYSQL_ATTR_INIT_COMMAND] = 'SET NAMES French_100_CS_AI';
  $bdd = new PDO("sqlsrv:Server=" . base64_decode($hostname) . ";Database=" . base64_decode($dbname) . "", base64_decode("$username"), base64_decode("$pw"), $pdo_options);
} catch (PDOException $e) {
  print "Erreur!Pas de connexion à la base de données <br/>". $e->getMessage() ;
   var_dump($e); die();
  
  //header("Location:$errorPage", true, 307);
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mentor Bootstrap Template Demo</title>
  <meta name="robots" content="noindex, nofollow">
    <link rel="stylesheet" href="https://bootstrapmade.com/assets/css/demo.css?v=5.0">
  </head>

<body>
  <header id="header">

    <div class="logo">
      <a href="https://bootstrapmade.com/" rel="home" title="Bootstrap Templates | Premium & Free Download" title="Back to BootstrapMade Homepage"><img alt="BootstrapMade" src="https://bootstrapmade.com/assets/img/logo.png"></a>
    </div>
    <div class="preview-devices">
      <ul>
        <li class="preview-test preview-devices-active" id="preview-test-desktop" title="Desktop preview of the  Mentor template"><a href=""><svg class="icon icon-preview"  fill="currentColor"><use xlink:href="https://bootstrapmade.com/assets/img/icons.svg#preview"/></svg></a></li>
        <li class="preview-test" id="preview-test-tablet" title="Tablet preview of the Mentor template"><a href=""><svg class="icon icon-tablet"  fill="currentColor"><use xlink:href="https://bootstrapmade.com/assets/img/icons.svg#tablet"/></svg></a></li>
        <li class="preview-test" id="preview-test-mobile" title="Mobile preview of the Mentor template"><a href=""><svg class="icon icon-smartphone"  fill="currentColor"><use xlink:href="https://bootstrapmade.com/assets/img/icons.svg#smartphone"/></svg></a></li>
      </ul>
    </div>

    <div class="current-template">
              <a href="https://bootstrapmade.com/demo/Restaurantly/" title="Previous Template: Restaurantly" target="_top"><svg class="icon icon-chevron-left"  fill="currentColor"><use xlink:href="https://bootstrapmade.com/assets/img/icons.svg#chevron-left"/></svg></a>
            <a class="template-home" href="https://bootstrapmade.com/mentor-free-education-bootstrap-theme/" title="Mentor Template Home Page">Mentor</a>
            <a href="https://bootstrapmade.com/demo/Kelly/" title="Next Template: Kelly" target="_top"><svg class="icon icon-chevron-right"  fill="currentColor"><use xlink:href="https://bootstrapmade.com/assets/img/icons.svg#chevron-right"/></svg></a>
          </div>
    
    <div class="navigate">
      <a href="https://bootstrapmade.com/demo/templates/Mentor/" target="_top" title="Hide the demo bar"><svg class="icon icon-external-link"  fill="currentColor"><use xlink:href="https://bootstrapmade.com/assets/img/icons.svg#external-link"/></svg></a>
      <a class="download" href="https://bootstrapmade.com/mentor-free-education-bootstrap-theme/#download" title="Download the Mentor Template"><svg class="icon icon-download"  fill="currentColor"><use xlink:href="https://bootstrapmade.com/assets/img/icons.svg#download"/></svg> <span>Free Download</span></a>
    </div>

  </header>


  <div id="preview">
    <iframe id="preview-frame" class="preview-desktop" src="https://bootstrapmade.com/demo/templates/Mentor/" frameborder="0"></iframe>
  </div>

      <script src="https://bootstrapmade.com/assets/js/demo.js?v=5.0"></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-P7JSYB1CSP"></script><script>window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'G-P7JSYB1CSP');</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v52afc6f149f6479b8c77fa569edb01181681764108816" integrity="sha512-jGCTpDpBAYDGNYR5ztKt4BQPGef1P0giN6ZGVUi835kFF88FOmmn8jBQWNgrNd8g/Yu421NdgWhwQoaOPFflDw==" data-cf-beacon='{"rayId":"7e542c7409c6b920","version":"2023.4.0","b":1,"token":"68c5ca450bae485a842ff76066d69420","si":100}' crossorigin="anonymous"></script>
</body>

</html>
