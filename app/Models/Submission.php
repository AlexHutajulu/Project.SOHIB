<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
    use HasFactory;

    protected $table = 'submissions';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nik', 'name', 'address','bank_name', 'phone', 'email', 'budget', 'bank_account', 'application_letter', 'documentation',
        'email', 'land_certificate', 'management_letter', 'notaris', 'npwp', 'domicile_letter','ibadah','tanah','rab', 'status',
        'information',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
