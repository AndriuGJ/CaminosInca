<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Piloto;
use Illuminate\Http\Request;

class PilotosController extends Controller
{
    public function index(Request $request)
    {
        $buscar = trim((string) $request->query('buscar', ''));
        $clase = trim((string) $request->query('clase', ''));

        $clases = Piloto::query()->distinct()->orderBy('clase')->pluck('clase');

        $competidores = Piloto::query()
            ->when($buscar !== '', function ($query) use ($buscar) {
                $query->where(function ($q) use ($buscar) {
                    $q->where('numero', 'like', "%{$buscar}%")
                        ->orWhere('piloto', 'like', "%{$buscar}%")
                        ->orWhere('copiloto', 'like', "%{$buscar}%")
                        ->orWhere('vehiculo', 'like', "%{$buscar}%")
                        ->orWhere('localidad', 'like', "%{$buscar}%");
                });
            })
            ->when($clase !== '', fn ($query) => $query->where('clase', $clase))
            ->orderBy('orden')
            ->paginate(15)
            ->withQueryString();

        if ($request->ajax()) {
            return view('components.pilotos.lista-competidores', compact(
                'competidores',
                'clases',
                'buscar',
                'clase'
            ));
        }

        return view('web.pilotos.index', compact(
            'competidores',
            'clases',
            'buscar',
            'clase'
        ));
    }
}
