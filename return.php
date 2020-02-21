<?php
require_once 'vendor/autoload.php';
use Transbank\Webpay\Webpay;
use Transbank\Webpay\Configuration;


/**
   Template Name: Return
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

$tokenWs = filter_input(INPUT_POST,'token_ws');
$result = $transaction->getTransactionResult($tokenWs);
$output = $result->detailOutput;
if ($output->responseCode == 0) {
    // Transaccion exitosa, puedes procesar el resultado con el contenido de
    // las variables result y output.
    print_r($output);
}


             

get_header();
?>


<?php
get_footer();
