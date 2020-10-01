<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

    echo "Pago aceptado";
// success.php?collection_id=[PAYMENT_ID]&collection_status=approved&external_reference=[EXTERNAL_REFERENCE]&payment_type=credit_card&preference_id=[PREFERENCE_ID]&site_id=[SITE_ID]&processing_mode=aggregator&merchant_account_id=null
        
?>
<script src="https://www.mercadopago.com/v2/security.js"></script>

<br><br>

<b>payment_method_id:</b> <?php echo $_GET['payment_type']; ?>
<br>
<b>external_reference:</b> <?php echo $_GET['external_reference']; ?>      
<br>
<b>ID de pago:</b> <?php echo $_GET['collection_id']; ?>  