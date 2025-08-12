<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function getFormattedAvailableFromAttribute()
    {
        return $this->available_from ? Carbon::parse($this->available_from)->format('d M') : null;
    }

    public function getPostedOnAttribute()
    {
        return $this->created_at ? Carbon::parse($this->created_at)->format('d M H:i') : null;
    }
}
