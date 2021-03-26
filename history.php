<?php
    include_once 'header.php';
?>

<title>History</title>
<?php $inputDate1 = $_GET['inputDate']?>
<h2 class="text-center mb-1" id='dateTitle'><?php echo $inputDate1 ?></h2> <h2 class="text-center mb-5"> History</h2>

<?php
try{
    // connect to sqlitedb
    $pdo = new PDO('sqlite:compsignin.db');

    // obtain date of wanted history
    $inputDate = $_GET['inputDate'];

} catch (PDOException $e) {
    echo $e->getMessage();
}

?>

<div class="d-flex justify-content-center">
    <form action="history.php" method="get">
        <label>Date:</label>    
        <input class="mb-5" type="date" name="dateInput" id="dateInput">
        <input type="hidden" id="inputDate" name="inputDate">
        <button class="btn btn-outline-secondary" name="dateSubmit" value="$dateInput" type="submit" id="button-addon2">Submit</button>
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
        $pdo = new PDO('sqlite:compsignin.db');
        $getDateInput = "SELECT * FROM signin WHERE datenow = '$inputDate'";
        $getSelDateStats = $pdo->query($getDateInput);       
        if(isset($_GET['delete'])) {    
            $inputDate = $_GET['inputDate'];
            $transid = $_GET['datesRow'];
            $delQuery = "DELETE FROM signin WHERE id = '$transid'";
            $pdo->query($delQuery);
        };
        $i = 1;
        foreach ($getSelDateStats as $datesRow) {
            echo "<tr>";
            echo    "<td class='text-center'>" . $i++ . "</td>";
            echo    "<td class='text-center'>";
            echo        "<form action='history.php' method='get'>";
            echo            "<input type='hidden' name='inputDate' value='$inputDate'>";
            echo            "<input type='hidden' name='datesRow' value='$datesRow[0]'>";
            echo            "<input type='submit' id='delete' name='delete' value='Delete' class='btn btn-danger btn-sm'>";
            echo        "</form>";
            echo    "</td>";
            echo    "<td class='text-center'>" . $datesRow[1] . "</td><td class='text-center'>" . $datesRow[2] . "</td><td class='text-center'>" . $datesRow[3] . "</td><td class='text-center'>" . $datesRow[4] . "</td><td class='text-center'>" . $datesRow[7] . "</td>";
            echo "</tr>";
        }
    ?>
  </tbody>
</table>


<script type="text/javascript" src="history.js"></script>

<?php
    include_once 'footer.php';
?>