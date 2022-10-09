<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        return Category::all();

    }
    public function store(Request $request){
$request->validate([
'name'=>'required|min:3|max:100',
'dec'=>'required'

]);

        Category::create($request->all());
    }

    public function show($id){
        return Category::find($id);
    }

    public function update(Request $request,$id){
        $category=Category::find($id);
        $category->update($request->all());
return $category;
        }

   public function destroy($id)
{
 return  Category::destroy($id);

}

}
