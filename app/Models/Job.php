<?php

namespace App\Models;

use App;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    protected $table = 'job_listings';

    // protected $fillable = ['salary','title','employer_id','created_at','updated_at'];
    // or
    protected $guarded = ['id'];

    /**
     * @return Illuminate\Database\Eloquent\Relations\BelongsTo<App\Models\Employer,App\Models\Job>
     */
    public function employer(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return  $this->belongsTo(Employer::class);

    }

    /**
     * @return Illuminate\Database\Eloquent\Relations\BelongsToMany<App\Models\Tag,App\Models\Job>
     **/
    public function tags(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {

        return $this->belongsToMany(Tag::class, foreignPivotKey:"job_listing_id");

    }

}
