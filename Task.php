<?php

class Task {

    public $title = null;
    public $description = null;
    public $completed = false;

    public function __construct($tit, $desc) {

        $this->title = $tit;
        $this->description = $desc;
    }

    public function complete() {

        $this->completed = true;

    }
}

$task = new Task("zakupy", "sobotnie zakupy");
$task2 = new Task("sprzątanie", "sobotnie sprzątanie");

var_dump($task->title);
var_dump($task->completed);
var_dump($task2->title);
var_dump($task2->completed);

$task->complete();
var_dump($task->completed);