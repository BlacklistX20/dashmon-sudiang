<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PowerModel;
use App\Models\RackModel;
use App\Models\CoolModel;
use App\Models\FireModel;
use App\Models\TankModel;
use App\Models\SecurityModel;
use App\Models\LightModel;
use App\Models\PumpModel;

class Pages extends BaseController
{
    protected $powerModel;
    protected $rackModel;
    protected $coolModel;
    protected $fireModel;
    protected $tankModel;
    protected $securityModel;
    protected $lightModel;
    protected $pumpModel;

    public function index()
    {
        return view('pages\home');
    }

    public function temp()
    {
        return view('pages\temp');
    }

    public function electric()
    {
        return view('pages\electric');
    }

    public function fuel()
    {
        return view('pages\fuel');
    }

    public function potency(string $subPage)
    {
        $this->powerModel = new PowerModel();
        $this->rackModel = new RackModel();
        $this->coolModel = new CoolModel();
        $this->fireModel = new FireModel();
        $this->tankModel = new TankModel();
        $this->securityModel = new SecurityModel();
        $this->lightModel = new LightModel();
        $this->pumpModel = new PumpModel();

        switch ($subPage) {
            case 'home':
                return view('pages\potency');
                break;
            case 'power':
                $data['power'] = $this->powerModel->getData();
                return view('pages\potency\power', $data);
                break;
            case 'user':
                $data['rack'] = $this->rackModel->getData();
                return view('pages\potency\user', $data);
                break;
            case 'cooling':
                $data['cool'] = $this->coolModel->getData();
                return view('pages\potency\cooling', $data);
                break;
            case 'fire':
                $data['fire'] = $this->fireModel->getData();
                return view('pages\potency\fire', $data);
                break;
            case 'tank':
                $data['tank'] = $this->tankModel->getData();
                return view('pages\potency\tank', $data);
                break;
            case 'security':
                $data['security'] = $this->securityModel->getData();
                return view('pages\potency\security', $data);
                break;
            case 'lighting':
                $data['light'] = $this->lightModel->getData();
                return view('pages\potency\lighting', $data);
                break;
            // case 'safety':
            //     return view('pages\potency\safety');
            //     break;
            case 'pump':
                $data['pump'] = $this->pumpModel->getData();
                return view('pages\potency\pump', $data);
                break;
            // case 'furniture':
            //     return view('pages\potency\furniture');
            //     break;
            // case 'finishing':
            //     return view('pages\potency\finishing');
            //     break;
            // case 'transport':
            //     return view('pages\potency\transport');
            //     break;
            default:
                return view('pages\potency');
                break;
        }
    }

    public function space()
    {
        return view('pages\space');
    }
}
