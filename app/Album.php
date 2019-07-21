<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $table = 'albums';

    public function createAlbum($params){
        $this->title = $params->name;
        $this->user_id = 1;
        $this->desc = 'test desc';
        $this->save();
    }
}