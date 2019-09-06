<?php
class Page
{
    protected $title;

    public function getPage($title)
    {
        return $this->title;
    }
}

class JsonPageFormatter
{
    public function format(Page $page)
    {
        return json_encode($page->getTitle());
    }
}
