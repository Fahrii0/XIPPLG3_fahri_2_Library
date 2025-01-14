<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    use HasFactory;

    protected $table = 'loans'; // Nama tabel

    protected $fillable = [
        'book_id',
        'user_id',
        'loan_date',
        'return_date',
        'status',
    ];

    // Jika Anda ingin mendefinisikan relasi, Anda bisa menambahkannya di sini
    public function book()
    {
        return $this->belongsTo(Book::class, 'book_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}