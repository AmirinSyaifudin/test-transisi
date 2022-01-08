<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class BorrowHistory extends Model
{
    // deklarasi tabel
    protected $table = 'borrow_history';

    protected $guarded = [];



    // pertme 46 relasi Many To one
    // mengambil dat user
    public function user()
    {
        // one to many
        return $this->belongsTo(User::class);
    }


    public function book()
    {
        // one to many
        return $this->belongsTo(Book::class);
    }



    // pertemuanke 47
    public function admin()
    {
        return $this->belongsTo(User::class, 'id','admin_id');
    }

    // 48 , method untuk menampilkan buku yang di pinjam saja
    public function scopeIsBorrowed($query) // variabel scope
    {
        return $query->where('returned_at', null);

    }


}
