<?php
    include('connection.php');
    session_start();
    $_SESSION['loggedin'] = true;
    
    
    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "select * from users where username = '$username' and password = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $id = mysqli_num_rows($result);  
        
        if($id == 1){  
            header("Location: home.php");
        }
   

        else{  
            echo  '<script>
                        window.location.href = "index.php";
                        alert("users failed. Invalid username or password!!")
                    </script>';
        }     
    }
    ?>