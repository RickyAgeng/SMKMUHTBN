<?php
class M_tulisanahli extends CI_Model{

	function get_all_tulisanahli(){
		$hsl=$this->db->query("SELECT tbl_tulisanahli.*,DATE_FORMAT(tulisanahli_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_tulisanahli ORDER BY tulisanahli_id DESC");
		return $hsl;
	}
	function simpan_tulisanahli($judul,$isi,$kategori_id,$kategori_nama,$imgslider,$user_id,$user_nama,$gambar,$slug){
		$hsl=$this->db->query("insert into tbl_tulisanahli(tulisanahli_judul,tulisanahli_isi,tulisanahli_kategori_id,tulisanahli_kategori_nama,tulisanahli_img_slider,tulisanahli_pengguna_id,tulisanahli_author,tulisanahli_gambar,tulisanahli_slug) values ('$judul','$isi','$kategori_id','$kategori_nama','$imgslider','$user_id','$user_nama','$gambar','$slug')");
		return $hsl;
	}
	function get_tulisanahli_by_kode($kode){
		$hsl=$this->db->query("SELECT tbl_tulisanahli.*,DATE_FORMAT(tulisanahli_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_tulisanahli where tulisanahli_id='$kode'");
		return $hsl;
	}
	function update_tulisanahli($tulisan_id,$judul,$isi,$kategori_id,$kategori_nama,$imgslider,$user_id,$user_nama,$gambar,$slug){
		$hsl=$this->db->query("update tbl_tulisanahli set tulisanahli_judul='$judul',tulisanahli_isi='$isi',tulisanahli_kategori_id='$kategori_id',tulisanahli_kategori_nama='$kategori_nama',tulisanahli_img_slider='$imgslider',tulisanahli_pengguna_id='$user_id',tulisanahli_author='$user_nama',tulisanahli_gambar='$gambar',tulisanahli_slug='$slug' where tulisanahli_id='$tulisan_id'");
		return $hsl;
	}
	function update_tulisanahli_tanpa_img($tulisan_id,$judul,$isi,$kategori_id,$kategori_nama,$imgslider,$user_id,$user_nama,$slug){
		$hsl=$this->db->query("update tbl_tulisanahli set tulisanahli_judul='$judul',tulisanahli_isi='$isi',tulisanahli_kategori_id='$kategori_id',tulisanahli_kategori_nama='$kategori_nama',tulisanahli_img_slider='$imgslider',tulisanahli_pengguna_id='$user_id',tulisanahli_author='$user_nama',tulisanahli_slug='$slug' where tulisanahli_id='$tulisan_id'");
		return $hsl;
	}
	function hapus_tulisanahli($kode){
		$hsl=$this->db->query("delete from tbl_tulisanahli where tulisanahli_id='$kode'");
		return $hsl;
	}

	//Front-End
	function get_keahlian_slider(){
		$hsl=$this->db->query("SELECT tbl_tulisanahli.*,DATE_FORMAT(tulisanahli_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_tulisanahli where tulisan_img_slider='1' ORDER BY tulisanahli_id DESC");
		return $hsl;
	}
	function get_keahlian_home(){
		$hsl=$this->db->query("SELECT tbl_tulisanahli.*,DATE_FORMAT(tulisanahli_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_tulisanahli ORDER BY tulisanahli_id DESC limit 4");
		return $hsl;
	}

	function keahlian_perpage($offset,$limit){
		$hsl=$this->db->query("SELECT tbl_tulisanahli.*,DATE_FORMAT(tulisanahli_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_tulisanahli ORDER BY tulisanahli_id DESC limit $offset,$limit");
		return $hsl;
	}

	function keahlian(){
		$hsl=$this->db->query("SELECT tbl_tulisanahli.*,DATE_FORMAT(tulisanahli_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_tulisanahli ORDER BY tulisanahli_id DESC");
		return $hsl;
	}
	function get_keahlian_by_kode($kode){
		$hsl=$this->db->query("SELECT tbl_tulisanahli.*,DATE_FORMAT(tulisanahli_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_tulisanahli where tulisanahli_id='$kode'");
		return $hsl;
	}

	function cari_keahlian($keyword){
		$hsl=$this->db->query("SELECT tbl_tulisanahli.*,DATE_FORMAT(tulisanahli_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_tulisanahli WHERE tulisanahli_judul LIKE '%$keyword%' LIMIT 5");
		return $hsl;
	}

	function show_komentar_by_tulisan_id($kode){
		$hsl=$this->db->query("SELECT * FROM tbl_komentar WHERE komentar_tulisan_id='$kode' AND komentar_status='1' AND komentar_parent='0'");
		return $hsl;
	}


}
