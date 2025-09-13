<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class PeopleModel extends Model {
    protected $table = 'students';
    protected $primary_key = 'id';

    // Use LavaLust's built-in ORM-style all()
    public function get_all_people() {
        return $this->db->table($this->table)
                        ->order_by('last_name', 'ASC')
                        ->get_all();
    }

    public function get($id) {
        return $this->db->table($this->table)
                        ->where($this->primary_key, $id)
                        ->get();
    }

    public function create($first_name, $last_name, $email) {
        return $this->db->table($this->table)->insert([
            'first_name' => $first_name,
            'last_name'  => $last_name,
            'email'      => $email
        ]);
    }

    public function update_person($id, $first_name, $last_name, $email) {
        return $this->db->table($this->table)
                        ->where($this->primary_key, $id)
                        ->update([
                            'first_name' => $first_name,
                            'last_name'  => $last_name,
                            'email'      => $email
                        ]);
    }

    public function delete_person($id) {
        return $this->db->table($this->table)
                        ->where($this->primary_key, $id)
                        ->delete();
    }
}
