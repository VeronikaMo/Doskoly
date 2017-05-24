<?php include_once 'school_template/header.php';
      include('connection.php');
      include('session.php');

if(isset($_POST['nazovprazdnin']) && $_POST['nazovprazdnin']!=NULL)
{
    $nazovprazdnin = $_POST['nazovprazdnin'];
    $zaciatokprazdnin = $_POST['zaciatokprazdnin'];
    $koniecprazdnin = $_POST['koniecprazdnin'];
    $sql = "INSERT INTO prazdniny (nazov,zaciatok,koniec) VALUES ('$nazovprazdnin','$zaciatokprazdnin','$koniecprazdnin')";
    if ($conn->query($sql) === TRUE) {
        echo "<center>Prázdniny pridané!</center>";
    }
}

if (isset($_POST['novauloha']) && $_POST['novauloha']!=NULL) {
    $novauloha = $_POST['novauloha'];
    $typulohy = $_POST['typulohy'];
    $trieda = $_POST['trieda'];
    $sql = "INSERT INTO domaceulohy (trieda,typulohy,zadanie) VALUES ('$trieda','$typulohy','$novauloha')";

    if ($conn->query($sql) === TRUE) {
        echo "<center>Úloha pridaná!</center>";
    }
}

if (isset($_POST['polievka1'])) {
    $dni = array(
    'pondelok',
    'Utorok',
    'Streda',
    'Štvrtok',
    'Piatok',
);
    for($i=1;$i<=5;$i++)
    {
        $den=$dni[$i-1];
        $polievka = $_POST['polievka'.$i];
        $obed = $_POST['obed'.$i];
        $ovocie = $_POST['ovocie'.$i];
        $sql = "UPDATE jedalnylistok
        SET polievka='$polievka', obed='$obed', ovocie='$ovocie'
        WHERE den='$den'";
        $conn->query($sql);
    }
}?>
<center><a href="odhlasit.php">Odhlásiť sa</a></center>
<center><h1>Správa obedov na tento týždeň</h1><br/>
<form action="" method="post">
    <?php
    $i=0;
    $sql = "SELECT den,polievka,obed,ovocie FROM jedalnylistok";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $i++;
            echo'Deň '.$row["den"].' Polievka: <input type="text" name="polievka'.$i.'" value="'.$row["polievka"].'" />
            Obed: <input type="text" name="obed'.$i.'" value="'.$row["obed"].'"/>
            Ovocie: <input type="text" name="ovocie'.$i.'" value="'.$row["ovocie"].'"/>
            <br /><br/>';
    }
        echo '<input type="submit">';
    }?>
</form>
    <h1>Zadaj novú úlohu</h1>
    <br />
    <form action="" method="post">
    <p><center><textarea id="novauloha" name="novauloha" rows="4" cols="80"></textarea></center></p>
    <center><select name="trieda">
    <option value="prváci">prváci</option>
    <option value="druháci">druháci</option>
    <option value="tretiaci">tretiaci</option>
    <option value="štvrtáci">štvrtáci</option></select></center></br>
    <center><select name="typulohy">
    <option value="1">Písomná</option>
    <option value="2">Slovná</option>
    <option value="3">Naspamäť</option></select></center><br/>
    <center><input type="submit" value="Odoslať novú úlohu" /></center>
</form><br/><h1>Zadaj nový dátum prázdnin</h1><br/>
<form action="" method="post">
    Názov prázdnin: <input type="text" name="nazovprazdnin" />
    Začiatok prázdnin <input type="text" name="zaciatokprazdnin" />
    Koniec prázdnin <input type="text" name="koniecprazdnin" /><br/><br/>
    <input type="submit" value="Pridaj dátum prázdnin" />
</form>
</center>
<?php include_once'school_template/footer.php'; ?>
