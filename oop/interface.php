<?php
interface news{
    public function createpost();
    public function readpost();
    public function updatepost();
    public function deletepost();
}

class startnews implements news{

    public function createpost(){
        echo "i am from create post". "<br/>";
    }

    public function readpost(){
        echo "i am from read post". "<br/>";
    }

    public function updatepost(){
        echo "i am from update post". "<br/>";
    }

    public function deletepost(){
        echo "i am from delete post". "<br/>";
    }

}
echo "This is Interface". "<br/>";
$obj = new startnews();
$obj->createpost();
$obj->readpost();
$obj->updatepost();
$obj->deletepost();
echo "<hr/>";

?>










<!--1 = Method -> No Body {}-->
<!--2 = Access modifier -> always public-->

