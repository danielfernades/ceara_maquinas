<footer id="rodape">
    	
    <div class="footerTop">
        <div class="limit">
            <nav>
                <h6>Atendimento</h6>
                <ul>
                    <li class="ico-helpDesk"><a href="#">HelpDesk</a></li>
                    <li class="ico-Chat"><a href="#">Chat</a></li>
                    <li class="ico-Telefone"><a href="#">Telefone</a></li>
                </ul>
                <a href="#" class="lnkSeta lnkSetaWhite fright">Ver todas as formas de atendimento</a>
            </nav>
        </div>
    </div>
    
    <div class="subfooter">
        <div class="limit">
            <span class="lastAccess"><strong>Último acesso:</strong> 7/8/2011 22:35:49   <strong>IP:</strong> 201.87.65.217 <a href="#" class="icoInterroga">?</a></span>
 
            <p class="copyRight fright">Copyright © 2013 Maxsam Tecnologia</p>
        </div>
    </div>
    <script type="text/javascript">
        URL_BASE = "<?php echo Router::url('/', true); ?>";
    </script>

    <?php
        $jsList = array('locastyle', 'bootstrap');


        if (isset($this->viewVars['requestJs']))
            $jsList[] = $this->viewVars['requestJs'];
    ?>

    <?php echo $this->Html->script($jsList) ?>
    
</footer>