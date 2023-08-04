<?php

class EmployeeController extends Controller
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
        $this->db->connect();
    }

    public function index()
    {
        $employees = $this->getEmployees();
        $this->view('employee/index', ['employees' => $employees]);
    }

    public function create()
    {
        $this->view('employee/create');
    }

    public function store()
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $position = $_POST['position'];
        $salary = $_POST['salary'];

        $sql = "INSERT INTO employees (name, email, phone, position, salary) VALUES ('$name', '$email', '$phone', '$position', $salary)";
        $this->db->query($sql);

        $this->redirect('/employee');
    }

    private function getEmployees()
    {
        $sql = "SELECT * FROM employees";
        $result = $this->db->query($sql);
        $employees = [];
        while ($row = $result->fetch_assoc()) {
            $employees[] = $row;
        }
        return $employees;
    }

    public function __destruct()
    {
        $this->db->close();
    }
}