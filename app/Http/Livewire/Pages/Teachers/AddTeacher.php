<?php

namespace App\Http\Livewire\Pages\Teachers;

use App\Models\Teacher;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithFileUploads;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class AddTeacher extends Component
{
    use WithFileUploads;
    use LivewireAlert;
    protected $listeners = ['$refresh'];
    # user
    public $name, $username, $password, $birth_date, $image_path;

    public function addTeacher()
    {
        //validate
        $this->validate([
            'name' => 'required',
            'username' => 'required | unique:users',
            'password' => 'required',
            'birth_date' => 'required',
            'image_path' => 'required | image | mimes:jpeg,png,jpg,gif,svg',
        ]);
        //create user
        $ext = $this->image_path->extension();
        $name =  time() . '.' . $ext;
        $this->image_path->storeAs('public/teacher/', $name);
        $this->image_path = 'storage/teacher/'. $name;
        
        $user_id = User::create([
            'name' => $this->name,
            'username' => $this->username,
            'password' => Hash::make($this->password),
            'birth_date' => $this->birth_date,
            'image_path' => $this->image_path,
            'type' => 2,
        ])->id;
        //create teacher
        Teacher::create([
            'user_id' => $user_id,
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
        return view('livewire.pages.teachers.add-teacher');
    }
}
