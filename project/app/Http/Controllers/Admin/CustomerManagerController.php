<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


class CustomerManagerController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index(){
        $items = DB::table('users')->paginate(10);

        /*
         * Đây là biến truyền từ Controller Xuống View
         * */

        $data = array();
        $data['customers']=$items;


        return view('admin.content.shop.customer.index',$data);
    }
    public function create(){
        /*
                 * Đây là biến truyền từ Controller Xuống View
                 * */
        $data = array();


        return view('admin.content.shop.customer.submit',$data);
    }
}
