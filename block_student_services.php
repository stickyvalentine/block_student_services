<?php
class block_student_services extends block_base {
    public function init() {

        $this->title = "Student Services";
    }
    public function get_content() {
    if ($this->content !== null) {
      return $this->content;
    }
 
    $this->content         =  new stdClass; 
    $this->content->text   = '<p><strong>Writing Center</strong><br>555.4321<br><strong>Computer Lab</strong><br>555.1234</p>';
    
    // $this->content->footer = 'Footer here...';
 
    return $this->content;
}
}
