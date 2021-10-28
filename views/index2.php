<?php
    include_once './views/header.php';
    
    ini_set('display_errors',1);
    error_reporting(-1);

?>

<title>Computer Sign In</title>

<script type="text/javascript" src="./views/js/countdown.js"></script>

<h2 class="text-center mb-5">Sign In</h2>

<div class="container input-group mb-3">
    <form action="/submitsignin" method="post">
        <input type="text" name="nameInput" placeholder="Name" id="nameInput"  autocomplete="off" autofocus>
        <input type="text" name="compInput" placeholder="Computer" id="compInput">
        <input class="btn btn-outline-secondary" name="bcSubmit" value="Submit" type="submit">
    </form>
</div> 

<table class="table table-hover container">
  <thead>
    <tr>
        <th scope="col" class='text-center'>#</th>
        <th scope="col" class='text-center'>Delete</th>
        <th scope="col" class='text-center'>Name</th>
        <th scope="col" class='text-center'>Computer</th>
        <th scope="col" class='text-center'>Time In</th>
        <th scope="col" class='text-center'>Time Expired</th>
        <th scope="col" class='text-center'>Count Down</th>
        <th scope="col" class='text-center'>Date</th>
        <th scope="col" class='text-center'>Notes</th>
        <th scope="col" class='text-center'>Highlight</th>
    </tr>
  </thead>
  <tbody id="tBody">
    <?php
        $i = 1;
        foreach ($curDateStats as $cdsRow) {
            //white row background counter flag
            $flag = 0;
            //red row background counter flag
            $redFlag = 0;
            //purple row background counter flag
            $purpleFlag = 0;            
            //get banlist and compare to signed in person
            $fromBanListStatement = "SELECT * FROM banlist;";
            $fromBanList = $pdo->query($fromBanListStatement);
            foreach ($fromBanList as $bannedPerson) {
                if ($cdsRow[1] == $bannedPerson[1]) {
                    echo "<tr id='tRow' style='background-color: red'>";
                    $flag++;
                    $redFlag++;
                }            
            }

            foreach ($fromShowID as $showIDPerson) {       
                if ($cdsRow[1] == $showIDPerson[1]) {
                    //if this person is a banned person, skip because banned takes priority
                    if($redFlag == 1) {
                        echo "";
                    }                                            
                    else {
                        echo "<tr id='tRow' style='background-color: purple'>";
                        $flag++;
                        $purpleFlag++;
                    }
                }
            }

            $orangeFlag = 0;
            foreach ($todNames as $todName) {    
                if (strcmp($cdsRow[1], $todName[0]) == 0) {
                    $orangeFlag++;
                }
            }
            if ($orangeFlag > 1 && $redFlag == 0 && $purpleFlag == 0) {
                echo "<tr id='tRow' style='background-color: orange'>";
                $flag++;
            }
            //if the white background color flag hasn't been added to, make the row have a white bg
            if ($flag == 0) {
                echo "<tr id='tRow' style='background-color: white'>";
            }
            echo    "<td class='text-center'>" . $i++ . "</td>";
            echo    "<td>"; 
            echo    "<form action='/deletesignin' method='post'>";
            echo        "<input type='submit' name='deleteTwo' value='Delete' class='btn btn-danger btn-sm' value='Delete'>";
            echo        "<input type='hidden' name='deleteTrans' value='$cdsRow[0]'>";
            echo    "</form>";
            echo    "</td>";
            echo    "<td class='text-center'>" . $cdsRow[1] . "</td>";
            echo    "<td class='text-center'>" . $cdsRow[2] . "</td>";
            echo    "<td class='text-center'>" . $cdsRow[3] . "</td>";
            echo    "<td class='text-center'>" . $cdsRow[5] . "</td>";
            echo    "<td class='text-center' id='tData'>" . "</td>";
            echo    "<td class='text-center'>" . $cdsRow[4] . "</td>";
            echo    "<input type='hidden' id='timeexp' value='$cdsRow[5]'>";
            echo    "<input type='hidden' id='datenow' value='$cdsRow[4]'>";
            echo    "<td class='text-center'>";
            echo    "<form action='/addnotes' method='post'>";
            echo        "<input type='text' name='notesText' value='$cdsRow[7]'>";
            echo        "<input type='submit' name='notesButton' value='Save'>";
            echo        "<input type='hidden' name='transIdThree' value='$cdsRow[0]'>";
            echo    "</form>";             
            echo    "</td>";
            echo    "<td class='text-center' id='cButton'>" . "</td>";            
            echo "</tr>";
        }
    ?>
  </tbody>
</table>
<script type="text/javascript">countDown()</script>

<?php
    include_once './views/footer.php';
?>