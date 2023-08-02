<?php

namespace App\Controllers;

use Lepton\Core\Application;
use Lepton\Controller\BaseController;
use Lepton\Boson\Model;
use Liquid\{Liquid, Template};
use Lepton\Authenticator\AccessControlAttributes\LoginRequired;
use Lepton\Http\HttpResponse;

class SiteController extends BaseController
{
    public string $baseLink = "";
    protected array $default_parameters = [];


    public function index()
    {
        return $this->render("index");
    }


}
