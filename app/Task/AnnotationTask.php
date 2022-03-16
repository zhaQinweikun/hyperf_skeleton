<?php
namespace App\Task;
use Hyperf\Utils\Coroutine;
class AnnotationTask{
    public function handle($cid, $data)
    {
        return [
            'worker.cid' => $cid,
            'task.cid' => Coroutine::id(),
            'data' =>$data,
        ];
    }
}
