<?php namespace App\Controllers;

use App\Models\PortofolioModel;

class Admin extends BaseController
{
    public function dashboard()
    {
        return view('admin/dashboard');
    }

    public function login()
    {
        return view('admin/login');
    }

    public function authenticate()
    {
        return redirect()->to('admin/dashboard');
    }

    public function logout()
    {
        return redirect()->to('admin/login');
    }

    public function portofolio()
    {
        $model = new PortofolioModel();
        $data['portofolios'] = $model->findAll();
        return view('admin/portofolio', $data);
    }

    public function createPortofolio()
    {
        return view('admin/create');
    }

    public function storePortofolio()
    {
        $model = new PortofolioModel();
        $file = $this->request->getFile('gambar');
        $filename = $file->getRandomName();
        $file->move('uploads/', $filename);

        $model->save([
            'judul' => $this->request->getPost('judul'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'gambar' => $filename
        ]);

        return redirect()->to('admin/portofolio');
    }

    public function editPortofolio($id)
    {
        $model = new PortofolioModel();
        $data['portofolio'] = $model->find($id);
        return view('admin/edit', $data);
    }

    public function updatePortofolio($id)
    {
        $model = new PortofolioModel();
        $data = [
            'judul' => $this->request->getPost('judul'),
            'deskripsi' => $this->request->getPost('deskripsi')
        ];

        $file = $this->request->getFile('gambar');
        if ($file->isValid() && !$file->hasMoved()) {
            $filename = $file->getRandomName();
            $file->move('uploads/', $filename);
            $data['gambar'] = $filename;
        }

        $model->update($id, $data);
        return redirect()->to('admin/portofolio');
    }

    public function deletePortofolio($id)
    {
        $model = new PortofolioModel();
        $model->delete($id);
        return redirect()->to('admin/portofolio');
    }
}
