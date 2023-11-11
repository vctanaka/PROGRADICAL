<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;

class NewChart extends ChartWidget
{
    protected static ?string $heading = 'Avaliação geral da faculdade';
 
    protected function getData(): array
    {

        return [
            'datasets' => [
                [
                    'label' => 'Saida de Alunos (evasão)',
                    'data' => [56, 54, 35, 65, 23, 56, 12, 54, 56, 74, 23, 66],
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