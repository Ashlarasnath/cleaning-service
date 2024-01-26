

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
    <style>
        body{
            background-image: url('https://static.wixstatic.com/media/11062b_a75563617bcd48d5aa4f10a733fbe2b6~mv2.jpg/v1/fill/w_640,h_712,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/11062b_a75563617bcd48d5aa4f10a733fbe2b6~mv2.jpg');

        }
        h1{
            text-align: center;
            color: maroon;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        .btn {
            background-color: blue;
            color: white;
            padding: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            position: absolute;
            left: 500px; 
            text-align: center;
            animation: shake 0.5s ease infinite;
            display:inline-block;
        }

@keyframes shake {
    0%, 100% {
        transform: translateX(0);
    }
    25%, 75% {
        transform: translateX(-5px);
    }
    50% {
        transform: translateX(5px);
    }
}

    </style>
</head>
<body>
    <h1>Booking Details</h1>
    <div>
    <table>
    <thead>
        <tr>
            <th colspan="9">Vehicle Cleaning Packages</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td></td>
            <td>Platinum Pro</td>
            <td>Platinum</td>
            <td>Must Wash</td>
            <td>More Wash</td>
            <td>Seat Cleaning</td>
            <td>Outside</td>
            <td>Inside</td>
            <td>Wax Clean</td>
        </tr>
        <tr>
            <td>Price</td>
            <td>$50</td>
            <td>$40</td>
            <td>$30</td>
            <td>$25</td>
            <td>$20</td>
            <td>$15</td>
            <td>$10</td>
            <td>$35</td>
        </tr>
    </tbody>
</table>


    </div>
<br>
    <div>
    <table>
    <thead>
        <tr>
            <th colspan="9">Home Cleaning Packages</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td></td>
            <td>Full Pack</td>
            <td>Inside</td>
            <td>Outside</td>
            <td>Bathroom</td>
            <td>Visiting Hall</td>
            <td>Parking Area</td>
            <td>Garden</td>
            <td>Roof</td>
        </tr>
        <tr>
            <td>Price</td>
            <td>$250</td>
            <td>$100</td>
            <td>$130</td>
            <td>$125</td>
            <td>$120</td>
            <td>$90</td>
            <td>$100</td>
            <td>$135</td>
        </tr>
        
    </tbody>
</table>
 </div>

    <br>
    <div>
    <table>
    <thead>
        <tr>
            <th colspan="9">Other Cleaning Packages</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td></td>
            <td>Pet cleaning</td>
            <td>AC repair</td>
            <td>Ironing</td>
            <td>dry cleaning</td>
           
        </tr>
        <tr>
            <td>Price</td>
            <td>$250</td>
            <td>$200</td>
            <td>$80</td>
            <td>$110</td>
            
        </tr>
        
    </tbody>
</table>


    </div>
<br><br>
    <div>
    <a href="booking_form.php" class="btn btn-primary btn-block">BOOK NOW</a>
    </div>
</body>
</html>