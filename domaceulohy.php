<?php include('connection.php'); ?>
<?php include_once 'school_template/header.php'; ?>	
<?php
// Typ ulohy 1 = pisomna    
// Typ ulohy 2 = slovná
// Typ ulohy 3 = naspamet
?>
<center>
    <h1>Aktuálne domáce úlohy</h1>
</center>
<br />
<?php
$sql = "SELECT trieda,typulohy,zadanie FROM domaceulohy";
$result = $conn->query($sql);
echo '<table style="width:100%"><tr><th>Trieda</th><th>Zadanie</th>';
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        if($row["typulohy"]==1) $typ=" (písomná)";
        if($row["typulohy"]==2) $typ=" (slovná)";
        if($row["typulohy"]==3) $typ=" (naspamäť)";
        echo '<tr><td>'. $row["trieda"].' '.$typ.'</td><td>'. $row["zadanie"]. '</td></tr>';
    }
} else {
    echo "0 results";
}
echo '</tr></table>';
$conn->close();
?>

<?php include_once'school_template/footer.php'; ?>
