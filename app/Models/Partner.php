<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class partner extends Model
{
    protected $table = 'partners'; 
    protected $fillable = ['logo', 'name', 'description', 'Status'];
}
?>
