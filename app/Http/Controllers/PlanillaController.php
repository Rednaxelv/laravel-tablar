<?php

namespace App\Http\Controllers;

use App\Models\Planilla;
use Illuminate\Http\Request;

/**
 * Class PlanillaController
 * @package App\Http\Controllers
 */
class PlanillaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $planillas = Planilla::paginate(10);

        return view('planilla.index', compact('planillas'))
            ->with('i', (request()->input('page', 1) - 1) * $planillas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $planilla = new Planilla();
        return view('planilla.create', compact('planilla'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Planilla::$rules);

        $planilla = Planilla::create($request->all());

        return redirect()->route('planillas.index')
            ->with('success', 'Planilla created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $planilla = Planilla::find($id);

        return view('planilla.show', compact('planilla'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $planilla = Planilla::find($id);

        return view('planilla.edit', compact('planilla'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Planilla $planilla
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Planilla $planilla)
    {
        request()->validate(Planilla::$rules);

        $planilla->update($request->all());

        return redirect()->route('planillas.index')
            ->with('success', 'Planilla updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $planilla = Planilla::find($id)->delete();

        return redirect()->route('planillas.index')
            ->with('success', 'Planilla deleted successfully');
    }
}
