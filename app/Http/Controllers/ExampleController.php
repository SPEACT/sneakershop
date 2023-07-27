<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Hàm danh sách
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Gọi ra trang tạo mới
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Hàm lưu dữ liệu tạo mới
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Hàm chi tiết detail
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Hàm lấy ra dữ liệu cập nhật
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Hàm cập nhật
    }

    // edit với update phục vụ cho việc lấy và cập nhật
    // Edit là lấy còn update là cập nhật
    // m chưa hiểu 3 cái hàm đó sẽ ntn
    // em đang làm update thì từ 2 hàm thôi

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Xóa
    }



}
