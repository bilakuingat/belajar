<?php

/**
 * Class Message
 */
class Message
{
    /**
     * Message constructor.
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
     * get messages by conversation id
     * @param $id
     * @return mixed
     */
    public function getMessages($id)
    {
        $sql = "select m.content as content,u.email as email, m.created as created from  message m INNER JOIN conversation c  ON c.id = m.conversation INNER JOIN user u  ON u.id = m.user   where c.id = :id order by m.id desc";
        $query = $this->db->prepare($sql);
        $parameters = array(
            ':id' => $id,
        );
        $query->execute($parameters);
        return $query->fetchAll();

    }

    /**
     * save new message
     * @param $id
     * @param $content
     */
    public function saveMessage($id, $content)
    {
        $sql = "INSERT INTO message (conversation, content, user) VALUES (:conversation, :content, :user)";

        $query = $this->db->prepare($sql);
        $parameters = array(':conversation' => $id, ':content' => $content, ':user' => $_SESSION['current_user_id']);
        $query->execute($parameters);
    }

}
