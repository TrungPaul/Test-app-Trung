<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Interfaces\MemberServiceInterface;

class MemberController extends Controller
{
    public function __construct(MemberServiceInterface  $memberService)
    {
        $this->memberservice = $memberService;
    }

    public function index()
    {
        return response()->json($this->memberservice->showMember());
    }
}
