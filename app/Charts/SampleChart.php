<?php

declare(strict_types = 1);

namespace App\Charts;

use Chartisan\PHP\Chartisan;
use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request;

class SampleChart extends BaseChart
{
    /**
     * Handles the HTTP request for the given chart.
     * It must always return an instance of Chartisan
     * and never a string or an array.
     */
    public function handler(Request $request): Chartisan
    {
        return Chartisan::build('pie')
            ->labels(['中信兄弟', '樂天', '富邦', '統一7-ELEVEn'])
            ->dataset('球隊對戰戰績', [3, 4, 2, 1])
            ->dataset('團隊投球成績', [3, 4, 2, 1]);
    }
}