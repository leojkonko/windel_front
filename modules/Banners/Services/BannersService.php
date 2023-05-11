<?php

namespace Ellite\Banners\Services;

use Ellite\Banners\Models\Banner;

class BannersService
{
    public function getBanners()
    {
        $banners = Banner::where('active', 1)
            ->withTranslation()
            ->orderBy('order')
            ->get();
        
        $banners = $banners->filter(
            fn($b) => $b->bannerDesktop->count() > 0,
        );
        
        return $banners;
    }
}
