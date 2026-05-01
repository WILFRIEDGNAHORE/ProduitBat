<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\CategoryDataTable;
use App\Models\SubCategory;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CategoryController extends Controller
{
    public function index(CategoryDataTable $dataTable)
    {
        return $dataTable->render('admin.category.index');
    }

    public function create()
    {
        return view('admin.category.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'  => ['required'],
            'icon'  => ['required'],
            'image' => ['nullable', 'image', 'max:2048'],
        ]);

        $category         = new Category();
        $category->name   = $request->name;
        $category->icon   = $request->icon;
        $category->slug   = \Str::slug($request->name);
        $category->status = $request->status;

        if ($request->hasFile('image')) {
            $file     = $request->file('image');
            $fileName = rand() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/categories'), $fileName);
            $category->image = '/uploads/categories/' . $fileName;
        }

        $category->save();
        notyf()->success('Category Created Successfully!');
        return redirect()->route('admin.category.index');
    }

    public function show(string $id) {}

    public function edit(string $id)
    {
        $cat = Category::findOrFail($id);
        return view('admin.category.edit', compact('cat'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'name'  => ['required'],
            'icon'  => ['required'],
            'image' => ['nullable', 'image', 'max:2048'],
        ]);

        $category         = Category::findOrFail($id);
        $category->name   = $request->name;
        $category->icon   = $request->icon;
        $category->slug   = \Str::slug($request->name);
        $category->status = $request->status;

        if ($request->hasFile('image')) {
            if ($category->image && File::exists(public_path($category->image))) {
                File::delete(public_path($category->image));
            }
            $file     = $request->file('image');
            $fileName = rand() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/categories'), $fileName);
            $category->image = '/uploads/categories/' . $fileName;
        }

        $category->save();
        notyf()->success('Category Updated Successfully!');
        return redirect()->route('admin.category.index');
    }

    public function destroy(string $id)
    {
        $cat    = Category::findOrFail($id);
        $subCat = SubCategory::where(['category_id' => $cat->id])->count();

        if ($subCat > 0) {
            notyf()->error('There are sub categories under this category. Please delete them first!');
            return response(['status' => 'error']);
        }

        if ($cat->image && File::exists(public_path($cat->image))) {
            File::delete(public_path($cat->image));
        }

        $cat->delete();
        notyf()->success('Category Deleted Successfully!');
        return response(['status' => 'success']);
    }
}
