

  <?php
    
    $servername = "localhost"; // default
    $username = "root"; // root is username
    $password = "";
    $dbname = "user registration"; // db name

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if(!$conn){
        die('Could not Connect MySql Server:' .mysql_error());
    }
    if(isset($_POST['submit'])){
        $First_Name = $_POST['fname'];
        $Middle_Name = $_POST['mname'];
        $Last_Name = $_POST['lname'];
        $Current_Address = $_POST['currentaddress'];
        $Permanent_Address = $_POST['permanentaddress'];
        $Phone_Number = $_POST['Phone'];
        $Email = $_POST['email'];
        $Upload_Cv = $_POST['cv'];
        $Employment_Desired = $_POST['position'];
        $currently_employes = $_POST['employment_status'];
        $Start_date = $_POST['start_date'];
        $Choose_skills = $_POST['skills'];
        $Notice_Period = $_POST['notice_period'];
        $Current_CTC = $_POST['current_CTC'];
        $Expected_CTC = $_POST['expected_CTC'];
        $Availability = $_POST['day'];
        $sql = "INSERT INTO users_information VALUES ('$First_Name','$Middle_Name','$Last_Name','$Current_Address','$Permanent_Address','$Phone_Number','$Email','$Upload_Cv','$Employment_Desired','$currently_employes','$Start_date','$Choose_skills','$Notice_Period','$Current_CTC','$Expected_CTC','$Availability') ";
        if (mysqli_query($conn, $sql)) {
            echo "<p style='margin-top: 25px;font-size: 1.2em;text-align: center'>New Record inserted successfully ! </p>";   
        } 
        else {
            echo "Error: " . $sql . ":-" . mysqli_error($conn);
        }
        mysqli_close($conn);
    }
    else{
      echo "Error";
    }

    ?>
    