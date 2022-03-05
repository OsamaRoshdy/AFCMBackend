<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\FAQ;
use App\Models\FAQMainPage;
use App\Models\MainPage;
use Illuminate\Http\Request;

class FAQController extends CommonController
{
    protected string $module = 'faqs';

    public function index(Request $request)
    {
        if ($request->ajax()) {
            return $this->makeDatatable(FAQ::latest(),$this->module, true);
        }
        $columns = [
            'id' => ['title' => 'ID', 'searchable' => false, 'orderable' => true],
            'question_' . app()->getLocale() => ['title' => __('common.question'), 'searchable' => true, 'orderable' => true],
            'status' => ['title' => __('common.status'), 'searchable' => true, 'orderable' => true],
        ];
        $html = $this->tableHtmlBuilder($this->htmlBuilder,$columns,true, true);
        return view('backend.' . $this->module . '.index', compact('html'))->with(['module' => $this->module]);
    }

    public function create()
    {
        $mainPages = MainPage::where('id', '!=', 4)->pluck('name_' . app()->getLocale(), 'id');
        return view('backend.' . $this->module . '.create', compact('mainPages'))
            ->with(['module' => $this->module, 'action' => 'create']);
    }

    public function store(Request $request)
    {
        $request->validate([
            'question_ar' => 'required',
            'question_en' => 'required',
            'answer_ar' => 'required',
            'answer_en' => 'required',
            'sort' => 'required',
        ]);
        $data = $request->except(['image_name', 'images']);
        $faq = FAQ::create($data);
        $this->syncMainPages($request->mainPages, $faq);
        toast(__('common.added_successfully'),'success','top-right');
        return redirect()->route('dashboard.' . $this->module . '.index');
    }

    public function edit($id)
    {
        $FAQ = FAQ::findOrFail($id);
        $mainPages = MainPage::where('id', '!=', 4)->pluck('name_' . app()->getLocale(), 'id');
        return view('backend.' . $this->module . '.edit', compact('mainPages', 'FAQ'))
            ->with(['module' => $this->module, 'action' => 'edit']);
    }

    public function update(Request $request,$id)
    {
        $FAQ = FAQ::findOrFail($id);

        $request->validate([
            'question_ar' => 'required',
            'question_en' => 'required',
            'answer_ar' => 'required',
            'answer_en' => 'required',
            'sort' => 'required',
        ]);
        $data = $request->except(['image_name', 'images']);
        $FAQ->update($data);
        $this->syncMainPages($request->mainPages, $FAQ);
        toast(__('common.updated_successfully'),'success','top-right');
        return redirect()->route('dashboard.' . $this->module . '.index');
    }

    public function destroy($id)
    {
        $FAQ = FAQ::findOrFail($id);

        $FAQ->delete();
        toast(__('common.deleted_successfully'),'success','top-right');
        return redirect()->route('dashboard.' . $this->module . '.index');
    }

    private function syncMainPages(?array $mainPages = [], FAQ $FAQ)
    {
        $blockCategories = FAQMainPage::where('faq_id', $FAQ->id);
        $blockCategories ? $blockCategories->delete() : false;
        foreach ($mainPages ?? [] as $page) {
            FAQMainPage::create([
                'main_page_id' => $page,
                'faq_id' => $FAQ->id,
            ]);
        }

    }
}
