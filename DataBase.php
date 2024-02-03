<?php
require_once('DbAbstraction.php');
class DataBase extends DbAbstraction
{

    function pushTooBase($params)
    {
        $params1 = [
            'name' => $params['name'],
            'user_name' => $params['user_name'],
            'chat_id' => $params['chat_id'],
        ];
        $countChat_id = $this->column('SELECT COUNT(id) FROM chats WHERE chat_id = :chat_id',['chat_id' => $params1['chat_id']]);
        var_dump($countChat_id);
        if($countChat_id == 0){
            $this->query('INSERT INTO chats (name,user_name,chat_id) VALUES (:name, :user_name, :chat_id)', $params1);
        }
    }
}