<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class MedicalSession extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['customer_id', 'medication_date', 'remark'];

    public function customer() : BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }

    public function medicalSessionDetails() : HasMany
    {
        return $this->hasMany(MedicalSessionDetail::class);
    }

}
