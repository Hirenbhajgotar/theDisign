<?php
class Admin extends MY_Controller
{
    public function index()
    {
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


    public function deshbord()
    {
        $this->load->view('Admin/Deshbord');
    }








}


?>