<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class BodyPosition extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['name', 'description'];

    public function medicalSessionDetails() : HasMany
    {
        return $this->hasMany(MedicalSessionDetail::class);
    }

}
