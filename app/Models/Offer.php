<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    protected $table    = "Offers"; //pax nconnectiw model m3a table li kayn f dataBase
    protected $fillable = ['name','price','details','cerate_at','update_at'] ;//filabale hia array tan7t fiha ga3 dok les colonne li bithome yD5lo ldb
    protected $hidden   = ['cerate_at','update_at'];//hado matybanoch matalan ila drt select * mardich yrj3hom lia



}
