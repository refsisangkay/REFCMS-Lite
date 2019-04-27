<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Auth_model extends CI_Model {
    public function __construct()
    {
        parent::__construct();
    }

    public function check()
    {
        // cek jika sudah login
        if(!$this->session->userdata('logged_in')){
            $msg = "Anda harus login dahulu!";
            $this->session->set_flashdata('msg', array('type' => 'error', 'message' => $msg));
            redirect('auth/login', 'refresh');
        }
    }

    public function logged_in()
    {
        // cek jika sudah login
        if($this->session->userdata('logged_in')){
            redirect('home', 'refresh');
        }
    }

    public function login($username = null, $password = null)
    {
        // validasi login
        if($username != null && $password != null)
        {
            // jika username dan password tidak kosong
            
            if(false){
                // jika login sukses
                $data = array();
                $this->session->set_userdata($data);
                redirect('home', 'refresh');
            }else {
                // login gagal
                $msg = "Username atau Password salah!";
                $this->session->set_flashdata('msg', array('type' => 'error', 'message' => $msg));
                redirect('auth/login', 'refresh');
            }
        }else {
            $msg = "Username dan Password tidak boleh kosong!";
            $this->session->set_flashdata('msg', array('type' => 'error', 'message' => $msg));
            redirect('auth/login', 'refresh');
        }
    }

    private function clean($str)
    {
        // fungsi escape string
        return $str;
    }
}