<?php

namespace App\Http\Controllers\Api;

use App\Installment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InstallmentController extends Controller
{
    public function allInstallments($id)
    {
        $installments = (new Installment)
            ->select('amount', 'installment_date')
            ->where('member_id', '=', $id)
            ->orderBy('created_at', 'desc')
            ->get();
        return response()->json($installments, 200);
    }
}
