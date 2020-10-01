<?php

echo "Pago aceptado";
   
?>
<script src="https://www.mercadopago.com/v2/security.js"></script>

<br><br>

<b>payment_method_id:</b> <?php echo $_GET['payment_type']; ?>
<br>
<b>external_reference:</b> <?php echo $_GET['external_reference']; ?>      
<br>
<b>ID de pago:</b> <?php echo $_GET['collection_id']; ?>  