<?php

namespace App\Http\Livewire\Pages\Sections;

use App\Models\Group;
use App\Models\Section;
use App\Models\Student;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithFileUploads;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class AddStudent extends Component
{   
    use WithFileUploads;
    use LivewireAlert;
    protected $listeners = ['$refresh'];
    # user
    public $name, $username,  $password, $birth_date, $image_path;
    # student
    public $user_id, $section_id, $group_id;
    # pivot
    public $sections;
    public $groups;
    #
    //add student method
    public function addStudent()
    {
        //validate
        $this->validate([
            'name' => 'required',
            'username' => 'required | unique:users',
            'password' => 'required',
            'birth_date' => 'required',
            'image_path' => 'required | image | mimes:jpeg,png,jpg,gif,svg',
            'section_id' => 'required',
            'group_id' => 'required',
        ]);
        //create user
        $ext = $this->image_path->extension();
        $name =  time() . '.' . $ext;
        $this->image_path->storeAs('public/student/', $name);
        $this->image_path = 'storage/student/'. $name;
        
        $user_id = User::create([
            'name' => $this->name,
            'username' => $this->username,
            'password' => Hash::make($this->password),
            'birth_date' => $this->birth_date,
            'image_path' => $this->image_path,
            'type' => 1,
        ])->id;
        //create student
        Student::create([
            'user_id' => $user_id,
            'section_id' => $this->section_id,
            'group_id' => $this->group_id,
            'system_id' => 1,
        ]);
        //alert
        $this->alert('success', 'تم اضافة الطالب بنجاح');
        //reset
        $this->reset();
        //emit
        $this->emitUp('$refresh');

    }
    public function render()
    {
        //sections of system 1
        $this->sections = Section::where('system_id', 1)->get();
        //groups of section_id
        $this->groups = Group::when($this->section_id, function ($query) {
            $query->where('section_id', $this->section_id);
        })->get();
        return view('livewire.pages.sections.add-student');
    }
}
