<?php
namespace ZinCelestial\Platform\Workflow\Contracts;
use ZinCelestial\Platform\Workflow\WorkflowRun;
defined('ABSPATH')||exit;
interface WorkflowRepositoryInterface {
 public function save(WorkflowRun $run,int $expected_version):int;
 public function get(string $id):?WorkflowRun;
 public function claim(string $id,string $worker,int $lease_seconds):bool;
 public function heartbeat(string $id,string $worker,int $lease_seconds):bool;
 public function release(string $id,string $worker):void;
}
