<?php namespace App\Controllers;

use App\Models\PortofolioModel;

class Home extends BaseController
{
    public function index()
    {
        $portofolioModel = new PortofolioModel();
        $data['portofolios'] = $portofolioModel->findAll(); // Ambil semua data portofolio

        echo view('templates/header', $data);
        echo view('home_view', $data);
        echo view('templates/footer');
    }
}