<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookBorrowDetails extends Model
{
    protected $fillable =['object','book_borrow_id'];
}
