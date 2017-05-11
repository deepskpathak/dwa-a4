<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use Session;
use App\Notebook;

class NotebookController extends Controller
{
    // Create Notebook
    public function create() {
        return view('notebook.create');
    }

    public function save(Request $request) {
        $this->validate($request, array(
            'name' => 'required|max:20'
        ));

        $notebook = new Notebook;
        $notebook->name = $request->name;
        $notebook->user_id = Auth::user()->id;
        $notebook->save();

        Session::flash('success', 'The notebook was successfully created!');
        return redirect()->route('home');
    }

    // Edit Notebook
    public function edit($id) {
        $notebook = Notebook::find($id);
        return view('notebook.edit', ['notebook' => $notebook]);
    }

    public function update(Request $request, $id) {
        $this->validate($request, array(
            'name' => 'required|max:20'
        ));

        $notebook = Notebook::find($id);
        $notebook->name = $request->name;
        $notebook->save();

        Session::flash('success', 'The notebook was successfully updated!');
        return redirect()->route('home');
    }

    // Delete Notebook
    // This seems to be buggy. When notes exists and user deletes all notebooks, things fall apart. Fix in next commit.
    public function delete($id) {
        $notebook = Notebook::find($id);
        $notebook->delete();

        Session::flash('success', 'The notebook was successfully deleted!');
        return redirect()->route('home');
    }
}
