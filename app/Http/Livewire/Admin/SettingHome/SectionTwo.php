<?php

namespace App\Http\Livewire\Admin\SettingHome;

use App\Http\Extra\DynamicFunction;
use App\Models\Setting;
use Livewire\Component;

class SectionTwo extends Component
{
    use DynamicFunction;

    public $conditions;

    public function mount()
    {
        $this->conditions = Setting::query()->where('name','rules')->first()?->value ?? '';
    }


    public function updated($name)
    {
    }

    public function render()
    {
        return view('livewire.admin.setting-home.section-two');
    }

    public function submit(){
        $setting = Setting::query()->where('name','rules')->first();
        if(empty($setting)){
            Setting::query()->create([
                'name'=>'rules',
                'value'=> $this->conditions,
            ]);
        }
        else{
            $setting->update(['value'=> $this->conditions]);
        }

        $this->dispatchBrowserEvent('toast-message' , ['message' => 'تنظیمات اعمال شد.' , 'icon' => 'success']);

    }
}
