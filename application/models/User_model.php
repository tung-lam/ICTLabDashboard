<?php
class User_model extends CI_Model {
    public function __construct() {
        $this->load->database();
    }

    public function get_user_by_id ($id) {
    	$this->db->select('*');
		$this->db->from('user');
		$this->db->where('id', $id);
		
		$query = $this->db->get();
		if ($query->num_rows() == 1) {
			return $query->result();
		} else {
			return null;
		}
    }

    public function get_user ($email, $password) {
    	$condition = "email =" . "'" . $email . "' AND " . "password =" . "'" . $password . "'";

    	$this->db->select('*');
		$this->db->from('user');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();
		if ($query->num_rows() == 1) {
			return $query->result();
		} else {
			return null;
		}
	}

    public function updateProfile($data) {
        $this->db->set($data);
        $this->db->where('id', $data['id']);
        $this->db->update('user');
    }

    public function get_page ($name) {
        $this->db->select('content');
        $this->db->from('public');
        $this->db->where('name', $name);
        $query = $this->db->get();

        return $query->result();
    }

    public function get_news ($news_id = FALSE) {
        if ($news_id === FALSE) {
            $query = $this->db->get('news');
            return $query->result_array();
        }
        $query = $this->db->get_where('news', array('news_id' => $news_id));
        return $query->row_array();
    }

    public function get_calendar_event_by_id ($calendar_id) {
        $query = $this->db->get_where('calendar', array('calendar_id' => $calendar_id));
        return $query->row_array();
    }

    public function get_calendar_events ($date) {
        $this->db->select('*');
        $this->db->from('calendar');
        $this->db->where('date', $date);
        $query = $this->db->get();

        return $query->result();
    }

    public function get_publication ($id) {
        $this->db->select('publication_name');
        $this->db->from('publication');
        $this->db->where('id', $id);
        $query = $this->db->get();

        return $query->result();
    }

    public function get_student ($id) {
        $this->db->select('student');
        $this->db->from('supervisor');
        $this->db->where('id', $id);
        $query = $this->db->get();

        return $query->result();
    }

    public function get_research ($id) {
        $this->db->select('research_project');
        $this->db->from('research');
        $this->db->where('id', $id);
        $query = $this->db->get();

        return $query->result();
    }

	public function insertStaff($data) {    
		return $this->db->insert('user', $data);
    }

    public function changePassword($data) {
    	$this->db->set('password', $data['password']);
    	$this->db->where('email', $data['email']);
    	$this->db->update('user');
    }

	public function sendEmail($data, $action) {
        $from_email = 'ictlabfakemail@gmail.com';

        if ($action == 'signup') {
        	$subject = 'Verify Your Account';
        	$message = 'Dear ' . $data["username"] . ',<br /><br />You have successfully created your account on ICTLab Dashboard.<br /><br /> Your password is: ' . $data["password"] . '<br /><br /><br />Best regards,<br /><br />ICTLab';
        }

        if ($action == 'reset_password') {
        	$subject = 'Changes in your account';
        	$message = $data["username"] . ',<br /><br />You have successfully changed your password on ICTLab Dashboard.<br /><br /> Your new password is: ' . $data["password"] . '<br /><br /><br />Best regards,<br /><br />ICTLab';
        }
        
        //configure email settings
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'ssl://smtp.googlemail.com'; //smtp host name
        $config['smtp_port'] = '465'; //smtp port number
        $config['smtp_user'] = $from_email;
        $config['smtp_pass'] = 'USTHHoaLac123'; //$from_email password
        $config['mailtype'] = 'html';
        $config['charset'] = 'iso-8859-1';
        $config['wordwrap'] = TRUE;
        $config['newline'] = "\r\n"; //use double quotes
        $this->email->initialize($config);
        
        //send mail
        $this->email->from($from_email, 'ICTLab');
        $this->email->to($data["email"]);
        // $this->email->to("ngstnglm@gmail.com");
        $this->email->subject($subject);
        $this->email->message($message);
        return $this->email->send();
    }
}
?>