<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    //
    //elequent: Object Relaction Mapping
    //Query Builder: object relaction mapping
    //select * from settings
    //insert into settings (app name, photo_number, address) values ()

    protected $fillable = [
        'app name',
        'photo_number',
        'address'
    ];
}