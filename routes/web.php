<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Home', function(){
    return view('home',[
        "picture" => "Leo.png",
        "name" => "Leonardo Caprio",
        "nim" => "2440015322",
        "class" => "Web Programming LA01-LEC",
        "email" => "leonardo.caprio@binus.ac.id",

    ]);
});

Route::get('/Course', function(){
    $course = [
        [
            "Course Code" => "COMP6681001",
            "Course" => "Web Programming",
            "Class" => "LA01"
        ],
        [
            "Course Code" => "ENTR6511001",
            "Course" => "Entrepreneurship: Market Validation",
            "Class" => "LE01"
        ],
        [
            "Course Code" => "COMP6062001",
            "Course" => "Compilation Techniques",
            "Class" => "LA01"
        ],
        [
            "Course Code" => "COMP6587001",
            "Course" => "Deep Learning",
            "Class" => "LA01"
        ],
    ];
    return view('course', ["listcourse" => $course]);
});

Route::get('/ScoreCourse', function(){
    $score = [
        [
            "Course Code" => "COMP6681001",
            "Course" => "Web Programming",
            "Score" => "99",
        ],
        [
            "Course Code" => "ENTR6511001",
            "Course" => "Entrepreneurship: Market Validation",
            "Score" => "75",
        ],
        [
            "Course Code" => "COMP6062001",
            "Course" => "Compilation Techniques",
            "Score" => "89",
        ],
        [
            "Course Code" => "COMP6587001",
            "Course" => "Deep Learning",
            "Score" => "60",
        ],
    ];

    return view('scorecourse', ["listscore" => $score]);
});
