<?php

namespace App\Http\Controllers;

use App\Services\SiteService;
use Ellite\PageCompany\Services\PageCompanyService;

class BlogDetalheController extends Controller
{
    public function detalhes(SiteService $site, PageCompanyService $page)
    {
        

        return view('front.pages.blog_details');
    }
}
