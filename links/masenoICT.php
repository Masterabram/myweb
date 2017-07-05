<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/muzima.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">

    <title> Maseno ICT Subscription Form </title>
</head>

<body class="col-md-5 col-md-offset-4">
<div id="pre_populate_data"></div>
<h2 class="text-center"> Maseno ICT Subscription Form </h2>

<form id="chew_form" name="chew_form" method="POST" action="../forms/masenoict_form.php">

<div class="section">
    <h3>Please subcribe to Maseno ICT Club Updates Via the follwing</h3>


    <div class="form-group">
        <label for="name">NAME:</label>
        <input class="form-control" id="name" name="name" type="text" required="required" >
    </div>
    <div class="form-group">
        <label for="student">STUDENT NUMBER:</label>
        <input class="form-control" id="student" name="student" type="text" required="required" >
    </div>    
    <div class="form-group">
        <label for="phone">PHONE:</label>
        <input class="form-control" id="phone" name="phone" type="phone" required="required" >
    </div>
    <div class="form-group">
        <label for="email">EMAIL:</label>
        <input class="form-control" id="email" name="email" type="email" required="required" >
    </div>
    <div class="form-group">
        <label for="course">Course:</label>
        <select class="form-control" id="course" name="course" required="required" >
            <option value="">...</option>
            <option value="BSC IT">BSC IT</option>
            <option value="BSC Computer Science">BSC Computer Science</option>
            <option value="BSC ITM">BSC ITM</option>
            <option value="BSC Computer Technology">BSC Computer Technology</option>
        </select>
    </div>
    <div class="form-group">
        <label for="sex">Gender:</label>
        <select class="form-control" id="sex" name="sex">
            <option value="">...</option>
            <option value="M">Male</option>
            <option value="F">Female</option>
        </select>
    </div>
    <div class="form-group">
        <!-- <label for="email">EMAIL:</label> -->
        <input class="form-control btn-primary" id="submit" name="submit" type="submit" >
    </div>    
</div>


</form>
</body>


</html>
