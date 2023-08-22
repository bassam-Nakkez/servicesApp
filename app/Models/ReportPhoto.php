<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReportPhoto extends Model
{
    use HasFactory;

    protected $table = 'report_photos';
    protected $primaryKey ='id';
    protected $fillable =
     [
        'reportID',
        'photo',

    ];


    /**
     * Get the report that owns the ReportPhoto
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function report()
    {
        return $this->belongsTo(User::class, 'reprtID');
    }


}
