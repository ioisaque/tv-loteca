<?php include('pages/default/linkMenu.html'); ?>

<div id="apostar">
	<h2>Aposte agora, sem sair de casa!</h2>
	<iframe src="pages/embed/apostar-na-caixa.html" scrolling="no"></iframe>
</div>

	<script type="text/javascript">
		$(function(){
			$('iframe').slimScroll({
			height: '100%',
			width: '100%'
			});
		});
	</script>