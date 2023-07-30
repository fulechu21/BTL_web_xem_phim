<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function list()
    {
        // TODO: Implement list() method.
        $list = Country::paginate(5);
        return view('admin.country.list', compact('list'));
    }

    public function create()
    {
        // TODO: Implement create() method.
        $countries = Country::all();
        return view('admin.country.create', compact('countries'));
    }

    public function doCreate(Request $request)
    {
        // TODO: Implement doAdd() method.
        $data = $request->all();
        unset($data['_token']);
        try {
            $country = Country::where('name', $request->name)->first();
            if($country) return redirect()->back()->with('error', 'Đã có danh mục này');

            else {
                Country::create($data);
                return redirect()->back()->with('success', 'Thêm mới thành công');
            }        } catch (\Exception $exception) {
            return redirect()->back()->with('error', $exception->getMessage());
        }
    }

    public function edit($id)
    {
        // TODO: Implement edit() method.
        $obj = Country::find($id);
        $countries = Country::where('id', '<>', $id)->get();
        return view('admin.country.edit', compact('obj', 'countries'));
    }

    public function doEdit($id, Request $request)
    {
        // TODO: Implement doEdit() method.
        $data = $request->all();
        unset($data['_token']);
        try {
            Country::where('id', $id)->update($data);
        } catch (\Exception $exception) {
            return redirect()->back()->with('error', $exception->getMessage());
        }
        return redirect()->back()->with('success', 'Sửa thành công');
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
        Country::where('id', $id)->delete();
        return redirect()->back()->with('success', 'Xóa thành công');
    }
}
