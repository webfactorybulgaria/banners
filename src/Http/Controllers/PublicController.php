<?php

namespace TypiCMS\Modules\Bannerplaces\Http\Controllers;

use TypiCMS\Modules\Core\Http\Controllers\BasePublicController;
use TypiCMS\Modules\Bannerplaces\Repositories\BannerplaceInterface;

class PublicController extends BasePublicController
{
    public function __construct(BannerplaceInterface $bannerplace)
    {
        parent::__construct($bannerplace);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $models = $this->repository->all();

        return view('bannerplaces::public.index')
            ->with(compact('models'));
    }

    /**
     * Show news.
     *
     * @return \Illuminate\View\View
     */
    public function show($slug)
    {
        $model = $this->repository->bySlug($slug);

        return view('bannerplaces::public.show')
            ->with(compact('model'));
    }
}