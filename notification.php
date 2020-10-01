 <?php

    require __DIR__ .  '/vendor/autoload.php';
 
    MercadoPago\SDK::setAccessToken('APP_USR-6317427424180639-042414-47e969706991d3a442922b0702a0da44-469485398');
    
    $file = fopen("captura.log", "w");
    fwrite($file, "inicio" . PHP_EOL);
    fwrite($file, json_encode($_POST) . PHP_EOL);
    fwrite($file, "fin" . PHP_EOL);
    fclose($file);

    switch($_POST["type"]) {
        case "payment":
            $payment = MercadoPago\Payment.find_by_id($_POST["id"]);
            break;
        case "plan":
            $plan = MercadoPago\Plan.find_by_id($_POST["id"]);
            break;
        case "subscription":
            $plan = MercadoPago\Subscription.find_by_id($_POST["id"]);
            break;
        case "invoice":
            $plan = MercadoPago\Invoice.find_by_id($_POST["id"]);
            break;
    }
    
    // set the status
    $status_header = 'HTTP/1.1 200 OK';
    header($status_header);
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: PUT, GET, POST, DELETE");
    header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
    // and the content type
    header('Content-type: application/json');
    
    $data = array('mensaje' => 'OK.');
    echo json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
    exit;
?>

<script src="https://www.mercadopago.com/v2/security.js"></script>