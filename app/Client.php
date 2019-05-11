<?php

namespace App;

class Client extends User
{
    public $nume;
    public $prenume;
    public $full_name;
    public $oras;
    public $tara;
    public $full_address;

    public function __construct(int $id)
    {
        parent::__construct($id);

        $this->nume = $this->array_by_id['nume'];
        $this->prenume = $this->array_by_id['prenume'];
        $this->oras = $this->array_by_id['oras'];
        $this->tara = $this->array_by_id['tara'];
        $this->set_full_name();
        $this->set_full_address();
    }

    private function set_full_name(): void
    {
        $this->full_name = $this->nume . ' ' . $this->prenume;
    }

    private function set_full_address(): void
    {
        $this->full_address = $this->oras . ' ' . $this->tara;
    }

    public function get_client_details(): string
    {
        return
            "<ul> 
                <li>$this->email</li>
                <li>$this->username</li>
                <li>$this->password</li>
                <li>$this->nume</li>
                <li>$this->prenume</li>
                <li>$this->full_name</li>
                <li>$this->oras</li>
                <li>$this->tara</li>
                <li>$this->full_address</li>
            </ul>";
    }
}
