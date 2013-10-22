<?php  
	/**
	* 
	*/
	class UsersController extends AppController{
		// public $components = array(
		// 	'Session',
		//     'Auth' => array(
		//         'loginAction' => array(
		//             'controller' => 'users',
		//             'action' => 'login'
		//         ),
		//         'authError' => 'Usuário e/ou Senha inválidos!',
		//         'authenticate' => array(
		//             'Form' => array(
		//                 'fields' => array('username' => 'email')
		//             )
		//         ),
		//         'loginRedirect' => array('controller' => 'customers', 'action' => 'index'),
  //           	'logoutRedirect' => array('controller' => 'users', 'action' => 'login')
		//     )
		// );

		public function login(){
			$this->layout = 'login';

			if ($this->request->is('post')) {
		        if ($this->Auth->login()) {
		            return $this->redirect($this->Auth->redirectUrl());		         
		        } else {
		            $this->Session->setFlash('Usuário ou senha inválidos!');
		        }
		    }
			
		}

		public function logout() {
		    return $this->redirect($this->Auth->logout());
		}
	}
?>