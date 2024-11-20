<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Task extends Model
{
    protected $fillable = [
        "name",
        "description",
        "icon",
        "status",
        "user_id"
    ];

    protected $guarded = ["id", "created_at", "updated_at"];

    /**
     * Get the user that owns the Task
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function setUser(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
