<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

// class person{
//     public $name;
//     public $tasks=[];
// }

class PostController extends Controller
{
    //indexメソッド
    public function index(){
    // $persons=[];
    // $persons[0]=new person();
    // $persons[0]->name='Aさん';
    // $persons[0]->tasks=['task1','task2'];
    //複数のPostが配列のように扱える
    $posts= Post::all();
    return view('index')
        ->with(['posts'=>$posts]);
    }

    public function namecreate(){
        return view('namecreate');
    }

    public function namecreatestore(Request $request){
        $request->validate([
            'name'=>'required',
        ],[
            'name.required'=>'名前を入力してください'
        ]);
        $post= new Post();
        $post->name= $request->name;
        $post->task= $request->task;
        $post-> save();
        return redirect()
            ->route('index');
    }

    public function edit(Post $post){
        return view('edit')
            ->with(['post'=>$post]);
    }

    public function update(Request $request,Post $post){
        $post->task= $request->task;
        $post-> save();
        return redirect()
            ->route('index');
    }

    public function destroy(Post $post){
        $post-> delete();
        return redirect()
        ->route('index');
    }

    public function alldestroy(){
        $posts= Post::all();
        foreach($posts as $post){
            $post->task= null;
            $post-> save();
        }
        return redirect()
        ->route('index');
    }

    public function guest(){
        $posts= Post::all();
        return view('guest')
            ->with(['posts'=>$posts]);
    }
}
