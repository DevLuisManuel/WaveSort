<?php

class WaveSort
{
    public function waveSort(array $numbers): array
    {
        rsort($numbers);
        for ($i = 1; $i < count($numbers); $i += 2) {
            if ($numbers[$i - 1] < $numbers[$i]) {
                $numberTmp = $numbers[$i];
                $numbers[$i] = $numbers[$i - 1];
                $numbers[$i - 1] = $numberTmp;
            }
            if ($i + 1 < count($numbers) && $numbers[$i + 1] < $numbers[$i]) {
                $numberTmp = $numbers[$i];
                $numbers[$i] = $numbers[$i + 1];
                $numbers[$i + 1] = $numberTmp;
            }
        }
        return $numbers;
    }
}

$numbers = [1, 2, 6, 19, 12, 3, 1];
$waveSort = (new WaveSort())->waveSort($numbers);
var_dump($waveSort);