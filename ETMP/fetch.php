<!--profile pic is not generated when live search should use php not jQuery for this-->
<script>
    //navigate from chat window with user list to private chat window
    $(function(){
      $(".chatCardDisplay1").click(function () {
        $('#chatWindow').removeClass('chat-box-on');
        $('#chatWindow2').addClass('chat-box-on');
      });
    })
</script>
<?php
    //connection or link to database
    $connect = mysqli_connect('sql6.freesqldatabase.com','sql6410152','BpVpCG11xT','sql6410152');
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
                <li class="chatCardDisplay1 contacts_body">
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