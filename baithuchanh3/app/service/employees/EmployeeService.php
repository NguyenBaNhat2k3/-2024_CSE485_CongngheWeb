<?php
// require_once '../../config/config.php';
require_once APP_ROOT . '/app/config/datebase.php';
require_once APP_ROOT . '/app/models/Employee.php';
class EmployeeService
{
   public function getAllEmployee()
   {
       try {
           $conn = DBconnection();
           $sql_select = "select * from employees";
           $result = queryDB($conn, $sql_select);
           $employees = [];
           if (mysqli_num_rows($result) > 0) {
               while ($row = mysqli_fetch_assoc($result)) {
                   $employee = new Employee($row['employee_ID'], $row['full_name'], $row['address'], $row['mobile_phone'], $row['posi_tion'], $row['avatar'], $row['department_ID']);
                   $employees[] = $employee;
               }
           }
           return $employees;
       } catch (Exception $e) {
           echo $e->getMessage();
       }
   }

    //viet ham updateEmployee
    public function updateEmployees($employee_ID, $full_name, $address, $mobile_phone, $position, $avatar, $department_ID) {
        $conn = DBconnection();
        // echo "phu bu";
        $sql_update = "update employees set full_name = '$full_name', address = '$address', mobile_phone = '$mobile_phone', posi_tion = '$position', avatar = '$avatar', department_ID = '$department_ID' where employee_ID = '$employee_ID'";
        $result = mysqli_query($conn, $sql_update);
        if($result > 0)
            return true;
        return false;
    }

    public function getEmployeeById($employee_ID) {
        try {
            $conn = DBconnection();

            // Xây dựng truy vấn SQL để lấy thông tin của nhân viên dựa trên ID
            $sql_select = "SELECT * FROM employees WHERE employee_ID = '$employee_ID'";

            // Thực thi truy vấn
            $result = queryDB($conn, $sql_select);

            // Kiểm tra xem có dòng nào được trả về hay không
            if (mysqli_num_rows($result) > 0) {
                // Lấy thông tin của nhân viên từ kết quả truy vấn
                $row = mysqli_fetch_assoc($result);

                // Tạo một đối tượng Employee từ dữ liệu lấy được
                $employee = new Employee($row['employee_ID'], $row['full_name'], $row['address'], $row['mobile_phone'], $row['posi_tion'], $row['avatar'], $row['department_ID']);

                return $employee; // Trả về đối tượng Employee nếu tìm thấy nhân viên có ID tương ứng
            } else {
                return null; // Trả về null nếu không tìm thấy nhân viên nào có ID tương ứng
            }
        } catch (Exception $e) {
            echo $e->getMessage();
            return null; // Trả về null nếu có lỗi xảy ra
        }
    }


}


?>
