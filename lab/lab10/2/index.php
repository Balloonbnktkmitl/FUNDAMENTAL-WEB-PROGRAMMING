<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab10.2</title>
    <link href="http://10.0.15.21/lab/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&family=Itim&display=swap" rel="stylesheet">
    <script src="http://10.0.15.21/lab/bootstrap/js/bootstrap.min.js"></script>
    <style>
        *{
            font-family: 'Itim', cursive;
        }
        body {
            padding: 20px;
        }
        button {
            margin-top: 10px;
        }
        
    </style>
</head>
<body>
        <?php
            session_start();

            // 1. Connect to Database 
            class MyDB extends SQLite3 {
                function __construct() {
                    $this->open('questions.db');
                }
            }

            // 2. Open Database 
            $db = new MyDB();
            if(!$db) {
                echo $db->lastErrorMsg();
            } else {
            }
            $question_number = isset($_GET['q']) ? (int)$_GET['q'] : 1;

            $sql = "SELECT * FROM questions WHERE QID = $question_number";
            $result = $db->querySingle($sql, true);

            echo "<h1>Quiz</h1>";
            echo "<form action='' method='post'>";

            if($question_number < 11){
            echo "<h3>Question $question_number: {$result['Stem']}</h3>";
            echo "<div class='form-group'>";
            echo "<input type='radio' name='question$question_number' value='A'> {$result['Alt_A']}<br>";
            echo "<input type='radio' name='question$question_number' value='B'> {$result['Alt_B']}<br>";
            echo "<input type='radio' name='question$question_number' value='C'> {$result['Alt_C']}<br>";
            echo "<input type='radio' name='question$question_number' value='D'> {$result['Alt_D']}<br>";
            echo "</div>";
            echo "<div class='form-group'>";
              // Next button
            if ($question_number < 10) {
                $next_question = $question_number + 1;
                echo "<button type='submit' name='next' value='$next_question' class='btn btn-primary'>Next</button>";
            }
              
              // Submit button
            if ($question_number == 10) {
                echo "<button type='submit' name='send' class='btn btn-success'>Submit</button>";
                // แสดงผลคะแนน
            }
            echo "</div>";
            }
            else {
                echo "<h3>Your score is: {$_SESSION['score']} / 10</h3>";
                echo "<button type='submit' name='restart' class='btn btn-danger'>Restart</button>";
                session_destroy();
            }

            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                if (isset($_POST['send'])) {
                    $next_question = $question_number + 1;
                    if($_POST["question$question_number"] == $result['Correct']) {
                        $_SESSION['score']++;
                    }
                    header("Location: ?q=$next_question");
                } else if(isset($_POST['next'])) {
                    // Redirect to the next question
                    $correct = $result['Correct'];
                    if($_POST["question$question_number"] == $correct) {
                        $_SESSION['score']++;
                    }
                    $next_question = $question_number + 1;
                    header("Location: ?q=$next_question");
                    exit;
                }
                else if(isset($_POST['restart'])) {
                    header("Location: ?q=1");
                    exit;
                }
            }
            echo "</form>";
            // 4. Close database
            $db->close();
        ?>
    </form>
</body>
</html>