<?php

class StopWatch
{
    private float $startTime;
    private float $endTime;

    /**
     * @return float|int
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * @return float
     */
    public function getEndTime(): float
    {
        return $this->endTime;
    }

    public function __construct()
    {
        $this->startTime = round(microtime(true) * 1000);
    }

    function startTime(): float
    {
        return $this->startTime;
    }

    function stopTime(): float
    {
        return $this->endTime = round(microtime(true) * 1000);
    }

    function getElapsedTime(): float
    {
        return ($this->stopTime() - $this->startTime());
    }
}

function selection_sort($data)
{
    for ($i = 0; $i < count($data) - 1; $i++) {
        $min = $i;
        for ($j = $i + 1; $j < count($data); $j++) {
            if ($data[$j] < $data[$min]) {
                $min = $j;
            }
        }
        $data = swap_positions($data, $i, $min);
    }
    return $data;
}

function swap_positions($data1, $left, $right)
{
    $backup_old_data_right_value = $data1[$right];
    $data1[$right] = $data1[$left];
    $data1[$left] = $backup_old_data_right_value;
    return $data1;
}

$array = [];
for ($i = 0; $i < 10000; $i++) {
    array_push($array, $i);
}

$time = new StopWatch();
$time->startTime();
selection_sort($array);
$time->stopTime();
echo $time->getElapsedTime();






