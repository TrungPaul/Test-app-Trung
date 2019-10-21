<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Interfaces\MemberServiceInterface;
use App\Http\Requests\MemberRequest;

class MemberController extends Controller
{

    public function __construct(MemberServiceInterface $memberService)
    {
        $this->memberService = $memberService;
    }

    public function store(MemberRequest $request)
    {
        $dataMember = $request->all();
        $this->memberService->addMember($dataMember);

        return response()->json(__('message.successfully'), 200);
    }

    public function index()
    {
        return response()->json($this->memberService->showMember());
    }

    public function update(MemberRequest $request, $memberId)
    {
        $dataMember = $request->all();
        $this->memberService->editMember($dataMember, $memberId);

        return response()->json(__('message.successfully'), 200);
    }

    public function destroy($memberId)
    {
        $this->memberService->removeMember($memberId);

        return response()->json(__('message.successfully'), 200);
    }

    public function getMemberById($memberId)
    {
        return response()->json($this->memberService->getMember($memberId));
    }
}

