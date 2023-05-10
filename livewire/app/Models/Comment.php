<?php

namespace App\Models;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Comment extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function creator(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function getImagePathAttribute(){
        return Storage::disk('public')->url($this->image);
    }
}
