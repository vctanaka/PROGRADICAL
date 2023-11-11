<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;

class MenoresAvaliacoesChart extends ChartWidget
{
    protected static ?string $heading = 'Professores com menores avaliacoes';
 
    protected function getData(): array
    {

        return [
            'datasets' => [
                [
                    'label' => 'Professores destaques',
                    'data' => [12, 32, 43],
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