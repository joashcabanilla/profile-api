<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MemberModel extends Model
{
    use HasFactory;

    protected $table = "members";
    protected $fillable = [
        "memid",
        "pbno",
        "firstname",
        "middlename",
        "lastname",
        "birthdate",
        "branch",
        "cpNumber",
        "email",
        "occupation",
        "tinNumber"
    ];
}
 