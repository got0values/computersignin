<?php
include_once 'header.php';
ini_set('display_errors',1);
error_reporting(-1);
?>

<title>History</title>
<?php isset($_POST['dateInput']) ? $inputDate1 = $_POST['dateInput'] : ''?>
<h2 class="text-center mb-1" id='dateTitle'><?php echo isset($_POST['dateInput']) ? $inputDate1 : '' ?></h2> <h2 class="text-center mb-5"> History</h2>

<div class="d-flex justify-content-center">
    <form action="/gethistory" method="post">
        <label>Date:</label>    
        <input class="mb-5" type="date" name="dateInput" id="dateInput">
        <input type="hidden" id="inputDate" name="inputDate">
        <input class="btn btn-outline-secondary" name="dateSubmit" value="Submit" type="submit" id="dateSubmit">
    </form>
</div> 

<table class="table table-hover container">
  <thead>
    <tr>
        <th scope="col" class="text-center">#</th>
        <th scope="col" class="text-center">Delete</th>   
        <th scope="col" class="text-center">Name</th>
        <th scope="col" class="text-center">Computer</th>
        <th scope="col" class="text-center">Time</th>
        <th scope="col" class="text-center">Date</th>
        <th scope="col" class="text-center">Notes</th>
    </tr>
  </thead>
  <tbody id="tBody">
    <?php
        $i = 1;
        if (isset($getSelDateStats)) {
            foreach ($getSelDateStats as $datesRow) {
                echo "<tr>";
                echo    "<td class='text-center'>" . $i++ . "</td>";
                echo    "<td class='text-center'>";
                echo        "<form action='/deletehistory' method='post'>";
                echo            "<input type='hidden' name='inputDate' value='$inputDate'>";
                echo            "<input type='hidden' name='datesRow' value='$datesRow[0]'>";
                echo            "<input type='submit' id='delete' name='delete' value='Delete' class='btn btn-danger btn-sm'>";
                echo        "</form>";
                echo    "</td>";
                echo    "<td class='text-center'>" . $datesRow[1] . "</td><td class='text-center'>" . $datesRow[2] . "</td><td class='text-center'>" . $datesRow[3] . "</td><td class='text-center'>" . $datesRow[4] . "</td><td class='text-center'>" . $datesRow[7] . "</td>";
                echo "</tr>";
            }
        }
    ?>
  </tbody>
</table>


<script type="text/javascript" src="./views/js/history.js"></script>

<?php
    include_once 'footer.php';
?>