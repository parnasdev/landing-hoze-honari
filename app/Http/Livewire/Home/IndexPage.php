<?php

namespace App\Http\Livewire\Home;

use App\Models\Category;
use App\Models\Post;
use App\Models\Setting;
use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\View;
use Livewire\Component;
use Packages\multilang\src\WithMultiLang;

class IndexPage extends Component
{

    public $readyToLoad = false;

    public $form_code;

    public function loadPosts()
    {
        $this->readyToLoad = true;
    }

    public function mount()
    {
        $this->form_code = Setting::query()->where('name','form_code')->first();
        // dd($this->getCategory(1));
    }

    public function render()
    {
        // $posts = $this->readyToLoad ? Post::query()->where('post_type' , 'post')->where('status_id' , getStatus('publish'))->take(7)->get() : [];
        return view('livewire.home.index-page');
    }

    public function getCategory($type)
    {
        return Category::query()->where('category_type' , $type)->get();
    }
}
