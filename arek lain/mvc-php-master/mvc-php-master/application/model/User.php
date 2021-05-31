<?php

/**
 * Class User
 */
class User
{
    /**
     * User constructor.
     * @param $db
     */
    function __construct($db)
    {
        try
        {
            $this->db = $db;
        } catch (PDOException $e)
        {
            exit('Database connection could not be established.');
        }
    }

    /**
     * check email & password
     *
     * @param $email
     * @param $pwd
     * @return mixed
     */
    public function login($email, $pwd)
    {
        $sql = "select * from user where email = :email            ";
        $query = $this->db->prepare($sql);
        $parameters = array(
            ':email' => $email,
        );
        $query->execute($parameters);
        $user = $query->fetch();

        if ($user and $user->password == hash('sha256', $pwd))
            return $user;
        else
            return null;
    }

    /**
     * get memebers of conversation
     * @return mixed
     */
    public function getOtherMembers()
    {
        $sql = "select email,id from user where id <> :id";
        $query = $this->db->prepare($sql);
        $parameters = array(
            ':id' => $_SESSION['current_user_id'],
        );
        $query->execute($parameters);
        return $query->fetchAll();
    }


}
