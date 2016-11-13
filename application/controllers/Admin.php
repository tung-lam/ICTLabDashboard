<?php
class Admin extends CI_Controller {
    public function __construct() {
        parent::__construct();
        // if not logged in yet -> redirect to login
        if ( ! $this->session->userdata('logged_in')) {
            redirect('login');
        }
    }

    public function index() {
        $user = $this->user_model->get_user_by_id($this->session->userdata('id'));
        $data = array (
            'page_title' => $user[0]->username . ' (Admin)',

            'id' => $user[0]->id,
            'username' => $user[0]->username,
            'email' => $user[0]->email,
            'avatar' => '../avatar/' . $user[0]->avatar,
            'fullname' => $user[0]->fullname,
            'title' => $user[0]->title,
            'position' => $user[0]->position,
            'affiliation' => $user[0]->affiliation
        );

        $data['publication'] = $this->user_model->get_publication($data['id']);
        $data['student'] = $this->user_model->get_student($data['id']);
        $data['research'] = $this->user_model->get_research($data['id']);

        $this->load->view('template/header', $data);
        $this->load->view("admin/home");
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

            redirect('admin');            
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

    public function manage_staff() {
        $data['page_title'] = 'Manage staffs';

        $crud = new grocery_CRUD();

        $crud->set_table('user');
        $crud->set_theme('datatables');
        $crud->set_subject('Staff');
        $crud->columns('username','email','fullname','title', 'position', 'affiliation');
        $crud->fields('username', 'isAdmin', 'email','fullname','title', 'position', 'affiliation');
        $crud->required_fields('username', 'email');
         
        $output = $crud->render();

        $this->load->view('template/header', $data);
        $this->load->view('template/grocery_output', $output);
        $this->load->view('template/footer');
    }

    public function manage_news_events() {
        $data['page_title'] = 'Manage news and events';

        $crud = new grocery_CRUD();

        $crud->set_table('news');
        $crud->set_theme('datatables');
        $crud->set_subject('News/Event');
         
        $output = $crud->render();

        $this->load->view('template/header', $data);
        $this->load->view('template/grocery_output', $output);
        $this->load->view('template/footer');
    }

    public function manage_website() {
        $data['page_title'] = 'Manage website';

        $crud = new grocery_CRUD();

        $crud->set_table('public');
        $crud->set_theme('datatables');
        $crud->set_subject('Page');
         
        $output = $crud->render();

        $this->load->view('template/header', $data);
        $this->load->view('template/grocery_output', $output);
        $this->load->view('template/footer');
    }

    public function manage_calendar() {
        $data['page_title'] = 'Manage calendar';

        $crud = new grocery_CRUD();

        $crud->set_table('calendar');
        $crud->set_theme('datatables');
        $crud->set_subject('Item');
         
        $output = $crud->render();

        $this->load->view('template/header', $data);
        $this->load->view('template/grocery_output', $output);
        $this->load->view('template/footer');
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
            $this->load->view("admin/reset_password", $data);
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
            redirect('admin');
        }
    }
}
?>