<?php
	//$arr = htmlspecialchars($_POST['content']);
	//print_r($arr);
$content = $_POST['content'];
//$content = "<h1>Ahmed Maher Halima</h1>";
require_once('library/autoload.inc.php');
use Dompdf\Dompdf;
if(empty($content) || $content == ''){
	$content = "Sorry , you don't specified any input";
}
$dompdf = new Dompdf();
$dompdf->loadHtml($content);
$dompdf->setPaper('A4', 'landscape');
$dompdf->render();
$dompdf->stream();
?>