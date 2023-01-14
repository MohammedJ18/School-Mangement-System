<?php

namespace App\Http\Livewire\Pages\Profile;

use App\Models\Group;
use App\Models\Section;
use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class EditStudent extends Component
{
    use WithFileUploads;
    use LivewireAlert;
    protected $listeners = ['$refresh'];
    # user
    public $name, $username, $birth_date, $image_path;
    # student
    public $user_id, $section_id, $group_id;
    # pivot
    public $sections;
    public $groups;
    
    public function mount($id)
    {
        $this->user_id = $id;
        $user = User::find($id);
        $this->name = $user->name;
        $this->username = $user->username;
        $this->birth_date = $user->birth_date;
        $this->section_id = $user->student->section_id;
        $this->group_id = $user->student->group_id;
    }
    //edit student method
    public function editStudent()
    {
        //update user
        $user = User::find($this->user_id);
        if ($this->image_path) {
            $ext = $this->image_path->extension();
            $name =  time() . '.' . $ext;
            $this->image_path->storeAs('public/student/', $name);
            $this->image_path = 'storage/student/'. $name;
            $user->update([
                'image_path' => $this->image_path,
            ]);
        }
        $user->update([
            'name' => $this->name,
            'username' => $this->username,
            'birth_date' => $this->birth_date,
        ]);
        //update student
        $user->student->update([
            'section_id' => $this->section_id,
            'group_id' => $this->group_id,
        ]);
        $this->alert('success', 'تم تعديل حساب الطالب بنجاح');
    }
    public function render()
    {
        $this->sections = Section::where('system_id', 1)->get();
        $this->groups = Group::where('section_id', 1)->get();
        return view('livewire.pages.profile.edit-student');
    }
}
