<?php
class model extends CI_Model{

    function auth_petugas($username,$password){
        $query=$this->db->query("SELECT * FROM petugas WHERE id_petugas='$username' AND sandi=MD5('$password') LIMIT 1");
        return $query;
    }
    function auth_siswa($username,$password){
        $query=$this->db->query("SELECT * FROM siswa WHERE nisn='$username' AND sandi=MD5('$password') LIMIT 1");
        return $query;
    }
    function input($data,$pembayaran){
		$this->db->insert($pembayaran,$data);
	}
    
     //////////////  Model SISWA //////////////
    function updatesiswa($data,$siswa,$nisn){
        $this->db->where('nisn', $nisn);
		$this->db->update($siswa,$data);
	}
    public function deletesiswa($nisn){
        $this->db->delete('siswa', ['nisn' => $nisn]);
    }
    public function editsiswa($id){
        return $this->db->get_where('siswa',['nisn' => $id])->row();
    }

    //////////////  Model PETUGAS //////////////
    public function editpetugas($idpetugas){
        return $this->db->get_where('petugas',['id_petugas' => $idpetugas])->row();
    }
    function updatepetugas($data,$petugas,$idpetugas){
        $this->db->where('id_petugas', $idpetugas);
		$this->db->update($petugas,$data);
	}
    public function deletepetugas($idpetugas){
        $this->db->delete('petugas', ['id_petugas' => $idpetugas]);
    }    

     //////////////  Model KELAS //////////////
     public function editkelas($id_kelas){
        return $this->db->get_where('kelas',['id_kelas' => $id_kelas])->row();
    }
    function updatekelas($data,$kelas,$idkelas){
        $this->db->where('id_kelas', $idkelas);
		$this->db->update($kelas,$data);
	}
    public function deletekelas($idkelas){
        $this->db->delete('kelas', ['id_kelas' => $idkelas]);
    }


     //////////////  Model SPP //////////////

     public function editspp($id_spp){
        return $this->db->get_where('spp',['id_spp' => $id_spp])->row();
    }
    function updatespp($data,$spp,$idspp){
        $this->db->where('id_spp', $idspp);
		$this->db->update($spp,$data);
	}
    public function deletespp($idspp){
        $this->db->delete('spp', ['id_spp' => $idspp]);
    } 




}