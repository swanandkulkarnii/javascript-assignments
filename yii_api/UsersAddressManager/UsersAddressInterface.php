<?php 
namespace app\UsersAddressManager;

    interface UsersAddressInterface {
        public function index();
        public function view($id);
        public function create();
        public function update($id);
        public function delete($id);
  }

?>