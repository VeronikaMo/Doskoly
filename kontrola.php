<?php include_once 'school_template/header.php'; ?>
<body>
	<center>Vyber si ročník: <form action="" method="post">
    	<select name="select1">
        <option value="value1">Prváci</option>
        <option value="value2">Druháci</option>
	<option value="value3">Tretiaci</option>
        <option value="value4">Štvrtáci</option>
    	</select>
    	<input type="submit" name="submit" value="Zobraziť"/>
	</form>
	<?php
	if(isset($_POST['select1'])){
    	$select1 = $_POST['select1'];
    	switch ($select1) {
        case 'value1':
            echo '<table style="width:100%"><tr><th>Humanitné</th><th>Spoločenské</th><th>Vedné</th>
	  <tr>
    	<td>1: 100-80%</td>
    	<td>1: 100-70%</td>
    	<td>1: 100-90%</td>
  	</tr>
	<tr>
    	<td>2: 80-70%</td>
    	<td>2: 70-60%</td>
    	<td>2: 90-70%</td>
  	</tr>
	<tr>
    	<td>3: 70-60%</td>
    	<td>3: 60-50%</td>
    	<td>3: 70-50%</td>
  	</tr>
	<tr>
    	<td>4: 60-50%</td>
    	<td>4: 50-40%</td>
    	<td>4: 50-40%</td>
  	</tr>
	<tr>
    	<td>5: 50-0%</td>
    	<td>5: 40-0%</td>
    	<td>5: 40-0%</td>
  	</tr>
	</tr></table>';
            break;
        case 'value2':
            echo '<table style="width:100%"><tr><th>Humanitné</th><th>Spoločenské</th><th>Vedné</th>
	    <tr>
    	<td>1: 100-80%</td>
    	<td>1: 100-70%</td>
    	<td>1: 100-90%</td>
  	</tr>
	<tr>
    	<td>2: 80-70%</td>
    	<td>2: 70-60%</td>
    	<td>2: 90-70%</td>
  	</tr>
	<tr>
    	<td>3: 70-60%</td>
    	<td>3: 60-50%</td>
    	<td>3: 70-50%</td>
  	</tr>
	<tr>
    	<td>4: 60-50%</td>
    	<td>4: 50-40%</td>
    	<td>4: 50-40%</td>
  	</tr>
	<tr>
    	<td>5: 50-0%</td>
    	<td>5: 40-0%</td>
    	<td>5: 40-0%</td>
  	</tr>
	</tr></table>';
            break;
        default:
            echo '<table style="width:100%"><tr><th>Humanitné</th><th>Spoločenské</th><th>Vedné</th>
	    <tr>
    	<td>1: 100-80%</td>
    	<td>1: 100-70%</td>
    	<td>1: 100-90%</td>
  	</tr>
	<tr>
    	<td>2: 80-70%</td>
    	<td>2: 70-60%</td>
    	<td>2: 90-70%</td>
  	</tr>
	<tr>
    	<td>3: 70-60%</td>
    	<td>3: 60-50%</td>
    	<td>3: 70-50%</td>
  	</tr>
	<tr>
    	<td>4: 60-50%</td>
    	<td>4: 50-40%</td>
    	<td>4: 50-40%</td>
  	</tr>
	<tr>
    	<td>5: 50-0%</td>
    	<td>5: 40-0%</td>
    	<td>5: 40-0%</td>
  	</tr>
	</tr></table>';
            break;
    	}
	}
		?></center>
</body>

<?php include_once'school_template/footer.php'; ?>
