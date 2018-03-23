<?php

namespace App\Http\Controllers;

use App\DataTables\AdminDatatable;
use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\AddUserRequestAdmin;
use Illuminate\Support\Facades\Redirect;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(AdminDatatable $adminDatatable)
    {
        return  $adminDatatable->render('admin.user.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddUserRequestAdmin $request,User $user)
    {

      $user::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
        ]);
        return redirect('/admin/users')->with('تمتة اضافة العضو بنجاح');
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $user=User::find($id);
       return view('admin.user.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $userUpdated=User::find($id);
        $userUpdated->fill($request->all())->save();
        return Redirect::back()->with('تم التعديل علي العضو بنجاح');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user=User::find($id);
        $user->delete();
        return Redirect::back()->with('تم  حزف العضو بنجاح  ');



    }

    public function changePassword(Request $request){
        $id=$request['user_id'];
        $user = User::findOrFail($id);
        $password=bcrypt($request['password']);
        $user->fill(['password'=>$password])->save();

        return Redirect::back()->with('تم تغير كلمة المرور بنجاح');



    }
    public function anyData(User $user)
    {

        dd('hi');


        $users = $user->all();
        return Datatables::of($users)

            ->editColumn('name', function ($model) {
                return '<a href="'.url('/admin/users/' . $model->id . '/edit').'">'.$model->name.'</a>';
            })
            ->editColumn('admin', function ($model) {
                return $model->admin == 0 ? '<span class="badge badge-info">' . 'عضو' . '</span>' : '<span class="badge badge-warning">' . 'مدير الموقع' . '</span>';
            })



            ->editColumn('control', function ($model) {
                $all = '<a href="' . url('/admin/users/' . $model->id . '/edit') . '" class="btn btn-info btn-circle"><i class="fa fa-edit"></i></a> ';
                if($model->id != 1){
                    $all .= '<a href="' . url('/admin/users/' . $model->id . '/delete') . '" class="btn btn-danger btn-circle"><i class="fa fa-trash-o"></i></a>';
                }
                return $all;
            })
            ->make(true);

    }



}
