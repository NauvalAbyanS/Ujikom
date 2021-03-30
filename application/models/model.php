<?php
class model extends CI_Model{

    function auth_petugas($username,$password){
        $query=$this->db->query("SELECT * FROM petugas WHERE id_petugas='$username' AND sandi=MD5('$password') LIMIT 1");
        return $query;
    }
 
    //cek nis dan sandi siswa
    function auth_siswa($username,$password){
        $query=$this->db->query("SELECT * FROM siswa WHERE nisn='$username' AND sandi=MD5('$password') LIMIT 1");
        return $query;
    }
 
}