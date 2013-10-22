<?php

$cakeDescription = __d('Ceará Maquinas', 'Sistema de gestão empresaria Ceará Maquinas');
?>
<!doctype html>
<html>
<head>
    <?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>

	<?php
		if ($this->params['action'] != 'display')
			define('CURRENT_VIEW', $this->params['controller'] . '/' . $this->params['action']);
		else
			define('CURRENT_VIEW', $this->params['controller'] . '/' . $this->params['pass'][0]);
		?>

		<?php
		$cssList = array(CURRENT_VIEW);

		if (isset($this->viewVars['requestCss'])):
			$cssList[] = $this->viewVars['requestCss'];
	endif;
	?>
    <!-- Kit IU (Estilos e Fontes) -->
    <?php echo $this->Html->css('bootstrap'); ?>
	<?php echo $this->Html->css('locastyle'); ?>
	<?php echo $this->Html->css('estilo'); ?>
    
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,500,700,900' rel='stylesheet' type='text/css'>
</head>

<body>
	<!-- Header -->
    <?php echo $this->element('header'); ?>
    
    <div id="main">
  	<div class="limit">        
        <!-- Sidebar -->
        <?php echo $this->element('menu'); ?>       
        
        <div id="content_right">
        	<!-- <?php echo $this->Session->flash(); ?> -->

			<?php echo $this->fetch('content'); ?>
        	
        </div>
       	</div><!-- ####################################################################################################################### -->
        <!-- fim Sidebar -->
	
	</div><!-- FIM LIMITE -->

    
    <!-- Rodapé -->
    <?php echo $this->element('footer'); ?>
    <?php echo $this->element('sql_dump'); ?>
</body>
</html>
