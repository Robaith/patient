<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];


    public function profileImage(){
        $imagePath = ($this->image) ? $this->image : 'profile/UuEgmBYjNSdR21t3fZYrxJLMxjaBwyIPqJPmi8mc.png';
        return '/storage/' . $imagePath;
    }

    public function followers(){
        return $this->belongsToMany(User::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
