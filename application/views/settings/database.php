<h1><?php echo $col2['0']; ?></h1>
	<table class="edittable"><?php
		echo '<tr><th>Hostname</th><td><input type="text" value="'.$col2[1].'"</option></td></tr>';
		echo '<tr><th>Username</th><td><input type="text" value="'.$col2[2].'"</option></td></tr>';
		echo '<tr><th>Password</th><td><input type="text" value="'.$col2[3].'"</option></td></tr>';
		echo '<tr><th>Database</th><td><input type="text" value="'.$col2[4].'"</option></td></tr>';
		echo '<tr><th>Database driver</th>';
		echo '<td>
			<select>
				<option name="'.$col1[5].'" id="'.$col1[5].'" value="'.$col2[5].'" class="'.$col1[0].'">'.$col2[5].'</option>
				<option name="'.$col1[5].'" id="'.$col1[5].'" value="mysql" class="'.$col1[0].'">mysql</option>
				<option name="'.$col1[5].'" id="'.$col1[5].'" value="mysqli" class="'.$col1[0].'">mysqli</option>
				<option name="'.$col1[5].'" id="'.$col1[5].'" value="postgre" class="'.$col1[0].'">postgre</option>
				<option name="'.$col1[5].'" id="'.$col1[5].'" value="mssql" class="'.$col1[0].'">mssql</option>
			</select>
		</td></tr>';
		echo '<tr><th>Database prefix</th><td><input type="text" value="'.$col2[6].'"</option></td></tr>';?>
	</table>
<?php echo '<table border="0" class="edittable"><tr><th>Save settings</th><td><button name="Hostname" id="'.$col1[0].'" onclick="return editcfg(this);">Save</button></td></tr></table>'; ?>
</form>

