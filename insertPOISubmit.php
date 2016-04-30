<html>
<body>

    <?php
        $name = $_POST["name"];
        $shortName = $_POST["shortName"];
        $xCoord = $_POST["coordX"];
        $yCoord = $_POST["coordY"];
        $category = $_POST["category"];
        $snippet = $_POST["snippet"];
        $hoursWeek = $_POST["hoursWeek"];
        $hoursWeekend = $_POST["hoursWeekend"];
        $id = $_POST["_id"];
    
        date_default_timezone_set("America/New_York");
        
        $doc = array(
            "name" => $name,
            "shortName" => $shortName,
            "coordX" => $xCoord,
            "coordY" => $yCoord,
            "category" => $category,
            "snippet" => $snippet,
            "hoursWeek" => $hoursWeek,
            "hoursWeekend" => $hoursWeekend,
            "_id" => $id
        );
    
        $connection = new MongoClient();
        $collection = $connection->map->poi2 ;
        $collection->insert( $doc );

    ?>
    
    Name: <?php echo $name; ?><br>
    shortName: <?php echo $shortName; ?> <br>
    xCoord: <?php echo $xCoord; ?><br>
    yCoord: <?php echo $yCoord; ?><br>
    category: <?php echo $category; ?><br>
    snippet: <?php echo $snippet; ?><br>
    hoursWeek: <?php echo $hoursWeek; ?><br>
    hoursWeekend: <?php echo $hoursWeekend; ?><br>
    id: <?php echo $id; ?><br>

</body>
</html>
