<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreConseilRequest;
use App\Http\Requests\UpdateConseilRequest;
use App\Models\Conseil;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ConseilsController extends Controller
{
    public function index(): View
    {
        $conseils = Conseil::all();
        return view('conseiller.conseils.index', compact('conseils'));
    }

    public function create(): View
    {
        return view('conseiller.conseils.create');
    }

    public function store(StoreConseilRequest $request): RedirectResponse
    {
        Conseil::create($request->validated());

        return redirect()->back()->with('success', 'Conseil crée avec succès');
    }

    public function edit(Conseil $conseil): View
    {
        return view('conseiller.conseils.edit', compact('conseil'));
    }

    public function update(UpdateConseilRequest $request, Conseil $conseil): RedirectResponse
    {
        $validated = $request->validated();

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('conseils', 'public');
        }

        // dd($validated);

        $conseil->update($validated);


        return redirect()->back()->with('success', 'Conseil modifie avec succès');
    }

    public function destroy(Conseil $conseil): RedirectResponse
    {
        $conseil->delete();

        return redirect()->back()->with('success', 'Conseil supprimé avec succès');
    }
}
