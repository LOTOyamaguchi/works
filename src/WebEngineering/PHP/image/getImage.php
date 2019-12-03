<?php
// Your code here!
class Image {
    private $path;
    
    public function getImageInfo($path) {
        $this->path = $path;
        echo $this->path; //ToDo display imageInfo
}
$result = new Image;
$result->getImageInfo("bbb");
?>
