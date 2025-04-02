<?php

namespace App\Controllers;

use App\Models\KatModel;
use App\Models\PostinganModel;
use App\Models\DocModel;

class Front extends BaseController
{
	protected  $modelName = 'App\Models\PostinganModel';
	public function index()
	{
		// $pager = \Config\Services::pager();
		$request = service('request');
		$searchData = $request->getGet();

		$search = "";
		if (isset($searchData) && isset($searchData['search'])) {
			$search = $searchData['search'];
		}

		// Get data 
		$postinganModel = new PostinganModel();

		if ($search == '') {
			$paginateData = $postinganModel->orderBy('tgl_posting', 'desc')->paginate(2);
		} else {
			$paginateData = $postinganModel->select('*')
				->orLike('judul', $search)->orderBy('tgl_posting', 'desc')
				->paginate(2);
		}

		// $postinganModel = new PostinganModel();

		$this->db      = \Config\Database::connect();

		$datakat = $this->db->query("SELECT tb_kat.*,count(tb_postingan.cat) as jumlah from tb_kat LEFT JOIN tb_postingan on tb_kat.id_cat=tb_postingan.cat group by tb_kat.id_cat")->getResult();
		$datapertahun = $this->db->query("SELECT year(tgl_posting) as tahun, count(year(tgl_posting)) as jumlah from tb_postingan GROUP BY year (tgl_posting)")->getResult();


		$data = [
			'title_meta' => view('partials/z-title-meta', ['title' => 'Dashboard']),
			'page_title' => view('partials/z-page-title', ['title' => 'Dashboard', 'pagetitle' => 'Dashboards']),
			'data_postingan' => $paginateData,
			'pager' => $postinganModel->pager,
			'search' => $search,
			'datakat' => $datakat,
			'datapertahun' => $datapertahun
		];
		return view('Front/main-layout', $data);
	}

	public function profil_pejabat()
	{
		$data = [
			'title_meta' => view('partials/z-title-meta', ['title' => 'Tentang Kami']),
			'page_title' => view('partials/z-page-title', ['title' => 'Profil Pejabat', 'pagetitle' => 'Tentang Kami']),

		];
		return view('Front/profil-pejabat', $data);
	}

	public function profil_tendik()
	{
		$data = [
			'title_meta' => view('partials/z-title-meta', ['title' => 'Tentang Kami']),
			'page_title' => view('partials/z-page-title', ['title' => 'Profil Tendik', 'pagetitle' => 'Tentang Kami']),

		];
		return view('Front/profil-tendik', $data);
	}
	public function sejarah_lp2mi()
	{
		$data = [
			'title_meta' => view('partials/z-title-meta', ['title' => 'Tentang Kami']),
			'page_title' => view('partials/z-page-title', ['title' => 'sejarah lp2mi', 'pagetitle' => 'Tentang Kami']),

		];
		return view('Front/sejarah-lp2mi', $data);
	}
	public function tugas_pokok()
	{
		$data = [
			'title_meta' => view('partials/z-title-meta', ['title' => 'Tentang Kami']),
			'page_title' => view('partials/z-page-title', ['title' => 'Tugas Pokok', 'pagetitle' => 'Tentang Kami']),

		];
		return view('Front/tugas-pokok', $data);
	}
	public function struktur_organisasi()
	{
		$data = [
			'title_meta' => view('partials/z-title-meta', ['title' => 'Tentang Kami']),
			'page_title' => view('partials/z-page-title', ['title' => 'Struktur Organisasi', 'pagetitle' => 'Tentang Kami']),

		];
		return view('Front/struktur-organisasi', $data);
	}
	public function visi_dan_misi()
	{
		$data = [
			'title_meta' => view('partials/z-title-meta', ['title' => 'Tentang Kami']),
			'page_title' => view('partials/z-page-title', ['title' => 'Visi dan Misi', 'pagetitle' => 'Tentang Kami']),

		];
		return view('Front/visi-dan-misi', $data);
	}
	public function kebijakan_mutu()
	{
		$data = [
			'title_meta' => view('partials/z-title-meta', ['title' => 'Tentang Kami']),
			'page_title' => view('partials/z-page-title', ['title' => 'Kebijakan Mutu', 'pagetitle' => 'Tentang Kami']),

		];
		return view('Front/kebijakan-mutu', $data);
	}
	public function peraturan_yayasan()
	{
		$docModel = new DocModel();
		$datadoc = $docModel->where("kat_doc", 3)->findAll();

		$data = [
			'title_meta' => view('partials/z-title-meta', ['title' => 'Tentang Kami']),
			'page_title' => view('partials/z-page-title', ['title' => 'Kebijakan Mutu', 'pagetitle' => 'Tentang Kami']),
			'data_doc' => $datadoc


		];
		return view('Front/peraturan-yayasan', $data);
	}
		public function peraturan_menteri()
	{
		$docModel = new DocModel();
		$datadoc = $docModel->where("kat_doc", 9)->findAll();

		$data = [
			'title_meta' => view('partials/z-title-meta', ['title' => 'Tentang Kami']),
			'page_title' => view('partials/z-page-title', ['title' => 'Kebijakan Mutu', 'pagetitle' => 'Tentang Kami']),
			'data_doc' => $datadoc


		];
		return view('Front/peraturan-menteri', $data);
	}
	public function peraturan_universitas()
	{
		$docModel = new DocModel();
		$datadoc = $docModel->where("kat_doc", 5)->findAll();

		$data = [
			'title_meta' => view('partials/z-title-meta', ['title' => 'Tentang Kami']),
			'page_title' => view('partials/z-page-title', ['title' => 'Kebijakan Mutu', 'pagetitle' => 'Tentang Kami']),
			'data_doc' => $datadoc


		];
		return view('Front/peraturan-universitas', $data);
	}

	public function peraturan_rektor()
	{
		$docModel = new DocModel();
		$datadoc = $docModel->where("kat_doc", 4)->findAll();

		$data = [
			'title_meta' => view('partials/z-title-meta', ['title' => 'Tentang Kami']),
			'page_title' => view('partials/z-page-title', ['title' => 'Kebijakan Mutu', 'pagetitle' => 'Tentang Kami']),
			'data_doc' => $datadoc


		];
		return view('Front/peraturan-rektor', $data);
	}
	public function renstra()
	{
		$docModel = new DocModel();
		$datadoc = $docModel->where("kat_doc", 6)->findAll();

		$data = [
			'title_meta' => view('partials/z-title-meta', ['title' => 'Tentang Kami']),
			'page_title' => view('partials/z-page-title', ['title' => 'Rencana Strategis', 'pagetitle' => 'Tentang Kami']),
			'data_doc' => $datadoc


		];
		return view('Front/renstra', $data);
	}
	public function standar_pendidikan_tinggi()
	{
		$docModel = new DocModel();
		$datadoc = $docModel->where("kat_doc", 7)->findAll();

		$data = [
			'title_meta' => view('partials/z-title-meta', ['title' => 'Tentang Kami']),
			'page_title' => view('partials/z-page-title', ['title' => 'Kebijakan Mutu', 'pagetitle' => 'Tentang Kami']),
			'data_doc' => $datadoc


		];
		return view('Front/standar-pendidikan-tinggi', $data);
	}
	public function readfolder()
	{
		$data = [
			'title_meta' => view('partials/z-title-meta', ['title' => 'Tentang Kami']),
			'page_title' => view('partials/z-page-title', ['title' => 'Kebijakan Mutu', 'pagetitle' => 'Tentang Kami']),

		];
		return view('Front/readfolder', $data);
	}

	public function blogdetail($id)
	{
		// $id = '';
		// $request = service('request');
		// $idData = $request->getGet();
		// if (isset($idData)) {
		// 	$id = $idData['id'];
		// }

		// echo $id;
		$postinganModel = new PostinganModel();


		if ($id == "") {
			$datapostingan = '';
		} else {
			$datapostingan = $postinganModel->select('*')
				->where('id', $id)->get()->getResult();
		}

		// print_r($datapostingan);
		$data = [
			'title_meta' => view('partials/z-title-meta', ['title' => 'Detail ']),
			'page_title' => view('partials/z-page-title', ['title' => 'Detail', 'pagetitle' => 'Detail']),
			'data_postingan' => $datapostingan,
		];
		return view('Front/detail-blog', $data);
	}

	public function download_file()
	{
		$docModel = new DocModel();
		$datadoc = $docModel->findAll();


		$data = [
			'title_meta' => view('partials/z-title-meta', ['title' => 'Download File ']),
			'page_title' => view('partials/z-page-title', ['title' => 'Dowload File', 'pagetitle' => 'Download']),
			'data_doc' => $datadoc

		];
		return view('Front/download-file', $data);
	}

	public function formulir_audit()
	{
		$docModel = new DocModel();
		$datadoc = $docModel->findAll();


		$data = [
			'title_meta' => view('partials/z-title-meta', ['title' => 'LP2MI UNIFA ']),
			'page_title' => view('partials/z-page-title', ['title' => 'Formulir Audit', 'pagetitle' => 'Formulir']),
			'data_doc' => $datadoc

		];
		return view('Front/formulir-audit', $data);
	}

	public function audit()
	{
		$docModel = new DocModel();
		$datadoc = $docModel->findAll();


		$data = [
			'title_meta' => view('partials/z-title-meta', ['title' => 'LP2MI UNIFA ']),
			'page_title' => view('partials/z-page-title', ['title' => 'Audit', 'pagetitle' => 'Audit']),
			'data_doc' => $datadoc

		];
		return view('Front/audit', $data);
	}

	public function monitoring_dan_evaluasi()
	{
		$docModel = new DocModel();
		$datadoc = $docModel->findAll();


		$data = [
			'title_meta' => view('partials/z-title-meta', ['title' => 'LP2MI UNIFA ']),
			'page_title' => view('partials/z-page-title', ['title' => 'Monitoring dan Evaluasi', 'pagetitle' => 'Monev']),
			'data_doc' => $datadoc

		];
		return view('Front/monev', $data);
	}



	public function show_dashboard_saas()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Saas Dashboard']),
			'page_title' => view('partials/page-title', ['title' => 'Saas', 'pagetitle' => 'Dashboards'])
		];
		return view('Front/dashboard-saas', $data);
	}

	public function show_dashboard_crypto()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Crypto Dashboard']),
			'page_title' => view('partials/page-title', ['title' => 'Crypto', 'pagetitle' => 'Dashboards'])
		];
		return view('Front/dashboard-crypto', $data);
	}

	public function show_dashboard_blog()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Blog Dashboard']),
			'page_title' => view('partials/page-title', ['title' => 'Blog', 'pagetitle' => 'Dashboards'])
		];
		return view('Front/dashboard-blog', $data);
	}

	public function show_layouts_horizontal()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Horizontal Layout']),
			'page_title' => view('partials/page-title', ['title' => 'Horizontal Layout', 'pagetitle' => 'Layouts'])
		];
		return view('Front/layouts-horizontal', $data);
	}

	public function show_layouts_vertical()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Vertical Layout']),
			'page_title' => view('partials/page-title', ['title' => 'Vertical Layout', 'pagetitle' => 'Layouts'])
		];
		return view('Front/layouts-vertical', $data);
	}

	public function show_layouts_light_sidebar()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Light Sidebar']),
			'page_title' => view('partials/page-title', ['title' => 'Light Sidebar', 'pagetitle' => 'Layouts'])
		];
		return view('Front/layouts-light-sidebar', $data);
	}

	public function show_layouts_compact_sidebar()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Compact Sidebar']),
			'page_title' => view('partials/page-title', ['title' => 'Compact Sidebar', 'pagetitle' => 'Layouts'])
		];
		return view('Front/layouts-compact-sidebar', $data);
	}

	public function show_layouts_icon_sidebar()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Icon Sidebar']),
			'page_title' => view('partials/page-title', ['title' => 'Icon Sidebar', 'pagetitle' => 'Layouts'])
		];
		return view('Front/layouts-icon-sidebar', $data);
	}

	public function show_layouts_boxed()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Boxed Width']),
			'page_title' => view('partials/page-title', ['title' => 'Boxed Width', 'pagetitle' => 'Layouts'])
		];
		return view('Front/layouts-boxed', $data);
	}

	public function show_layouts_preloader()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Preloader Layout']),
			'page_title' => view('partials/page-title', ['title' => 'Preloader', 'pagetitle' => 'Layouts'])
		];
		return view('Front/layouts-preloader', $data);
	}

	public function show_layouts_colored_sidebar()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Colored Sidebar']),
			'page_title' => view('partials/page-title', ['title' => 'Colored Sidebar', 'pagetitle' => 'Layouts'])
		];
		return view('Front/layouts-colored-sidebar', $data);
	}

	public function show_layouts_scrollable()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Scrollable']),
			'page_title' => view('partials/page-title', ['title' => 'Scrollable', 'pagetitle' => 'Layouts'])
		];
		return view('Front/layouts-scrollable', $data);
	}

	public function show_layouts_hori_topbar_light()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Horizontal Topbar Light']),
			'page_title' => view('partials/page-title', ['title' => 'Horizontal Topbar Light', 'pagetitle' => 'Layouts'])
		];
		return view('Front/layouts-hori-topbar-light', $data);
	}

	public function show_layouts_hori_boxed_width()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Horizontal Boxed Width']),
			'page_title' => view('partials/page-title', ['title' => 'Horizontal Boxed Width', 'pagetitle' => 'Layouts'])
		];
		return view('Front/layouts-hori-boxed-width', $data);
	}

	public function show_layouts_hori_preloader()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Horizontal Preloader Layout']),
			'page_title' => view('partials/page-title', ['title' => 'Horizontal Preloader Layout', 'pagetitle' => 'Layouts'])
		];
		return view('Front/layouts-hori-preloader', $data);
	}

	public function show_layouts_hori_colored_header()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Horizontal Topbar Colored']),
			'page_title' => view('partials/page-title', ['title' => 'Horizontal Topbar Colored', 'pagetitle' => 'Layouts'])
		];
		return view('Front/layouts-hori-colored-header', $data);
	}

	public function show_layouts_hori_scrollable()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Horizontal Scrollable Layout']),
			'page_title' => view('partials/page-title', ['title' => 'Horizontal Scrollable Layout', 'pagetitle' => 'Layouts'])
		];
		return view('Front/layouts-hori-scrollable', $data);
	}

	//--------------------------------------------------------------------

}
