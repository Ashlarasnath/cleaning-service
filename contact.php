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

body{
    background:#f7f7f7;
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

.heading span{
    color: var(--red);
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

.order .row{
    padding: 2rem;
    box-shadow: 0 .5rem 1rem rgba(0,0,0,.1);
    background: #fff;
    display: flex;
    flex-wrap: wrap;
    gap: 1.5rem;

}

.order .row form{
    flex: 1 1 50rem;
    padding: 1rem;

}
.order .row form .inputBox{
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
}

.order .row form .inputBox input, .order .row form textarea{
    padding: 1rem;
    margin:1rem 0;
    font-size: 1.7rem; 
    color: #333;
    text-transform: none;
    border:.1rem solid rgba(0,0,0,.3);
    border-radius: .5rem;
    width:49%;
}
.order .row form textarea{
    width:100%;
    resize:none;
    height:10rem;

}
.order .row form .btn{
    background:none;

}
.order .row form .btn:hover{
    background: var(--red);
}
@media(max-width:991px){
  
    section{
        padding:2rem;
    }
}

 .lg_body{
    background: url('restaurant.jpg') no-repeat;
    background-size: cover;
 }
 .lg-form{
    width: 350px;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    position: absolute;
    color:#fff;
 }
 .lg-form p{
    font-size: 20px;
    margin: 15px 0;
 }
 .lg-form input{
    font-size: 16px;
    width: 100%;
    padding: 15px 10px;
    border: 0;
    outline: none;
    border-radius: 5px;

 }
 .lg-form button{
    font-size: 18px;
    font-weight: bold;
    margin: 20px 0;
    padding: 10px 15px;
    width: 50%;
    border-radius: 5px;
    border: 0;

 }
 .container {
      display: flex;
    }

    .row {
      margin-right: 20px; 
    }

    .row {
            width: 48%; /* Adjust the width as needed */
            background: #fff;
            padding: 2rem;
            box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .1);
            border-radius: .5rem;
            margin-bottom: 20px;
        }
        .line {
            width: 48%; /* Adjust the width as needed */
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

    </style>
</head>
<body>
<section  class="order"  id="order">
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
           return true; 
        }
    </script>

    <?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "service";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// If the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $firstName = $_POST["first_name"];
    $lastName = $_POST["last_name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // SQL query to insert data into the database
    $sql = "INSERT INTO cleaning (first_name, last_name, phone, email, message)
            VALUES ('$firstName', '$lastName', '$phone', '$email', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo '<script>alert("Message sent successfully!");</script>';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>

</body>
</html>