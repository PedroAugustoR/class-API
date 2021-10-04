<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class listamercado extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome',
        'valor',];
}
