<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    //
    protected $table = 'company';
    public $guarded = [];
    

    public function employe()
    {
        return $this->hasMany(Employe::class);
    }

    public function getCover()
    {
        if (substr($this->cover, 0, 5) == "https") {
            return $this->cover;
        }

        if ($this->cover) {
            return asset($this->cover);
        }
        return 'https://via.placeholder.com/150x200.png?text=No+Cover';
    }


}
