<?php

namespace App\Http\Controllers\Backend\UserManagement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use App\Repositories\Interface\User\VendorInterface;
use App\Http\Requests\Users\StoreUserRequest;
use App\Http\Requests\Users\UpdateUserRequest;
use App\Models\User;

class VendorController extends Controller
{
    protected $vendor;
    
    public function __construct(VendorInterface $vendor)
    {
        $this->vendor=$vendor;
    }

    public function index()
    {
        Gate::authorize('backend.vendor.index');
        $users = $this->vendor->all();
        return view('backend.user_management.vendor.index',compact('users'));
    }

    public function create()
    {
        Gate::authorize('backend.vendor.create');
        $role = $this->vendor->allRole();
        return view('backend.user_management.vendor.form', compact('role'));
    }

    public function store(StoreUserRequest $request)
    {
        $user = $this->vendor->store($request->all());
        notify()->success('User Successfully Added.', 'Added');
        return redirect()->route('backend.vendor.index');
    }

    public function show($id)
    {
        $user = $this->vendor->get($id);
        return view('backend.user_management.vendor.show',compact('user'));   
    }

    public function edit($id)
    {
        Gate::authorize('backend.vendor.edit');
        $role   = $this->vendor->allRole();
        $user   = $this->vendor->get($id);  
        return view('backend.user_management.vendor.form', compact('role','user')); 
    }

    public function update($id, UpdateUserRequest $request)
    {
        $users = $this->vendor->update($id,$request->all());
        notify()->success('User Successfully Updated.', 'Updated');
        return redirect()->route('backend.vendor.index');
    }

    public function destroy($id)
    {
        Gate::authorize('backend.vendor.destroy');
        $user = $this->vendor->delete($id);
        notify()->success("User Successfully Deleted", "Deleted");
        return back(); 
    }

    public function toggleBlock($id)
    {
        try {
            $user = User::find($id);
            if ($user->suspend === 1) {
                $user->suspend = 0;
                $message = 'User Blocked Successfully';
            } else {
                $user->suspend = 1;
                $message = 'User Unblocked Successfully';
            }
            $user->save();

        } catch (\Exception $exception) {
            $message = $exception->getMessage();
        }
        notify()->success($message);
        return redirect()->route('backend.vendor.index');
    }
}
