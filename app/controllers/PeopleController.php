<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class PeopleController extends Controller {
    public function __construct() {
        parent::__construct();
        $this->call->model('PeopleModel', 'people');
    }

    public function index() {
        $data['rows'] = $this->people->get_all_people();
        $this->call->view('people/index', $data);
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->people->create($_POST['first_name'], $_POST['last_name'], $_POST['email']);
            redirect('people');
        }
        $this->call->view('people/create');
    }

    public function edit($id = null) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->people->update_person($_POST['id'], $_POST['first_name'], $_POST['last_name'], $_POST['email']);
            redirect('people');
        }
        $data['row'] = $this->people->get($id);
        $this->call->view('people/edit', $data);
    }

    public function delete($id) {
        $this->people->delete_person($id);
        redirect('people');
    }
}
