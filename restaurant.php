<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<style>
    img{
        height: 200px;
        width: 200px;
        border:2px solid black;
        background-image: url(imglogo.png);
    }
</style>
<style>
      body{
      background-image: url(food.jpg);
      background-position: center center;
      background-size:cover;
      background-attachment: fixed;
    }
    #ui{
        background-color:#424446;
        padding:30px;
        margin-top: 30px;
        border-radius: 30px;
        opacity: 0.9;
    }
    #ui label,h1,h2{
        color:#c9eeda;
        font-style: italic;
       

    }
    #ui label{
        font-size: 2rem;
    }
    #ui input{
        color: rgb(55, 15, 201);
        font-size: medium;
    }
</style>
<meta name="viewport" content="width=500, initial-scale=1" />
    </head>
    <body>
       
        <script src="https://www.gstatic.com/firebasejs/8.6.3/firebase-app.js"></script>
        <script src="https://www.gstatic.com/firebasejs/8.6.3/firebase-analytics.js"></script>
        <script src="https://www.gstatic.com/firebasejs/8.6.3/firebase-auth.js"></script>
        <script src="https://www.gstatic.com/firebasejs/8.6.3/firebase-database.js"></script>
        
        <script src="https://www.gstatic.com/firebasejs/8.6.3/firebase-storage.js"></script>
        <script>
      const firebaseConfig = {
        apiKey: "AIzaSyBR9kPyhPrlljnBfs9vYa29IFNs8-T1KsI",
        authDomain: "wastefoodmanagement-aa290.firebaseapp.com",
        projectId: "wastefoodmanagement-aa290",
        storageBucket: "wastefoodmanagement-aa290.appspot.com",
        messagingSenderId: "1042960532935",
        appId: "1:1042960532935:web:672c6eaeb56c47bb0f05e2",
        measurementId: "G-R610TRMZ9G"
      };
      firebase.initializeApp(firebaseConfig);
          firebase.analytics();
            </script>

<div class="container">
    <div class="row">
        <div class="col-lg-3">

        </div>
        <div class="col-lg-6">
            <div id="ui">
                <h1 align="center">REQUEST FORM</h1>
                <form method="post" action="connect.php">
                <form class="form-group text-center" >
                    <div class="row" >
                        <div class="col-lg-6">
                            <label>Restaurent name</label>
                            <input type="text" placeholder="restaurent name" id="name" class="form-control" name="restaurentname" required>
                            <br><br>
                        
                        </div>
                        <div class="col-lg-6">
                            <label>Place</label>
                            <input type="text" placeholder="place" id="place" class="form-control" name="place" required>
                            <br><br>
                          
                        </div>
                       
                       
                    </div>
                    <label>Food type</label>
                    <input type="text" placeholder="food type" id="ft" class="form-control" name="foodtype" required><br>
                    <br>
                 
                    <div class="col-lg-6">
                        <label>Quantity</label>
                        <input type="number" placeholder="quantity" id="quantity1" class="form-control" name="quantity" required><br>
                        <br>
                    </div>
                    <div class="col-lg-6">
                        <label>Phone number</label>
                        <input type="number" placeholder="phone number" id="pn" class="form-control" name="phonenumber" required><br>
                        <br>
                    </div>
                    <div class="col-lg-6">
                        <label>Email</label>
                        <input type="email" placeholder="email" id="emails" class="form-control" name="email" required><br>
                        <br>
                    </div>
                    <div class="col-lg-6">
                        <label>Item Id</label>
               
                        <input type="text" placeholder="id" id="identity" class="form-control" name="id"><br>
                        <br>
                        <br>
                        
                    </div>
                    
        
                      <input type="text" id="namebox" placeholder="Image Name" name="imgname">
                      <img id="myimg"><label id="UpProgress"></label><br><br>

                
                  
                </form>
                <div>
                    <div id="imgdata">
                <button id="select">SELECT IMAGE</button>
                <button id="upload">UPLOAD IMAGE</button><br><br>
            </div>
                <button onclick="restaurent()" id="send" class="btn btn-primary btn-block btn-lg" name="request">SEND REQUEST</button>
            </div>
            </div>
        </div>
        <style>
            #select{
                color: rgb(53, 23, 221);
                font-size: medium;
                font-style: italic;
                border-radius: 10px;
                border: 2px solid aqua;
            }
            #upload{
                color: rgb(53, 23, 221);
                font-size: medium;
                font-style: italic;
                border-radius: 10px;
                border: 2px solid aqua;
            }
            #imgdata{
                display: flex;
                margin-left: 17%;
                justify-content: space-between;
                margin-bottom: 10px;
            }
            #send{
                border-radius: 15px;
                font-size: larger;
                font-size: 2rem;
                font-style: oblique;
            }
        </style>
        <div class="col-lg-3">
            
        </div>
    </div>
  </div>
          
  
</div> 
    <script>


    function restaurent(){ 
    
       alert("Successfully request has been sent to ngo");
        
   }
   var ImgName,ImgUrl;
    var files=[];
    var reader;


                

document.getElementById("select").onclick=function(e){
    var input=document.createElement('input');
    input.type='file';
  
    input.onchange = e => {
        files=e.target.files;
        reader=new FileReader();
        reader.onload=function(){
            document.getElementById("myimg").src=reader.result;
        }
        reader.readAsDataURL(files[0])
    }
    input.click();
}



document.getElementById("upload").onclick=function(){
    ImgName = document.getElementById('namebox').value;
    var uploadTask = firebase.storage().ref('Images/'+ImgName+".png").put(files[0]);
  uploadTask.on('state_changed',function(snapshot){
var progress=(snapshot.bytesTransferred/snapshot.totalBytes)*100;
document.getElementById('UpProgress').innerHTML='Upload'+progress+'%';
  },

  function(error){
    alert("error in the uploading image"+error);
  },
  function(){
    uploadTask.snapshot.ref.getDownloadURL().then(function(url){
ImgUrl = url;
var m1=document.getElementById("name").value;
        
        var m2=document.getElementById("place").value;
        var m3=document.getElementById("ft").value;
        
        var m4=document.getElementById("quantity1").value;
        var m5=document.getElementById("pn").value;
        var m6=document.getElementById("emails").value;
        var m7=document.getElementById("identity").value;

firebase.database().ref('logindetails').child('restaurent').child(m7).set(
        {
            name:m1,
      place:m2,
      foodname:m3,
      quantity:m4,
      contact:m5,
      email:m6,
      identity:m7,
Link:ImgUrl

  });
  alert("image added successfully")
  }
  );
});
</script>
}
<?php
error_reporting(0);
$servername="localhost";
$username="root";
$password="";
$dbname="foodrequest";
$conn=mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{
    echo"connection suessfully";
}
else{
    echo"connection not successfully".mysqli_connect_error();
}
if(isset($_POST['request']))
{
    $restaurentname=$_POST['restaurentname'];
    $place=$_POST['place'];
    $foodtype=$_POST['foodtype'];
    $quantity=$_POST['quantity'];
    $phonenumber=$_POST['phonenumber'];
    $email=$_POST['email'];
    $id=$_POST['id'];
    $imgname=$_POST['imgname'];
   $query = "insert into form1 values('$restaurentname','$place','$foodtype','$quantity','$phonenumber','$email','$id','$imgname')";

   $data=mysqli_query($conn,$query);
   if($data)
   {
    echo "data inserted into database succuessfully";
   }
   else
   {
    echo "data not inserted";
   }
}

?>
</body>
</html> 
