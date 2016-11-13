<?php
class Page extends CI_Controller {
    public function __construct() {
            parent::__construct();
    }

    public function index() {
    }

    public function about() {
        $data["page_title"] = 'About ICTLab';
        $data['content'] = $this->user_model->get_page('about');

        $this->load->view('template/header', $data);
        $this->load->view('template/page', $data);
        $this->load->view('template/footer');
    }

    public function research_topics() {
        $data["page_title"] = 'Research topics';
        $data['content'] = $this->user_model->get_page('research_topics');

        $this->load->view('template/header', $data);
        $this->load->view('template/page', $data);
        $this->load->view('template/footer');
    }

    public function research_projects($topic = null) {
        if ($topic == null) {
            $data["page_title"] = 'Research projects';
            $data['content'] = $this->user_model->get_page('research_projects');
        }

        if ($topic == 'swarms') {
            $data["page_title"] = 'SWARMS';
            $data['content'] = $this->user_model->get_page('swarms');
        }
        
        if ($topic == 'archives') {
            $data["page_title"] = 'ARCHIVES';
            $data['content'] = $this->user_model->get_page('archives');
        }

        $this->load->view('template/header', $data);
        $this->load->view('template/page', $data);
        $this->load->view('template/footer');
    }

    public function members() {
        $data["page_title"] = 'Members';
        $data['content'] = $this->user_model->get_page('members');

        $this->load->view('template/header', $data);
        $this->load->view('template/page', $data);
        $this->load->view('template/footer');
    }

    public function contact() {
        $data["page_title"] = 'Contact';
        $data['content'] = $this->user_model->get_page('contact');

        $this->load->view('template/header', $data);
        $this->load->view('template/page', $data);
        $this->load->view('template/footer');
    }
}