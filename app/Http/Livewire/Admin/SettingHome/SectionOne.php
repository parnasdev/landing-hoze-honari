<?php

namespace App\Http\Livewire\Admin\SettingHome;

use App\Http\Extra\WithFiles;
use App\Models\Setting;
use Livewire\Component;

class SectionOne extends Component
{
    use WithFiles;
    protected $listeners = ['setData', 'getFile'];



    public function mount()
    {
        $this->files =  Setting::query()->where('name','slider')->first()?->value ?? [];
    }

    public function render()
    {
        return view('livewire.admin.setting-home.section-one');
    }

    public function updated($name)
    {
    }

    public function submit()
    {
        $setting = Setting::query()->where('name','slider')->first();
        if(empty($setting)){
            Setting::query()->create([
                'name'=>'slider',
                'value'=> $this->files,
            ]);
        }
        else{
            $setting->update(['value'=> $this->files]);
        }

        $this->dispatchBrowserEvent('toast-message' , ['message' => 'تنظیمات اعمال شد.' , 'icon' => 'success']);

    }


}
