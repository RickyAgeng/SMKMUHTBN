<?php 
class M_ppdb extends CI_Model{

	function get_all_ppdb(){
		$hsl=$this->db->query("SELECT * FROM tbl_ppdb");
		return $hsl;
	}

	function simpan_ppdb($slider,$photo){
		$hsl=$this->db->query("INSERT INTO tbl_ppdb (is_slider_ppdb,gambar_ppdb) VALUES ('$slider','$photo')");
		return $hsl;
	}
	// function simpan_ppdb_tanpa_img($nip,$nama,$jenkel,$tmp_lahir,$tgl_lahir,$mapel){
	// 	$hsl=$this->db->query("INSERT INTO tbl_ppdb (guru_nip,guru_nama,guru_jenkel,guru_tmp_lahir,guru_tgl_lahir,guru_mapel) VALUES ('$nip','$nama','$jenkel','$tmp_lahir','$tgl_lahir','$mapel')");
	// 	return $hsl;
	// }

	function update_ppdb($slider,$photo){
		$hsl=$this->db->query("UPDATE tbl_ppdb SET is_slider_ppdb='$slider,gambar_ppdb='$photo' WHERE id_ppdb='$kode'");
		return $hsl;
	}
	// function update_ppdb_tanpa_img($kode,$nip,$nama,$jenkel,$tmp_lahir,$tgl_lahir,$mapel){
	// 	$hsl=$this->db->query("UPDATE tbl_ppdb SET guru_nip='$nip',guru_nama='$nama',guru_jenkel='$jenkel',guru_tmp_lahir='$tmp_lahir',guru_tgl_lahir='$tgl_lahir',guru_mapel='$mapel' WHERE guru_id='$kode'");
	// 	return $hsl;
	// }
	function hapus_ppdb($kode){
		$hsl=$this->db->query("DELETE FROM tbl_ppdb WHERE id_ppdb='$kode'");
		return $hsl;
	}

	//front-end
	function ppdb(){
		$hsl=$this->db->query("SELECT * FROM tbl_ppdb");
		return $hsl;
	}
	function ppdb_perpage($offset,$limit){
		$hsl=$this->db->query("SELECT * FROM tbl_ppdb limit $offset,$limit");
		return $hsl;
	}

}