<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Facades\Blade;

class Modal extends Component
{
    public $title;
    public $titleCentered;
    public $titleTag;

    public $saveBtnText;
    public $saveBtnType;
    public $saveBtnForm;
    public $onSaveBtnClick;
    public $saveBtnClass;
    public $showSaveBtn;

    public $closeBtnText;

    public $size;
    public $show;
    public $centered;
    public $showFooter;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        $title = null,
        $titleCentered = false,
        $titleTag = 'h4',

        $saveBtnText = null,
        $saveBtnType = null,
        $saveBtnForm = null,
        $onSaveBtnClick = '',
        $saveBtnClass = '',
        $showSaveBtn = true,

        $closeBtnText = null,

        $size = 'md',
        $show = false,
        $centered = true,
        $showFooter = true
    )
    {
        $this->title = $title;
        $this->titleCentered = $titleCentered;
        $this->titleTag = $titleTag;

        $this->saveBtnText = $saveBtnText;
        $this->saveBtnType = $saveBtnType;
        $this->saveBtnForm = $saveBtnForm;
        $this->onSaveBtnClick = $onSaveBtnClick;
        $this->saveBtnClass = $saveBtnClass;
        $this->showSaveBtn = $showSaveBtn;

        $this->size = $size;
        $this->show = $show;
        $this->centered = $centered;
        $this->showFooter = $showFooter;

        $this->closeBtnText = $closeBtnText;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.modal');
    }

    public function footerDefault()
    {
        return Blade::render('<button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">{{ $closeBtnText?? \'Close\' }}</button>
        @if ($showSaveBtn)
            <button type="{{ $saveBtnType?? \'button\' }}" form="{{ $saveBtnForm }}" class="{{ $saveBtnClass? $saveBtnClass:\'btn btn-primary\' }}" onclick="{{ $onSaveBtnClick }}">{{ $saveBtnText?? \'Save changes\' }}</button>
        @endif', [
            "closeBtnText" => $this->closeBtnText,
            "showSaveBtn" => $this->showSaveBtn,
            "saveBtnType" => $this->saveBtnType,
            "saveBtnForm" => $this->saveBtnForm,
            "saveBtnClass" => $this->saveBtnClass,
            "onSaveBtnClick" => $this->onSaveBtnClick,
            "saveBtnText" => $this->saveBtnText,
        ]);
    }

    public function closeBtn()
    {
        return Blade::render('<button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">{{ $closeBtnText?? \'Close\' }}</button>', [
            "closeBtnText" => $this->closeBtnText,
        ]);
    }

    public function saveBtn()
    {
        return Blade::render('
        @if ($showSaveBtn)
            <button type="{{ $saveBtnType?? \'button\' }}" form="{{ $saveBtnForm }}" class="{{ $saveBtnClass? $saveBtnClass:\'btn btn-primary\' }}" onclick="{{ $onSaveBtnClick }}">{{ $saveBtnText?? \'Save changes\' }}</button>
        @endif', [
            "showSaveBtn" => $this->showSaveBtn,
            "saveBtnType" => $this->saveBtnType,
            "saveBtnForm" => $this->saveBtnForm,
            "saveBtnClass" => $this->saveBtnClass,
            "onSaveBtnClick" => $this->onSaveBtnClick,
            "saveBtnText" => $this->saveBtnText,
        ]);
    }
}
