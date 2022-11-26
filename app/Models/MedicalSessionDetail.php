<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class MedicalSessionDetail extends Model
{
    use HasFactory;

    protected $fillable = ['medical_session_id', 'body_position', 'note'];

    public function medicalSession() : BelongsTo
    {
        return $this->belongsTo(MedicalSession::class);
    }

    public function bodyPosition() : BelongsTo
    {
        return $this->belongsTo(BodyPosition::class);
    }
}