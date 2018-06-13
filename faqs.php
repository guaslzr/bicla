<?php
include_once('global.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Sunflower:300" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bar-nav.css">
    <link rel="stylesheet" href="css/faqs.css">
    <title>FAQs</title>
  </head>
  <body>
    <header>

      <?php include_once('navigation.php') ?>
      </header>
    <div class="container-fluid">
      <div class="row">
        <div class="container">
                  <h2>FAQs</h2>
                  <div class="" id="accordion">
                      <div class="faqHeader"><h3>Preguntas Generales</h3></div>
                      <div class="card ">
                          <div class="card-header">
                              <h4 class="card-header">
                                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">¿Cuánto tiempo llevará construir mi bicicleta?</a>
                              </h4>
                          </div>
                          <div id="collapseOne" class="panel-collapse collapse in">
                              <div class="card-block">
                                  <p>Nuestro objetivo es tener su bicicleta lista para viajar dentro de las 4 semanas o menos de su finalización de diseño. Si corresponde, eso no incluye el tiempo de tránsito a su puerta.</p>
                              </div>
                          </div>
                      </div>
                      <div class="card ">
                          <div class="card-header">
                              <h4 class="card-header">
                                  <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTen">Si les envío mi marco, ¿puedes construirme una bicicleta?</a>
                              </h4>
                          </div>
                          <div id="collapseTen" class="panel-collapse collapse">
                              <div class="card-block">
                                  <p>No, :( lo sentimos. Estamos enfocados en construir nuevas bicicletas.</p>
                              </div>
                          </div>
                      </div>
                      <div class="card ">
                          <div class="card-header">
                              <h4 class="card-header">
                                  <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseEleven">¿Puedo poner un cesto en mi bicicleta?</a>
                              </h4>
                          </div>
                          <div id="collapseEleven" class="panel-collapse collapse">
                              <div class="card-block">
                                  <p>Sí. Mientras que nuestros marcos están construidos limpios, libres de ojales y soldaduras innecesarias, hay varias opciones de portación disponibles. Estaremos encantados de hablar de eso con usted durante el diseño de su bicicleta.</p>
                              </div>
                          </div>
                      </div>
                      <div class="card ">
                          <div class="card-header">
                              <h4 class="card-header">
                                  <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Tengo mi propio juego de ruedas / sillín /  de una bicicleta vieja, ¿puedes construirme una bicicleta pero usar mis piezas existentes?</a>
                              </h4>
                          </div>
                          <div id="collapseTwo" class="panel-collapse collapse">
                              <div class="card-block">
                                  <p>Estaremos encantados de hablar sobre la logística de cada escenario, pero esto se maneja caso por caso.</p>
                          </div>
                      </div>
                      <div class="card ">
                          <div class="card-header">
                              <h4 class="card-header">
                                  <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">¿Dónde están hechas las bicicletas?</a>
                              </h4>
                          </div>
                          <div id="collapseThree" class="panel-collapse collapse">
                              <div class="card-block">
                                  <p>Cada bicicleta se construye en <strong>Argentina</strong>, provincia de Buenos Aires.
                                    Construimos cada bicicleta a partir de un conjunto de componentes seleccionados que obtenemos de todo el mundo.</p>
                              </div>
                          </div>
                      </div>
                      <div class="card ">
                          <div class="card-header">
                              <h4 class="card-header">
                                  <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive">¿Que mantenimiento tendré que hacerle a mi bicicleta?</a>
                              </h4>
                          </div>
                          <div id="collapseFive" class="panel-collapse collapse">
                              <div class="card-block">
                                  <p>El mantenimiento de tu bicicleta es prácticamente nulo, sólo tendrás que revisar periódicamente la presión de sus ruedas y la tensión del freno si lo lleva.
                                      Tu buje trasero con marchas integradas y freno contrapedal no precisa ningún mantenimiento por tu parte.</p>
                                  <br />
                              </div>
                          </div>
                      </div>
                      <div class="card ">
                          <div class="card-header">
                              <h4 class="card-header">
                                  <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSix">¿Existe un límite de peso para las bicicletas?</a>
                              </h4>
                          </div>
                          <div id="collapseSix" class="panel-collapse collapse">
                              <div class="card-block">
                                  <p>No, hay una bicicleta para cada persona da igual cual sea su físico, si eres muy alto o muy bajo ponte en contacto con nosotros y te ajustaremos la talla de tu cuadro acorde a tus necesidades.</p>
                              </div>
                          </div>
                      </div>
                      </div>
                      <div class="faqHeader"><h3>Métodos Pagos</h3></div>
                      <div class="card ">
                          <div class="card-header">
                              <h4 class="card-header">
                                  <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">¿Qué método de pago puedo elegir?</a>
                              </h4>
                          </div>
                          <div id="collapseFour" class="panel-collapse collapse">
                              <div class="card-block">
                                  <p>En estos momentos disponemos de 2 métodos de pago:</p>
                                  <ul>
                                  <li>A| Transferencia bancaria: Comenzaremos a trabajar en tu pedido cuando la transferencia se haga efectiva en nuestra cuenta bancaria, mándanos un mail a info@bicla.com.ar si tienes cualquier duda.</li>
                                  <li>B| Paypal: Los pagos se realizan con tarjeta de crédito a través de cuentas abiertas en PayPal, es un sistema de pago muy fiable y seguro reconocido en todo el mundo. Nosotros en ningún momento conoceremos tus datos bancarios por lo que la seguridad en ese sentido es máxima.
                                   Si ya tienes una cuenta de Paypal no deberás ni introducir tus datos de la tarjeta, efectuando el pago de forma inmediata.</li>
                                  </ul>
                              </div>
                          </div>
                      </div>
                      </div>
            </div>
        </div>
        <br>
        <br>
      </div>
      <?php include_once('footer.php'); ?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </body>
</html>
