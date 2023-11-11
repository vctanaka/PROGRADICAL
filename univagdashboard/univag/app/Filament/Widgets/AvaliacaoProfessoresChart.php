<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;

class AvaliacaoProfessoresChart extends ChartWidget
{
    protected static ?string $heading = 'Professores destaques';
 
    protected function getData(): array
    {

        return [
            'datasets' => [
                [
                    'label' => 'Professores destaques',
                    'data' => [54, 87, 65],
                ],
            ],
            'labels' => ['Antonio', 'Flavio', 'Jose'],
        ];
    }
 
    protected function getType(): string
    {
        return 'pie';
    }
}
