<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Callback;
use Illuminate\Support\Facades\Auth;


class ContactController extends Controller{

    public function allData(){
      $contact = new Contact;

      $data = [];
      $user_id = Auth::user()->id;
      $data = $contact->where('user_id', '=', $user_id)->orderBy('id', 'DESC')->get();

      return view('all_message', ['data' => $data]);
    }

    public function oneMessage($id)
    {
      $contact = new Contact;
      return view('one-message', ['data' => $contact->find($id)]);
    }

  public function submit(Request $req) {
    $valid = $req->validate([
      'name' => 'required|min:5|max:50',
      'email' => 'required|min:5',
      'message' => 'required|min:5',
    ]);


    $contact = new Contact();
    $contact->user_id = Auth::id();
    $contact->name = $req->input('name');
    $contact->email = $req->input('email');
    $contact->category = $req->input('category');
    $contact->message = $req->input('message');

    $contact->save();

    return redirect()->route('user')->with('success', 'Сообщение добавлено');
  }

  public function callback(Request $req) {
    $valid = $req->validate([
      'number' => 'required|min:11|max:11'
    ]);

    $callback = new Callback();
    $callback->number = $req->input('number');

    $callback->save();

    return redirect()->route('home')->with('success', 'Заявка на звонок отправлена');
  }

  public function update($id)
  {
    $contact = new Contact;
    return view('update', ['data' => $contact->find($id)]);
  }

  public function update_submit($id, Request $req) {

    $contact = Contact::find($id);
    $contact->name = $req->input('name');
    $contact->email = $req->input('email');
    $contact->category = $req->input('category');
    $contact->message = $req->input('message');

    $contact->save();

    return redirect()->route('contact-data-one', $id)->with('success', 'Сообщение обновлено');
  }

  public function delete($id)
  {
    Contact::find($id)->delete();
    return redirect()->route('contact-data')->with('success', 'Сообщение пользователя удалено');
  }

}
