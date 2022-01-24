<?php
namespace Application;

require_once "callgraph/callgraph_utils.php";
require_once "callgraph/xhprof_lib.php";

class Builder
{
    private string $path;

    public function __construct(string $path)
    {
        $this->path = $path;
    }

    public function run(): void
    {
        xhprof_render_image($this->path, "png", 0.01);
    }
}