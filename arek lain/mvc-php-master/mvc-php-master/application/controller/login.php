<?php

require APP . 'model/User.php';

/**
 * Class Login
 */
class Login extends Controller
{

    /**
     * login page
     */
    public function index()
    {
        if($_POST)
        {
            if($_SESSION['token']==$_POST['token']) // CSRF TOKEN
            {
                $user = new User($this->db);
                $user = $user->login($_POST['email'],$_POST['pwd']); //get User by pwd and email
                if($user)
                {
                    $_SESSION['current_user_id']=$user->id;
                    $_SESSION['current_user_email']=$user->email;
                    header('location: ' . URL );
                }else
                    $erros="Erreur ";
            }
        }
        require APP . 'view/login.php';
    }

    /*
     * destroy session and redirect to login
     */
    public function logout()
    {
        session_destroy();
        header('location: ' . URL ."?controller=login");
    }
}
