<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public $guarded = [];


    //relasi ke Author, satu Penulis punya banyak buku
    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    public function getCover()
    {
        if (substr($this->cover, 0, 5) == "https") {
            return $this->cover;
        }

        if ($this->cover) {
            return asset($this->cover);
        }
        //https://placeholder.com/
        return 'https://via.placeholder.com/150x200.png?text=No+Cover';
    }

    // pertem ke 40 relasi many to many  rlasi untuk peminjaman buku
    public function borrowed()
    {
        return $this->belongsToMany(User::class, 'borrow_history')
                    ->withTimestamps();
    }

    //per 52 fix bug pada pengecekan buku
    public function scopeIsStillBorrow($query, $bookId)
    {
        return $query->where('books.id', $bookId)
                     ->where('returned_at', null)
                     ->count() > 0;
    }


}
