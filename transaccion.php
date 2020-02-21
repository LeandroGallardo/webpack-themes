<?php
require_once 'vendor/autoload.php';
use Transbank\Webpay\Webpay;
use Transbank\Webpay\Configuration;


/**
   Template Name: Transaccion
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package novaguas
 */

$url = get_site_url();

$transaction = (new Webpay(Configuration::forTestingWebpayPlusNormal()))
               ->getNormalTransaction();

                $amount = 10000;
                // Identificador que será retornado en el callback de resultado:
                $sessionId = "sessionId";
                // Identificador único de orden de compra:
                $buyOrder = strval(rand(100000, 999999999));
                $returnUrl = $url."/return";
                $finalUrl = $url."/final";
                $initResult = $transaction->initTransaction(
                        $amount, $buyOrder, $sessionId, $returnUrl, $finalUrl);

                $formAction = $initResult->url;
                $tokenWs = $initResult->token;

get_header();
?>
<section style="padding:100px;height:100vh;">
    <form action="<?php echo $formAction ?>" method="POST" class="form-inline">
       <h1>Monto: </h1> <?php  echo $amount ?>
       <h1>Order compra: </h1><?php $buyOrder ?>
        <input type="hidden" name="token_ws" value="<?php echo $tokenWs ?>">
        <input type="submit" value="Pagar">
    </form>
</section>

<?php
get_footer();
