<?php
class Admin extends MY_Controller
{
// -----------------business logic for admin login ---------------
    public function index()
    {

        if($this->session->userdata('id')){
            return redirect('admin/deshbord');
        }
        // $this->form_validation->set_error_delimiters('<div class="red-text text-accent-2"></div>');
        if($this->form_validation->run('admin_login_rules')){

            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $this->load->model('Login_model');
            $id = $this->Login_model->admin_login($username, $password);

            if($id){
                $this->session->set_userdata('id', $id);
                return redirect('Admin/deshbord');
            }
            else{
                $this->session->set_flashdata('error_msg', 'INVALID USERNAME or PASSWORD');
                return redirect('Admin/index');
            }

        }
        else{
            // echo "false";
            $this->load->view('admin/login_page');
        }
        
    }
// -------------------------------------------------------------------

    public function deshbord()
    {
        if(! $this->session->userdata('id')){
            return redirect('admin/index');
        }
        $this->load->view('Admin/Deshbord');
    }


    public function logout()
    {
        // echo "okk";
        $this->session->unset_userdata('id');
        return redirect('admin');
    }

    public function signup()
    {
        $this->load->view('admin/signup');
    }








}


?>