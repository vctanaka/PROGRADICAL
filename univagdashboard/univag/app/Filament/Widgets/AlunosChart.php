<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use Filament\Widgets\LineChartWidget;
use Illuminate\Support\Facades\Http;

class AlunosChart extends ChartWidget
{
    protected static ?string $heading = 'Alunos em saida';
 
    protected function getData(): array
    {

        return [
            'datasets' => [
                [
                    'label' => 'Alunos que evadiram dos cursos',
                    'data' => [0, 10, 5, 2, 21, 32, 45, 74, 65, 45, 77, 89],
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
