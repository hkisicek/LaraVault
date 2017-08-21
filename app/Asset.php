<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Asset extends Model
{
    protected $table='assett';

    public $primaryKey='id';

    public $timestamps=false;

    protected $fillable=array('name',
                              'title',
                              'description',
                              'type',
                              'size',
                              'public',
                              'user',
                              'downloaded',
                              'reference');

    protected $guarded=array();
}
