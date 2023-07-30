<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function list()
    {
        // TODO: Implement list() method.
        $list = Category::paginate(5);
        return view('admin.category.list', compact('list'));
    }

    public function create()
    {
        // TODO: Implement create() method.
        $categories = Category::all();
        return view('admin.category.create', compact('categories'));
    }

    public function doCreate(Request $request)
    {
        // TODO: Implement doAdd() method.
        $data = $request->all();
        unset($data['_token']);
        try {
            $category = Category::where('name', $request->name)->first();
            if($category) return redirect()->back()->with('error', 'Đã có danh mục này');

            else {
                Category::create($data);
                return redirect()->back()->with('success', 'Thêm mới thành công');
            }
        } catch (\Exception $exception) {
            return redirect()->back()->with('error', $exception->getMessage());
        }
    }

    public function edit($id)
    {
        // TODO: Implement edit() method.
        $obj = Category::find($id);
        $categories = Category::where('id', '<>', $id)->get();
        return view('admin.category.edit', compact('obj', 'categories'));
    }

    public function doEdit($id, Request $request)
    {
        // TODO: Implement doEdit() method.
        $data = $request->all();
        unset($data['_token']);

        try {
            Category::where('id', $id)->update($data);
        } catch (\Exception $exception) {
            return redirect()->back()->with('error', $exception->getMessage());
        }
        return redirect()->back()->with('success', 'Sửa thành công');
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
        Category::where('id', $id)->delete();
        return redirect()->back()->with('success', 'Xóa thành công');
    }

}
