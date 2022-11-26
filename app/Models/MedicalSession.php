<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class MedicalSession extends Model
{
    use HasFactory;

    protected $fillable = ['customer_id', 'medication_date'];

    public function customer() : BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }

    public function medicalSessionDetails() : HasMany
    {
        return $this->hasMany(MedicalSessionDetail::class);
    }

}