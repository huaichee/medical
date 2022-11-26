<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['name', 'age', 'phone', 'address', 'remark'];

    public function medicalSessions() : HasMany
    {
        return $this->hasMany(MedicalSession::class);
    }

    public function scopeLastVisit(\Illuminate\Database\Eloquent\Builder $builder)
    {
        $builder->addSelect(['last_visit' =>
            MedicalSession::query()
            ->whereColumn('customer_id', 'customers.id')
            ->select('medication_date')
            ->take(1)
        ]);
    }

}
