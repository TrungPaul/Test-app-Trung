<?php
 namespace App\Repositories;

 use App\Interfaces\MemberServiceInterface;
 use App\Member;

 class MemberRepository implements MemberServiceInterface
 {
     protected  $path = 'images/';
     public function showMember()
     {
        return Member::all();
     }
     public function addMember($request)
     {
         $member = new Member;
         $member->fill($request->all());
         if($request->hasFile('avatar'))
         {
             $this->uploadImage($request,$member);
         }
         $member->save();
     }
     public function editMember($input, $projectId)
     {
         // TODO: Implement editMember() method.
     }
     public function removeMember($projectId)
     {
         // TODO: Implement removeMember() method.
     }

     public function uploadImage($request,$member)
     {
         $image = $request->avatar;
         $extension = $image->getClientOriginalExtension();
         $file_name = time().'-'.rand(1,100).'.'.$extension;
         $image->move($this->path, $file_name);

         return $member->avatar=asset($this->path.$file_name);
     }
 }




