<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Yajra\DataTables\Facades\DataTables;

class UsersController extends Controller
{
    //


    public function index()
    {
        $users = User::paginate(10);
        $roles = Role::query()->get();
        return view('admin.UserManagement.Users.list', compact('users','roles'));
    }

    public function store(Request $request)
        {
            // Validate the request data
            $request->validate([
                'user_name' => 'required|string|max:255',
                'user_email' => 'required|email|unique:users,email',
                'user_role' => 'required|exists:roles,id',
                'avatar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048', // Avatar validation
            ]);

            // Handle avatar upload if present
            if ($request->hasFile('avatar')) {
                $avatarPath = $request->file('avatar')->store('avatars', 'public');
            } else {
                $avatarPath = null; // Or set a default avatar path
            }

            // Create the new user
            $user = User::create([
                'name' => $request->input('user_name'),
                'email' => $request->input('user_email'),
                'password' => Hash::make('defaultpassword'), // Set a default password, or use another approach
                'avatar' => $avatarPath,
            ]);

            // Attach the role to the user
            $role = Role::find($request->input('user_role'));
            $user->roles()->attach($role);

            // Return success response
            return redirect()->route('users.index')->with('success', 'User created successfully!');
        }

    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $user->update($request->all());
        return redirect()->route('users.index')->with('success', 'User updated.');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index')->with('success', 'User deleted.');
    }
    public function getUsers(Request $request)
    {
        $users = User::query()->orderBy('id', 'desc');

        return DataTables::of($users)
            ->addColumn('id', function ($user) {
                return '<div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="1" />
                                </div>';
            })
            ->addColumn('name', function ($user) {
                $imgUrl = asset('assets/media/avatars/300-6.jpg'); // أو $user->image إن كنت تحفظ الصورة من قاعدة البيانات
                $profileUrl = url('apps/user-management/users/view'); // أو يمكن ربطه بـ route()

                return '<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                <a href="'.$profileUrl.'">
                    <div class="symbol-label">
                        <img src="'.$imgUrl.'" alt="'.$user->name.'" class="w-100" />
                    </div>
                </a>
            </div>
                             <div class="d-flex flex-column">
                <a href="'.$profileUrl.'" class="text-gray-800 text-hover-primary mb-1">'.$user->name.'</a>
                <span>'.$user->email.'</span>
            </div>
                        ';
            })
            ->addColumn('role', function ($user) {
                return '<td>'.$user->roles->pluck('name')->join(', ') ?? '-'.'</td>';
            })
            ->addColumn('last_login_at', function ($user) {
                $date = $user->last_login_at ? $user->last_login_at->format('Y-m-d H:i') : '-';
                return '<div class="badge badge-light fw-bold">' . $date . '</div>';
            })
            ->addColumn('two_step', function ($user) {
                return $user->two_step_enabled ? 'Enabled' : 'Disabled';
            })
            ->addColumn('actions', function ($user) {
                $options = '<div class="text-end"><a href="#" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">'.trans('admin.Actions') .'
                                    <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                                <!--begin::Menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="apps/user-management/users/view.html" class="menu-link px-3">'.trans('admin.Edit').'</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3" data-kt-users-table-filter="delete_row">'.trans('admin.Delete').'</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div></div>
                                <!--end::Menu-->
                             ';

                return $options;
            })
            ->rawColumns(['id','name','role','last_login_at','two_step','actions'])
            ->make(true);
    }
}
