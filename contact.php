<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700&display=swap');

:root{
    --red:#ff3838;
}
*{
    font-family: 'Nunito', sans-serif;
    margin: 0; padding: 0;
    box-sizing: border-box;
    outline: none; border: none;
    text-decoration: none;
    text-transform: capitalize;
    transition: all .2s linear;

}
*::selection{
    background: var(--red);
    color:#fff;
}
html{
    font-size:62.5%;
    overflow-x: hidden;
    scroll-behavior: smooth;
    scroll-padding-top: 6rem;
}


section{
    padding: 2rem 9%;
}


.heading{
    text-align: center;
    font-size: 3.5rem;
    padding: 1rem;
    color: #666;
}


.btn{
    display:inline-block;
    padding: .8rem 3rem;
    border:.2rem solid var(--red);
    cursor: pointer;
    font-size: 1.7rem;
    border-radius: .5rem;
    position: relative;
    overflow: hidden;
    z-index:0;
    margin-top: 1rem;
}

.btn::before{
    content: '';
    position: absolute;
    top:0; right: 0;
    width: 100%;
    height:100%;
    transition: .3s linear;
    z-index: -1;

}

.btn:hover::before{
    width:100%;
    left: 0;
}


@keyframes float{
    0%, 100%{
        transform: translateY(0rem);
    }
    50%{
        transform: translateY(3rem);
    }
}

.booking .row{
    padding: 2rem;
    box-shadow: 0 .5rem 1rem rgba(0,0,0,.1);
    background: #fff;
    display: flex;
    flex-wrap: wrap;
    gap: 1.5rem;

}

.booking .row form{
    flex: 1 1 50rem;
    padding: 1rem;

}
.booking .row form .inputBox{
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
}

.booking .row form .inputBox input, .order .row form textarea{
    padding: 1rem;
    margin:1rem 0;
    font-size: 1.7rem; 
    color: #333;
    text-transform: none;
    border:.1rem solid rgba(0,0,0,.3);
    border-radius: .5rem;
    width:49%;
}
.booking .row form textarea{
    width:100%;
    resize:none;
    height:10rem;

}
.booking .row form .btn{
    background:none;

}
.booking .row form .btn:hover{
    background: var(--red);
}
@media(max-width:991px){
  
    section{
        padding:2rem;
    }
}
 .container {
      display: flex;
    }

    .row {
      margin-right: 20px; 
    }

    .row {
            width: 48%; 
            background: #fff;
            padding: 2rem;
            box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .1);
            border-radius: .5rem;
            margin-bottom: 20px;
        }
        .line {
            width: 48%; 
            background: #fff;
            padding: 2rem;
            box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .1);
            border-radius: .5rem;
            margin-bottom: 20px;
            text-align: center;
        }

        .line h1 {
            color: var(--red);
            font-size: 2rem;
            margin-bottom: 1rem;
        }

        .row h2 {
            font-size: 1.6rem;
            margin-bottom: 1rem;
        }

        .line h2 span {
            color: var(--red);
        }
        #logo {
    width: 300px;
    padding: 0.2rem;
  }
  .back-btn {
   
   color: white;
   padding: 12px 30px;
   border: none;
   border-radius: 4px;
   cursor: pointer;
   font-size: 16px;
   font-weight: bold;
   width: auto;
   margin-left: 1100px;
   
}
    </style>
</head>
<body>

<button type="submit" class="back-btn"><a href ="index.html">Back</a></button>

<section  class="booking"  id="booking">
<div class="container">
<div class="row">
        <h1 class="heading">Contact-us email form</h1>
        
            <form action="contact.php" method="post" onsubmit="return showSuccess()">
                <div class="inputBox">
                   
                    <input type="text" name="first_name" placeholder="First Name" required>
                    <input type="text" name="last_name" placeholder="Last Name" required>
                </div>

                <div class="inputBox">
                   
                    <input type="number" name="phone" placeholder="Phone" required>
                    <input type="email" name="email" placeholder="Email" required>
                </div>
               
                <textarea placeholder="Message" name="message" id="" cols="30" rows="7"  required></textarea>

                <input type="submit" value="Send" class="btn">
            </form>
        </div> 

        <div class="line">
                <h1>Company details</h1>
                <br><br><br>
                <h2>Phone: <br>+974 7090 8373</h2><br><br>
                <h2>Address: <br>916, Doha, Qatar</h2><br><br>
                <h2><span>Email:</span><br> info@wewash.com</h2>

                <img id="logo" src="https://bundesverband-micro-living.de/wp-content/uploads/2021/11/Logo_WeWash.png">
            </div>

            
</div>
    </section>
    <script>
        function showSuccess() {
            alert('Message sent successfully!');
           return ; 
        }
    </script>

    <?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "service";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $firstName = $_POST["first_name"];
    $lastName = $_POST["last_name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    
    $sql = "INSERT INTO cleaning (first_name, last_name, phone, email, message)
            VALUES ('$firstName', '$lastName', '$phone', '$email', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo '<script>alert("Message sent successfully!");</script>';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

</body>
</html>