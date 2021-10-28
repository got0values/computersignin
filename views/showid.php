<?php
include_once 'header.php';
ini_set('display_errors',1);
error_reporting(-1);    
?>

<h2 class="text-center mb-5">Has to Show ID List</h2>

<div class="container input-group mb-3">
    <form action="/submitshowid" method="post">
        <input type="text" name="nameInput" placeholder="Name" id="nameInput"  autocomplete="off" autofocus>
        <input class="btn btn-outline-secondary" name="bcSubmit" value="Submit" type="submit">
    </form>
</div>


<table class="table table-hover container">
  <thead>
    <tr>
        <th scope="col" class='text-center'>#</th>
        <th scope="col" class='text-center'>Delete</th>
        <th scope="col" class='text-center'>Name</th>
    </tr>
  </thead>
  <tbody id="tBody">

<?php

$i = 1;
    foreach ($fromShowID as $showIDPerson) {
        echo "<tr id='tRow'>";
        echo    "<td class='text-center'>" . $i++ . "</td>";
        echo    "<td class='text-center'>"; 
        echo    "<form action='/deleteshowid' method='post'>";
        echo        "<input type='submit' name='deleteTwo' value='Delete' class='btn btn-danger btn-sm' value='Delete'>";
        echo        "<input type='hidden' name='deleteTrans' value='$showIDPerson[0]'>";
        echo    "</form>";
        echo    "</td>";
        echo    "<td class='text-center'>" . $showIDPerson[1] . "</td>";
        echo "</tr>";
    }
?>
    </tbody>
</table>

<?php
    include_once 'footer.php';
?>