<?php

namespace App\Models;

use CodeIgniter\Model;

class GuestModel extends Model
{
    protected $table = 'news';

    protected $allowedFields = ['name', 'email', 'website', 'comment', 'gender'];

    public function getGuests($name = false)
    {
        if ($name === false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $name])->first();
    }
}