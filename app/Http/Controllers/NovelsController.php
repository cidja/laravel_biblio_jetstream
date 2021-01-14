<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Novel;
use Illuminate\Support\Facades\DB;
class NovelsController extends Controller
{
    //
    function index(){ //https://laravel.com/docs/8.x/pagination#displaying-pagination-results
      $data= DB::table("novels")->orderBY('id','desc')->simplePaginate(10);
      //$data = Novel::all();
      return view('pages.frontend.welcome',['novels'=>$data]);
    }

    function list(){
      $novel= DB::table("novels")->orderBY('id','desc')->get();
      return view('pages.frontend.list', ['novels'=>$novel]);
    }

    function onlyOne($id){ //https://laravel.com/docs/8.x/queries#retrieving-a-single-row-column-from-a-table
      $data= DB::table("novels")->where('id',$id)->first();
      return view('pages.frontend.singleNovel',['novel'=>$data]);
    }

    function infoUpdate($id){
      $data = DB::table("novels")->where('id',$id)->first();
      return view('pages.frontend.updateNovel', ['novel'=>$data]);
    }

    function confirmUpdate(Request $request){
      
      $id = $request['id'];
      //on peux aussi écrire Novel::query()->find($id)->update([])
      DB::table('novels')->where('id',$id)->update([
        'title'       => $request['title'],
        'author'      => $request['author'],
        'isbn'        => $request['isbn'],
        'genre'       => $request['genre'],
        'format'      => $request['format'],
        'page_count'  => $request['pageCount'],
        'cover'       => $request['cover']
      ]);
      return redirect()->route('welcome');
    }

    function statistics(){
      $pagesTotal = DB::table("novel")->sum('page_count');
      $bookTotal  = DB::table('novel')->count('title');
      $avgPages   = DB::table('novel')->avg('page_count');
      //print_r($data);
     return view('pages.frontend.statistics', [
    'pagesTotal'=>$pagesTotal,
    'bookTotal'=> $bookTotal,
    'avgPages'=> $avgPages
     ]);

    }
    

    function deleteview($id){
      $novel = Novel::query()->Where('id',$id)->first();
      return view('pages.frontend.delete',['novel'=>$novel]);
    }

    function deleteConfirm(request $request){
      $id = $request['id'];
      $title = $request['title'];
      if($request['password'] == $title){ //voir pour en faire avec le mot de passe de la 
        $novel = Novel::query()->where('id', $id)->delete();
      return redirect()->route('welcome');
      }else
      {
        echo "mauvais mot de passe pour la suppression";
      }      
    }

    public function search(request $request){
      if($request['search']->has('mythe')){
        $novel = Novel::query()->where('title',$request['search']);
        return view('pages.frontend.research', ['novel'=>$novel]);
      }else{
        dd($request['search']);
        return 'erreur';
      }
    }

    public function store(request $request){
      //link video : https://www.youtube.com/watch?v=lPSg8LBFzZQ&list=PLMWEEzYqZ0em1vnBx8F5GZd94Ejph4TjO&index=12&ab_channel=ThibaudDauce
      $novel = Novel::query()->create([
        'title'       => $request['title'],
        'author'      => $request['author'],
        'isbn'        => $request['isbn'],
        'genre'       => $request['genre'],
        'format'      => $request['format'],
        'page_count'  => $request['pageCount'],
        'cover'       => $request['cover']
      ]);
      return redirect()->route('welcome'); //view('pages.home');
    }

    
    function update(request $request){
      $novel = Novel::query()->update([
        //
      ]);
    }

    function delete(request $request){
      $novel = Novel::find(277);
      $novel->delete();
      return view('pages.frontend.delete');
      //return redirect()->route('welcome');
    }

}
