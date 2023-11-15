<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('query');

        $postResults = Post::where(function ($q) use ($query) {
            $this->buildOrWhereClause($q, 'posts', $query);
        })->get();

        $userResults = User::where(function ($q) use ($query) {
            $this->buildOrWhereClause($q, 'users', $query);
        })->get();

        $results = $postResults->merge($userResults);

        return view('search.index', compact('results'));
    }

    private function buildOrWhereClause($queryBuilder, $tableName, $query)
    {
        $columns = Schema::getColumnListing($tableName);

        $queryBuilder->where(function ($q) use ($columns, $query) {
            foreach ($columns as $column) {
                $q->orWhere($column, 'LIKE', '%' . $query . '%');
            }
        });
    }
}
