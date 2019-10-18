<?php
 namespace App\Repositories;

 use App\Interfaces\MemberServiceInterface;
 use App\Member;
 use App\Repositories\UploadImageRepository;

 class MemberRepository implements MemberServiceInterface
 {
     const CHECK_IMAGE = 0;
     public function __construct(UploadImageRepository  $uploadService)
     {
         $this->uploadService = $uploadService;
     }

     public function showMember()
     {
        return Member::all();
     }

     public function addMember($dataMember)
     {
         $model = new Member;
         $model->fill($dataMember);
         if($model->avatar != null)
         {
             $image = $model->avatar;
             $model->avatar = $this->uploadService->uploadImage($image);
         }
         $model->save();
     }

     public function editMember($dataMember, $memberId)
     {
         $member = Member::find($memberId);
         $member->fill($dataMember);
         if ($member->avatar > self::CHECK_IMAGE)
         {
             $image = $dataMember['avatar'];
             $dataMember['avatar'] = $this->uploadService->uploadImage($image);
         }

         return Member::where('id', $memberId)->update($dataMember);
     }

     public function removeMember($memberId)
     {
         return Member::where('id', $memberId )->delete();
     }
 }




