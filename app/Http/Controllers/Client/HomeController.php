<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Validator;
use App\Models\Products;
use App\Models\Categories;
use App\Models\Users;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public $data = [];
    private $products;
    private $users;
    private $categories;
    public function __construct()
    {
        $this->products = new Products;
        $this->categories = new Categories;
        $this->users = new Users;
    }
    function index(Request $request)
    {
        $categories = Categories::all();
        $productLists = $this->products->where('product_name', 'like', "%" . request()->keywords . '%')->paginate(8);
        return view('client.home', compact('productLists', 'categories'));
    }

    public function productCategory($id)
    {
        $category = Categories::where('id', $id)->first();
        $product = Products::where('cate_id', $category->id)->get();
        return view('client.category', compact('product'));
    }

    public function product($id)
    {
        $value = Products::findOrFail($id);
        return view('client.products', compact('value'));
    }
    public function searchProduct(Request $request)
    {
        $products = Products::where('product_name', 'like', "%" . $request->keywords . '%')->get();
        return view('client.productsSearch', compact('products'));
    }


    public function register()
    {
        return view('client.account.register');
    }
    public function postRegister(UserRequest $request)
    {
        $dataInsert = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'address' => $request->address,
            'phone' => $request->phone,
            'create_at' => date('Y-m-d H:i:s'),
        ];

        Users::create($dataInsert);
        return redirect()->route('login');
    }


    public function login()
    {
        return view('client.account.login');
    }

    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:5',

        ], [
            'email.required' => 'Email phải bắt buộc nhập',
            'email.email' => 'Email không hợp lệ',
            'password.required' => 'Mật khẩu phải bắt buộc nhập',
            'password.min' => 'Mật khẩu tối thiểu :min kí tự',

        ]);

        $checkLogin = Auth::guard('web')->attempt([
            'email' => $request->email,
            'password' => $request->password
        ]);

        if ($checkLogin) {
            return redirect()->route('home');
        } else {
            return redirect()->back();
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }


    function testMail()
    {
        $name = 'Nguyen Tuan Anh';
        Mail::send('client.emails.sendemail', compact('name'), function ($email) use ($name) {
            $email->subject('Shopping');
            $email->to('anhnt683@gmail.com', $name);
        });
    }
}
