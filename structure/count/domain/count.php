<?php

/**
 * Created by PhpStorm.
 * User: Acer
 * Date: 2016/9/20
 * Time: 9:50
 */
class count
{
    //总数量
    public $totalCount;
    //一页数量
    public $pageCount;
    //当前页
    public $currPage;
    //总页数
    public $totalPage;
    //是否有上一页
    public $hasPrev;
    //是否有下一页
    public $hasNext;
    //上一页
    public $prev;
    //下一页
    public $next;

    //构造函数
    function __construct($result, $currPage, $pageCount)
    {
        if ($result != null) {
            $row = $result->fetch();
            if (array_key_exists("COUNT", $row)) {
                $this->totalCount = $row["COUNT"];
            }

            $this->currPage = $currPage;
            $this->pageCount = $pageCount;
            $this->totalPage = ceil($this->totalCount / $pageCount);
            $this->hasPrev = $this->currPage != 1;
            $this->hasNext = $this->currPage != $this->totalPage;
            $this->prev = $this->currPage - 1;
            $this->next = $this->currPage + 1;
        }
    }

}
