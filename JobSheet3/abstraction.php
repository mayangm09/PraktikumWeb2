<?php

abstract class Course {

      abstract public function getCourseDetails();

}

class OnlineCourse extends Course{
    public function getCourseDetails() {
        return "Ini adalah kelas yang dilaksanakan secara zoom";
    }
}

class OfflineCourse extends Course{
    public function getCourseDetails() {
        return "Hari ini kelas dilaksanakna secara tatap muka";
    }
}

$class1 = new OnlineCourse();
echo "Online course : " .$class1->getCourseDetails(). "<br>";

$class2 = new OfflineCourse();
echo "Offline course : " .$class2->getCourseDetails(). "";

?>