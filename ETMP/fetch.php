<!--profile pic is not generated when live search -->
<?php
    //connection or link to database
    $connect = mysqli_connect('sql6.freemysqlhosting.net','sql6405286','csc3XZRv7d','sql6405286');
    $output = '';
    
    if(isset($_POST['query'])) {
        $search = mysqli_real_escape_string($connect, $_POST["query"]);
        $query = "SELECT name FROM users WHERE name LIKE '%".$search."%'";
        $result = mysqli_query($connect, $query);

        if(mysqli_num_rows($result) > 0)
        {
            while($row = mysqli_fetch_array($result))
            {
                $output .= '
                <li class="chatCardDisplay">
                    <div class="d-flex bd-highlight chatCard">
                        <span id="profileName" style="display:none;">' .$row['name'].'</span>
                        <div class="profileImage0"></div>
                        <div class="chatUser">
                            <span>' .$row['name'].'</span>
                            <p id="chatHistoryDisplay">Start a new chat now</p>
                        </div>
                    </div>
                </li>
            ';
            }
            echo $output;
        }
        else
        {
            echo 'Data Not Found';
        }
    }
?>