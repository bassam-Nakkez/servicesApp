<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LineOptions extends Model
{
    use HasFactory;

    protected $table = 'line_options';
    protected $primaryKey ='lineOptionID';
    protected $fillable =
     [
        'lineID',
        'options_fk_fichinter',
        'options_efficacite',
        'options_ponctualite',
        'options_presentation',
        'options_avisgeneral',
        'options_iseval',
        'options_idtasks',

    ];


    /**
     * Get the line that owns the LineOptions
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function line()
    {
        return $this->belongsTo(Line::class, 'lineID');
    }
}
