<div>
    <div class="py-20">
        <section>
            <div class="main-box">
                <div class="data-form flex-100 m-flex-100 d-flex flex-wrap align-items-start justify-content-between">
                    <div class="right-list flex-49 m-flex-100">
                        <div class="title">
                            <h4>اطلاعات تکمیلی</h4>
                        </div>
                        @livewire('form-builder' , ['name' => config('options.form_code')])

                        <div class="line-horizontal bg-gray"></div>
                        <div class="text">
                            {!! config('options.rules') !!}
                            {{-- <p class="f-17 pb-5 text-align-center">بسم الله الرحمن الرحیم</p>
                            <p class="f-15">
                                وره در نظر دارد، اولین مستند جمع¬سپار از مراسم با شکوه اربعین را با مشارکت
                                مردم تولید نماید.
                            </p>
                            <p class="f-15">
                                برای این هدف، کافی ست تصاویری که از بهترین لحظه¬ها یا صحنه¬های مسیر و
                                مراسم اربعین ضبط می¬کنید با هشتگ #اربعین_ما در اینستاگرام بارگذاری نمایید.
                            </p>
                            <p class="f-15">
                                مرکز مستند س
                                برای این هدف، به موارد زیر توجه داشته باشید.
                                ـ حتماً گوشی خود را افقی گرفته و در حالت افقی تصاویر را ضبط کنید.

                                ـ سعی کنید وقایع و اتفاقات مختلف در مسیر پیاده¬روی و مراسم اربعین را مدّ نظر قرار دهید.

                                ـ از آنجایی که هدف این پویش در وهله¬ی اول، ساخت مستندی برای معرفی اربعین به
                                غیرمسلمان¬هاست توجه داشته باشید که بهترین صحنه¬های اربعین از دید خودتان را برای آنها
                                انتخاب کنید. صحنه¬ها و وقایعی که فکر می¬کنید دیدن آن برایشان جالب است.

                                ـ شما می¬توانید حد اکثر 10 دقیقه تصویر را برای ما ارسال کنید.

                                ـ تنوّع زمان تصاویر نیز از اهمیت ویژه ای برخوردار است. به طور مثال سعی کنید لحظه¬های
                                غروب و طلوع، ظهر، مغرب و در یک کلام ساعات مختلف را در نظر داشته باشید.
                                ـ همچنین توجه به تنوع افراد از نظر شخصیت، ملیت و مذهب، از اهمیت ویژه¬ای برخوردار است. به
                                طور مثال توجه به صاحبان مشاغل مختلف در اربعین، توجه به غیرمسلمان¬های یا غیرشیعه¬ها در
                                اربعین و...
                                ـ سعی کنید تصاویر شما فقط از مسیر پیاده روی نباشد. از لحظه¬ی حرکت، تا رد شدن از مرز تا
                                بازگشت به منزل وقایع مختلفی هست که ثبت آنها می-تواند جذاب باشد.

                                ـ اگر بتوانید نام مرکز مستند سوره را هم در تصاویر خود تگ یا منشن کنید، باعث می¬شود ما
                                راحت¬تر و سریع¬تر تصاویر شما را بیابیم. (mostanadsoore)
                                ـ سعی کنید با بهترین کیفیت ممکن فیلم بگیرید اما هنگام بارگذاری در اینستاگرام اگر مجبور
                                به کاهش کیفیت شُدید نگران نباشید. چرا که از مرکز مستند سوره با صاحبان تصاویر برتر،
                                ارتباط گرفته می¬شود تا تصاویر با کیفیت اصلی را در اختیار ما قرار دهند.
                            </p>
                            <p class="f-15">
                                با تشکر. مرکز مستند و برنامه تلویزیونی سوره
                            </p> --}}
                        </div>
                    </div>
                    <div class="left-list flex-49 m-flex-100">
                        <div class="p-banner">
                            <div class="c-banner">
                                <img src="{{ collect(config('options.slider'))->first()['url'] }}" width="100%" height="900px"
                                    class="radius-15 object-fit-fill" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
