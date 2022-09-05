<?php

namespace App\Http\Livewire\Admin\SettingHome;

use App\Http\Extra\DynamicFunction;
use App\Models\Setting;
use Livewire\Component;

class SectionThree extends Component
{
    use DynamicFunction;
    protected $listeners = ['setData', 'getFile'];
    public array|null $item = null;
    public int|null $index = null;
    public int|null $index1 = null;
    public string|null $direction = null;

    public $form_code;

    public function mount()
    {
        $this->form_code = Setting::query()->where('name','form_code')->first()?->value ?? '';
    }

    public function updated($name)
    {
    }

    public function render()
    {
        return view('livewire.admin.setting-home.section-three');
    }

    public function close()
    {
        $this->dispatchBrowserEvent('close-modal');
        $this->index = null;
        $this->index1 = null;
        $this->direction = null;
        $this->item = null;
    }

    // public function setData($e)
    // {
    //     list($this->index, $this->index1, $this->direction, $this->item) = $e;
    // }

    // public function convert($name)
    // {
    //     $types = collect(config('pagebuilder.types'));

    //     return $types->get($name) ?? ['type' => '-', 'label' => '-'];
    // }

    public function submit()
    {
        // Setting::query()->where('name' , 'sectionThree')->first()->update([
        //     'value' => $this->item
        // ]);

        // $this->dispatchBrowserEvent('toast-message' , ['message' => 'تنظیمات اعمال شد.' , 'icon' => 'success']);

        $setting = Setting::query()->where('name','form_code')->first();
        if(empty($setting)){
            Setting::query()->create([
                'name' => 'form_code',
                'value' => $this->form_code,
            ]);
        }
        else{
            $setting->update(['value' => $this->form_code]);
        }

        $this->dispatchBrowserEvent('toast-message' , ['message' => 'تنظیمات اعمال شد.' , 'icon' => 'success']);

    }

    public function getFile($e)
    {
        $this->fill([$e['input'] => url($e['value'])]);
    }
}
