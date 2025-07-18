<?php

use App\Http\Controllers\SystemController;
use Illuminate\Support\Facades\Route;

Route::controller(SystemController::class)->group(function (){

    Route::get('/','index')->name('index');
    Route::get('/show','login')->name('login');

    // Routes of change password

    Route::get('/change/password','show_change_password_page')->name('show_change_password_page');
    Route::post('/store/new_password','store_new_password')->name('store_new_password');

    // Routes of Student

    Route::get('/show/student','show_student')->name('show_student');
    Route::get('/show/content/{class}/{subject}','show_student_content')->name('show_student_content');
    Route::get('/show/content/{class}/{subject}/lessons','show_student_lesson')->name('show_student_lesson');
    Route::get('/show/content/{class}/{subject}/homeworks','show_student_homework')->name('show_student_homework');
    Route::get('/show/content/{class}/{subject}/homeworks/upload','to_upload_homework')->name('to_upload_student_homework');
    Route::post('/show/content/homeworks/store','store_student_solution_homework')->name('store_student_solution_homework');
    Route::get('/show/{class}/{subject}/quiz/action','show_student_quiz_action')->name('show_student_quiz_action');
    Route::get('/show/quiz/{class}/{subject}','show_student_quizzes')->name('show_student_quizzes');
    Route::get('/show/{class}/{subject}/content/quiz','show_content_quiz')->name('show_content_quiz');
    Route::post('/store/{class}/{subject}/student/answers','store_student_answers')->name('store_student_answers');
    Route::get('/show/quiz/{class}/{subject}/results','show_student_quiz_result')->name('show_student_quiz_result');
    Route::get('/show/grades/{class}/{subject}/homeworks','show_student_homework_grade')->name('show_student_homework_grade');
    Route::get('/log_out','log_out_student')->name('log_out_student');

    //Routes of Teacher

    Route::get('/show/teacher','show_teacher')->name('show_teacher');
    Route::post('/store/teacher/{teacher}','store_teacher')->name('store_teacher');
    Route::get('/show/teacher/{teacher}/lessons','show_teacher_lessons')->name('show_teacher_lessons');
    Route::get('/show/teacher/{teacher}/homeworks','choose_action_homework')->name('choose_action_homework');
    Route::get('/show/teacher/{teacher}/homeworks/create','create_teacher_homeworks')->name('create_teacher_homeworks');
    Route::get('/show/teacher/{teacher}/homeworks/correction','correct_teacher_homework')->name('correct_teacher_homework');
    Route::get('/show/teacher/{teacher}/homeworks/solutions_of_students','homework_solutions_of_students')->name('homework_solutions_of_students');
    Route::post('/store/teacher/{student}/grades/homeworks','store_grades_homeworks')->name('store_grades_homeworks');
    Route::post('/modify/teacher/{student}/grades/homeworks','modify_grades_homeworks')->name('modify_grades_homeworks');
    Route::get('/create/teacher/{teacher}/quiz','create_teacher_quiz')->name('create_teacher_quiz');
    Route::get('/show/teacher/{teacher}/quiz/results','show_results')->name('show_results');
    Route::get('/show/teacher/{teacher}/quiz/results/content','show_content_results')->name('show_content_results');

});
