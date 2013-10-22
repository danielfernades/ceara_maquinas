<!-- Header -->
<header id="header" role="banner">
  <div class="limit">
    
    <div>
      <div id="logo_sistema">
        <!-- <img src="assets/images/logo2.png" /> -->
        <?php echo $this->Html->image('logo2.png'); ?>
      </div>
    
    
    
    <menu id="menuPrincipal">
    <div style="height:25px; text-align:right;">
    	<p style="color:#fff">Olá, <strong><?php echo $user['nome']; ?>!</strong>
        <a href="<?php echo $this->Html->url(array('controller' => 'users', 'action' => 'logout')); ?>" class="btn btn-mini btn-warning" style="padding:4px 8px;">Sair</a></p>
    </div>
    
        <ul style="margin-top:67px;">
          <li class="selected"><a href="#" tabindex="2" role="menuitem">Início</a></li>
          <li><a href="#" tabindex="2" role="menuitem">Tabela</a></li>
          <li><a href="#" tabindex="2" role="menuitem">Atendimento</a></li>
         
        </ul>
    </menu>
    </div>
  </div>
</header>
<!-- Fim Header -->