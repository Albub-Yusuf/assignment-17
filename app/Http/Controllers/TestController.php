<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function getExerptAndDescription(){
        $posts = DB::table('posts')->select('excerpt','description')
        ->get();
        dd($posts);
    
    }

    public function question4(){
        $posts = DB::table('posts')->where('id',2)->first();
        
        if($posts){
            echo $posts->description;
        }else{
            echo "Record not found!";
        }
    }

    public function question5(){
        $posts = DB::table('posts')->where('id',2)
                ->pluck('description');
        echo $posts[0];

       
    }

    public function question7(){
         $posts = DB::table('posts')->pluck('title');
         dd($posts);
    }

    public function question8(){
      $result =  DB::table('posts')->insert([
            'title' => 'X',
            'slug' => 'X',
            'excerpt' => 'excerpt',
            'description' => 'description',
            'is_published' => true,
            'min_to_read' => 2

        ]);

        if($result) {
            echo "Data inserted successfully!";
        }else{
            echo "Error occured!";
        }
    }

    public function question9(){
        $result = DB::table('posts')->where('id',2)
                ->update([
                    'excerpt' => 'Laravel 10',
                    'description' => 'Laravel 10'
                ]);
        if($result){
            echo "Data Updated Successfully.<br> Affected rows =".$result;
        }else{
            echo "Already updated <br> Affected rows =".$result;
        }
    }

    public function question10(){
        $affectedRows = DB::table('posts')->where('id',3)
                        ->delete();
        
        if($affectedRows){
            echo "Affected rows =".$affectedRows;
        }else{
            echo "Data does not exists <br> Affected rows =".$affectedRows;
        }
    }

    public function question12(){
        $posts = DB::table('posts')
                 ->whereNot('min_to_read',5)->get();
        dd($posts);
    }

    public function question13(){
        $hasPost = DB::table('posts')->where('id',3)->exists();
        dd($hasPost);
    }

    public function question13a(){
        $hasPost = DB::table('posts')->where('id',3)->doesntExist();
        if($hasPost){

            $result =  DB::table('posts')->insert([
                'id' => 3,
                'title' => 'new title 3',
                'slug' => 'new-title-3',
                'excerpt' => 'excerpt 3',
                'description' => 'description 3',
                'is_published' => true,
                'min_to_read' => 3
    
            ]);
    
            if($result) {
                echo "Data inserted successfully!";
            }else{
                echo "Error occured!";
            }

        }else{
            echo "Data exists!";
        }
    }

    public function question14(){
        $posts = DB::table('posts')->whereBetween('min_to_read',[1,5])
                ->get();
        dd($posts);
    }

    public function question15(){
        $incremented = DB::table('posts')->where('id',3)
                      ->increment('min_to_read');
        echo "total affected rows: ".$incremented;
    }
}
