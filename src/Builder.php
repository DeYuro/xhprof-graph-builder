<?php
namespace Application;

require_once "callgraph/callgraph_utils.php";
require_once "callgraph/xhprof_lib.php";
error_reporting(0);
class Builder
{


    public function run(array $options): void
    {
        $inputFile = $options["i"] ?? $options["input"];
        if (!$inputFile) {
            print "Input file can not be null" . PHP_EOL;
            exit(1);
        }

        $outputFile = $options["o"] ?? $options["output"];
        if (!$outputFile) {
            $outputFile = "callgraph";
        }
        $type = $options["t"] ?? $options["type"];
        if (!$type) {
            $type = "png";
        }
        $threshold = $options["h"] ?? $options["threshold"];
        if (!$threshold) {
            $threshold = 0.01;
        }

        $description = $options["d"] ?? $options["description"];
        if (!$description) {
            $description = "My awesome profiling!";
        }
        print_callgraph($inputFile, "$outputFile.$type", $type, floatval($threshold), $description);
    }
}