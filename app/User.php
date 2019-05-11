<?php

namespace App;

use Core\CsvWrapper;

class User
{
    public $email;
    public $username;
    public $password;

    protected $array_by_id;

    public function __construct(int $id)
    {
        $this->array_by_id = (new CsvWrapper())->get_array_by_id($id);

        $this->email = $this->array_by_id['e-mail'];
        $this->username = $this->array_by_id['username'];
        $this->password = $this->array_by_id['password'];
    }

    public function get_user_details(): string
    {
        return
            "<ul> 
                <li>$this->email</li>
                <li>$this->username</li>
                <li>$this->password</li>
            </ul>";
    }
}
