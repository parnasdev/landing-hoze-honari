<div class="sidebar-bottom-fix">
    <div class="item-sidebar-bottom" x-data="{tabMobile:'itemOne'}">
        @foreach(\App\Models\Link::query()->where('type' , 'mobileHeader')->first()?->linkContents()->get()->sortBy('order_item') ?? [] as $link)
            @if($link->is_link)
                <a href="{{ $link->href }}"
                   @click="tabMobile='itemOne'" class="item-menu-bottom">
                    {!! $link->icon !!}
                </a>
                {{--                    <a class="w-75" >--}}
                {{--                        <i class="icon-circle"></i>--}}
                {{--                        {{ $link->title }}--}}
                {{--                    </a>--}}
            @else
                <a href="{{ $link->href }}"
                   @click="tabMobile='itemOne'" class="item-menu-bottom">
                    {!! $link->icon !!}
                </a>
            @endif
        @endforeach

{{--        <a :class="{'active-menu-bottom':tabMobile==='itemTwo'}" @click="tabMobile='itemTwo'" class="item-menu-bottom">--}}
{{--            <svg xmlns="http://www.w3.org/2000/svg" id="Filled" viewBox="0 0 24 24" width="28" height="28">--}}
{{--                <path--}}
{{--                    d="M22.485,10.975,12,17.267,1.515,10.975A1,1,0,1,0,.486,12.69l11,6.6a1,1,0,0,0,1.03,0l11-6.6a1,1,0,1,0-1.029-1.715Z"/>--}}
{{--                <path--}}
{{--                    d="M22.485,15.543,12,21.834,1.515,15.543A1,1,0,1,0,.486,17.258l11,6.6a1,1,0,0,0,1.03,0l11-6.6a1,1,0,1,0-1.029-1.715Z"/>--}}
{{--                <path--}}
{{--                    d="M.485,8.357l9.984,5.991a2.97,2.97,0,0,0,3.062,0l9.984-5.991a1,1,0,0,0,0-1.714L13.531.652a2.973,2.973,0,0,0-3.062,0L.485,6.643a1,1,0,0,0,0,1.714Z"/>--}}
{{--            </svg>--}}
{{--        </a>--}}
{{--        <a :class="{'active-menu-bottom':tabMobile==='itemThree'}" @click="tabMobile='itemThree'"--}}
{{--           class="item-menu-bottom">--}}
{{--            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"--}}
{{--                 id="Outline" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;"--}}
{{--                 xml:space="preserve" width="28" height="28">--}}
{{--<path--}}
{{--    d="M488.533,191.04c-14.409-7.302-31.716-5.78-44.629,3.925L404.8,224c-5.544-54.472-51.38-95.931-106.133-96h-1.813  l-87.936-87.915c-11.967-12.051-28.264-18.805-45.248-18.752H21.333C9.551,21.333,0,30.885,0,42.667S9.551,64,21.333,64h142.336  c5.655,0.015,11.075,2.261,15.083,6.251L236.501,128H106.667C47.786,128.071,0.071,175.786,0,234.667v170.667  C0.071,464.214,47.786,511.93,106.667,512h192c54.754-0.069,100.589-41.528,106.133-96l39.04,29.099  c18.851,14.138,45.595,10.318,59.733-8.533c5.539-7.385,8.533-16.368,8.533-25.6V229.184  C512.162,213.015,503.02,198.222,488.533,191.04z M362.667,405.333c0,35.346-28.654,64-64,64h-192c-35.346,0-64-28.654-64-64  V234.667c0-35.346,28.654-64,64-64h192c35.346,0,64,28.654,64,64V405.333z M469.333,410.816l-64-47.701v-86.229l64-47.701V410.816z"/>--}}
{{--</svg>--}}

{{--        </a>--}}
{{--        <a :class="{'active-menu-bottom':tabMobile==='itemFour'}" @click="tabMobile='itemFour'"--}}
{{--           class="item-menu-bottom">--}}
{{--            <svg xmlns="http://www.w3.org/2000/svg" id="Outline" viewBox="0 0 24 24" width="28" height="28">--}}
{{--                <path--}}
{{--                    d="M18.656.93,6.464,13.122A4.966,4.966,0,0,0,5,16.657V18a1,1,0,0,0,1,1H7.343a4.966,4.966,0,0,0,3.535-1.464L23.07,5.344a3.125,3.125,0,0,0,0-4.414A3.194,3.194,0,0,0,18.656.93Zm3,3L9.464,16.122A3.02,3.02,0,0,1,7.343,17H7v-.343a3.02,3.02,0,0,1,.878-2.121L20.07,2.344a1.148,1.148,0,0,1,1.586,0A1.123,1.123,0,0,1,21.656,3.93Z"/>--}}
{{--                <path--}}
{{--                    d="M23,8.979a1,1,0,0,0-1,1V15H18a3,3,0,0,0-3,3v4H5a3,3,0,0,1-3-3V5A3,3,0,0,1,5,2h9.042a1,1,0,0,0,0-2H5A5.006,5.006,0,0,0,0,5V19a5.006,5.006,0,0,0,5,5H16.343a4.968,4.968,0,0,0,3.536-1.464l2.656-2.658A4.968,4.968,0,0,0,24,16.343V9.979A1,1,0,0,0,23,8.979ZM18.465,21.122a2.975,2.975,0,0,1-1.465.8V18a1,1,0,0,1,1-1h3.925a3.016,3.016,0,0,1-.8,1.464Z"/>--}}
{{--            </svg>--}}
{{--        </a>--}}
{{--        <a :class="{'active-menu-bottom':tabMobile==='itemFive'}" @click="tabMobile='itemFive'"--}}
{{--           class="item-menu-bottom">--}}
{{--            <svg id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24" width="28" height="28">--}}
{{--                <path--}}
{{--                    d="M13,1a1,1,0,0,1,1-1A10.011,10.011,0,0,1,24,10a1,1,0,0,1-2,0,8.009,8.009,0,0,0-8-8A1,1,0,0,1,13,1Zm1,5a4,4,0,0,1,4,4,1,1,0,0,0,2,0,6.006,6.006,0,0,0-6-6,1,1,0,0,0,0,2Zm9.093,10.739a3.1,3.1,0,0,1,0,4.378l-.91,1.049c-8.19,7.841-28.12-12.084-20.4-20.3l1.15-1A3.081,3.081,0,0,1,7.26.906c.031.031,1.884,2.438,1.884,2.438a3.1,3.1,0,0,1-.007,4.282L7.979,9.082a12.781,12.781,0,0,0,6.931,6.945l1.465-1.165a3.1,3.1,0,0,1,4.281-.006S23.062,16.708,23.093,16.739Zm-1.376,1.454s-2.393-1.841-2.424-1.872a1.1,1.1,0,0,0-1.549,0c-.027.028-2.044,1.635-2.044,1.635a1,1,0,0,1-.979.152A15.009,15.009,0,0,1,5.9,9.3a1,1,0,0,1,.145-1S7.652,6.282,7.679,6.256a1.1,1.1,0,0,0,0-1.549c-.031-.03-1.872-2.425-1.872-2.425a1.1,1.1,0,0,0-1.51.039l-1.15,1C-2.495,10.105,14.776,26.418,20.721,20.8l.911-1.05A1.121,1.121,0,0,0,21.717,18.193Z"/>--}}
{{--            </svg>--}}
{{--        </a>--}}
{{--        <a :class="{'active-menu-bottom':tabMobile==='itemSix'}" @click="tabMobile='itemSix'" class="item-menu-bottom">--}}
{{--            <svg xmlns="http://www.w3.org/2000/svg" id="Outline" viewBox="0 0 24 24" width="28" height="28">--}}
{{--                <path--}}
{{--                    d="M12,0A12,12,0,1,0,24,12,12.013,12.013,0,0,0,12,0Zm0,22A10,10,0,1,1,22,12,10.011,10.011,0,0,1,12,22Z"/>--}}
{{--                <path d="M12,10H11a1,1,0,0,0,0,2h1v6a1,1,0,0,0,2,0V12A2,2,0,0,0,12,10Z"/>--}}
{{--                <circle cx="12" cy="6.5" r="1.5"/>--}}
{{--            </svg>--}}
{{--        </a>--}}
    </div>
</div>