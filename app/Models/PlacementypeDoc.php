<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Document;

class PlacementypeDoc extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    public function placementType()
    {
        return $this->hasMany(Document::class, 'placementype_id');
    }
}
