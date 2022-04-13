<?php

namespace App\Charts;

use App\Models\Charts;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class BackLinkChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\AreaChart
    {
        $backlink = Charts::where('site',auth()->user()->url)->paginate(30);

        return $this->chart->areaChart()
            ->addData('بک لینک', [])
            ->addData('سفحات ایندکس شده', [70, 29, 77, 28, 55, 45,70, 29, 77, 28, 55, 45,70, 29, 77, 28, 55, 45,70, 29, 77, 28, 55, 45,70, 29, 77, 28, 55, 45])
            ->setXAxis([1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30]);
    }
}
