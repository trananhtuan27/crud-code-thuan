<?php


namespace Controller;


use Cassandra\Exception\ValidationException;

class StudentManager
{
    public $path;

    public function __construct($path)
    {
        $this->path = $path;
    }

    public function add($student)
    {
        $listStudent = $this->readFile();
        $data = [
            'name' => $student->name,
            'age' => $student->age,
            'address' => $student->address,
            'group' => $student->group
        ];
        array_push($listStudent, $data);
        $this->saveDataToFile($listStudent);
    }

    public function delete($index)
    {
        $students = $this->readFile();
        if (array_key_exists($index, $students)) {
            array_splice($students, $index, 1);
        }
        $this->saveDataToFile($students);
    }

    public function readFile()
    {
        $dataJson = file_get_contents($this->path);
        return json_decode($dataJson, true);
    }


    public function saveDataToFile($students)
    {
        try {
            $dataJson = json_encode($students);
            file_put_contents($this->path, $dataJson);
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }

    public function getList()
    {
        $data = $this->readFile();
        $arr = [];
        foreach ($data as $item) {
            $student = new Student($item['name'],
                $item['age'],
                $item['address'],
                $item['group']
            );

            array_push($arr, $student);
        }

        return $arr;
    }

}
