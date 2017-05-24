<?php include('connection.php');?>
<?php include_once 'school_template/header.php'; ?>	
<center><h1>Obedy na tento týždeň</h1></center>
<br />
<?php
$sql = "SELECT den,polievka,obed,ovocie FROM jedalnylistok";
$result = $conn->query($sql);
echo '<table style="width:100%"><tr><th>Deň</th><th>Polievka</th><th>Obed</th><th>Ovocie</th></tr>';
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo '<tr><td>'. $row["den"] .'</td><td>'. $row["polievka"].'</td><td>'. $row["obed"]. '</td><td>'. $row["ovocie"].'</td></tr>';
    }
} else {
    echo "0 results";
}
echo '</tr></table>';
$conn->close();
?>
<?php include_once'school_template/footer.php'; ?>
