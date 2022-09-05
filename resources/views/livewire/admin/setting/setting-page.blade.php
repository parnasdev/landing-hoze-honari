<div>
    <div
        class="main-data flex-100 d-flex align-items-start m-align-items-stretch justify-content-between mx-10 my-5 m-mx-5">
        <div class="box-design bg-white flex-100 px-5 py-10" x-data="{
            tab: @entangle('tab')
        }">
            <div class="mx-10 m-mx-5 mb-15">
                <div class="c-data">
                    <!--! title  -->
                    <div class="rx-title py-10">
                        <div class="text ">
                            <h6>تنظیمات</h6>
                        </div>
                        <div class="p-rx ">
                            <div class="rx-border-rectangle "></div>
                            <div class="rx-border-rectangle-after "></div>
                        </div>

                    </div>
                    <div class="our-service mt-10">
                        <!--? Head Cards -->
                        <div class="controller-head scroller">
                            <!--? Header buttons -->
                            <div class="main-grid our">
                                <div class="flex-services d-flex radius-6">
                                    <!--! button 1  -->
                                    <div class="our-services-card flex-15 m-flex-45 px-7" :class="{'selected-services': tab==='homepage'}" @click="tab = 'homepage'">
                                        <!-- Title -->
                                        <div class="paragraph">
                                            <span class="f-12">صفحه اصلی</span>
                                        </div>
                                    </div>
                                    <!--! Button 2 -->
                                    <div class="our-services-card  flex-15 m-flex-45 px-7" :class="{'selected-services': tab==='general'}"
                                    @click="tab = 'general'">
                                        <!-- Title -->
                                        <div class="paragraph">
                                            <span class="f-12">عمومی</span>
                                        </div>
                                    </div>
                                    <!--! Button 3 -->

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mb-10 p-10 border-top-solid-2 border-info bg-light" x-show="tab == 'general'">
                        <livewire:admin.setting.public-form wire:key="general"/>
                    </div>

                    <div class="mb-10 p-10 border-top-solid-2 border-info bg-light" x-show="tab == 'homepage'" x-data="{ settingTab: @entangle('homeTab')}">
                        <div class="main-data c-group-btn d-flex align-items-center m-align-items-start flex-wrap justify-content-between">
                            <div class="d-flex flex-wrap align-items-center flex-75 m-flex-100">
                                <div class="c-btn ml-7 pb-5">
                                    <button class="ancher btn-effect bg-info text-white radius-5" :class="{'bg-secondary': settingTab==='sectionOne'}"
                                            @click="settingTab = 'sectionOne'">
                                             <div class="circle-solid top-right bg-white"></div>
                                        قسمت اول
                                    </button>
                                </div>
                                <div class="c-btn ml-7 pb-5">
                                    <button class="ancher btn-effect bg-info text-white radius-5" :class="{'bg-secondary': settingTab==='sectionTwo'}"
                                            @click="settingTab = 'sectionTwo'">
                                            <div class="circle-solid top-right bg-white"></div>
                                        قسمت دوم
                                    </button>
                                </div>
                                <div class="c-btn ml-7 pb-5">
                                    <button class="ancher btn-effect bg-info text-white radius-5" :class="{'bg-secondary': settingTab==='sectionThree'}"
                                            @click="settingTab = 'sectionThree'">
                                            <div class="circle-solid top-right bg-white"></div>
                                        قسمت سوم
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                        @if($homeTab == 'sectionOne')
                            <div class="my-10">
                                <livewire:admin.setting-home.section-one/>
                            </div>
                        @endif
                        @if($homeTab == 'sectionTwo')
                            <div class="my-10">
                                <livewire:admin.setting-home.section-two/>
                            </div>
                        @endif
                        @if($homeTab == 'sectionThree')
                            <div class="my-10">
                                <livewire:admin.setting-home.section-three/>
                            </div>
                        @endif

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@push('title' , 'تنظیمات اصلی')
