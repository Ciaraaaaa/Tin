<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery Page</title>

<style>
        *{
        box-sizing: border-box;
    }

    body{
        margin:0;
        width: 100%vh;
        background-color: lightskyblue;
        background-size: cover;
    }
    .row{
        padding:50px;
    }
    .col1{
         width:25%;
         padding:10px 10px 20px 10px;
         border: 5px solid gray;
         background-color:white;
         box-shadow:10px 10px 5px gray;
         float:left;
         -ms-transform:rotate(7deg);
         -ms-transform: rotate(7deg);
         -webkit-transform:totate(7deg);
         transform:rotate(7deg);
    }

    .col1 span{
        font-weight:bold;
        font-size:25px;
    }

    .col1:hover{
        transform: rotate(0deg);
    }



    .col2{
        width:25%;
        padding:10px 10px 20px;
        border:2px solid gray;
        background-color:white;
        box-shadow: 10px 10px 5px gray;
        float:left;
        -ms-transform: rotate(-8deg);
        -webkit-transform:totate(-8deg);
        transform:rotate(-8deg);
    }

.col2 span{
    font-weight:bold;
    font-size:25px;
}

.col2:hover{
    transform:rotate(0deg);
}

.row:after {
    content: " ";
    display: table;
    clear: both;
}
 @media screen and (max-width:600px) {
    .col1 {
        width: 100%;
    }
    .col2 {
        width: 100%;
    }
    
 }

 .he a{
    float: left;
    color: black;
    padding: 14px 16px;
    text-align: center;
    font-size 28px;
    text-decoration: none;
 }
.he a:hover{
    background-color: lightgreen;
    color: black;

}


 </style>


</head>

<body>
<div class="container">
        <div class="nav">
        <a href="userhome.php"> HOME</a>
        <a href="gallery.php"> GALLERY</a>
        <a href="group.php"> GROUP PROJECT</a>
        <a class="active" href="createpost.php"> CREATE POST</a>
        <a href="update_profile.php"> UPDATE PROFILE</a>
        <a href="index.php"> LOGOUT</a>
    </div>

   <div class="row">

        <div class="col1">
            <img src="img/landing.png" width="100%">
            <span>Landing Dashboard</span>
            <p class="desc1">This is for landing page were you can see the about the team the page and the account. </p>

        </div>

<div class="col2">
            <img src="img/admin.png" width="100%">
            <span>Admin Page</span>
            <p class="desc2">This is admin were the administrator can see and have access to all. </p>


        </div>
<!-- -->
<div class="col1">
            <img src="img/secretary.png" width="100%">
            <span>Secretary Page</span>
            <p class="desc1"> Secretary were the one who will registered the student to vote for election.</p>
        </div>

<div class="col2">
            <img src="img/student.jpg" width="100%">
            <span>Student Dashboard</span>
            <p class="desc2">The student were he/she will login to vote for election.</p>
        </div>


    </div>
</body>
</html>