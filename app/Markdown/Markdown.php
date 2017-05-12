<?php
/**
 * Created by PhpStorm.
 * User: 10656
 * Date: 2017/5/12
 * Time: 17:16
 */

namespace App\Markdown;


class Markdown
{
    protected $parser;

    /**
     * Markdown constructor.
     * @param $parser
     */
    public function __construct(Parser $parser)
    {
        $this->parser = $parser;
    }

    public function markdown($text)
    {
        $html=$this->parser->makeHtml($text);
        return $html;
    }
}