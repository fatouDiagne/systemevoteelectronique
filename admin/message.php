<?php
if (isset($_SESSION['mess'])) {
	
?>
<div class="alert alert-primary d-flex align-items-center" role="alert">
  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
  <div>
    <?= $_SESSION['mess'];?>
  </div>
</div>
<?php
	unset($_SESSION['mess']);
	}
?>