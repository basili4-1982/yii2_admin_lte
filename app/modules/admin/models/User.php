<?php


namespace vendor\basili4\adminlte\models;

/**
 *
 *  Класс пользователя
 *
 */
class User extends \app\models\User
{
    
    const ST_ONLINE='online';
    const ST_OFFLINE='offline';
    
    public $avatar = null;
    public $username = null;
    public $email = null;
    public $status=self::ST_ONLINE;
}