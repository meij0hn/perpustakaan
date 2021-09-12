<?php

namespace App\Http\Controllers\Admin;

use App\Book;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class ReportController extends Controller
{
    public function topBook()
    {
        $books = Book::withCount('borrowed')
                ->orderBy('borrowed_count', 'DESC')
                ->paginate(env('PAGINATION_ADMIN'));

        $books->load('author');

        return view('admin.report.top-book', [
            'title' => 'Top Book',
            'books' =>$books,
        ]);
    }

    public function topUser()
    {
        $users = User::withCount('borrowedBy')
                 ->orderBy('borrowed_by_count', 'DESC')
                 ->paginate(env('PAGINATION_ADMIN'));

        return view('admin.report.top-user', [
            'title' => 'Top User',
            'users' =>$users,
        ]);
    }
}
