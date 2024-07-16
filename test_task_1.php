<?php

/**
 * ��������� ���������
 */
function calculateFactorial(int $number): int {
    if ($number == 0) {
        return 1;
    } else {
        return $number * calculateFactorial($number - 1);
    }
}

/**
 * ���������, �������� �� ����� �������
 */
function isPrime($num) {
    if ($num <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}

echo "������� �����: ";
$number = (int)readline();
echo "��������� $number is: " . calculateFactorial($number) . "\n";

if (isPrime($number)) {
    echo "$number - ��� ������� �����.\n";
} else {
    echo "$number - ��� �� ������� �����.\n";
}

?>