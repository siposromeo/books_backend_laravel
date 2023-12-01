<?php
// php artisan make:model Book

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $table = 'book100';
    protected $primaryKey = 'Id';

    public $timestamps = false;
}
