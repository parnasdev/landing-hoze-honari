<div>
    <form wire:submit.prevent="submit">
        <div class="align-items-center" wire:loading.flex wire:target="submit">
            <strong>چند لحظه صبر کنید...</strong>
            <div class="spinner-border ms-auto" role="status" aria-hidden="true"></div>
        </div>
        {{-- @if(!is_null($item))
            @foreach($item ?? [] as $key1 => $data)
                <x-parnas.form-group class="flex-99 mb-2">
                    @switch($this->convert($key1)['type'])
                        @case('text')
                        <div class="c-input">
                            <div class="d-flex justify-content-start m-left-auto pos-relative pr-10 pb-5">
                                <label class="d-flex f-12 text-63">
                                    {{ $this->convert($key1)['label'] }}
                                    <div class="rx-title title-input pb-10">
                                        <div class="p-rx">
                                            <div class="rx-border-rectangle-after label-input"></div>
                                        </div>
                                    </div>
                                </label>
                            </div>
                            <x-parnas.inputs.text class="flex-99" wire:model="item.{{$key1}}" />
                        </div>
                        @break
                        @case('select')
                        <div class="d-flex justify-content-start m-left-auto pos-relative pr-10 pb-5">
                            <label class="d-flex f-12 text-63">
                                {{ $this->convert($key1)['label'] }}
                                <div class="rx-title title-input pb-10">
                                    <div class="p-rx">
                                        <div class="rx-border-rectangle-after label-input"></div>
                                    </div>
                                </div>
                            </label>
                        </div>
                        <div class="select">
                            <x-parnas.inputs.select class="form-select" wire:model="item.{{$key1}}">
                                @foreach($this->getData($this->convert($key1)['model'] , false , collect([array('condition'=>'where' , 'key' => 'category_type' , 'value' => $this->convert($key1)['cat_type'] , 'except' => 0)])) as $model)
                                    <x-parnas.inputs.option :value="$model->id">
                                        {{ $model->name ?? $model->title }}
                                    </x-parnas.inputs.option>
                                @endforeach
                            </x-parnas.inputs.select>
                        </div>
                        @break
                        @case('multiSelect')
                        <div class="d-flex justify-content-start m-left-auto pos-relative pr-10 pb-5">
                            <label class="d-flex f-12 text-63">
                                {{ $this->convert($key1)['label'] }}
                                <div class="rx-title title-input pb-10">
                                    <div class="p-rx">
                                        <div class="rx-border-rectangle-after label-input"></div>
                                    </div>
                                </div>
                            </label>
                        </div>
                        <div class="select">
                            <x-parnas.inputs.select class="form-select" multiple wire:model="item.{{$key1}}">
                                @foreach($this->getData($this->convert($key1)['model'] , false , collect([array('condition'=>'where' , 'key' => 'category_type' , 'value' => $this->convert($key1)['cat_type'] , 'except' => 0)])) as $model)
                                    <x-parnas.inputs.option :value="$model->id">
                                        {{ $model->name ?? $model->title }}
                                    </x-parnas.inputs.option>
                                @endforeach
                            </x-parnas.inputs.select>
                        </div>
                        @break
                        @case('boolean')
                        <div class="checkbox-list justify-content-start flex-50">
                            <label class="checkbox f-12">
                                <input class="checkbox-input" type="checkbox" wire:model="item.{{$key1}}">
                                <span class="checkbox-checkmark-box">
                                                                        <span class="checkbox-checkmark"></span>
                                                                    </span>
                                {{ $this->convert($key1)['label'] }}
                            </label>
                        </div>
                        @break
                        @case('file')
                        <div class="d-flex justify-content-start m-left-auto pos-relative pr-10 pb-5">
                            <label class="d-flex f-12 text-63">
                                {{ $this->convert($key1)['label'] }}
                                <div class="rx-title title-input pb-10">
                                    <div class="p-rx">
                                        <div class="rx-border-rectangle-after label-input"></div>
                                    </div>
                                </div>
                            </label>
                        </div>
                        <x-parnas.inputs.file :file="$data" model="item.{{$key1}}" />
                        @break
                        @case('textarea')
                        <div class="d-flex justify-content-start m-left-auto pos-relative pr-10 pb-5">
                            <label class="d-flex f-12 text-63">
                                {{ $this->convert($key1)['label'] }}
                                <div class="rx-title title-input pb-10">
                                    <div class="p-rx">
                                        <div class="rx-border-rectangle-after label-input"></div>
                                    </div>
                                </div>
                            </label>
                        </div>
                        <div class="c-input">
                            <x-parnas.inputs.textarea class="form-control" wire:model="item.{{$key1}}">
                            </x-parnas.inputs.textarea>
                        </div>
                        @break
                        @case('editor')
                        <div class="d-flex justify-content-start m-left-auto pos-relative pr-10 pb-5">
                            <label class="d-flex f-12 text-63">
                                {{ $this->convert($key1)['label'] }}
                                <div class="rx-title title-input pb-10">
                                    <div class="p-rx">
                                        <div class="rx-border-rectangle-after label-input"></div>
                                    </div>
                                </div>
                            </label>
                        </div>
                        <div wire:ignore>
                            <x-parnas.inputs.editor id="{{ rand() }}" wire:model="item.{{$key1}}">
                            </x-parnas.inputs.editor>
                        </div>
                        @break
                        @case('json')
                        <div class="border border-2 border-dark rounded p-2">
                            @foreach($data as $key2 => $data1)
                                <x-parnas.form-group class="mb-2">
                                    @switch($this->convert($key2)['type'])
                                        @case('text')
                                        <div class="d-flex justify-content-start m-left-auto pos-relative pr-10 pb-5">
                                            <label class="d-flex f-12 text-63">
                                                {{ $this->convert($key2)['label'] }}
                                                <div class="rx-title title-input pb-10">
                                                    <div class="p-rx">
                                                        <div class="rx-border-rectangle-after label-input"></div>
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="c-input">
                                            <x-parnas.inputs.text class="form-control" wire:model="item.{{$key1}}.{{$key2}}" />
                                        </div>
                                        @break
                                        @case('select')
                                        <div class="d-flex justify-content-start m-left-auto pos-relative pr-10 pb-5">
                                            <label class="d-flex f-12 text-63">
                                                {{ $this->convert($key2)['label'] }}
                                                <div class="rx-title title-input pb-10">
                                                    <div class="p-rx">
                                                        <div class="rx-border-rectangle-after label-input"></div>
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="select">
                                            <x-parnas.inputs.select class="form-select" wire:model="item.{{$key1}}.{{$key2}}">
                                                @foreach($this->getData($this->convert($key2)['model'] , false , collect([array('condition'=>'where' , 'key' => 'category_type' , 'value' => $this->convert($key2)['cat_type'] , 'except' => 0)])) as $model)
                                                    <x-parnas.inputs.option :value="$model->id">
                                                        {{ $model->name ?? $model->title }}
                                                    </x-parnas.inputs.option>
                                                @endforeach
                                            </x-parnas.inputs.select>
                                        </div>
                                        @break
                                        @case('multiSelect')
                                        <div class="d-flex justify-content-start m-left-auto pos-relative pr-10 pb-5">
                                            <label class="d-flex f-12 text-63">
                                                {{ $this->convert($key2)['label'] }}
                                                <div class="rx-title title-input pb-10">
                                                    <div class="p-rx">
                                                        <div class="rx-border-rectangle-after label-input"></div>
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="select">
                                            <x-parnas.inputs.select class="form-select" multiple wire:model="item.{{$key1}}.{{$key2}}">
                                                @foreach($this->getData($this->convert($key2)['model'] , false , collect([array('condition'=>'where' , 'key' => 'category_type' , 'value' => $this->convert($key2)['cat_type'] , 'except' => 0)])) as $model)
                                                    <x-parnas.inputs.option :value="$model->id">
                                                        {{ $model->name ?? $model->title }}
                                                    </x-parnas.inputs.option>
                                                @endforeach
                                            </x-parnas.inputs.select>
                                        </div>
                                        @break
                                        @case('boolean')
                                        <label class="checkbox f-12">
                                            <input class="checkbox-input" type="checkbox" wire:model="item.{{$key1}}.{{$key2}}">
                                            <span class="checkbox-checkmark-box">
                                                                        <span class="checkbox-checkmark"></span>
                                                                    </span>
                                            {{ $this->convert($key2)['label'] }}
                                        </label>
                                        @break
                                        @case('file')
                                        <div class="d-flex justify-content-start m-left-auto pos-relative pr-10 pb-5">
                                            <label class="d-flex f-12 text-63">
                                                {{ $this->convert($key2)['label'] }}
                                                <div class="rx-title title-input pb-10">
                                                    <div class="p-rx">
                                                        <div class="rx-border-rectangle-after label-input"></div>
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                        <x-parnas.inputs.file :file="$data1" model="item.{{$key1}}.{{$key2}}" />
                                        @break
                                        @case('textarea')
                                        <div class="d-flex justify-content-start m-left-auto pos-relative pr-10 pb-5">
                                            <label class="d-flex f-12 text-63">
                                                {{ $this->convert($key2)['label'] }}
                                                <div class="rx-title title-input pb-10">
                                                    <div class="p-rx">
                                                        <div class="rx-border-rectangle-after label-input"></div>
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="c-input">
                                            <x-parnas.inputs.textarea class="form-control" wire:model="item.{{$key1}}.{{$key2}}">
                                            </x-parnas.inputs.textarea>
                                        </div>
                                        @break
                                        @case('editor')
                                        <div class="d-flex justify-content-start m-left-auto pos-relative pr-10 pb-5">
                                            <label class="d-flex f-12 text-63">
                                                {{ $this->convert($key2)['label'] }}
                                                <div class="rx-title title-input pb-10">
                                                    <div class="p-rx">
                                                        <div class="rx-border-rectangle-after label-input"></div>
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                        <div wire:ignore>
                                            <x-parnas.inputs.editor id="{{ rand() }}" wire:model="item.{{$key1}}.{{$key2}}">
                                            </x-parnas.inputs.editor>
                                        </div>
                                        @break
                                    @endswitch
                                </x-parnas.form-group>
                            @endforeach
                        </div>
                        @break
                        @case('array')
                        @foreach($data as $key3 => $array)
                            <div class="border border-2 border-dark rounded p-2">
                                @foreach($array as $key4 => $json)
                                    <x-parnas.form-group class="mb-2">
                                        @switch($this->convert($key4)['type'])
                                            @case('text')
                                            <div class="d-flex justify-content-start m-left-auto pos-relative pr-10 pb-5">
                                                <label class="d-flex f-12 text-63">
                                                    {{ $this->convert($key4)['label'] }}
                                                    <div class="rx-title title-input pb-10">
                                                        <div class="p-rx">
                                                            <div class="rx-border-rectangle-after label-input"></div>
                                                        </div>
                                                    </div>
                                                </label>
                                            </div>
                                            <div class="c-input">
                                                <x-parnas.inputs.text class="form-control" wire:model="item.{{$key1}}.{{$key3}}.{{ $key4 }}" />
                                            </div>
                                            @break
                                            @case('select')
                                            <div class="d-flex justify-content-start m-left-auto pos-relative pr-10 pb-5">
                                                <label class="d-flex f-12 text-63">
                                                    {{ $this->convert($key4)['label'] }}
                                                    <div class="rx-title title-input pb-10">
                                                        <div class="p-rx">
                                                            <div class="rx-border-rectangle-after label-input"></div>
                                                        </div>
                                                    </div>
                                                </label>
                                            </div>
                                            <div class="select">
                                                <x-parnas.inputs.select class="form-select" wire:model="item.{{$key1}}.{{$key3}}.{{ $key4 }}">
                                                    @foreach($this->getData($this->convert($key4)['model'] , false , collect([array('condition'=>'where' , 'key' => 'category_type' , 'value' => $this->convert($key4)['cat_type'] , 'except' => 0)])) as $model)
                                                        <x-parnas.inputs.option :value="$model->id">
                                                            {{ $model->name ?? $model->title }}
                                                        </x-parnas.inputs.option>
                                                    @endforeach
                                                </x-parnas.inputs.select>
                                            </div>
                                            @break
                                            @case('multiSelect')
                                            <div class="d-flex justify-content-start m-left-auto pos-relative pr-10 pb-5">
                                                <label class="d-flex f-12 text-63">
                                                    {{ $this->convert($key4)['label'] }}
                                                    <div class="rx-title title-input pb-10">
                                                        <div class="p-rx">
                                                            <div class="rx-border-rectangle-after label-input"></div>
                                                        </div>
                                                    </div>
                                                </label>
                                            </div>
                                            <div class="select">
                                                <x-parnas.inputs.select class="form-select" multiple wire:model="item.{{$key1}}.{{$key3}}.{{ $key4 }}">
                                                    @foreach($this->getData($this->convert($key4)['model'] , false , collect([array('condition'=>'where' , 'key' => 'category_type' , 'value' => $this->convert($key4)['cat_type'] , 'except' => 0)])) as $model)
                                                        <x-parnas.inputs.option :value="$model->id">
                                                            {{ $model->name ?? $model->title }}
                                                        </x-parnas.inputs.option>
                                                    @endforeach
                                                </x-parnas.inputs.select>
                                            </div>
                                            @break
                                            @case('boolean')
                                            <label class="checkbox f-12">
                                                <input class="checkbox-input" type="checkbox" wire:model="item.{{$key1}}.{{$key3}}.{{$key4}}">
                                                <span class="checkbox-checkmark-box">
                                                                        <span class="checkbox-checkmark"></span>
                                                                    </span>
                                                {{ $this->convert($key4)['label'] }}
                                            </label>
                                            @break
                                            @case('file')
                                            <div class="d-flex justify-content-start m-left-auto pos-relative pr-10 pb-5">
                                                <label class="d-flex f-12 text-63">
                                                    {{ $this->convert($key4)['label'] }}
                                                    <div class="rx-title title-input pb-10">
                                                        <div class="p-rx">
                                                            <div class="rx-border-rectangle-after label-input"></div>
                                                        </div>
                                                    </div>
                                                </label>
                                            </div>
                                            <x-parnas.inputs.file :file="$json" model="item.{{$key1}}.{{$key3}}.{{ $key4 }}" />
                                            @break
                                            @case('textarea')
                                            <div class="d-flex justify-content-start m-left-auto pos-relative pr-10 pb-5">
                                                <label class="d-flex f-12 text-63">
                                                    {{ $this->convert($key4)['label'] }}
                                                    <div class="rx-title title-input pb-10">
                                                        <div class="p-rx">
                                                            <div class="rx-border-rectangle-after label-input"></div>
                                                        </div>
                                                    </div>
                                                </label>
                                            </div>
                                            <div class="c-input">
                                                <x-parnas.inputs.textarea class="form-control" wire:model="item.{{$key1}}.{{$key3}}.{{ $key4 }}">
                                                </x-parnas.inputs.textarea>
                                            </div>
                                            @break
                                            @case('editor')
                                            <x-parnas.label>{{ $this->convert($key4)['label'] }}</x-parnas.label>
                                            <div wire:ingore>
                                                <x-parnas.inputs.editor id="{{ rand() }}" wire:model="item.{{$key1}}.{{$key3}}.{{ $key4 }}">
                                                </x-parnas.inputs.editor>
                                            </div>
                                            @break
                                            @case('json')
                                            <div class="border border-2 border-dark rounded p-2">
                                                @foreach($json as $key2 => $data1)
                                                    <x-parnas.form-group class="mb-2">
                                                        @switch($this->convert($key2)['type'])
                                                            @case('text')
                                                            <x-parnas.label>{{ $this->convert($key2)['label'] }}</x-parnas.label>
                                                            <div class="c-input">
                                                                <x-parnas.inputs.text class="form-control" wire:model="item.{{$key1}}.{{ $key3 }}.{{ $key4 }}.{{$key2}}" />
                                                            </div>
                                                            @break
                                                            @case('select')
                                                            <x-parnas.label>{{ $this->convert($key2)['label'] }}</x-parnas.label>
                                                            <div class="select">
                                                                <x-parnas.inputs.select class="form-select" wire:model="item.{{$key1}}.{{ $key3 }}.{{ $key4 }}.{{$key2}}">
                                                                    @foreach($this->getData($this->convert($key2)['model'] , false , collect([array('condition'=>'where' , 'key' => 'category_type' , 'value' => $this->convert($key2)['cat_type'] , 'except' => 0)])) as $model)
                                                                        <x-parnas.inputs.option :value="$model->id">
                                                                            {{ $model->name ?? $model->title }}
                                                                        </x-parnas.inputs.option>
                                                                    @endforeach
                                                                </x-parnas.inputs.select>
                                                            </div>
                                                            @break
                                                            @case('multiSelect')
                                                            <x-parnas.label>{{ $this->convert($key2)['label'] }}</x-parnas.label>
                                                            <div class="select">
                                                                <x-parnas.inputs.select class="form-select" multiple wire:model="item.{{$key1}}.{{ $key3 }}.{{ $key4 }}.{{$key2}}">
                                                                    @foreach($this->getData($this->convert($key2)['model'] , false , collect([array('condition'=>'where' , 'key' => 'category_type' , 'value' => $this->convert($key2)['cat_type'] , 'except' => 0)])) as $model)
                                                                        <x-parnas.inputs.option :value="$model->id">
                                                                            {{ $model->name ?? $model->title }}
                                                                        </x-parnas.inputs.option>
                                                                    @endforeach
                                                                </x-parnas.inputs.select>
                                                            </div>
                                                            @break
                                                            @case('boolean')
                                                            <label class="checkbox f-12">
                                                                <input class="checkbox-input" type="checkbox" wire:model="item.{{$key1}}.{{ $key3 }}.{{ $key4 }}.{{$key2}}">
                                                                <span class="checkbox-checkmark-box">
                                                                        <span class="checkbox-checkmark"></span>
                                                                    </span>
                                                                {{ $this->convert($key2)['label'] }}
                                                            </label>

                                                            @break
                                                            @case('file')
                                                            <div class="d-flex justify-content-start m-left-auto pos-relative pr-10 pb-5">
                                                                <label class="d-flex f-12 text-63">
                                                                    {{ $this->convert($key2)['label'] }}
                                                                    <div class="rx-title title-input pb-10">
                                                                        <div class="p-rx">
                                                                            <div class="rx-border-rectangle-after label-input"></div>
                                                                        </div>
                                                                    </div>
                                                                </label>
                                                            </div>
                                                            <x-parnas.inputs.file :file="$data1" model="item.{{$key1}}.{{ $key3 }}.{{ $key4 }}.{{$key2}}" />
                                                            @break
                                                            @case('textarea')
                                                            <div class="d-flex justify-content-start m-left-auto pos-relative pr-10 pb-5">
                                                                <label class="d-flex f-12 text-63">
                                                                    {{ $this->convert($key2)['label'] }}
                                                                    <div class="rx-title title-input pb-10">
                                                                        <div class="p-rx">
                                                                            <div class="rx-border-rectangle-after label-input"></div>
                                                                        </div>
                                                                    </div>
                                                                </label>
                                                            </div>
                                                            <x-parnas.label>{{ $this->convert($key2)['label'] }}</x-parnas.label>
                                                            <div class="c-input">
                                                                <x-parnas.inputs.textarea class="form-control" wire:model="item.{{$key1}}.{{ $key3 }}.{{ $key4 }}.{{$key2}}">
                                                                </x-parnas.inputs.textarea>
                                                            </div>
                                                            @break
                                                            @case('editor')
                                                            <x-parnas.label>{{ $this->convert($key2)['label'] }}</x-parnas.label>
                                                            <div wire:ignore>
                                                                <x-parnas.inputs.editor id="{{ rand() }}" wire:model="item.{{$key1}}.{{ $key3 }}.{{ $key4 }}.{{$key2}}">
                                                                </x-parnas.inputs.editor>
                                                            </div>
                                                            @break
                                                        @endswitch
                                                    </x-parnas.form-group>
                                                @endforeach
                                            </div>
                                            @break
                                        @endswitch
                                    </x-parnas.form-group>
                                @endforeach
                            </div>
                        @endforeach
                        @break
                    @endswitch
                </x-parnas.form-group>
            @endforeach
        @endif --}}

        <div class="mx-10 m-mx-5 mb-15" wire:ignore>
            <div class="c-data">
                <div class="rx-title pb-10">
                    <div class="text">
                        <h6>قوانین و مقرارت</h6>
                    </div>
                    <div class="p-rx ">
                        <div class="rx-border-rectangle"></div>
                        <div class="rx-border-rectangle-after"></div>
                    </div>
                </div>
                {{-- <div class="my-10" x-data="{
                            faq: @entangle('conditions').defer,
                            addFaq() {
                                this.faq.push({ question: '', answer: '' });
                            },
                            removeFaq(index) {
                                this.faq.splice(index, 1)
                            }

                        }">
                    <table class="table table-sm table-bordered w-100">
                        <thead>
                        <tr>
                            <th>
                                #
                            </th>
                            <th class="f-12">سوال</th>
                            <th class="f-12">پاسخ</th>
                            <th>
                                <x-parnas.buttons.button type="button" class="btn bg-success radius-5"
                                                         @click="addFaq()">
                                    <i class="fas fa-plus fa-1x text-white"></i>
                                </x-parnas.buttons.button>
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <template x-for="(item , index) in faq">
                            <tr>
                                <td class="f-12" x-text="index + 1"></td>
                                <td>
                                    <div class="c-input flex-100">
                                        <x-parnas.inputs.textarea x-model="item.question" />
                                    </div>
                                </td>
                                <td>
                                    <div class="c-input flex-100">
                                        <x-parnas.inputs.textarea x-model="item.answer" />
                                    </div>
                                </td>
                                <td>
                                    <x-parnas.buttons.button type="button" class="btn bg-danger radius-5"
                                                             @click="removeFaq(index)">
                                        <i class="fas fa-times text-white"></i>
                                    </x-parnas.buttons.button>
                                </td>
                            </tr>
                        </template>
                        </tbody>
                    </table>
                </div> --}}
                <x-parnas.inputs.editor id="description" placeholder="متن خود را بنویسید"
                                        wire:model="conditions" />
            </div>
        </div>

        <div class="c-btn justify-content-end">
            <x-parnas.buttons.button class="btn bg-success text-white radius-5">
                ثبت
            </x-parnas.buttons.button>
        </div>
    </form>
</div>
