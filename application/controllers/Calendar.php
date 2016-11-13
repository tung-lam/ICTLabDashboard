<?php
class Calendar extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $data['page_title'] = 'Calendar';
        
        $prefs = array (
            'start_day'    => 'monday',
            'month_type'   => 'long',
            'day_type'     => 'short'
        );
        $this->load->library('calendar', $prefs);

        $yearmonth = mdate('%Y-%m-');

        for ($i=1; $i<=31; $i++) { 
            $date = $yearmonth . "$i";
            $event = $this->user_model->get_calendar_events($date);
            if ($event != null) {
                foreach ($event as $e) {
                    $data[$i] = base_url('index.php/calendar/view/' . "$e->calendar_id");
                }
            } 
        }

        $data['calendar'] = $this->calendar->generate(null, null, $data);
        
        $this->load->view('template/header', $data);
        $this->load->view('calendar/index', $data);
        $this->load->view('template/footer');
    }

    public function view ($calendar_id = NULL) {
        $data['page_title'] = 'Calendar';
        
        $data['calendar_item'] = $this->user_model->get_calendar_event_by_id($calendar_id);
        if (empty($data['calendar_item'])) {
            show_404();
        }

        $this->load->view('template/header', $data);
        $this->load->view('calendar/view', $data);
        $this->load->view('template/footer');
    }
}