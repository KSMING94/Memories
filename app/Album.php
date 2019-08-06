<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $table = 'albums';

    public function createAlbum($params){
        \Log::debug($params);
        $this->title = $params->name;
        $this->desc = $params->desc;
        $this->img = $params->file('imageFile')->getClientOriginalName();
        $this->user_id = 1;
        
        $this->save();
    }
}