<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Data_model;
class Beranda extends Controller{
	public function index(){
		$data['title'] = 'Tugas CodeIgniter 4';
		$data['author']  = 'Ikhya Ulummuddin, 20081010120';

		$model = new Data_model;
		$data['getKaryawan'] = $model->getKaryawan();
		echo view('beranda_view', $data);
	}

	public function tambah(){
		$data['title'] = 'Tugas CodeIgniter 4';
		$data['author']  = 'Ikhya Ulummuddin, 20081010120';
		echo view('tambah_view', $data);
	}

	public function add(){
		$model = new Data_model;
		$data = array(
			'nama' => $this->request->getPost('nama'),
			'umur' => $this->request->getPost('umur'),
			'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
			'role' => $this->request->getPost('role'),
		);
		$model->saveKaryawan($data);
		echo '<script>
			alert("Data berhasil disimpan!");
			window.location="'.base_url('').'"
		</script>';
	}

	public function edit($id){
		$model = new Data_model;
		$getKaryawan = $model->getKaryawan($id)->getRow();
		if(isset($getKaryawan)){
			$data['datak'] = $getKaryawan;
			$data['title'] = 'Edit '.$getKaryawan->nama;
			$data['author']  = 'Ikhya Ulummuddin, 20081010120';
			echo view('edit_view', $data);
		}else{
			echo '<script>
				alert("Data tidak ditemukan");
				window.location="'.base_url('').'"
			</script>';
		}
	}

	public function update(){
		$model = new Data_model;
		$id = $this->request->getPost('id');
		$data = array(
			'nama' => $this->request->getPost('nama'),
			'umur' => $this->request->getPost('umur'),
			'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
			'role' => $this->request->getPost('role'),
		);
		$model->editKaryawan($data, $id);
		echo '<script>
			alert("Data berhasil diedit!");
			window.location="'.base_url('').'"
		</script>';
	}
}

?>