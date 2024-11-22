<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'connect.php'; 

    
    $firstName = isset($_POST['firstName']) ? $_POST['firstName'] : '';
    $lastName = isset($_POST['lastName']) ? $_POST['lastName'] : '';
    $position = isset($_POST['position']) ? $_POST['position'] : '';
    $gender = isset($_POST['Gender']) ? $_POST['Gender'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $mobile = isset($_POST['mobile']) ? $_POST['mobile'] : '';
    $telephone = isset($_POST['telephone']) ? $_POST['telephone'] : '';
    $address = isset($_POST['address']) ? $_POST['address'] : '';
    $institute = isset($_POST['institute']) ? $_POST['institute'] : '';
    $instituteCode = isset($_POST['instituteCode']) ? $_POST['instituteCode'] : '';
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $password = password_hash($password, PASSWORD_BCRYPT);


    if (!empty($firstName) && !empty($lastName) && !empty($email) && !empty($username) && !empty($password)) 
    {
        

        $sql = $conn->prepare("INSERT INTO registration (firstName, lastName, position, gender, email, mobile, telephone, address, institute, instituteCode, username, password) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $sql->bind_param("ssssssssssss", $firstName, $lastName, $position, $gender, $email, $mobile, $telephone, $address, $institute, $instituteCode, $username, $password);
        if ($sql->execute()) {
            header("Location: login.php?message=request sent successfully");
            exit();
        } else {
            echo "Error: " . $sql->error;
        }

        $conn->close();
    } else {
        echo "Please fill in all required fields.";
    }

        

$conn->close();
exit();
       

}



//     //alert for the successfully recorded user
//     if ($conn->query($sql) === TRUE) 
//     {
//         echo '<script type="text/javascript">
//         window.onload=function()
//         {
//             alert("New record created successfully");
//         }
//         </script>';

//         // Redirect to login page after successful signup
//         header("Location: login.php?message=request sent successfully");
//         exit();
//     } else {
//         echo "Error: " . $sql . "<br>" . $conn->error;
//     }
// } 





//===============
// //        $conn->close();
// } else {
//     echo "Please fill in all required fields.";
// }



