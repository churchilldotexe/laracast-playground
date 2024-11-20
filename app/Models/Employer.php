<?php

namespace App\Models;

use App;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Employer extends Model
{
    /** @use HasFactory<\Database\Factories\EmployerFactory> */
    use HasFactory;

    /**
     * @return Illuminate\Database\Eloquent\Relations\HasMany<App\Models\Job,App\Models\Employer>
     **/
    public function jobs(): \Illuminate\Database\Eloquent\Relations\HasMany
    {

        return $this->hasMany(App\Models\Job::class);
    }

    /**
     * @return BelongsTo<App\Models\User,App\Models\Employer>
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}
