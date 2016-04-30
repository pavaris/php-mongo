<html>
    <head>

    </head>
    
    <body>
        
        <form name="form" method="post" action="insertPOISubmit.php">
            Name:
            <input type="text" name="name" id="name"/>
            <br>
            shortName:
            <input type="text" name="shortName" id="shortName" />
            <br>
            xCoord:
            <input type="text" name="coordX" id="coordX" />
            <br>
            yCoord:
            <input type="text" name="coordY" id="coordY" />
            <br>
            category:
            <input type="text" name="category" id="category" />
            <br>
            snippet:
            <input type="text" name="snippet" id="snippet" />
            <br>
            hoursWeek:
            <input type="text" name="hoursWeek" id="hoursWeek" />
            <br>
            hoursWeekend:
            <input type="text" name="hoursWeekend" id="hoursWeekend" />
            <br>
            ID:
            <input type="text" name="_id" id="_id" />
            <br>
            <br>
            <input type="submit" name="submit" value="Submit" />
        </form>
    
        
        <?php
		$connection = new MongoClient();
		$collection = $connection->map->poi2;
		$document = $collection->find();
		$document ->sort(array('_id' => 1));
		foreach ( $document as $id => $value )
		{
			echo "$id: ";
			var_dump( $value );
			echo "<br><br>";
		}
        ?>
        
        
    </body>
</html>


