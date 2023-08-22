<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $table = 'reports';
    protected $primaryKey ='reportID';
    protected $fillable =
     [
        'empID',
        'subject',
        'message' ,
        'typeCode',
        'severityCode',
        'lineID',
        // 'categoryID'
    ];

    /**
     * Get all of the photo for the Report
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function photo()
    {
        return $this->hasMany(ReportPhoto::class, 'reportID');
    }

    /**
     * Get the line that owns the Report
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function line()
    {
        return $this->belongsTo(Line::class, 'lineID');
    }




}
