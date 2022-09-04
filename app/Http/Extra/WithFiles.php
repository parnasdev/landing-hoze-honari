<?php

namespace App\Http\Extra;

trait WithFiles
{
    public array $files = [];
    public array $deletedFiles = [];

    public function deleteFile($index = null)
    {
        if (!is_null($index)) {
            $beforeDeletedFileMethod = 'removeDBFiles';

            if (method_exists($this, $beforeDeletedFileMethod)) {
                $this->{$beforeDeletedFileMethod}($index);
            }

            array_splice($this->files , $index , 1);
        } else {
            $beforeDeletedFileMethod = 'removeDBFiles';

            if (method_exists($this, $beforeDeletedFileMethod)) {
                $this->{$beforeDeletedFileMethod}();
            }

            $this->files = [
                'id' => null,
                'url' => null,
                'type' => null,
                'alt' => null,
            ];
        }
    }

    public function editFile($index = null)
    {

        if (!is_null($index))
            $this->emit('getData' , ['value' => $this->files[$index] , 'index' => $index]);
        else
            $this->emit('getData' , ['value' => $this->files , 'index' => $index]);

        $this->dispatchBrowserEvent('open-modal' , ['name' => 'editFileUpdate']);
    }

    public function changeFile($e)
    {
        if (!is_null($e['index']))
            collect($this->files)->put($e['index'] , $e['value']);
        else
            $this->files = array_merge($this->files , $e['value']);

        $this->dispatchBrowserEvent('toastMessage' , ['message' => 'فایل شما آپدیت شد.' , 'icon' => 'success']);
    }

    public function openFileManager($file_type , $maxItems , $type = 'all')
    {
        $this->emit('getData_fileManager' , ['maxItems' => $maxItems , 'file_type' => $file_type , 'direction' => 'posts' , 'type' => $type]);
        $this->dispatchBrowserEvent('open-modal', ['name' => 'uploader']);
    }

}
