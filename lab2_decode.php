<?php
    $json_string = '{"name":"Marvin Espina","age":22,"email":"marvinespina@gmail.com"}';

    $student_object = json_decode($json_string);
    $student_array = json_decode($json_string, true);

    echo "Object: " . $student_object->name . "<br>";
    echo "Array: " . $student_array['email'];
?>
