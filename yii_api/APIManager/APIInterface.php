<?php 
namespace app\APIManager;

    interface APIInterface {
        public function view($id);
        public function create();
        public function update($id);
        public function delete($id);
  }

?>