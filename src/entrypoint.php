<?php

use app\component\HandlerComponent;
use app\component\TaskComponent;
use app\leadGenerator\Lead;
use app\leadGenerator\Generator;

require __DIR__ . '/../vendor/autoload.php';

const COUNT_LEADS   = 10000;
const COUNT_THREADS = 200;

$start = microtime(true);

$pool      = new Pool(COUNT_THREADS);
$generator = new Generator();

$generator->generateLeads(COUNT_LEADS, function(Lead $lead) use (&$pool) {
    $task = new TaskComponent($lead);
    $pool->submit(new HandlerComponent($task));
});
while ($pool->collect())
$pool->shutdown();

printf("Done for %.2f seconds" . PHP_EOL, microtime(true) - $start);
