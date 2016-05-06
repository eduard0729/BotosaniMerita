<?php

use yii\helpers\Html;
use yii\bootstrap\Modal;
use yii\helpers\BaseUrl;
use yii\helpers\Url;
use frontend\controllers\ProiecteController;
use yii\grid\GridView;
/* @var $this yii\web\View */

$this->title = 'Botosani Merita!';
?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <div class="container">
        <header class="botosani-header">
            <div class="hero">
                <div class="hero__imgwrap">
                    <img class="hero__img tilt-effect" data-tilt-options='{ "opacity" : 0.6, "movement": { "perspective" : 1500, "translateX" : 10, "translateY" : 10, "translateZ" : 2, "rotateX" : 3, "rotateY" : 3 } }' src="img/1.jpg" alt="Hero image" />
                </div>
                <h1>Botoşani Merită!</h1>
                <div class="buttons">
                    <?= Html::button('Propune un proiect!', ['value'=>Url::to('index.php?r=proiecte/create'), 'class' => 'btn btn-primary', 'id'=>'proiecte']) ?>
                        <?php
                            Modal::begin([
                                'header'=>'<h4>Proiecte</h4>',
                                'id' => 'modal',
                                'size'=>'modal-lg',]);
                            echo "<div id='modalContent'></div>";
                            Modal::end();
                        ?>
                      <?= Html::button('Transmite un mesaj!', ['value'=>Url::to('index.php?r=mesaje/create'), 'class' => 'btn btn-success', 'id'=>'mesaje']) ?>
                          <?php
                              Modal::begin([
                                  'header'=>'<h4>Mesajul tău pentru botoşăneni</h4>',
                                  'id' => 'modalmesaje',
                                  'size'=>'modal-lg',]);
                              echo "<div id='modalMesaje'></div>";
                              Modal::end();
                          ?>
                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#probleme">Raporteaza o problema!</button>
                        <div class="modal fade" id="probleme" role="dialog">
                            <div class="modal-dialog">
                            
                              <!-- Modal content-->
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  <h4 class="modal-title">Raporteaza o problema a comunitatii botosanene</h4>
                                </div>
                                <div class="modal-body">
                                                                  <input type="text" class="form-control form-white" name="name" placeholder="Numele și prenumele">
                                  <input type="email" class="form-control form-white" name="email" placeholder="Email">
                                  <textarea rows="6" class="form-control form-white" name="message" name="message" placeholder="Mesajul dvs."></textarea>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Inchide</button>
                                </div>
                              </div>
                              
                            </div>
                        </div>
                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#monitorizare">Monitorizeaza!</button>
                        <div class="modal fade" id="monitorizare" role="dialog">
                            <div class="modal-dialog">
                            
                              <!-- Modal content-->
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  <h4 class="modal-title">Monitorizare</h4>
                                </div>
                                <div class="modal-body">
                                  <p>Aici va vom informa cu privire la activitatea pe care liderii administratiei botosanene o au.</p>
                                  <p>In curand...</p>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Inchide</button>
                                </div>
                              </div>
                              
                            </div>
                        </div>
                </div>
            </div>
    </header>
    </div>
    <!-- /codrops-header -->
    <!-- /container -->
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h3 style="text-align: center;">
                Proiecte propuse
                </h3>
                <div class="divider"></div>
                  <div>
                    <ul class="list-inline">
                    <li><h4>Eduard Mititelu</h4></li>
                    <li><h5>29.12.2015</h5></li>
                    </ul>
                    <p>Cred ca Botoşaniul ar avea nevoie de un fond de tineret, pe modelul Youth Bank, unde să se poată face donaţii şi de unde organizaţiile neguvernamentale să poată accesa fonduri.<a href="index.php?r=proiecte%2Fview&id=21" >Mai mult...</a></p>
                    <div class="divider"></div>
                  </div>
                  <div>
                    <ul class="list-inline">
                    <li><h4>Decebal Popescu</h4></li>
                    <li><h5>30.12.2015</h5></li>
                    </ul>
                    <p>Centrul Vechi ar trebui transformat într-un centru cultural şi de tineret, nu doar prin oportunităţi de afaceri, ci şi prin proiecte şi prin implicarea ONG-urilor.<a href="index.php?r=proiecte%2Fview&id=23" >Mai mult...</a></p>
                    <div class="divider"></div>
                  </div>
                  <div>
                    <ul class="list-inline">
                    <li><h4>Georgiana Ionescu</h4></li>
                    <li><h5>25.12.2015</h5></li>
                    </ul>
                    <p>Printr-un festival de multiculturalitatea am putea dezvolta cunoştinţele botoşănenilor cu privire la cei din jurul lor.<a href="index.php?r=proiecte%2Fview&id=24">Mai mult...</a></p>
                    <div class="divider"></div>
                  </div>
            <a href="index.php?r=proiecte/index"><button class='btn btn-info'>Toate proiectele!</button> </a>
            </div>
            <div class="col-md-4">
                <h3 style="text-align: center;">Idei/Mesaje transmise</h3>
                <div class="divider"></div>
                <div>
                    <ul class="list-inline">
                    <li><h4>Eduard Mititelu</h4></li>
                    <li><h5>29.12.2015</h5></li>
                    </ul>
                    <p>Cred ca Botoşaniul ar avea nevoie de un fond de tineret, pe modelul Youth Bank, unde să se poată face donaţii şi de unde organizaţiile neguvernamentale să poată accesa fonduri.<a>Mai mult...</a></p>
                    <div class="divider"></div>
                </div>
                <div>
                    <ul class="list-inline">
                    <li><h4>Eduard Mititelu</h4></li>
                    <li><h5>29.12.2015</h5></li>
                    </ul>
                    <p>Cred ca Botoşaniul ar avea nevoie de un fond de tineret, pe modelul Youth Bank, unde să se poată face donaţii şi de unde organizaţiile neguvernamentale să poată accesa fonduri.<a>Mai mult...</a></p>
                    <div class="divider"></div>
                </div>
                <div>
                    <ul class="list-inline">
                    <li><h4>Eduard Mititelu</h4></li>
                    <li><h5>29.12.2015</h5></li>
                    </ul>
                    <p>Cred ca Botoşaniul ar avea nevoie de un fond de tineret, pe modelul Youth Bank, unde să se poată face donaţii şi de unde organizaţiile neguvernamentale să poată accesa fonduri.<a>Mai mult...</a></p>
                    <div class="divider"></div>
                </div>
            <a href="index.php?r=mesaje/index"><button class='btn btn-info'>Toate mesajele!</button> </a>
            </div>
            <div class="col-md-4">
                <h3 style="text-align: center;">Probleme raportate</h3>
                <div class="divider"></div>
                <div>
                    <ul class="list-inline">
                    <li><h4>Eduard Mititelu</h4></li>
                    <li><h5>29.12.2015</h5></li>
                    </ul>
                    <p>Cred ca Botoşaniul ar avea nevoie de un fond de tineret, pe modelul Youth Bank, unde să se poată face donaţii şi de unde organizaţiile neguvernamentale să poată accesa fonduri.<a>Mai mult...</a></p>
                    <div class="divider"></div>
                  </div>
                  <div>
                    <ul class="list-inline">
                    <li><h4>Eduard Mititelu</h4></li>
                    <li><h5>29.12.2015</h5></li>
                    </ul>
                    <p>Cred ca Botoşaniul ar avea nevoie de un fond de tineret, pe modelul Youth Bank, unde să se poată face donaţii şi de unde organizaţiile neguvernamentale să poată accesa fonduri.<a>Mai mult...</a></p>
                    <div class="divider"></div>
                  </div>
                  <div>
                    <ul class="list-inline">
                    <li><h4>Eduard Mititelu</h4></li>
                    <li><h5>29.12.2015</h5></li>
                    </ul>
                    <p>Cred ca Botoşaniul ar avea nevoie de un fond de tineret, pe modelul Youth Bank, unde să se poată face donaţii şi de unde organizaţiile neguvernamentale să poată accesa fonduri.<a>Mai mult...</a></p>
                    <div class="divider"></div>
                  </div>

                  <?= Html::button('Toate problemele', ['value'=>Url::to('index.php?r=proiecte/create'), 'class' => 'btn btn-info', 'id'=>'infproiecte']) ?>
            </div>
        </div>
        
    </div>
        <div class="jumbotron ">
            <h2>Despre</h2>
            <p>Vrem ca această iniţiativă să realizeze o legătură între proiectele/ideile pe care botoşănenii le au şi cei ce ar putea să le pună în practică. Credem că Botoşaniul se poate dezvolta într-un mod mult mai bun prin idei inovative, proiecte creative, cât şi prin sprijinul direct al botoşănenilor.</p>
        </div> 
    <footer>
        
    </footer>
    </div>