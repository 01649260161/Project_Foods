<?php

namespace App\Http\Controllers;

use App\Model\AdminModel;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin')->only('index');
    }
    //
    //Phương thức trả về view khi đăng nhập admin thành công
    public function index(){
        return view('admin.dashboard');
    }
    //Phương thức trả ve view dùng để đăng kí tài khoản admin
    public function create(){
        //return view('admin.auth.register');
        return view('admin.auth.registertemplate');
    }
    public function store(Request $request){
        //validate dữ liệu được gửi từ form đi
        $this->validate($request,array(
            'name'=>'required',
            'email'=>'required',
            'password'=>'required'
        ));

        //khởi tạo modelđẻ lưu admin mới
        $adminModel = new AdminModel();
        $adminModel->name = $request->name;
        $adminModel->email = $request->email;
        $adminModel->password = bcrypt($request->password);
        $adminModel->save();



        return redirect()->route('admin.auth.login');
    }

}
