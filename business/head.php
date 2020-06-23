<?
$header = "business";
$page = "business";
$uriArray = explode("/", $_SERVER["REQUEST_URI"]);
$subpage = $uriArray[2];
$subpageClass = (strpos($subpage, "-") === false) ? $subpage : substr($subpage, 0, strpos($subpage, "-"));
include($_SERVER["DOCUMENT_ROOT"] . "/inc/template_head.php");
?>

<? if ($subpage == "phones") { ?> <div class="businessBackground <?=$subpageClass?>"> <? } ?>

<? if ($subpage != "phones" && $subpage != "business-select") { ?> <div class="business <?=$subpageClass?>"> <? } ?>

