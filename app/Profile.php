<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
	protected $guarded = [];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function profileImage()
    {
    	$imagePath = ($this->image) ? $this->image : 'profile/WLAuMvwn1gt3ZrE4SRddOwd5cleYiyPVhyCat4Sm.jpeg';
    	return '/storage/' . $imagePath;
    }

    public function follower()
    {
        return $this->belongsToMany(User::class);
    }
}
