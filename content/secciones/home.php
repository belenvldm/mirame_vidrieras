<?php
	$resultado['logo'] = "http://localhost/develop/mirame_final/content/bin/img/logo-mirame.png";
?>
<script>
	$logo = "<?php echo $resultado['logo']; ?>";
	$(document).ready(function() {
		$("#logo").css('background-image', 'url('+ $logo +')');
	});
</script>