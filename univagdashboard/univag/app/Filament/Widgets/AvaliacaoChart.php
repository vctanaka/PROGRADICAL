<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;

class AvaliacaoChart extends ChartWidget
{
    protected static ?string $heading = 'Alunos em saida';
 
    protected function getData(): array
    {

        return [
            'datasets' => [
                [
                    'label' => 'Avaliações referente as disciplinas',
                    'data' => [54, 87, 65, 87, 98, 76, 68, 89, 76, 89, 65, 43],
                ],
            ],
            'labels' => ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'],
        ];
    }
 
    protected function getType(): string
    {
        return 'line';
    }
}