<?php
  require 'C:\xampp\htdocs\libreria\vendor\autoload.php';

  \Stripe\Stripe::setApiKey("sk_test_51P8XgYP4b4vs5zcoMauNkwM9K74ICz7yolwmUEcorMC6EFeVfgckJFWaIb8B9xtIBEzWaby6NZS0nZGX7FoxTmya00Umpt2R9s");

  $token = $_POST["stripeToken"];

  $charge = \Stripe\Charge::create([
    "amount" => 1500,
    "currency" => "usd",
    "description" => "Pago en mi tienda...",
    "source" => $token
  ]);

  echo "<pre>", print_r($charge), "</pre>";
?>