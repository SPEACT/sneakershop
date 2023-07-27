<?php

use App\Models\Categories;
use App\Models\Groups;

function inUppercase($value, $message, $fail)
{
    if ($value != mb_strtolower($value, 'UTF-8')) {
        $fail($message);
    }
}

function getAllGroups()
{
    return Groups::all();
}
function getAllCates()
{
    $categories = new Categories;
    return $categories->getAll();
}

function get_ttttt($x)
{
    switch ($x) {
        case '0':
            $status = "Thanh toán khi nhận hàng";
            break;
        case '1':
            $status = "Chuyển khoản";
            break;
        case '2':
            $status = "Thanh toán qua momo";
            break;
        default:
            $status = "Thanh toán khi nhận hàng";
            break;
    }
    return $status;
}
