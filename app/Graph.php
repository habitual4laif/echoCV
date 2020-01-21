<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Graph extends Model
{
  protected $table = 'graphs';
  public $timestamps = true;


  protected $fillable = [
  'name', 'desc'
  ];
}