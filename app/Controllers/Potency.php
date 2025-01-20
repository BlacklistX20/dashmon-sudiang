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

class Potency extends BaseController
{
    protected $powerModel;
    protected $rackModel;
    protected $coolModel;
    protected $fireModel;
    protected $tankModel;
    protected $securityModel;
    protected $lightModel;
    protected $pumpModel;

    public function __construct()
    {
        $this->powerModel = new PowerModel();
        $this->rackModel = new RackModel();
        $this->coolModel = new CoolModel();
        $this->fireModel = new FireModel();
        $this->tankModel = new TankModel();
        $this->securityModel = new SecurityModel();
        $this->lightModel = new LightModel();
        $this->pumpModel = new PumpModel();
    }

    // for all data quantity
    public function dataQty()
    {
        $qty['power'] = $this->powerModel->getTotalData();
        $qty['pln'] = $this->powerModel->getTotalWhere('category', 'PLN');
        $qty['genset'] = $this->powerModel->getTotalWhere('category', 'Genset');
        $qty['cubicle'] = $this->powerModel->getTotalWhere('category', 'Cubicle');
        $qty['trafo'] = $this->powerModel->getTotalWhere('category', 'Trafo');
        $qty['recti'] = $this->powerModel->getTotalWhere('category', 'Rectifier');
        $qty['ups'] = $this->powerModel->getTotalWhere('category', 'UPS');
        $qty['panel'] = $this->powerModel->getTotalWhere('category', 'Panel');
        $qty['rack'] = $this->rackModel->getTotalData();
        $qty['it'] = $this->rackModel->getTotalWhere('category', 'IT');
        $qty['core'] = $this->rackModel->getTotalWhere('category', 'Core');
        $qty['radio'] = $this->rackModel->getTotalWhere('category', 'Radio');
        $qty['transmisi'] = $this->rackModel->getTotalWhere('category', 'Transmisi');
        $qty['cool'] = $this->coolModel->getTotalData();
        $qty['pac'] = $this->coolModel->getTotalWhere('category', 'PAC');
        $qty['split'] = $this->coolModel->getTotalWhere('category', 'AC Split');
        $qty['standing'] = $this->coolModel->getTotalWhere('category', 'AC Standing');
        $qty['fire'] = $this->fireModel->getTotalData();
        $qty['apar'] = $this->fireModel->getTotalWhere('category', 'APAR');
        $qty['fm200'] = $this->fireModel->getTotalWhere('category', 'FM200');
        $qty['hydrant'] = $this->fireModel->getTotalWhere('category', 'HYDRANT');
        $qty['tank'] = $this->tankModel->getTotalData();
        $qty['daily'] = $this->tankModel->getTotalWhere('name', 'Harian');
        $qty['monthly'] = $this->tankModel->getTotalWhere('name', 'Bulanan');
        $qty['security'] = $this->securityModel->getTotalData();
        $qty['light'] = $this->lightModel->getTotalData();
        $qty['pump'] = $this->pumpModel->getTotalData();

        return $this->response->setJSON($qty);
    }
    
    // for power potency
    public function getPowerById($id)
    {
        $data = $this->powerModel->getData($id);

        return $this->response->setJSON($data);
    }

    public function updatePower($id)
    {
        $request = $this->request->getPost();

        $this->powerModel->updateData($id, $request);
        return redirect()->back();
    }

    public function addPower()
    {
        $request = $this->request->getPost();

        $this->powerModel->insertData($request);
        return redirect()->back();
    }

    public function deletePower($id)
    {
        $this->powerModel->deleteData($id);

        return redirect()->back();
    }

    // for User potency
    public function getUserById($id)
    {
        $data = $this->rackModel->getData($id);

        return $this->response->setJSON($data);
    }

    public function updateUser($id)
    {
        $request = $this->request->getPost();

        $this->rackModel->updateData($id, $request);
        return redirect()->back();
    }

    public function addUser()
    {
        $request = $this->request->getPost();

        $this->rackModel->insertData($request);
        return redirect()->back();
    }

    public function deleteUser($id)
    {
        $this->rackModel->deleteData($id);

        return redirect()->back();
    }

    // for Cool potency
    public function getCoolById($id)
    {
        $data = $this->coolModel->getData($id);

        return $this->response->setJSON($data);
    }

    public function updateCool($id)
    {
        $request = $this->request->getPost();

        $this->coolModel->updateData($id, $request);
        return redirect()->back();
    }

    public function addCool()
    {
        $request = $this->request->getPost();

        $this->coolModel->insertData($request);
        return redirect()->back();
    }

    public function deleteCool($id)
    {
        $this->coolModel->deleteData($id);

        return redirect()->back();
    }

    // for Fire potency
    public function getFireById($id)
    {
        $data = $this->fireModel->getData($id);

        return $this->response->setJSON($data);
    }

    public function updateFire($id)
    {
        $request = $this->request->getPost();

        $this->fireModel->updateData($id, $request);
        return redirect()->back();
    }

    public function addFire()
    {
        $request = $this->request->getPost();

        $this->fireModel->insertData($request);
        return redirect()->back();
    }

    public function deleteFire($id)
    {
        $this->fireModel->deleteData($id);

        return redirect()->back();
    }

    // for Tank potency
    public function getTankById($id)
    {
        $data = $this->tankModel->getData($id);

        return $this->response->setJSON($data);
    }

    public function updateTank($id)
    {
        $request = $this->request->getPost();

        $this->tankModel->updateData($id, $request);
        return redirect()->back();
    }

    public function addTank()
    {
        $request = $this->request->getPost();

        $this->tankModel->insertData($request);
        return redirect()->back();
    }

    public function deleteTank($id)
    {
        $this->tankModel->deleteData($id);

        return redirect()->back();
    }

    // for Security potency
    public function getSecurityById($id)
    {
        $data = $this->securityModel->getData($id);

        return $this->response->setJSON($data);
    }

    public function updateSecurity($id)
    {
        $request = $this->request->getPost();

        $this->securityModel->updateData($id, $request);
        return redirect()->back();
    }

    public function addSecurity()
    {
        $request = $this->request->getPost();

        $this->securityModel->insertData($request);
        return redirect()->back();
    }

    public function deleteSecurity($id)
    {
        $this->securityModel->deleteData($id);

        return redirect()->back();
    }

    // for lighting potency
    public function getLightById($id)
    {
        $data = $this->lightModel->getData($id);

        return $this->response->setJSON($data);
    }

    public function updateLight($id)
    {
        $request = $this->request->getPost();

        $this->lightModel->updateData($id, $request);
        return redirect()->back();
    }

    public function addLight()
    {
        $request = $this->request->getPost();

        $this->lightModel->insertData($request);
        return redirect()->back();
    }

    public function deleteLight($id)
    {
        $this->lightModel->deleteData($id);

        return redirect()->back();
    }

    // for Pump potency
    public function getPumpById($id)
    {
        $data = $this->pumpModel->getData($id);

        return $this->response->setJSON($data);
    }

    public function updatePump($id)
    {
        $request = $this->request->getPost();

        $this->pumpModel->updateData($id, $request);
        return redirect()->back();
    }

    public function addPump()
    {
        $request = $this->request->getPost();

        $this->pumpModel->insertData($request);
        return redirect()->back();
    }

    public function deletePump($id)
    {
        $this->pumpModel->deleteData($id);

        return redirect()->back();
    }

}
