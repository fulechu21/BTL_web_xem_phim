<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Actor;
use Illuminate\Http\Request;

class ActorController extends Controller
{
    public function list()
    {
        // TODO: Implement list() method.
        $list = Actor::paginate(5);

        return view('admin.actor.list', compact('list'));
    }

    public function create()
    {
        // TODO: Implement create() method.
        $actors = Actor::all();
        return view('admin.actor.create', compact('actors'));
    }

    public function doCreate(Request $request)
    {
        // TODO: Implement doAdd() method.
        $data = $request->all();
        unset($data['_token']);
        try {
            $actor = Actor::where('name', $request->name)->first();
            if($actor) return redirect()->back()->with('error', 'Đã có diễn viên này');

            else {
                Actor::create($data);
                return redirect()->back()->with('success', 'Thêm mới thành công');
            }
        } catch (\Exception $exception) {
            return redirect()->back()->with('error', $exception->getMessage());
        }

    }

    public function edit($id)
    {
        // TODO: Implement edit() method.
        $obj = Actor::find($id);
        $actors = Actor::where('id', '<>', $id)->get();
        return view('admin.actor.edit', compact('obj', 'actors'));
    }

    public function doEdit($id, Request $request)
    {
        // TODO: Implement doEdit() method.
        $data = $request->all();
        unset($data['_token']);

        try {
            Actor::where('id', $id)->update($data);
        } catch (\Exception $exception) {
            return redirect()->back()->with('error', $exception->getMessage());
        }
        return redirect()->back()->with('success', 'Sửa thành công');
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
        Actor::where('id', $id)->delete();
        return redirect()->back()->with('success', 'Xóa thành công');
    }
}
