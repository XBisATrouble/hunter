<?php
/**
 * Created by PhpStorm.
 * User: 10656
 * Date: 2017/5/12
 * Time: 16:33
 */

namespace App\Repositories;


use App\Job_class;

/**
 * Class JobsClassRepository
 * @package App\Repositories
 */
class JobsClassRepository
{
    /**
     * @return mixed
     */
    public function getClass1Feed()
    {
        return Job_class::where('levels','1')->get();
    }

    /**
     * @return mixed
     */
    public function getClass2Feed()
    {
        return Job_class::where('levels','2')->get();
    }

    /**
     * @return mixed
     */
    public function getClass3Feed()
    {
        return Job_class::where('levels','3')->get();
    }
}