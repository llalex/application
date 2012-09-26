<?php defined('SYSPATH') or die('No direct access allowed!');
 
class Sampletest extends Kohana_UnitTest_TestCase
{
    public function testAdd()
    {
        $post = array();
 
        $username = Arr::get($post, 'username');
 
        $this->assertEquals($username, null);
    }
}