<?php 
    $apikey="put your api key here";
    session_start();
    $payrs= $_SESSION['rs'];
 ?>
<form action="" method="POST">
<script
    src="https://checkout.razorpay.com/v1/checkout.js"
    data-key=<?php echo $apikey; ?> // Enter the Test API Key ID generated from Dashboard → Settings → API Keys
    data-amount=<?php  echo $payrs*100; ?> // Amount is in currency subunits. Hence, 29935 refers to 29935 paise or ₹299.35.
    data-currency="INR"// You can accept international payments by changing the currency code. Contact our Support Team to enable International for your account
    data-id=<?php echo "Order-id".rand(10,100);?>// Replace with the order_id generated by you in the backend.
    data-buttontext="Good to go for Payment"
    data-name="SIDD_TECH"
    data-description="HAVE A GRATE JOURNY :)"
    data-image="https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.cleanpng.com%2Ffree%2Fbus-logo.html&psig=AOvVaw3GTIN9hXCM7R-etEYsB59X&ust=1622221237046000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCMDq_KCr6vACFQAAAAAdAAAAABAH"
    data-prefill.name=""
    data-prefill.email=""
    data-prefill.contact=""
    data-theme.color="#F37254"
></script>
<input type="hidden" custom="Hidden Element" name="hidden">
</form>