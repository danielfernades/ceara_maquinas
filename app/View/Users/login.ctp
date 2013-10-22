    <div class="processo_login">
            <!-- Erros de Validação -->
            <?php echo $this->Session->flash('flash', array('element' => 'error')); ?>
            
            <h2 class="title_login"><strong>Login</strong></h2>
            <!-- <form action="" id="formLogin" method="post"> -->
            <?php echo $this->Form->create('User', array('id' => 'formLogin')); ?>
                <div class="boxDadosLogin">
                    <h3 class="titleLoginH3">Identifique-se para acessar o sistema.</h3>
    
                    <fieldset>
                        <ol class="form">
                            <li>
                                <label class="lblLogin" for="username">Usuário:</label>
                                <!-- <input class="inpLogin" autocomplete="off" id="username" name="usuario" type="text"/> -->
                                <?php echo $this->Form->input('email', array('id' => 'username', 'autocomplete' => 'off', 'class' => 'inpLogin', 'div' => false, 'label' => false, 'type' => 'text')); ?>
                            </li>
                            <li>
                                <label class="lblLogin" for="password">Senha:</label>
                                <!-- <input class="inpLogin" autocomplete="off" id="password" name="senha" type="password"/> -->
                                <?php echo $this->Form->input('password', array('id' => 'password', 'autocomplete' => 'off', 'class' => 'inpLogin', 'div' => false, 'label' => false)); ?>
                            </li>
                        </ol>
                    </fieldset>
                </div>
                <!-- .btnLoginEntrar = Seria a class jQuery que apartir do evento click() daria submit no formulário de login #formLogin-->
                <div class="btnLoginEntrar btn btnVermelho btnSetaDir">
                    <!-- <input type="submit" value="Entrar"> -->
                    <?php echo $this->Form->submit('Entrar', array('div' => false, 'label' => false)); ?>
                    <span>&nbsp;</span>
                </div>
                      
                <div class="btnLoginEsqueci btn btnCinza btnSetaDir">
                    <a href="recovery">Esqueci Minha Senha</a>
                    <span>&nbsp;</span>
                </div>
            <!-- </form> -->
            <?php echo $this->Form->end(); ?>
        </div>