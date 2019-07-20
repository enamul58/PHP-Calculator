    <?php
      $result=' ';
      if( isset($_POST['btn'])){
            require_once 'Calculator.php';
            $goCalculation  = new Calculator();
            $result = $goCalculation->Calculation($_POST);
      }

     ?>

<form action="" method="post">
    <table>
        <tr>
            <th>First Name:</th>
            <td><input type="text" name="first_number" value="<?php
                if(isset($_POST['first_number'])) {
                    echo $_POST['first_number'];
                }
                ?>"></td>
        </tr>
        <tr>
            <th>Last Name:</th>
            <td><input type="text" name="last_number" value="<?php
                if(isset($_POST['last_number'])){
                    echo $_POST['last_number'];
                }
                ?>"></td>
        </tr>
        <tr>
            <th>Full Name:</th>
            <td><input type="text" name="result" value="<?php echo $result;?>"></td>
        </tr>
        <tr>
            <th></th>
            <td>
                <input type="submit" name="btn" value="+">
                <input type="submit" name="btn" value="-">
                <input type="submit" name="btn" value="*">
                <input type="submit" name="btn" value="/">
                <input type="submit" name="btn" value="%">
                <input type="reset" value="C">
            </td>
        </tr>
    </table>
</form>