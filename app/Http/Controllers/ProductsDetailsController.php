<?php

namespace App\Http\Controllers;

use App\Services\SiteService;
use Ellite\PageCompany\Services\PageCompanyService;

class ProductsDetailsController extends Controller
{
    public function index(SiteService $site, PageCompanyService $page)
    {
        

        return view('front.pages.products-details');
    }
}
