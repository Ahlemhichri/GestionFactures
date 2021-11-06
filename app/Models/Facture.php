<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facture extends Model
{
    use HasFactory;
    protected $table = 'factures';



      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'designation','description','prix_ht','prix_ttc','TVA'
    ];

}
