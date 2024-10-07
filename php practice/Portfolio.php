<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Personal Portfolio Website</title>
    <style>
.port{
    background-color:aqua;
    

}
.navbar{
    display: flex;
    align items
    padding: auto;
    align-items:center;
    justify-content: space-between;
    margin: 0;
    padding: 0;
    margin-top: 0;
    margin-left: 0;
    box-sizing: border-box;
  
}
.navbar-content{
 display: flex;
 align-items: center;
 gap:80px;
}
.nav-links{
    list-style: none;
    display: flex;
    gap:20px;
    justify-content: space-between;
    margin-left: auto;
    padding-right: 30px;
    


}
.nav-links li{
    display: inline-block;

    padding: 10px;
}
.nav-links a{
    list-style: none;
    color: black;
    font-size: 20px;
    font-weight: bold;
    
    text-decoration: none;
}
.nav-links li a:hover{
   color: red;
}

.LOGO{
  
    transform: scale(0.3);
    margin-right: auto;
  
}
.hina{
    margin-top: 15%;
    margin-left: 8%;
}
.hina h1{
    font-size: 50px;
    color: #212121;
    margin-bottom: 20px;
}
.note{
    color:orange;
}
.hina p{
    color: #555;
    line-height: 22px;

}
.hina a{
    background-color: #212121;
    padding: 10px 18px;
    text-decoration: none;
    color: #fff;
    display: inline-block;
    margin: 30px 0;
    border-radius: 5px;
}
.images{
    width:45%;
    height: 40%;
    position: absolute;
    bottom: 0;
    right: 100px;

}
.images img{
    height: 100%;
    position: absolute;
    left: 50%;
    bottom: 0;
    transform:translatex(-50%);
    transition: bottom 1s left 1s;
}
.images:hover.RED{
    bottom:40px;
}
.images:hover.dora{
    left:45%;
}

    </style>
</head>
<body>
    <div class="Port">
        <nav>
          <div class="navbar">
            <div class="navbar-content">
               <div class="LOGO"><img src="log.jpg" alt=""></div>
                <ul class="nav-links"> 
                        <li><a href="#">HOME</a></li>
                        <li><a href="#">ABOUT</a></li>
                        <li><a href="#">PORTFOLIO</a></li>
                        <li><a href="#">SERVICES</a></li>
                        <li><a href="#">HIRE ME</a></li>
                </ul>
            </div>  
          </div>
        </nav>

        <div class="hina">
          <h1>I,M NANDY<span class="note"> POWERZ</span></h1>    
          <P>This is my official Portfolio to showcase my all <br>details and works related to web development and software
             engineering.</P> 
        <a href="#">DOWNLOAD CV</a>
  
        <div>
          <ul>
          <li><a href="#">About</a></li>
        </ul>
          <p>this company is basically about me and family<br>
          am here to approve that the above information is honstly true about me<br>
        you can read through my portfolio to get further details about me. </p>
        </div>
        </div>
        <div class="images">
          <img src="RED.jpg" class="RED">
          <img src="dora.JPG" class="dora>"
        </div>

    </div>
</body>
</html>
