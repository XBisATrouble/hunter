<?php
/**
 * Created by PhpStorm.
 * User: 10656
 * Date: 2017/5/18
 * Time: 16:39
 */

namespace App\Repositories;


use App\Post;
use App\Resume;

class ResumeRepository
{
    public function create(array $attributes)
    {
        return Resume::create($attributes);
    }

    public function update(array $attributes,$id)
    {
        $resume = Resume::find($id);
        $resume->update($attributes);
        $resume->save();
        return $resume;
    }

    public function byId($id)
    {
        return Resume::find($id);
    }

    public function idInArray($array)
    {
        return Resume::with('jobs')->whereIn('id',$array)->take(5)->get();
    }

    public function postedByAdminId($id)
    {
        return Post::where('admin_id',$id)->get();
    }
}