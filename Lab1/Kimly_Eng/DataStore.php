<?php

// Connecting to the database
function getConnection()
{
    if (!isset($link)) {
        //Static in this contex - store it below/elsewehre when getConnection start, $link store in the memory
        static $link = NULL;
    }

    if ($link === NULL) {
        $link = mysqli_connect('localhost:3307', 'lightmvcuser', 'testpass', 'lightmvctestdb');
    }
    return $link;
}

function closeConnection()
{
    if (!isset($link)) {
        static $link = NULL;
        return FALSE;
    } else {
        mysqli_close($link);
        return TRUE;
    }
}

function getQuote()
{
    return "'";
}

// SELECT `id`,`firstname`,`lastname` FROM `customers` WHERE x=y
// $where = [key = column name, value = data]
// $andOr = AND | OR
function getCustomers(array $where = array(), $andOr = 'AND')
{
    $query = 'SELECT `id`,`firstname`,`lastname`, `age`, FROM `users`';
    if ($where) {
        $query .= ' WHERE ';
        foreach ($where as $column => $value) {
            $query .= $column . ' = ' . getQuote() . $value . getQuote() . ' ' . $andOr;
        }
        $query = substr($query, 0, -(strlen($andOr)));
    }
    $link = getConnection();
    $result = mysqli_query($link, $query);
    return mysqli_fetch_all($result);
}

$myArray = getCustomers(array('id' => '3'));

closeConnection();

class DataStore
{
    protected $firstName;
    protected $lastName;
    protected $age;

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     * @return DataStore
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     * @return DataStore
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
        return $this;
    }

    /**
     * @return int
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param int $age
     * @return DataStore
     */
    public function setAge($age)
    {
        $this->age = $age;
        return $this;
    }

}
