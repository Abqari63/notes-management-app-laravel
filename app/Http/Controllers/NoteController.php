<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;

class NoteController extends Controller
{
    public function index()
    {
        $notes = Note::all();
        return view('notes.index', compact('notes'));
    }

    public function create()
    {
        return view('notes.form');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        Note::create($request->all());
        return redirect()->route('notes.index');
    }

    public function edit($id)
    {
        $note = Note::find($id);
        return view('notes.form', compact('note'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $note = Note::find($id);
        $note->update($request->all());
        return redirect()->route('notes.index');
    }

    public function destroy($id)
    {
        $note = Note::find($id);
        $note->delete();
        return redirect()->route('notes.index');
    }
}
