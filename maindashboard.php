<?php
    if(!isset($_SESSION) ){     
        session_start(); }
    
    include('session.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,inital-scale=1.0">
    <link rel="shortcut icon" href="images/Logo.ico" />
    
    <title>Urban Shoes Online Shop | Shop</title>
    <style>
        <?php include('style.php'); ?>
        /*---Dropdown---*/
    
        .dropdown {
            display: inline-block;
        }
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f1f1f1;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }
        
        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }
        
        .dropdown-content a:hover {background-color: #ddd;}
        
        .dropdown:hover .dropdown-content {display: block;}

        .btn{
            border: none;
            outline: none;
            padding: 12px 16px;
            background-color: white;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #ddd;
        }

        .btn.active {
            background-color: #666;
            color: white;
        }

        .btn1{
            border: none;
            outline: none;
            padding: 12px 16px;
            background-color: rgba(255, 255, 255, 0.349);
            cursor: pointer;
        }

        .btn1:hover {
            background-color: #ddd;
        }

        .btn1.active {
            background-color: #666;
            color: white;
        }


        .row1{
            justify-content: space-between;
            margin: 20px auto 50px;
        }
        .row{
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        .small-container1{
            max-width: 1080px;
            margin : auto;
            padding-left: 25px;
            padding-right: 25px;
        }

        .col1{
            flex-basis: 30%;
            padding: 10px;
            min-width: 200px;
            margin-bottom: 50px;
            box-shadow: 0 0 5px 0px rgba(0,0,0,0.1);
            transition: transform 0.5s;
            display: none;
        }
        .col1 img{
            width: 100%;
        }

        .col1:hover{
            box-shadow: 0 0 5px 0px rgba(0,0,0,0.5);
        }


        /* The "show" class is added to the filtered elements */
        .show {
            display: block;
        }

        .page-btn{
            margin: 0 auto 80px;
        }

        .page-btn span{
            display: inline-block;
            border: 1px solid black;
            margin-left: 10px;
            width: 40px;
            height:40px;
            text-align: center;
            line-height: 40px;
            cursor: pointer;
        }

        .page-btn span:hover{
            color:white;
            background: rgb(206, 172, 238);
        }

    </style>
</head>

<body>
    <?php include('header.php'); ?>
    <div class="wrapper hovercollapse">
        <?php include('navbar.php'); ?>
        <?php include('sidebar.php'); ?>
        <div class="maincontainer">
                <div class="small-container1">
                    <h2>SHOES</h2>
                    <div class="row row1">
                        <div id="myBtnContainer">
                            <button class="btn active" onclick="filterSelection('all')"> Show all</button>
                            <button class="btn" onclick="filterSelection('M')"> Men</button>
                            <button class="btn" onclick="filterSelection('F')"> Women</button>
                            <button class="btn" onclick="filterSelection('K')"> Kids</button>
                            <div class="dropdown">
                                <button class="btn1" class="categories">Categories</button>
                                <div class="dropdown-content">
                                    <a href="#" class="btn1" onclick="filterSelection('Casual')">CasualShoes</a>
                                    <a href="#" class="btn1" onclick="filterSelection('Sport')">Sport Shoes</a>
                                    <a href="#" class="btn1" onclick="filterSelection('Slides & Flips Flops')">Slides & Flips Flops</a>
                                </div>
                            </div>  
                            <div class="dropdown">
                                <button class="btn1" class="brand">Brands</button>
                                <div class="dropdown-content">
                                    <a href="#" class="btn1" onclick="filterSelection('Nike')">Nike</a>
                                    <a href="#" class="btn1" onclick="filterSelection('Adidas')">Addidas</a>
                                    <a href="#" class="btn1" onclick="filterSelection('Converse')">Converse</a>
                                    <a href="#" class="btn1" onclick="filterSelection('puma')">Puma</a>
                                    <a href="#" class="btn1" onclick="filterSelection('vans')">Vans</a>
                                </div>
                            </div> 
                            <div class="dropdown">
                                <button class="btn1" class="year">Product's Year</button>
                                <div class="dropdown-content">
                                    <a href="#" class="btn1" onclick="filterSelection('2021')">2021</a>
                                    <a href="#" class="btn1" onclick="filterSelection('2020')">2020</a>
                                    <a href="#" class="btn1" onclick="filterSelection('2019')">2019</a>
                                    <a href="#" class="btn1" onclick="filterSelection('2018')">2018</a>
                                </div>
                            </div>
                        </div>
                        <select>
                            <option>Best Match</option>
                            <option onclick="sortTableLow('low')">Price low to high</option>
                            <option onclick="sortTableHigh('high')">Price high to low</option>
                            <option>Discount</option>
                        </select>
                    </div> 
                    </br>
                    </br>

                </div>
        </div>
    </div>
    <?php include('footer.php'); ?>
    <script src="scripts.js"></script>
    <script>
        filterSelection("all")
        function filterSelection(c) {
            var x, i;
            x = document.getElementsByClassName("col1");
            if (c == "all") c = "";
            for (i = 0; i < x.length; i++) {
                RemoveClass(x[i], "show");
                if (x[i].className.indexOf(c) > -1) AddClass(x[i], "show");
            }
        }

        function AddClass(element, name) {
            var i, arr1, arr2;
            arr1 = element.className.split(" ");
            arr2 = name.split(" ");
            for (i = 0; i < arr2.length; i++) {
                if (arr1.indexOf(arr2[i]) == -1) { element.className += " " + arr2[i]; }
            }
        }

        function RemoveClass(element, name) {
            var i, arr1, arr2;
            arr1 = element.className.split(" ");
            arr2 = name.split(" ");
            for (i = 0; i < arr2.length; i++) {
                while (arr1.indexOf(arr2[i]) > -1) {
                    arr1.splice(arr1.indexOf(arr2[i]), 1);
                }
            }
            element.className = arr1.join(" ");
        }

        // Add active class to the current button (highlight it)
        var btnContainer = document.getElementById("myBtnContainer");
        var btns = btnContainer.getElementsByClassName("btn");
        for (var i = 0; i < btns.length; i++) {
            btns[i].addEventListener("click", function () {
                var current = document.getElementsByClassName("active");
                current[0].className = current[0].className.replace(" active", "");
                this.className += " active";
            });
        }

        function sortTableLow() {
            var array = Array.slice(document.getElementsByClassName("price"));
            array.sort(function (a, b) {            
            return parseFloat(a.innerHTML.replace("$", "")) - parseFloat(b.innerHTML.replace("$", ""));
        });
        array.map(function(e){
           e.parentNode.appendChild(e); 
        });
        }

        function myFunction() {
            var items = document.getElementsByTagName("h2");
            var prices = [];

            for (var i = 0; i < items.length; i++) {
                prices.push(+items[i].getAttribute("class"));
                console.log(prices);
            }

            prices.sort(sortNumber);
            console.log(prices);
            // document.getElementById("demo").innerHTML = price;
        };

    </script>
</body>

</html>