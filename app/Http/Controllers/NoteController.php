<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use Session;
use App\User;
use App\Note;
use App\Notebook;

class NoteController extends Controller
{
    // Index page, with all notes
    public function index() {
        $user = User::find(Auth::user()->id);
        $notebooks = $user->notebooks()->get();
        $notes = $user->notes()->get();

        return view('home', ['notebooks' => $notebooks, 'notes' => $notes]);
    }

    // Create Note
    public function create() {
        $user = User::find(Auth::user()->id);
        $notebooks = $user->notebooks()->get();
        return view('note.create', ['notebooks' => $notebooks]);
    }

    public function save(Request $request) {
        $this->validate($request, array(
            'notebook' => 'required|numeric',
            'title' => 'required|max:50',
            'content' => 'required'
        ));

        $note = new Note;
        $note->title = $request->title;
        $note->content = $request->content;
        $note->url = $request->url;
        $note->notebook_id = $request->notebook;
        $note->user_id = Auth::user()->id;
        $note->save();

        Session::flash('success', 'The note was created!');
        return redirect()->route('home');
    }
    // Edit Note
    public function edit($id) {
        $user = User::find(Auth::user()->id);
        $notebooks = $user->notebooks()->get();
        $note = Note::find($id);
        return view('note.edit', ['notebooks' => $notebooks, 'note' => $note]);
    }

    public function update(Request $request, $id) {
        $this->validate($request, array(
            'notebook' => 'required|numeric',
            'title' => 'required|max:50',
            'content' => 'required'
        ));

        $note = Note::find($id);
        $note->title = $request->title;
        $note->content = $request->content; // PHPstorm error for protected access, looks fine otherwise to me.
        $note->url = $request->url;
        $note->notebook_id = $request->notebook;
        $note->save();

        Session::flash('success', 'The note was updated!');
        return redirect()->action('NoteController@singleNote', ['id' => $id]);
    }

    // Delete note.
    public function delete($id) {
        $note = Note::find($id);
        $note->delete();

        Session::flash('success', 'The note was deleted!');
        return redirect()->route('home');
    }

    // Single note
    public function singleNote($id) {
        $note = Note::find($id);

        return view('note.show', ['note' => $note]);
    }

    // Notes of a particular notebook - using the home route itself to avoid duplicate views
    public function notesInNotebook($id) {
        $user = User::find(Auth::user()->id);
        $notebooks = $user->notebooks()->get();
        $notebook_name = Notebook::find($id)->name;
        $notes = Note::where('notebook_id', '=', $id)->get();

        return view('home', ['notebook_name' => $notebook_name, 'notebooks' => $notebooks, 'notes' => $notes]);
    }


}
