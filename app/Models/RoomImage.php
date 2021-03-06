<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Room;
class RoomImage extends Model
{
    use HasFactory;
    protected $fillable = ['room_id','image'];

    public function rooms() {
        return $this->belongTo('App\Room');
    }
}
