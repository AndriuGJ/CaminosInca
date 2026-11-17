<?php

namespace Database\Seeders;

use App\Models\Piloto;
use Illuminate\Database\Seeder;
use RuntimeException;

class PilotosSeeder extends Seeder
{
    public function run(): void
    {
        $path = database_path('seeders/data/pilotos.csv');
        $handle = fopen($path, 'r');
        if ($handle === false) {
            throw new RuntimeException("No se puede abrir: {$path}");
        }

        try {
            $headers = fgetcsv($handle, 0, ',', '"', '');
            $expected = ['orden','numero','piloto','copiloto','vehiculo','localidad','clase'];
            if ($headers !== $expected) {
                throw new RuntimeException('Las columnas del CSV no coinciden con las esperadas.');
            }

            $rows = [];
            while (($values = fgetcsv($handle, 0, ',', '"', '')) !== false) {
                if (count($values) !== count($headers)) {
                    throw new RuntimeException('Se encontró una fila CSV con columnas incompletas.');
                }
                $row = array_combine($headers, $values);
                $row['orden'] = (int) $row['orden'];
                $rows[] = $row;
            }
        } finally {
            fclose($handle);
        }

        // Reejecutable: actualiza por número, sin duplicar participantes.
        // No elimina registros que se hayan añadido manualmente.
        foreach ($rows as $row) {
            Piloto::updateOrCreate(['numero' => $row['numero']], $row);
        }
    }
}
