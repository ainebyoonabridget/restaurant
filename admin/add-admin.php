<?php include("partials/menu.php"); ?>
<div class="main-content">
    <div class="wrapper">
        <h1>Add Admin</h1>

        <form action="" method="post">
            <table width="30%">
                <tr>
                    <td>Full Name:</td>
                    <td>
                        <input type="text" name="full_name" placeholder="Enter your name">
                    </td>
                </tr>

                <tr>
                    <td>User Name:</td>
                    <td>
                        <input type="text" name="username" placeholder="Enter username">
                    </td>
                </tr>

                <tr>
                <td>Password:</td>
                    <td>
                        <input type="password" name="password" placeholder="Enter password">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="Submit" name="submit" value="Add Admin" class="btn-secondary">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>
<?php include("partials/footer.php"); ?>


<?php
//process the value from form and save it in Database

// check whethe the submit button is clicked or not

if(isset($_POST['submit']))
{
    // Button Clicked
    // echo "Button clicked";

    //1. Get the data from form
    $full_name = $_POST['full_name'];
    $user_name = $_POST['user_name'];
    $password =md5($_POST['password']); //password encryption with md5

    // 2.SQL Query to save the data into database
     $sql ="INSERT INTO tbl_admin SET
     full_name = '$full_name',
     user_name = '$user_name',
     password = '$password'

     ";
    //  3.Excecute Query and save iData in Database
    //$com = mysqli_connect('localhost', 'root','') or die(mysqli_error()); //Database connection
    //$db_select = mysqli_select_db($com, 'food-order') or die(mysqli_error()); //Select database

    //3. Excecuting query and saving data in database
    $res = mysqli_query($conn, $sql) or die(mysqli_error($conn));

    //check whether the (query is excecuted ) data is inserted or not and display appropriate message
    if($res==TRUE)
    {
        //Data inserted
        echo "Data inserted";
    }
    else
    {
        //Failed to insert data
        echo "Failed to insert data";
    }


}

?>

