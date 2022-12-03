<?php

namespace App\Http\Livewire\Pages\Home;

use App\Models\Student;
use App\Models\Teacher;
use Livewire\Component;

class Main extends Component
{
    public $counts = [];
    public function render()
    {
        $this->counts = [
            [
                'name' => 'الطلاب',
                'count' => Student::count(),
            ],
            [
                'name' => 'الأساتذة',
                'count' => Teacher::count(),
            ],
        ];

        return view('livewire.pages.home.main');
    }
}
