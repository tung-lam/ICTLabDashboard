<?php
class News extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $data['page_title'] = 'News and Events';
        $data['news'] = $this->user_model->get_news();
        
        $this->load->view('template/header', $data);
        $this->load->view('news/index', $data);
        $this->load->view('template/footer');
    }

    public function view ($news_id = NULL) {
        $data['news_item'] = $this->user_model->get_news($news_id);
        if (empty($data['news_item']))
        {
                show_404();
        }

        $data['page_title'] = $data['news_item']['title'];

        $this->load->view('template/header', $data);
        $this->load->view('news/view', $data);
        $this->load->view('template/footer');
    }
}