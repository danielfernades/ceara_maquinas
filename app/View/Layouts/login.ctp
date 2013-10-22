<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <?php echo $this->Html->charset(); ?>
	<title>
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
    <?php echo $this->Html->css('global'); ?>
</head>

<body onload="document.getElementById('username').focus()">
	
    <!-- Header Login -->
    <div id="w-header">
        <div id="header_login">
            <h1>
            	<a title="Mundvs Software" href="#">
	            	<!-- <img src="assets/images/logo.png" style="height:50px;" alt="Mundvs Software"/> -->
	            	<?php echo $this->Html->image('logo.png', array('style' => 'height:50px', 'alt' => 'Maxsam Tecnologia')); ?>
	            </a>
            </h1>    
        </div>
        <div id="w-nav_login">
    </div>


    <!-- CONTEUDO -->
    <div id="content_login" class="content_login">

		<?php echo $this->fetch('content'); ?>
    </div>
    
    <!-- Footer Login -->
    <hr />
    <div id="footer_login">
        <p>NOME DA EMPRESA Ltda <br /> Copyright © 2013 <br />  </p>
    </div>
    <script type="text/javascript">
        URL_BASE = "<?php echo Router::url('/', true); ?>";
    </script>

    <?php
        $jsList = array('complements_js/jquery-1.5.1.min', 'complements_js/jquery-ui-1.7.2.custom.min', 'complements_js/default', 'complements_js/plugins');


        if (isset($this->viewVars['requestJs']))
            $jsList[] = $this->viewVars['requestJs'];
    ?>

    <?php echo $this->Html->script($jsList) ?>
</body>
</html>