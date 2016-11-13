<?php
class Staff extends CI_Controller {
    public function __construct() {
        parent::__construct();
        // if not logged in yet -> redirect to login
        if ( ! $this->session->userdata('logged_in')) { 
            $allowed = array (
                'login',
                'signup'
            );
            // except: login and signup: no redirect
            if ( ! (in_array($this->router->fetch_method(), $allowed))) {
                redirect('login');
            }
        }
    }

    public function index() {
        $user = $this->user_model->get_user_by_id($this->session->userdata('id'));
        $data = array (
            'page_title' => $user[0]->username,

            'id' => $user[0]->id,
            'username' => $user[0]->username,
            'email' => $user[0]->email,
            'avatar' => 'avatar/' . $user[0]->avatar,
            'fullname' => $user[0]->fullname,
            'title' => $user[0]->title,
            'position' => $user[0]->position,
            'affiliation' => $user[0]->affiliation
        );

        if ($user[0]->isAdmin == 1) {
            redirect('admin');
        }

        $data['publication'] = $this->user_model->get_publication($data['id']);
        $data['student'] = $this->user_model->get_student($data['id']);
        $data['research'] = $this->user_model->get_research($data['id']);

        $this->load->view('template/header', $data);
        $this->load->view("staff/home");
        $this->load->view('template/footer');
    }

    public function update_profile() {
        $user = $this->user_model->get_user_by_id($this->session->userdata('id'));
        $data = array (
            'page_title' => 'Update Profile',

            'id' => $user[0]->id,
            'username' => $user[0]->username,
            'email' => $user[0]->email,
            'avatar' => 'avatar/' . $user[0]->avatar,
            'fullname' => $user[0]->fullname,
            'title' => $user[0]->title,
            'position' => $user[0]->position,
            'affiliation' => $user[0]->affiliation
        );

        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view("staff/update_profile", $data);
            $this->load->view('template/footer');
        }
        else {
            $data = array (
                'id' => $this->session->userdata('id'),
                'username' => $this->input->post('username'),
                'email' => $this->input->post('email'),
                'fullname' => $this->input->post('fullname'),
                'title' => $this->input->post('title'),
                'position' => $this->input->post('position'),
                'affiliation' => $this->input->post('affiliation')
            );
            $this->user_model->updateProfile($data);

            $this->session->set_flashdata('msg','<div class="alert alert-success text-center">You have successfully updated your profile.</div>');

            redirect('');            
        }
    }

    public function publication() {
        $data['page_title'] = 'List of publications';

        $crud = new grocery_CRUD();
        $crud->where('id', $this->session->userdata('id'));
        $crud->set_table('publication');
        $crud->set_theme('datatables');
        $crud->set_subject('Publication');

        $crud->columns('publication_name');
        $crud->fields('id','publication_name');
        $crud->change_field_type('id','invisible');
        $crud->callback_before_insert(array($this,'setID'));

        $output = $crud->render();

        $this->load->view('template/header', $data);
        $this->load->view('template/grocery_output', $output);
        $this->load->view('template/footer');
    }

    public function students() {
        $data['page_title'] = 'List of supervised students';

        $crud = new grocery_CRUD();
        $crud->where('id', $this->session->userdata('id'));
        $crud->set_table('supervisor');
        $crud->set_theme('datatables');
        $crud->set_subject('Student');

        $crud->columns('student');
        $crud->fields('id','student');
        $crud->change_field_type('id','invisible');
        $crud->callback_before_insert(array($this,'setID'));

        $output = $crud->render();

        $this->load->view('template/header', $data);
        $this->load->view('template/grocery_output', $output);
        $this->load->view('template/footer');
    }

    public function research() {
        $data['page_title'] = 'List of participated research projects';

        $crud = new grocery_CRUD();
        $crud->where('id', $this->session->userdata('id'));
        $crud->set_table('research');
        $crud->set_theme('datatables');
        $crud->set_subject('Project');

        $crud->columns('research_project');
        $crud->fields('id','research_project');
        $crud->change_field_type('id','invisible');
        $crud->callback_before_insert(array($this,'setID'));

        $output = $crud->render();

        $this->load->view('template/header', $data);
        $this->load->view('template/grocery_output', $output);
        $this->load->view('template/footer');
    }

    function setID($post_array) {
        $post_array['id'] = $this->session->userdata('id');
        return $post_array;
    }

    public function login() {
        $data["page_title"] = 'Log in';

        $this->form_validation->set_rules("email", "Email", "required");
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view("login", $data);
            $this->load->view('template/footer');
        }
        else {
            $email = $this->input->post("email");
            $password = $this->input->post("password");
            
            $uresult = $this->user_model->get_user($email, $password);
        
            if ($uresult != null) {
                $session_data = array (
                    'logged_in' => TRUE,
                    'id' => $uresult[0]->id,
                    'username' => $uresult[0]->username,
                    'email' => $email
                    );

                $this->session->set_userdata($session_data);
                if ($uresult[0]->isAdmin == 0) {
                    redirect('');
                }
                else {
                    redirect('admin');
                }
            }
            else {
                $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">Incorrect email or password!</div>');
                redirect('login');
            }
        }
    }

    public function signup() {
        $data["page_title"] = "Sign up";

        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[user.email]');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('cpassword', 'Confirm Password', 'required|matches[password]');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view("staff/signup", $data);
            $this->load->view('template/footer');
        }
        else {
            $data = array (
                'username' => $this->input->post('username'),
                'email' => $this->input->post('email'),
                'password' => $this->input->post('password'),
            );
            $action = 'signup';
            $this->user_model->insertStaff($data);
            $this->user_model->sendEmail($data, $action);

            $this->session->set_flashdata('msg','<div class="alert alert-success text-center">You have successfully created a new account.</div>');

            $session_data = array (
                    'logged_in' => TRUE,
                    'id' => $uresult[0]->id,
                    'username' => $uresult[0]->username,
                    'email' => $data['email']
                );

            $this->session->set_userdata($session_data);
            redirect('');            
        }
    }

    public function logout() {
        $session_data = array (
                    'logged_in' => FALSE,
                    'id' => '',
                );
        $this->session->unset_userdata($session_data);
        session_destroy();
        redirect('');
    }

    public function reset_password() {
        $data["page_title"] = "Reset password";

        $this->form_validation->set_rules('npassword', 'New Password', 'required');
        $this->form_validation->set_rules('cnpassword', 'Confirm New Password', 'required|matches[npassword]');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view("staff/reset_password", $data);
            $this->load->view('template/footer');
        }
        else {
            $data = array (
                'email' => $this->session->userdata('email'),
                'password' => $this->input->post('npassword'),
            );
            $action = 'reset_password';

            $this->user_model->changePassword($data);
            $this->user_model->sendEmail($data, $action);

            $this->session->set_flashdata('msg','<div class="alert alert-success text-center">You have successfully reset your password.</div>');
            redirect('');
        }
    }
}
?>