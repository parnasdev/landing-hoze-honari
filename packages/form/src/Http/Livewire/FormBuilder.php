<?php


namespace Packages\form\src\Http\Livewire;


use Livewire\Component;
use Packages\form\src\Models\Form;

class FormBuilder extends Component
{
    public $name;
    public Form | null $form;
    public $btnText = 'ارسال';

    public $success = false;

    public $formControls = [];

    public function mount()
    {
        $this->form = Form::query()->where('name' , $this->name)->first();

        foreach ($this->form->inputs ?? [] as $input) {
            $this->formControls[$input['id']] = '';
        }
    }

    public function render()
    {
        return view('form::livewire.form-builder');
    }

    public function submit()
    {
        $rules = [];
        foreach ($this->formControls as $key => $control) {
            $rules['formControls.'.$key] = ['required'];
        }

        $this->validate($rules);

        $inboxes = $this->form->inboxes ?? [];

        $inboxes[] = array_merge($this->formControls , ['created_at' => now()]);

        $this->form->inboxes = $inboxes;

        $this->form->save();

        $this->success = true;

        foreach ($this->form->inputs ?? [] as $input) {
            $this->formControls[$input['id']] = '';
        }

        $this->dispatchBrowserEvent('toastMessage' , ['message' => 'پیام شما ارسال شد.' , 'icon' => 'success']);
    }
}
