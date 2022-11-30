<?php

namespace App\Http\Controllers;

use App\Models\Nationality;
use App\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function index()
    {
        return view('people.index', [
            'people' => Person::paginate(100)
        ]);
    }

   public function show(Person $person)
   {
       return view('people.show', compact('person'));
   }

   public function create()
   {
       return view('people.create', [
           'nationalities' => Nationality::all()
       ]);
   }

   public function store(Person $person)
   {
//       dd(request());

       $nationalities = [];
       foreach (Nationality::all() as $nationality) {
           array_push($nationalities, $nationality->name);
       }

       $selected = array_keys(
           array_filter(
               request()->only($nationalities),
               fn ($value) => $value == "true")
       );

       Person::factory()
           ->create($this->validatePerson())
           ->nationalities()->attach(
               array_map(
                   fn ($n) => $n['id'],
                   Nationality::whereIn('name', $selected)->get()->toArray()
               )
           );

       return redirect('/')->with('success', 'Person created successfully!');
   }

   public function edit(Person $person)
   {
//       dd(request()->all());
//       dd($person->nationalities()->get());
//       dd(Nationality::all());
       return view('people.edit', [
           'person' => $person,
           'nationalities' => Nationality::all()
       ]);
   }

   public function update(Person $person)
   {
       $person->update($this->validatePerson());

       return redirect('/')->with('success', 'Person updated!');
   }

    /**
     * @throws \Throwable
     */
    public function destroy(Person $person)
   {
       $person->deleteOrFail();

       return redirect(route('people.index'))->with('success', 'Person deleted');
   }

   protected function validatePerson(Person|null $person = null): array
   {
        $person ??= new Person();
        return request()->validate([
            'title' => 'required',
            'first_name' => ['required', 'max:255'],
            'surname' => ['required', 'max:255'],
            'address' => ['required', 'max:255']
        ]);
   }

}
