<?php
if (($_SESSION['product_name'] == fonar100) || ($_SESSION['product_name'] == svet30) ||  ($_SESSION['product_name'] == svet) || ($_SESSION['product_name'] == trimmer) || ($_SESSION['product_name'] == sensor) || ($_SESSION['product_name'] == espander) || ($_SESSION['product_name'] == brush) || ($_SESSION['product_name'] == shuke) || ($_SESSION['product_name'] == ribbon)) {$upsell_list =
    $sani.
    $karandash.
	$trimmer. // up9	
	$water.
    $grip.
	$silic.
	$trimfb.
	$power.  // up10	
	$elastic.
	//$shoes. // up11
	$sponge; // up12
	//$dtma; // up13
	//$sink. // up14
	//$tub. // up15
	//$stands. // up16
	//$mixer; // up17
	//$choppe; // up18
	//$craft; // up19
}

if ($_SESSION['product_name'] == sani) {$upsell_list =
	//$tub. // up15
	$sponge. // up12
	//$dtma. // up13
	//$sink. // up14
	$karandash.
	//$stands. // up16
	//$mixer. // up17
	//$choppe. // up18
	//$craft. // up19
	$trimfb.
	$grip.
	$water.	
	$elastic.
	//$shoes. // up11
	$power. // up10
	$silic.
	$trimmer; // up9
}

if (($_SESSION['product_name'] == karandash) || ($_SESSION['product_name'] == press) || ($_SESSION['product_name'] == pompa) || ($_SESSION['product_name'] == elastic) || ($_SESSION['product_name'] == trainer) || ($_SESSION['product_name'] == podst) || ($_SESSION['product_name'] == frazer) || ($_SESSION['product_name'] == pemza)) {$upsell_list =
	//$tub. // up15
	$sponge. // up12
	//$dtma. // up13
	$sani.
	$karandash.
	//$sink. // up14
	//$stands. // up16
	//$mixer. // up17
	//$choppe. // up18
	//$craft. // up19
	$trimfb.
	$grip.
	$trimmer. // up9	
	$water.	
	$elastic.
	//$shoes. // up11	
	$silic.
	$power; // up10
}