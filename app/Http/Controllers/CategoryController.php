<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories=Category::query()->paginate(6);
//       dd($categories);
        return view("admin.category.list",compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.category.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,Category $category)
    {
        $category->name = $request->name;
        $category->description = $request->description;
        $category->save();
        $msg = "عملیات موفقیت آمیز بود";
        return redirect(route('category.index '))->with('success', $msg);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        return view("admin.category.show",compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('admin.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        if ($request->name ||$request->description){
            $category->name = $request->name;
            $category->description = $request->description;
            $category->update();
            $msg = "عملیات  ویرایش با موفقیت انجام شد ";
        }else{
            $msg = "مثداری برای ویرایش وارد نشده است  ";
        }
        return redirect(route('category.index'))->with('success', $msg);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        try {
            $category->delete();
            $msg = "آیتم مورد نظر حذف گردید";
            return redirect(route('category.index'))->with('success', $msg);
        } catch (Exception $exception) {

            return redirect(route('category.index'))->with('warning', $exception->getCode());
        }
    }
}
