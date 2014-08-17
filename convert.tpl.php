<?php
	$strPageTitle = 'DLE to Wordpress conversion';
	require(__CONFIGURATION__ . '/header.inc.php');
?>
<?php $this->RenderBegin(); ?>
	<h1 class="page-title"><?php _t($strPageTitle) ?></h1>
	
<?php
	if ($this->strErrorMessage) {
?>
	<p> <?php _p($this->strErrorMessage); ?> </p>
<?php
	}
?>

	<p><?php $this->lblMessage->Render(); ?></p>
	<p><?php $this->btnButton->Render(); ?></p>

<?php $this->RenderEnd(); ?>

<?php require(__CONFIGURATION__ . '/footer.inc.php'); ?>