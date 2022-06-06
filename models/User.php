<?php
//Extend model class that perform all the connection to the database
class User extends Model
{
    var $user_id;
    var $username;
    var $password;
    var $role;

    //Get users info
    public function get()
    {
        $SQL = "SELECT user_id,username,role FROM Users";
        $stmt = self::$_connection->prepare($SQL);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'User');
        return $stmt->fetchAll();
    }

    //Find user bij username
    public function findUser($username)
    {
        $SQL = 'SELECT * FROM Users WHERE username = :username';
        $stmt = self::$_connection->prepare($SQL);
        $stmt->execute(['username' => $username]);
        // Instance to be populated by database fetch operation
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'User');
        return $stmt->fetch();
    }

    //Create user when register
    public function createUser()
    {
        $SQL = 'INSERT INTO Users(username, password) VALUES(:username, :password)';
        $stmt = self::$_connection->prepare($SQL);
        $stmt->execute(['username' => $this->username, 'password' => $this->password]);
        return $stmt->rowCount();
    }

    //Update user password
    public function updatePassword()
    {
        $SQL = 'UPDATE Users SET password = :password WHERE username = :username';
        $stmt = self::$_connection->prepare($SQL);
        $stmt->execute(['password' => $this->password, 'username' => $this->username]);
        return $stmt->rowCount();
    }

    //Delete user
    public function deleteUser($username)
    {
        $SQL = 'DELETE FROM Users WHERE username = :username';
        $stmt = self::$_connection->prepare($SQL);
        $stmt->execute(['username' => $username]);
        return $stmt->rowCount();
    }
}
