<?php
/**
 * Created by PhpStorm.
 * User: 10656
 * Date: 2017/5/18
 * Time: 16:39
 */

namespace App\Repositories;


use App\Resume;

class ResumeRepository
{
    public function create(array $attributes)
    {
        return Resume::create($attributes);
    }
}