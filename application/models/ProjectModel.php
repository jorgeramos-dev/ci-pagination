<?php

class ProjectModel extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
        $this->load->helper('url');
    }

    /*
    return total number of projects
     */
    public function get_count_all()
    {
        return $this->db->count_all('projects');
    }

    /*
    return all the projects
     */
    public function get_projects($limit, $start)
    {
        $this->db->limit($limit, $start);
        $query = $this->db->get('projects');

        return $query->result();
    }

}
