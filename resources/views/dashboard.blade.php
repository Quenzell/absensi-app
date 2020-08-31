<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<style>
  *{
    margin: 0;
    padding:0;
    list-style: none;
    text-decoration: none;
  }
  .slidebar{
    position: fixed;
    left: -250px;
    width: 250px;
    height: 100%;
    background: #042331;
    transition: all .5s ease;
  }
  .slidebar header{
    font-size:22px;
    color: white;
    text-align: center;
    line-height: 70px;
    background: #063146;
    user-select: none;
  }
  .slidebar ul a{
    display: block;
    height: 100%;
    width: 100%;
    line-height: 65px;
    font-size : 20px;
    color: white;
    padding-left: 40px;
    box-sizing: border-box;
    border-top: 1px solid rgba(255,255,255,.1);
    border-bottom: 1px solid black;
    transition: .4s;
  }
  ul li:hover a{
    padding-left: 50px;
  }
  .slidebar ul a i {
    margin-right: 16px;
  }
  #check{
    display: none;
  }
  label #btn, label #cancel{
    position: absolute;
    cursor: pointer;
    background: #042331;
    border-radius: 3px;
  }
  label #btn{
    left: 40px;
    top: 25px;
    font-size: 35px;
    color: white;
    padding: 6px 12px;
    transition: alll .5s;
  }
  label #cancel{
    z-index: 1111;
    left: -195px;
    top:17px;
    font-size: 30px;
    color:#0a5275;
    padding: 4px 9px;
    transition: all .5s ease;
  }
  #check:checked ~ .slidebar{
    left:0;

  }
  #check:checked ~ label #btn{
    left:250px;
    opacity: 0;
    pointer-events:none;
  }
  #check:checked ~ label #cancel{
    left:195px;
  }
</style>
<body>
  <input type="checkbox" id="check">
  <label for="check">
    <i class="fas fa-bars" id="btn"></i>  
    <i class="fas fa-times" id="cancel"></i> 
  </label>
  <div class="slidebar">  
    <header>E-Absen Poliwangi</header>
      <ul>
        <li><a href=""><i class="fas fa-qrcode" ></i>Home</a></li>
        <li><a href=""><i class="fas fa-link" ></i>Absen Scanner</a></li>
        <li><a href=""><i class="fas fa-stream" ></i>User Profile</a></li>
        <li><a href=""><i class="fas fa-envelop" ></i>History</a></li>
        <li><a href=""><i class="fas fa-slider-h" ></i>Log Out</a></li>
      </ul>
  </div>


    
</body>
</html>
