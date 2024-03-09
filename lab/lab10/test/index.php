<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lab10test</title>
</head>
<body>
    <?php
    // 1. Connect to Database 
    class MyDB extends SQLite3 {
        function __construct() {
            $this->open('lab10-file.db');
        }
    }

    // 2. Open Database 
    $db = new MyDB();
    if(!$db) {
        echo $db->lastErrorMsg();
    } else {
        echo "Opened database successfully<br>";
    }

    // 3. Query Execution
    // SQL Statements
    // $sql =<<<EOF
    //     CREATE TABLE questions (
    //     QID INTEGER PRIMARY KEY AUTOINCREMENT,
    //     Stem VARCHAR(150) NOT NULL,
    //     Alt_A VARCHAR(50) NOT NULL,
    //     Alt_B VARCHAR(50) NOT NULL,
    //     Alt_C VARCHAR(50) NOT NULL,
    //     Alt_D VARCHAR(50) NOT NULL,
    //     Correct VARCHAR(3) NOT NULL
    //     );
    //     EOF;
        
    // $sql =<<<EOF
    // INSERT INTO questions (Stem, Alt_A, Alt_B, Alt_C, Alt_D, Correct)
    // VALUES ('What is the full form of SQL?','Structured Query List',
    // 'Structure Query Language','Sample Query Language',
    // 'None of these','B'), ('Which of the following is not a valid SQL type?',
    // 'FLOAT','NUMERIC','DECIMAL','CHARACTER','C'),
    
    // ('Which of the following is not a DDL command?',
    // 'TRUNCATE','ALTER','CREATE','UPDATE','D'),
    
    // ('Which of the following are TCL commands?',
    // 'COMMIT and ROLLBACK','UPDATE and TRUNCATE','SELECT and INSERT',
    // 'GRANT and REVOKE','A'),
    
    // ('Which statement is used to delete all rows in a table without having the action logged?',
    //  'DELETE','REMOVE','DROP','TRUNCATE','D');
    // EOF;

//    $ret = $db->exec($sql);
//    if(!$ret){
//       echo $db->lastErrorMsg();
//    } else {
//       echo "Table created successfully<br>";
//    }

// $ret = $db->exec($sql);
//    if(!$ret) {
//       echo $db->lastErrorMsg();
//    } else {
//       echo "Records created successfully<br>";
//    }
    $sql ="SELECT * from questions;";
    $ret = $db->query($sql);   

    while($row = $ret->fetchArray(SQLITE3_ASSOC) ) {
    echo " <h4>". $row['QID'] . ". ";
    echo " ". $row['Stem'] . "</h4>"; 
    echo " <input type='radio'>". $row['Alt_A'] . "<br>";
    echo " <input type='radio'>". $row['Alt_B'] . "<br>";
    echo " <input type='radio'>". $row['Alt_C'] . "<br>";
    echo " <input type='radio'>". $row['Alt_D'] . "<br><br>";
    // echo " <input type='radio'>". $row['Correct'] . "<br>";
    }

    echo "Operation done successfully<br>";
   

    // 4. Close database
    $db->close();
    ?>
</body>
</html>