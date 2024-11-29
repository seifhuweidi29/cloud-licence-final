<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;

    protected $fillable = ['license_id', 'notification_date'];

    public function license()
    {
        return $this->belongsTo(License::class);
    }
}
