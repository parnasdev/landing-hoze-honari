<div>
    <div>
        <section>
            <div>
                <div
                    class="data-form flex-100 m-flex-100 d-flex flex-wrap align-items-start justify-content-between h-100">
                    <div class="flex-100 m-flex-100" x-data="{
                        changeTab: 'RulePersian'
                    }">
                        <!--? select -->
                        <div class="select-data flex-100 m-flex-100 mr-auto">
                            <div class="our-service">
                                <!--? Head Cards -->
                                <div class="controller-head scroller">
                                    <!--? Header buttons -->
                                    <div class="main-grid our">
                                        <div class="flex-services d-flex justify-content-between radius-6">
                                            <!--! button 1  -->
                                            <div class="our-services-card flex-30 m-flex-70 m-flex-45 px-7"
                                                :class="{ 'selected-services': changeTab === 'RulePersian' }"
                                                @click="changeTab = 'RulePersian'">
                                                <!-- Title -->
                                                <div class="paragraph">
                                                    <span class="f-16">آیــین نــامه</span>
                                                </div>
                                            </div>
                                            <!--! Button 2 -->
                                            <div class="our-services-card  flex-30 m-flex-70 m-flex-45 px-7"
                                                :class="{ 'selected-services': changeTab === 'RuleIraq' }"
                                                @click="changeTab = 'RuleIraq'">
                                                <!-- Title -->
                                                <div class="paragraph">
                                                    <span class="f-16">قواعد الخطاب</span>
                                                </div>
                                            </div>
                                            <!--! Button 3 -->
                                            <div class="our-services-card  flex-30 m-flex-70 m-flex-45 px-7"
                                                :class="{ 'selected-services': changeTab === 'RuleEnglish' }"
                                                @click="changeTab = 'RuleEnglish'">
                                                <!-- Title -->
                                                <div class="paragraph">
                                                    <span class="f-16">The rules of the letter</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- حالت فارسی --}}
                            <div class="mb-10 p-10 m-px-5 border-top-solid-2 border-white bg-light pt-25"
                                x-show="changeTab == 'RulePersian'">
                                <div class="main-box">
                                    {{-- parent --}}
                                    <div
                                        class="p-content d-flex align-items-center m-direction-column-reverse justify-content-between">
                                        <div class="right-list flex-48 m-flex-100">
                                            <div class="rx-title text">
                                                <h4>آیــین نــامه</h4>
                                                <div class="p-rx" style="top: -1px">
                                                    <div class="rx-border-rectangle"></div>
                                                    <div class="rx-border-rectangle-after"></div>
                                                </div>
                                            </div>
                                            <div
                                                class="main-data c-group-btn text-paragraph scroller align-items-center m-align-items-start flex-wrap justify-content-between f-15">
                                                <p class="text-align-center m-auto pb-12">بسم الله الرحمن الرحیم</p>
                                                <ul>
                                                    <li class="pr-10 m-pr-0 pb-10">
                                                        <p class="line-height-30">مرکز مستند سوره در نظر دارد ، اولین
                                                            مستند جمع سپار از
                                                            مراسم
                                                            باشکوه اربعین
                                                            را
                                                            با
                                                            مشارکت مردم تولید نماید.</p>
                                                    </li>
                                                    <li class="pr-10 m-pr-0 pb-10">
                                                        <p class="line-height-30">برای این هدف ، کافی ست تصاویری که از
                                                            بهترین لحظه ها یا
                                                            صحنه های
                                                            مسیر و
                                                            مراسم
                                                            اربعین ضبط می کنید با هشتگ #اربعین_ما در اینستاگرام
                                                            بارگذاری
                                                            نمایید.</p>
                                                    </li>
                                                    <li class="pr-10 m-pr-0 pb-10">
                                                        <p class="line-height-30">برای این هدف ، به موارد زیر توجه داشته
                                                            باشید:</p>
                                                    </li>
                                                    <li class="pr-15 m-pr-5 pb-10">
                                                        <p class="line-height-30">
                                                            - سعی کنید وقایع و اتفاقات مختلف در مسیر
                                                            پیاده
                                                            روی و
                                                            مراسم
                                                            اربعین را مد نظر
                                                            قرار دهید.
                                                        </p>
                                                    </li>
                                                    <li class="pr-15 m-pr-5 pb-10">
                                                        <p class="line-height-30">
                                                            - از آنجایی که هدف این پویش در وهله¬ی اول، ساخت مستندی برای
                                                            معرفی اربعین به غیرمسلمان¬هاست توجه داشته باشید که بهترین
                                                            صحنه¬های اربعین از دید خودتان را برای آنها انتخاب کنید.
                                                            صحنه¬ها و وقایعی که فکر می¬کنید دیدن آن برایشان جالب است.
                                                        </p>
                                                    </li>
                                                    <li class="pr-15 m-pr-5 pb-10">
                                                        <p class="line-height-30">
                                                            - شما می توانید حداکثر 10 دقیقه تصویر را برای ما ارسال کنید
                                                        </p>
                                                    </li>
                                                    <li class="pr-15 m-pr-5 pb-10">
                                                        <p class="line-height-30">
                                                            - تنوع زمان تصاویر نیز از اهمیت ویژه ای برخوردار است. به طور
                                                            مثال
                                                            سعی
                                                            کنید
                                                            لحظه های غروب و طلوع ، ظهر ، مغرب و در یک کلام ساعات مختلف
                                                            را در نظر
                                                            داشته
                                                            باشید.
                                                        </p>
                                                    </li>
                                                    <li class="pr-15 m-pr-5 pb-10">
                                                        <p class="line-height-30">
                                                            - همچنین توجه به تنوع افراد از نظر شخصیت، ملیت و مذهب ، از
                                                            اهمیت
                                                            ویژه ای
                                                            برخوردار است. به طور مثال توجه به صاحبان مشاغل مختلف در
                                                            اربعین، توجه
                                                            به
                                                            غیر
                                                            مسلمان های یا غیر شیعه ها در اربعین و ...
                                                        </p>
                                                    </li>
                                                    <li class="pr-15 m-pr-5 pb-10">
                                                        <p class="line-height-30">
                                                            - سعی کنید تصاویر شما فقط از مسیر پیاده روی نباشد. از لحظه ی
                                                            حرکت تا
                                                            رد
                                                            شدن
                                                            از مرز تا بازگشت به منزل وقایع مختلفی هست که ثبت آنها می
                                                            تواند جذاب
                                                            باشد.
                                                        </p>
                                                    </li>
                                                    <li class="pr-15 m-pr-5 pb-10">
                                                        <p class="line-height-30">
                                                            - اگر بتوانید نام مرکز مستند سوره را در هم در تصاویر خود تگ
                                                            یا منشن
                                                            کنید،
                                                            باعث می شود ما راحت تر و سریع تر تصاویر شما را بیایم
                                                            (Mostanadsoore)
                                                        </p>
                                                    </li>
                                                    <li class="pr-15 m-pr-5 pb-10">
                                                        <p class="line-height-30">
                                                            - سعی کنید با بهترین کیفیت ممکن فیلم بگیرید اما هنگام
                                                            بارگذاری در
                                                            اینستاگرام
                                                            اگر مجبور به کاهش کیفیت شدید نگران نباشید. چرا که از مرکز
                                                            مستند سوره
                                                            با
                                                            صاحبان تصاویر برتر، ارتباط گرفته می شود تا تصاویربا کیفیت
                                                            اصلی را در
                                                            اختیار
                                                            ما قرار دهند.
                                                        </p>
                                                    </li>
                                                    <p class="line-height-30">با تشکر ، مرکز مستند و برنامه تلویزیونی
                                                        سوره</p>
                                                </ul>
                                            </div>
                                            <div class="line-horizontal bg-gray"></div>
                                            <div class="rx-title text">
                                                <h4 class="mt-5">اطلاعات تکمیلی جهت شرکت در کمپین</h4>
                                                <div class="p-rx" style="top: 4px">
                                                    <div class="rx-border-rectangle"></div>
                                                    <div class="rx-border-rectangle-after"></div>
                                                </div>
                                            </div>
                                            @livewire('form-builder', ['name' => config('options.form_code'), 'btnText' => 'ثبت اطلاعات'])
                                        </div>
                                        <div class="left-list flex-48 m-flex-100">
                                            <div class="p-banner">
                                                <div class="c-banner">
                                                    <img src="/images/banner-1.jpg" width="95%" style="height: 900px"
                                                        class="radius-15 object-fit-cover" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- حالت عربی --}}
                            <div class="mb-10 p-10 m-px-5 border-top-solid-2 border-white bg-light pt-25"
                                x-show="changeTab == 'RuleIraq'">
                                <div class="main-box">
                                    {{-- parent --}}
                                    <div
                                        class="p-content d-flex align-items-center  m-direction-column-reverse justify-content-between">
                                        <div class="right-list flex-48 m-flex-100">
                                            <div class="rx-title text">
                                                <h4>أنــظمة</h4>
                                                <div class="p-rx" style="top: -1px">
                                                    <div class="rx-border-rectangle"></div>
                                                    <div class="rx-border-rectangle-after"></div>
                                                </div>
                                            </div>
                                            <div
                                                class="main-data c-group-btn text-paragraph scroller align-items-center m-align-items-start flex-wrap justify-content-between f-15">
                                                <p class="text-align-center m-auto pb-12">بسم الله الرحمن الرحیم</p>
                                                <ul>
                                                    <li class="pr-10 m-pr-0 pb-10">
                                                        <p>يريد مركز الافلام الوثائقية سورة إنتاج أول فيلم وثائقي سيتم
                                                            إنتاجه بشكل التعهيد الجماعي من زيارة الأربعين الحسيني
                                                            بمشاركة الجمهور. لهذا الغرض يكفي تحميل الفيديوهات التي
                                                            تسجلها لأفضل لحظات أو مشاهد مسيرة الأربعين مع هاشتاغ #
                                                            أربعيننا على انستجرام.</p>
                                                    </li>
                                                    <li class="pr-10 m-pr-0 pb-10">
                                                        <p class="line-height-30">لهذا الغرض ، لاحظ ما يلي.
                                                            تأكد من حمل هاتفك أفقيًا وتسجيل الفيديو في الوضع الأفقي.
                                                        </p>
                                                    </li>
                                                    <li class="pr-10 m-pr-0 pb-10">
                                                        <p class="line-height-30">برای این هدف ، به موارد زیر توجه داشته
                                                            باشید:</p>
                                                    </li>
                                                    <li class="pr-15 m-pr-5 pb-10">
                                                        <p class="line-height-30">
                                                            - حاولوا أن تنتبهوا الى المشاهد والأحداث المختلفة على مسيرة
                                                            الأربعين.
                                                        </p>
                                                    </li>
                                                    <li class="pr-15 m-pr-5 pb-10">
                                                        - بما أن الغرض من هذه الحملة هو عمل فيلم وثائقي للتعريف الأربعين
                                                        لغير المسلمين ، يرجى ملاحظة أنه يجب عليك اختيار أفضل مشاهد
                                                        الأربعين لهم. المشاهد والأحداث التي تعتقد أنه سيكون من الممتع
                                                        مشاهدتها.
                                                    </li>
                                                    <li class="pr-15 m-pr-5 pb-10">
                                                        <p class="line-height-30">
                                                            - يمكنك إرسال الفيديو إلينا بحد أقصى 10 دقائق.
                                                        </p>
                                                    </li>
                                                    <li class="pr-15 m-pr-5 pb-10">
                                                        <p class="line-height-30">
                                                            -
                                                            كما أن التنوع الزمني للفيديوهات له أهمية خاصة. على سبيل
                                                            المثال ، الانتباه إلى لحظات الغروب والشروق والظهيرة والمغرب
                                                            ، وبالاختصار ساعات مختلفة.
                                                        </p>
                                                    </li>
                                                    <li class="pr-15 m-pr-5 pb-10">
                                                        <p class="line-height-30">
                                                            - من المهم أيضا الانتباه إلى تنوع الناس من حيث الشخصية
                                                            والجنسية والدين. على سبيل المثال ، الانتباه الی أصحاب المهن
                                                            المختلفة في الأربعين ، والالتفات إلى غير المسلمين أو غير
                                                            الشيعة في الأربعين ، إلخ.
                                                            - حاولوا ألا تصوروا مقاطع الفيديو من طريق المشي فقط. من لحظة
                                                            المغادرة ، وحتى عبور الحدود ، والعودة إلى الوطن ، هناك
                                                            العديد من الأحداث التي قد يكون من المثير للاهتمام تسجيلها.
                                                        </p>
                                                    </li>
                                                    <li class="pr-15 m-pr-5 pb-10">
                                                        <p class="line-height-30">
                                                            - إذا كان بإمكانكم عمل تاغ(tag) أو منشن (mention)
                                                            مركز الافلام الوثائقية سوره في الفيديوهات علی انستجرام ،
                                                            فسوف تجعلوننا نعثر على مقاطعكم بشكل أسهل وأسرع.
                                                            (Mostanadsoore)
                                                        </p>
                                                    </li>
                                                    <li class="pr-15 m-pr-5 pb-10">
                                                        <p class="line-height-30">
                                                            - حاولوا التصوير بأفضل جودة ممكنة ، لكن لا تقلق إذا كان عليك
                                                            تقليل الجودة عند التحميل على Instagram. لأن مركز الافلام
                                                            الوثائقية سوره يتواصل مع أصحاب أفضل مقاطع الفيديو ليقدم لنا
                                                            الفيديوهات بجودة أصلية.
                                                        </p>
                                                    </li>
                                                    <li class="pr-15 m-pr-5 pb-10 pt-10">
                                                        <p class="line-height-30">
                                                            شكرًا لكم. مركز الافلام الوثائقية والتلفزيونية سوره
                                                        </p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="line-horizontal bg-gray"></div>
                                            <div class="rx-title title">
                                                <h4 class="mt-5">معلومات إضافية للمشاركة في الحملة</h4>
                                                <div class="p-rx" style="top: 4px">
                                                    <div class="rx-border-rectangle"></div>
                                                    <div class="rx-border-rectangle-after"></div>
                                                </div>
                                            </div>
                                            @livewire('form-builder', ['name' => config('options.form_code'), 'btnText' => 'ثبت اطلاعات'])
                                        </div>
                                        <div class="left-list flex-48 m-flex-100">
                                            <div class="p-banner">
                                                <div class="c-banner">
                                                    <img src="/images/banner-2.jpg" width="95%"
                                                        style="height: 900px" class="radius-15 object-fit-cover"
                                                        alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- حالت انگلیسی --}}
                            <div class="mb-10 p-10 m-px-5 border-top-solid-2 border-white bg-light pt-25"
                                x-show="changeTab == 'RuleEnglish'">
                                <div class="main-box">
                                    <div
                                        class="p-content d-flex align-items-center flex-direction-row-reverse m-direction-column-reverse justify-content-between">
                                        <div class="right-list flex-48 m-flex-100">
                                            {{-- parent --}}
                                            <div class="rx-title text d-flex justify-content-end">
                                                <div class="p-rx" style="top: -1px">
                                                    <div class="rx-border-rectangle-after" style="right: -30px"></div>
                                                    <div class="rx-border-rectangle" style="margin-left: 20px"></div>
                                                </div>
                                                <h4>Regulations</h4>
                                            </div>
                                            <div
                                                class="main-data c-group-btn text-paragraph scroller align-items-center m-align-items-start flex-wrap justify-content-between ltr f-15">
                                                <p class="text-align-center m-auto pb-12">
                                                    In the name of Allah, the Compassionate, the Merciful
                                                </p>
                                                <ul>
                                                    <li class="pr-10 m-pr-0 pb-10">
                                                        <p class="pb-10">
                                                            Surah Documentary Center wants to produce the first
                                                            collective documentary of the glorious Arba’ein ceremony
                                                            with the participation of people. For this purpose, it is
                                                            enough to upload the pictures you record of the best moments
                                                            or scenes of the Arba’ein route and ceremony with the
                                                            hashtag #Our_Arbaein on Instagram.
                                                        </p>
                                                    </li>
                                                    <li class="pr-10 m-pr-0 pb-10">
                                                        <p class="pr-5 pb-10">For this purpose, note the following:</p>
                                                    </li>
                                                    <li class="pr-15 m-pr-5 pb-10">
                                                        <p class="pr-10 m-pr-0 pb-10">
                                                            - Be sure to hold your phone horizontally and record images
                                                            in horizontal mode.
                                                        </p>
                                                    </li>
                                                    <li class="pr-15 m-pr-5 pb-10">
                                                        <p class="pr-10 m-pr-0 pb-10">
                                                            - Try to consider various events and happenings on the
                                                            walking route and the Arba’ein ceremony.
                                                        </p>
                                                    </li>
                                                    <li class="pr-15 m-pr-5 pb-10">
                                                        <p class="line-height-30">
                                                            - Since the purpose of this campaign is to make a
                                                            documentary
                                                            to introduce Arba’ein to non-Muslims, please note that you
                                                            should choose the best scenes of Arba’ein from your point of
                                                            view.
                                                        </p>
                                                    </li>
                                                    <li class="pr-15 m-pr-5 pb-10">
                                                        <p class="line-height-30">
                                                            - You can send us a maximum of 10 minutes of the image.
                                                        </p>
                                                    </li>
                                                    <li class="pr-15 m-pr-5 pb-10">
                                                        <p class="line-height-30">
                                                            - The time diversity of the images is also of particular
                                                            importance. For example, try to keep in mind the moments of
                                                            sunset and sunrise, and so on.
                                                        </p>
                                                    </li>
                                                    <li class="pr-15 m-pr-5 pb-10">
                                                        <p class="line-height-30">
                                                            - It is also important to pay attention to the diversity of
                                                            people in terms of personality, nationality and religion.
                                                            For example, paying attention to the owners of different
                                                            jobs in Arba’ein, paying attention to non-Muslims or
                                                            non-Shias in Arba’ein, and so on.
                                                        </p>
                                                    </li>
                                                    <li class="pr-15 m-pr-5 pb-10">
                                                        <p class="line-height-30">
                                                            - Try not to only take pictures of the walking path. From
                                                            the moment of departure, to crossing the border, to
                                                            returning home, there are various events that can be
                                                            interesting to record.
                                                        </p>
                                                    </li>
                                                    <li class="pr-15 m-pr-5 pb-10">
                                                        <p class="line-height-30">
                                                            - If you can tag or mention the name of Surah Documentary
                                                            Center in your pictures, it will help us to find your
                                                            pictures easier and faster. (mostanadsoore)
                                                        </p>
                                                    </li>
                                                    <li class="pr-15 m-pr-5 pb-10">
                                                        <p class="line-height-30">
                                                            - Try to shoot with the best possible quality, but don't
                                                            worry if you have to reduce the quality when uploading to
                                                            Instagram. Because the Surah Documentary Center contacts the
                                                            owners of the best images to provide us with original
                                                            quality images.
                                                        </p>
                                                    </li>
                                                    <p class="line-height-30">
                                                        Thank you! Surah Documentary & Television Program Center
                                                    </p>
                                                </ul>
                                            </div>
                                            <div class="line-horizontal bg-gray"></div>
                                            <div class="rx-title title d-flex flex-direction-row-reverse">
                                                <h4 class="mt-5">
                                                    Additional information to participate in the campaign
                                                </h4>
                                                <div class="p-rx iscontrollmobile" style="top: 3px">
                                                    <div class="rx-border-rectangle-after" style="right: -30px"></div>
                                                    <div class="rx-border-rectangle" style="margin-left: 20px"></div>
                                                </div>
                                            </div>
                                            @livewire('form-builder', ['name' => config('options.form_code'), 'btnText' => 'ثبت اطلاعات'])
                                        </div>
                                        <div class="left-list flex-48 m-flex-100">
                                            <div class="p-banner">
                                                <div class="c-banner">
                                                    <img src="/images/banner-3.jpg" width="95%"
                                                        style="height: auto" class="radius-15 object-fit-cover"
                                                        alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="text-paragraph text scroller" style="height: 400px">
                        </div> --}}

                    </div>
                    {{-- <div class="left-list flex-49 m-flex-100">
                        <div class="p-banner">
                            <div class="c-banner">
                                <img src="{{ collect(config('options.slider'))->first()['url'] }}" width="100%"
                                    style="height: 88vh" class="radius-15 object-fit-cover" alt="">
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </section>
    </div>
</div>
