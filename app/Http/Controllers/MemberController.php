<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Interfaces\MemberServiceInterface;

class MemberController extends Controller
{
    public function __construct(MemberServiceInterface  $memberService)
    {
        $this->memberService = $memberService;
    }

    public function store(Request $request)
    {
        $this->memberService->addMember($request);

        return response()->json(__('message.successfully'), 200);
    }
}
