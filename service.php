<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>service</title>
    <style>
        .head {
            text-align: center;
        }

        .books-grid {
            list-style: none;
            padding: 0;
            display: flex;
            justify-content: space-around;
        }

        .books-grid li {
            text-align: center;
            color: blue;
            margin: 10px;
            transition: transform 0.3s;
        }
        .books-grid li:hover {
            transform: scale(1.1); 
        }

        .books-grid figure {
            margin: 0;
        }

        .books-grid img {
            width: 100%; 
            height: auto; 
            max-height: 200px; 
            cursor: pointer;
        }
        section {
            display: flex;
            justify-content: space-around;
        }

        section div {
            flex: 1;
            margin: 10px;
            
        }

        section ul {
            list-style: none;
            padding: 0;
        }

        section ul li {
            margin-bottom: 5px;
            position: relative;
            padding-left: 20px;
        }

        section ul li::before {
            content: '\2022'; 
            color: blue;
            font-size: 1.2em;
            position: absolute;
            left: 0;
            top: 50%;
            transform: translateY(-50%);
            margin-right: 5px;
        }
        
        .team {
            width: -50px;
            height: -20px;
            
        }

    </style>
</head>
<body>
    <h1 class="head">Our Services</h1>
    <p class="head">We offer a wide range of services in creative spheres. Here is what we can offer...</p>
    <ul class="books-grid">
        <li>
            <figure>
                <img src="https://img.freepik.com/free-photo/professional-washer-blue-uniform-washing-luxury-car-with-water-gun-open-air-car-wash_496169-333.jpg" alt="Vehicle Cleaning">
            </figure>
            <p><span>Vehicle Cleaning</span></p>
        </li>

                                            
                                            <li>
                                                <figure>
                                                    <img src="https://www.love2laundry.com/blog/wp-content/uploads/2023/06/shutterstock_1019517997.jpg" alt="Book">
                                                </figure>   
                                                <p><span>Laundry</span></p>                                
                                            </li>
                                            <li>
                                                <figure>
                                                    <img src="https://assets.petco.com/petco/image/upload/f_auto,q_auto:best/grooming-lp-by-appointment-bath-img-1000x667" alt="Book">
                                                 </figure> 
                                                 <p><span>Pet Maintenance</span></p>  
                                             </li>
                                            <li>
                                                <figure>
                                                    <img src="https://scrubnbubbles.com/wp-content/uploads/2022/05/cleaning-service.jpeg" alt="Book">
                                                 </figure> 
                                                 <p><span>Home Cleaning</span></p>  
                                             </li>
                                             <li>
                                                <figure>
                                                    <img src="https://gardensinwonderland.co.za/wp-content/uploads/2023/01/IMG_20221205_132939-scaled.jpg" alt="Book">
                                                 </figure>
                                                 <p><span>Garden Maintenance</span></p>   
                                             </li>
    </ul>
    
    
        <h2 class="head">Our battle-hardened 30+ point checklist</h2>
        <section>
    <div>
        <ul>
            <li>Turn off lights</li>
            <li>Window sills</li>
            <li>kitchen Cabinets</li>
            <li>Bathroom counters</li>
            <li>AC units</li>
            <li>Vaccum carpet</li>
            <li>Garden watering</li>
            <li>Garbage remove</li>
            <li>Tree Maintenance</li>
            <li>Out-side cleaning</li>
        </ul>
    </div>
    <div>
        <ul>
            <li>Vehicle wash</li>
            <li>Polish door panel</li>
            <li>Dashboard clean</li>
            <li>Pre-wash with Water</li>
            <li>Wax protection</li>
            <li>Inside & boot vaccuming Door</li>
            <li>washing clothes</li>
            <li>Drying</li>
            <li>Ironingwater the plant</li>
            <li>Mow the grass</li>
        </ul>
    </div>
    <div>
        <ul>
            <li>Farm Maintenance</li>
            <li>Pet bath</li>
            <li>Pet haircut</li>
            <li>Pet handle</li>
            <li>Carpet vaccum</li>
            <li>Sofa vaccuming</li>
            
        </ul>
    </div>

    </section>

    <section>
        <div>
            <img class="team" src="https://www.shutterstock.com/image-photo/portrait-happy-diverse-janitors-office-600nw-2171553615.jpg">
            <h2>THE PERFECT TEAM</h2>
            <p>As the preferred WE WASH company, we only hire the most passionate power washers for our work family. Once hired, every workers goes through hundreds of hours of training before being PPw-approved to clean your home and everything. We ensure all of our team members understand our dedication to customer satisfaction so that they WOW you every time. </p>
        </div>
        <div>
        <img class="team" src="https://www.unoclean.com/Maintenance-Equipment/Restroom-Cleaning-Systems/Tile-and-Grout-Restroom-Cleaning-Equipment.jpg">
            <h2>THE PERFECT EQUIPMENT</h2>
            <p>Perfect wash is committed to using the best cleaners and equipment for your home and environment. Any cleansers we use are 100% biodegradable, so choosing us will protect your garden and outdoor pets. our roof treatments use a proprietary algaecide that eliminates harmful living organisms like lichens. </p>
        </div>
        
    </section>
</body>
</html>








