<?php

namespace Babavoss\ReaderShop\Controllers\Admin;

use Babavoss\ReaderShop\Commons\Controller;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $this->renderViewAdmin(__FUNCTION__);
    }
}
