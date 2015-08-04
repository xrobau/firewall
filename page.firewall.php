<?php
$fw = FreePBX::create()->Firewall;
?>

<div class='container-fluid'>
  <h1><?php echo _("Firewall"); ?></h1>
  <div class='row'>
<?php
if (!$fw->isEnabled()) {
	// No bootnav.
    	print "<div class='col-sm-12'>";
	print $fw->showDisabled();
	print "</div>";
} else {
    	print "<div class='col-sm-9'>";
	if (!empty($_REQUEST['page'])) {
		$page = $_REQUEST['page'];
	} else {
		$page = "about";
	}
	print $fw->showPage($page);
	print "</div>"; // col-sm-9
	print "<div class='col-sm-3 hidden-xs bootnav'>".$fw->showBootnav($page)."</div>";
}
?>
  </div> <!-- /row -->
</div> <!-- /container-fluid -->
