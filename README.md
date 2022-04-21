[Link del ejercicio](https://gist.github.com/llekn/4aa027216eb38a755c5011e3cec82ab1)
```php
    private function waveSort(array $numbers): array
    {
        rsort($numbers); // Order By Desc
        //wave_sort([1, 2, 6, 19, 12, 3, 1])
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
