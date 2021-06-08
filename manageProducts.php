<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,inital-scale=1.0">
    <link rel="shortcut icon" href="images/Logo.ico" />
    <title>(Admin) Manage Products</title>
    <style>
        <?php include 'styles.css'; ?>
        button {
            background-color: grey;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button a {
         color: white;
        }
        button:hover {
            background-color: lightgrey;
        }

        table {
			border-collapse: collapse;
			width: 100%;
            /* Full width */
            padding: 12px;
            /* Some padding */
            border: 1px solid #ccc;
            /* Gray border */
            border-radius: 4px;
            /* Rounded borders */
            box-sizing: border-box;
            /* Make sure that padding and width stays in place */
            margin-top: 6px;
            /* Add a top margin */
            margin-bottom: 16px;
            /* Bottom margin */
            resize: vertical
                /* Allow the user to vertically resize the textarea (not horizontally) */
		}
		td{
			border: 1px solid #ccc;
			padding: 10px;
		}
    </style>
</head>

<body>
    <?php include('header.php'); ?>
    <div class="wrapper hovercollapse">
        <?php include('navbar.php'); ?>
        <?php include('sidebar.php'); ?>
        <div class="maincontainer">
            <div class="container">
                <div class="content">
        
        <br><br><br>
        <caption>List of Products</caption>
        <table border="1px;"> 
        <tr> 
            <td> ID </td> 
            <td> Product Name </td> 
            <td> Size </td> 
            <td> Brand </td> 
            <td> Category </td> 
            <td> Gender </td> 
            <td> Year </td>
            <td> Price </td> 
            <td> Discount </td>  
            <td> Availability </td> 
            <td> Image </td>
            <td> Audit Log</td>
            <td> Update </td> 
            <td> Delete </td> 
        </tr>   
                </div>
            </div>
        </div>
    </div>
    <?php include('footer.php'); ?>
    
    
</body>

</html>