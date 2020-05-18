<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Echo1;
use App\Alpha;
use App\Bravo;
use App\Charlie;
use App\Delta;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
     }

     // Controller Alpha

    public function index()
    {
        $alpha = Alpha::all();
        return view('home', ['alpha' => $alpha]);
     }

    public function tambah()
    {
        return view('Alpha.input');
    }

    public function store(Request $request)
    {
 
        Alpha::create([
            'no_kamar' => $request->no_kamar,
            'status' => $request->status,
            'penghuni' => $request->penghuni,
            'lama_menginap' => $request->lama_menginap
        ]);
 
        return redirect('/home');
     }

    public function edit($id)
    {
        $alpha = Alpha::find($id);
        return view('Alpha.edit', ['alpha' => $alpha]);
    }

    public function update($id, Request $request)
    {
 
        $alpha = Alpha::find($id);
        $alpha->no_kamar = $request->no_kamar;
        $alpha->status = $request->status;
        $alpha->penghuni = $request->penghuni;
        $alpha->lama_menginap = $request->lama_menginap;
        $alpha->save();
        return redirect('/home');
    }

    public function delete($id)
    {
        $alpha = Alpha::find($id);
        $alpha->delete();
        return redirect('/home');
     }

     // Controller Bravo

     public function index2()
    {
        $bravo = Bravo::all();
        return view('bravo', ['bravo' => $bravo]);
     }

    public function tambah2()
    {
        return view('Bravo.input');
    }

    public function store2(Request $request)
    {
 
        Bravo::create([
            'no_kamar' => $request->no_kamar,
            'status' => $request->status,
            'penghuni' => $request->penghuni,
            'lama_menginap' => $request->lama_menginap
        ]);
 
        return redirect('/bravo');
     }

    public function edit2($id)
    {
        $bravo = Bravo::find($id);
        return view('Bravo.edit', ['bravo' => $bravo]);
    }

    public function update2($id, Request $request)
    {
 
        $bravo = Bravo::find($id);
        $bravo->no_kamar = $request->no_kamar;
        $bravo->status = $request->status;
        $bravo->penghuni = $request->penghuni;
        $bravo->lama_menginap = $request->lama_menginap;
        $bravo->save();
        return redirect('/bravo');
    }

    public function delete2($id)
    {
        $bravo = Bravo::find($id);
        $bravo->delete();
        return redirect('/bravo');
     }

     // Controller Charlie

     public function index3()
    {
        $charlie = Charlie::all();
        return view('charlie', ['charlie' => $charlie]);
     }

    public function tambah3()
    {
        return view('Charlie.input');
    }

    public function store3(Request $request)
    {
 
        Charlie::create([
            'no_kamar' => $request->no_kamar,
            'status' => $request->status,
            'penghuni' => $request->penghuni,
            'lama_menginap' => $request->lama_menginap
        ]);
 
        return redirect('/charlie');
     }

    public function edit3($id)
    {
        $charlie = Charlie::find($id);
        return view('Charlie.edit', ['charlie' => $charlie]);
    }

    public function update3($id, Request $request)
    {
 
        $charlie = Charlie::find($id);
        $charlie->no_kamar = $request->no_kamar;
        $charlie->status = $request->status;
        $charlie->penghuni = $request->penghuni;
        $charlie->lama_menginap = $request->lama_menginap;
        $charlie->save();
        return redirect('/charlie');
    }

    public function delete3($id)
    {
        $charlie = Charlie::find($id);
        $charlie->delete();
        return redirect('/charlie');
     }

     // Controller Delta

     public function index4()
    {
        $delta = Delta::all();
        return view('delta', ['delta' => $delta]);
     }

    public function tambah4()
    {
        return view('Delta.input');
    }

    public function store4(Request $request)
    {
 
        Delta::create([
            'no_kamar' => $request->no_kamar,
            'status' => $request->status,
            'penghuni' => $request->penghuni,
            'lama_menginap' => $request->lama_menginap
        ]);
 
        return redirect('/delta');
     }

    public function edit4($id)
    {
        $delta = Delta::find($id);
        return view('Delta.edit', ['delta' => $delta]);
    }

    public function update4($id, Request $request)
    {
 
        $delta = Delta::find($id);
        $delta->no_kamar = $request->no_kamar;
        $delta->status = $request->status;
        $delta->penghuni = $request->penghuni;
        $delta->lama_menginap = $request->lama_menginap;
        $delta->save();
        return redirect('/delta');
    }

    public function delete4($id)
    {
        $delta = Delta::find($id);
        $delta->delete();
        return redirect('/delta');
     }

     // Controller Echo

     public function index5()
    {
        $echo = Echo1::all();
        return view('echo', ['echo' => $echo]);
     }

    public function tambah5()
    {
        return view('Echo.input');
    }

    public function store5(Request $request)
    {
 
        Echo1::create([
            'no_kamar' => $request->no_kamar,
            'status' => $request->status,
            'penghuni' => $request->penghuni,
            'lama_menginap' => $request->lama_menginap
        ]);
 
        return redirect('/echo');
     }

    public function edit5($id)
    {
        $echo = Echo1::find($id);
        return view('Echo.edit', ['echo' => $echo]);
    }

    public function update5($id, Request $request)
    {
 
        $echo = Echo1::find($id);
        $echo->no_kamar = $request->no_kamar;
        $echo->status = $request->status;
        $echo->penghuni = $request->penghuni;
        $echo->lama_menginap = $request->lama_menginap;
        $echo->save();
        return redirect('/echo');
    }

    public function delete5($id)
    {
        $echo = Echo1::find($id);
        $echo->delete();
        return redirect('/echo');
     }
}
