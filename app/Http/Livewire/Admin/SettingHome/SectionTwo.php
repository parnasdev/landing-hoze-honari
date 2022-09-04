<?php

namespace App\Http\Livewire\Admin\SettingHome;

use App\Http\Extra\DynamicFunction;
use App\Models\Setting;
use Livewire\Component;

class SectionTwo extends Component
{
    use DynamicFunction;
    protected $listeners = ['setData', 'getFile'];

    public $conditions;

    public function mount()
    {
        $this->conditions = Setting::query()->where('name','rules')->first()?->value ?? [];
    }


    public function updated($name)
    {
    }

    public function render()
    {
        return view('livewire.admin.setting-home.section-two');
    }

    public function close()
    {
        $this->dispatchBrowserEvent('close-modal');
        $this->index = null;
        $this->index1 = null;
        $this->direction = null;
        $this->item = null;
    }

    public function setData($e)
    {
        list($this->index, $this->index1, $this->direction, $this->item) = $e;
    }

    public function convert($name)
    {
        $types = collect(config('pagebuilder.types'));

        return $types->get($name) ?? ['type' => '-', 'label' => '-'];
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

    public function getFile($e)
    {
        $this->fill([$e['input'] => url($e['value'])]);
    }
}
