<?php 
namespace app\UsersManager;

    interface UsersInterface {
        public function index();
        public function view($id);
        public function create();
        public function update($id);
        public function delete($id);
  }

?>