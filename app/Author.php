<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    //
    public $timestamps = false;

    // protected $fillable = ['name'];
    protected $guarded = []; // fpenggant $fillable tidak usah menambahkan isi array lagi


    // Berelasi ke Book
    public function books()
    {
        return $this->hasMany(Book::class);
    }



}
