<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $this->load->helper(array('form'));

        $data['title'] = 'Login Page';


        $this->load->view('templates/header', $data);
        $this->load->view('login', $data);
        $this->load->view('templates/footer');
    }

    function verifylogin()
    {
        //This method will have the credentials validation
        $this->load->library('form_validation');

        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if($this->form_validation->run() == FALSE)
        {
            //Field validation failed.  User redirected to login page
            $data['title'] = 'Login Page';
            $this->load->view('login', $data);
        }
        else
        {
            //Go to private area
            redirect('news');
        }
    }



}

?>