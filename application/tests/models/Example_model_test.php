<?php 

class Example_model_test extends TestCase
{
    public function setUp()
    {
        $this->resetInstance();
        $this->CI->load->model('Test_model');
        $this->obj = $this->CI->Test_model;
    }

    public function test_get_test_list()
    {
        $expected = "hello";
        $list = $this->obj->test($expected);
        $this->assertEquals($expected, "hello");
    }


}

?>