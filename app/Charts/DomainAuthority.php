<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class DomainAuthority
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\AreaChart
    {
        return $this->chart->areaChart()
            ->addData('دامین اتوریتی', [40, 93, 35, 42, 18, 82,40, 93, 35, 42, 18, 82])
            ->addData('پیج اتوریتی', [70, 29, 77, 28, 55, 45,70, 29, 77, 28, 55, 45])
            ->setXAxis(['فروردین', 'اردیبهشت', 'خرداد', 'تیر', 'مرداد', 'شهریور','مهر', 'آبان', 'آذر', 'دی', 'بهمن', 'اسفند']);
    }
}
