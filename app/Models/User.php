<?php

namespace App\Models;

use Lepton\Boson\Model;
use Lepton\Boson\DataTypes\{CharField, DateTimeField, NumberField, PrimaryKey};

class User extends Model
{
    protected static $tableName = "DBRC_user";

    #[PrimaryKey] protected $id;
    #[CharField] protected $username;
    #[CharField] protected $password;
    #[CharField] protected $token;
    #[CharField] protected $email;
    #[DateTimeField] protected $access;
}
