<?php

function getConnection($getLink = TRUE)
{
    static $link = NULL;

    if ($link === NULL) {
        $link = mysqli_connect('localhost:3307', 'root', '', 'login');
    
    } elseif ($getLink === FALSE) {

        mysqli_close($link);

    }

    return $link;
}


function getQuote()
{

    return "'";
}


function queryResults($query)
{

    $link = getConnection();
    $result = mysqli_query($link, $query);
    $values = mysqli_fetch_assoc($result);
    getConnection(FALSE);
    return $values;
}


function checkLogin($username, $password)
{

    $query = 'SELECT `username`, `password` FROM `users` WHERE `username` LIKE ' . getQuote() . $username . getQuote();

    $values = queryResults($query);

    $passwordVerified = password_verify($password, $values['password']);

    return $passwordVerified;

}


class DataStore
{
    protected $username;
    protected $password;


    /**
     * @return string
     */
    public function getUsername()
    {

        return $this->username;
    }
    /**
     * @param string $firstName
     * @return DataStore
     */
    public function setUsername($username)
    {
        $this->username = $username;
        return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {

        return $this->password;
    }
    /**
     * @param string $lastName
     * @return DataStore
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }
    
}