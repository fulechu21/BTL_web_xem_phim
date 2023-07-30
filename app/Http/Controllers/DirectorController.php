<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Director;
use Illuminate\Http\Request;

class DirectorController extends Controller
{
    public function list()
    {
        // TODO: Implement list() method.
        $list = Director::paginate(5);
        return view('admin.director.list', compact('list'));
    }

    public function create()
    {
        // TODO: Implement create() method.
        $directors = Director::all();
        return view('admin.director.create', compact('directors'));
    }

    public function doCreate(Request $request)
    {
        // TODO: Implement doAdd() method.
        $data = $request->all();
        unset($data['_token']);
        try {
            $director = Director::where('name', $request->name)->first();
            if($director) return redirect()->back()->with('error', 'Đã có danh mục này');

            else {
                Director::create($data);
                return redirect()->back()->with('success', 'Thêm mới thành công');
            }        } catch (\Exception $exception) {
            return redirect()->back()->with('error', $exception->getMessage());
        } catch (\Exception $exception) {
            return redirect()->back()->with('error', $exception->getMessage());
        }

    }

    public function edit($id)
    {
        // TODO: Implement edit() method.
        $obj = Director::find($id);
        $directors = Director::where('id', '<>', $id)->get();
        return view('admin.director.edit', compact('obj', 'directors'));
    }

    public function doEdit($id, Request $request)
    {
        // TODO: Implement doEdit() method.
        $data = $request->all();
        unset($data['_token']);

        try {
            Director::where('id', $id)->update($data);
        } catch (\Exception $exception) {
            return redirect()->back()->with('error', $exception->getMessage());
        }
        return redirect()->back()->with('success', 'Sửa thành công');
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
        Director::where('id', $id)->delete();
        return redirect()->back()->with('success', 'Xóa thành công');
    }
}
