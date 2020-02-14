<?php


namespace App;


class View implements \Countable
{
    public $data = [];

    use Value;

    public function render($template)
    {
        ob_start();
        include $template;
        $content = ob_get_contents();
        ob_end_clean();
        return $content;
    }

    public function display($template)
    {
        include $template;
    }
    public function count()
    {
        return count($this->data);
    }
}