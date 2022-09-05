<div class="form-contact-us">
    <form wire:submit.prevent="submit">
        @if(!empty($form) && !$success)
            <div
                class="col-xl-12 col-lg-12 col-12 d-flex flex-wrap align-items-center justify-content-between mt-20 pb-20">
                @foreach($form->inputs ?? [] as $input)
                    @if($input['controlType'] == 'textbox')
                        <x-form::inputs.text id="{{ $input['id'] }}" wire:model.defer="formControls.{{ $input['id'] }}"
                                             type="{{ $input['type'] }}">
                            <x-slot name="icon">
                                {!! $input['icon'] !!}
                            </x-slot>
                            <x-slot name="label">
                                {!! $input['label'] !!}
                            </x-slot>
                        </x-form::inputs.text>
                    @elseif($input['controlType'] == 'textarea')
                        <x-form::inputs.textarea id="{{ $input['id'] }}"
                                                 wire:model.defer="formControls.{{ $input['id'] }}" row="10">
                            <x-slot name="icon">
                                {!! $input['icon'] !!}
                            </x-slot>
                            <x-slot name="label">
                                {!! $input['label'] !!}
                            </x-slot>
                        </x-form::inputs.textarea>
                    @endif
                @endforeach
                <div class="text flex-70 m-flex-100" style="margin-top: -15px">
                    <p class="">جهت آپلود اثر وارد سایت <a href="https://uupload.ir"
                                                           class="ltr text-info f-17"
                                                           target="_blank">https://uupload.ir</a>
                        شوید،
                        سپس لینک دریافت شده از سایت uupload.ir در کادر بالا وارد نمایید.
                    </p>
                </div>
                <x-form::button>
                    {{ $btnText }}
                </x-form::button>
            </div>
        @endif
        @if($success)
            <section class="success">
                <div class="d-flex flex-direction-column align-items-center">
                    <div class="image">
                        <img src="/images/success.gif" width="200px" height="200px" alt="">
                    </div>
                    <div class="text">
                        <p>اطلاعات شما با موفقیت ثبت شد</p>
                    </div>
                    <div class="c-btn justify-content-end">
                        <a href="/" class="btn text-white bg-success py-14 px-18 radius-5 f-15">
                            برگشت
                        </a>
                    </div>

                </div>
            </section>
        @endif

    </form>

</div>
