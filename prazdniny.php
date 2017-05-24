<?php include('connection.php'); ?>
<?php include_once 'school_template/header.php'; ?>	

<center><h1>Prázdniny sú v následujúcich termínoch</h1></center></br>
<?php
$sql = "SELECT nazov,zaciatok,koniec FROM prazdniny";
$result = $conn->query($sql);
echo '<table style="width:100%"><tr><th>Názov</th><th>Začiatok</th><th>Koniec</th>';
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo '<tr><td>'. $row["nazov"] .'</td><td>'. $row["zaciatok"].'</td><td>'. $row["koniec"]. '</td></tr>';
    }
} else {
    echo "0 results";
}
echo '</tr></table>';
$conn->close();
?>
<?php include_once'school_template/footer.php'; ?>
