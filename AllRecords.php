<?php

use LDAP\Result;

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "test_db";

    $conn = new mysqli($servername,$username,$password,$database);
    if ($conn->connect_error){
        die ("Connection Failed!".$conn->connect_error);
    }

    $query = "SELECT * FROM test";
    $result = mysqli_query($conn,$query);

    if ($result){
        //echo mysqli_num_rows($result)."Records Found!.";
        $table = '<table>';
        $table .= '<tr><th>name</th><th>message</th>';
        

        while($records = mysqli_fetch_assoc($result)){
            $table .= '<tr>';
            $table .= '<td>'.$records['name'].'</td>';
            $table .= '<td>'.$records['message'].'</td>';
            $table .= '</tr>';
        }
        $table .= '</table>';
    }
?>
<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

    <script src="script3.js" defer></script>
        <style>
            @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600&display=swap");
* {
  font-family: 'Poppins', sans-serif;
  margin: 0;
  padding: 0;
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
  outline: none;
  border: none;
  text-decoration: none;
  text-transform: capitalize;
  -webkit-transition: all .2s linear;
  transition: all .2s linear;
}


*{
    padding: 0;
    margin: 0;
    font-family: sans-serif;
}
            .header {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  z-index: 1000;
  background: #222;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  padding: 1.5rem 9%;
}

.header .navbar a {
  font-size: 1rem;
  color: #aaa;
  display: inline-block;
  margin: 0 1rem;
}

.header .navbar a:hover {
  color: #29d9d5;
}

.header .btn {
  margin-top: 0;
}

.logo {
  font-size: 2rem;
  color: #fff;
  font-weight: bolder;
}

.navbar{
  font-size: 15px;
}
.logo i {
  color: #29d9d5;
  padding-right: .5rem;
}

#menu-btn {
  font-size: 2.5rem;
  color: #fff;
  cursor: pointer;
  display: none;
}

            table{
	            border-collapse: collapse;
                width:600px;
                box-shadow: -1px 12px 12px -6px rgba(0,0,0,0,5);

            }

            td{
                padding: 8px;
	            border:1px solid black;
                border:1px #3995BF;
                border-collapse:collapse;
                text-align:center;
                font-size:15px;
                
            }
            th{
                background-color:#3995BF;
                padding:10px;
                text-align:center;
                font-size:15px;
            }
            body{
                height:100vh;
                display: grid;
                place-items:center;
            }
            tr:nth-child(odd){
                background-color:#3995BF;
            }
            tr:nth-child(odd):hover{
                background-color:#E0B23F;
                transform:scale(2);
                transition:transform 100ms ease-in;
            }
            tr{
                color:black;
                background-color:white;
            }
 
        </style>
    </head>
    <body bgcolor="#1C1C1C">
    <header class="header">

<div id="menu-btn" class="fas fa-bars"></div>

<a data-aos="zoom-in-left" data-aos-delay="150" href="#" class="logo"> <i class="fas fa-paper-plane"></i>travel </a>

<nav class="navbar">
    <a data-aos="zoom-in-left" data-aos-delay="300" href="index.html">home</a>
    <a data-aos="zoom-in-left" data-aos-delay="1150" href="register.html">Register</a>
    <a data-aos="zoom-in-left" data-aos-delay="900" href="feed.html">feedback</a>
</nav>



</header>
        <?php echo $table; ?>



<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<script>

AOS.init({
    duration: 800,
    offset:150,
});

</script>
    </body>
</html>
<?php mysqli_close($conn); ?>
