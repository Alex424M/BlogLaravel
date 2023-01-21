<?php

namespace App\Service;

use App\Models\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use PHPUnit\Util\Exception;

class PostService
{
    public function store($data){
        try {
            DB::beginTransaction();
            $data['photo']=Storage::disk('public')->put('/images',$data['photo']);
            if (isset($data['tag_ids'])){
                $tag_ids=$data['tag_ids'];
                unset($data['tag_ids']);
            }
            $post=Post::firstOrCreate($data);
            if (isset($tag_ids)){
                $post->tags()->attach($tag_ids);
            }
            DB::commit();
        }catch (Exception $exception){
            DB::rollBack();
            abort(500);
        }
    }
    public function update($data, $id){
        try {
            DB::beginTransaction();
            if (isset($data['photo'])){
                $data['photo']=Storage::disk('public')->put('/images',$data['photo']);
            }
            if (isset($data['tag_ids'])){
                $tag_ids=$data['tag_ids'];
                unset($data['tag_ids']);
            }
            $post=Post::find($id);
            $post->update($data);
            if (isset($tag_ids)) {
                $post->tags()->sync($tag_ids);
            }
            DB::commit();
        }catch (\Exception $exception){
            DB::rollBack();
            abort(500);
        }

    }
}
