	<?php include('pages/default/linkMenu.html'); ?>
			
		<?php if (isset($_GET['loteria'])){ ?>

			<iframe src="pages/embed/<?=$_GET['loteria'];?>.html"></iframe>	
			
			<script type="text/javascript">
				$(function(){
					$('iframe').slimScroll({
					height: '750px',
						width: '100%'
					});
				});		
			</script>

			<?php }else{ ?>

				<div id="carrousel">
					<h2>Confira agora, os últimos resultados!</h2>
					<iframe src="pages/embed/resultado-loteriasV.html"></iframe>
				</div>
				
				<script type="text/javascript">
					$(function(){
						$('iframe').slimScroll({
						height: '100%',
							width: '100%'
						});
					});		
				</script>
			<?php } ?>