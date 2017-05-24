<?php include('connection.php');?>
<?php include_once 'school_template/header.php'; ?>	
<center><h1>Pripomienky a Návrhy (žiaci, rodičia, učitelia)</h1></center>
<br />
<?php
if (isset($_POST['pripomienky']) && $_POST['pripomienky']!=NULL) {
    $pripomienka = $_POST['pripomienky'];
    $sql = "INSERT INTO pripomienky (ID, pripomienka) VALUES (NULL,'$pripomienka')";

    if ($conn->query($sql) === TRUE) {
        echo "<center>Vaša pripomienka bola úspešne vložená!</center>";
    }
}
?>
<form action="" method="post">
    <p><center><textarea id="pripomienky" name="pripomienky" rows="10" cols="80"></textarea></center></p>
    <center><input type="submit" value="Poslať" /></center>
</form>
<?php
$sql = "SELECT ID,pripomienka FROM pripomienky";
$result = $conn->query($sql);
echo '<table style="width:100%"><tr><th>ID</th><th>pripomienka</th></tr>';
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo '<tr><td>'. $row["ID"] .'</td><td>'. $row["pripomienka"].'</td></tr>';
    }
} else {
    echo "Žiadne výsledky";
}
echo '</tr></table>';
$conn->close();
?>
<?php include_once'school_template/footer.php'; ?>