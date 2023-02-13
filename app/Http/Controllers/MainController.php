<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Author;
use App\Media;
use App\Team;
use App\Category;
use App\Book;

class Maincontroller extends Controller
{
    public function index()
    {
        $sliders = Media::where(['status' => 'ACTIVE', 'media_type' => 'slideshow'])->get();
        $upcoming_books = Book::where('status', 'UPCOMING')->limit(5)->get();
        $downloaded_books = Book::with('category', 'author')->orderBy('downloaded', 'DESC')->get();
        $recomended_books = Book::where(['status' => 'ACTIVE', 'recommended' => '1'])->get();
        $books = Book::with('author')->where('status', 'ACTIVE')->paginate(10);
        $categories = Category::where('status', 'ACTIVE')->get();
        $author_feature = Author::where(['status' => 'ACTIVE', 'author_feature' => 'yes'])->inRandomOrder()->first();
        $galleries = Media::where(['status' => 'ACTIVE', 'media_type' => 'gallery'])->limit(6)->get();
    	return view('index')
            ->with(compact('sliders', 'upcoming_books', 'downloaded_books', 'recomended_books', 'books', 'categories', 'author_feature', 'galleries'));
    }

    public function about()
    {
        $teams = Team::where('status', 'ACTIVE')->limit(4)->get();
    	return view('about')
            ->with(compact('teams'));
    }

    public function gallery()
    {
        $galleries = Media::where(['media_type' => 'gallery', 'status' => 'ACTIVE'])->paginate(8);
    	return view('gallery')
            ->with(compact('galleries'));
    }

    public function blog()
    {
    	return view('blog');
    }

    public function author()
    {
        $searchTerm = request()->get('letter');
        $authors = Author::orWhere('title', 'LIKE', "$searchTerm%")->paginate(15);
        $downloaded_books = Book::orderBy('downloaded', 'DESC')->limit(4)->get();
        $author_features = Author::where('author_feature', 'yes')->limit(5)->get();
    	return view('author')
            ->with(compact('authors', 'downloaded_books', 'author_features'));
    }

    public function author_detail($slug)
    {
        $author = Author::where('slug', $slug)->first();
        return view('author_detail')
            ->with(compact('author'));
    }

    public function contact()
    {
    	return view('contact');
    }
}
