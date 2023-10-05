
<html>
    <head>
        <style>
            
@import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');


            .wrapper{
  display: inline-flex;
}
.wrapper .icon{
  margin: 0 20px;
  text-align: center;
  cursor: pointer;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  position: relative;
  z-index: 2;
  transition: 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);
}
.wrapper .icon span .ca .ja{
  display: block;
  height: 60px;
  width: 60px;
  background: #fff;
  border-radius: 50%;
  position: relative;
  z-index: 2;
  box-shadow: 0px 10px 10px rgba(0,0,0,0.1);
  transition: 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);
}
.wrapper .icon span i{
  line-height: 60px;
  font-size: 25px;
}
.wrapper .icon .tooltip{
  position: absolute;
  top: 0;
  z-index: 1;
  background: #fff;
  color: #fff;
  padding: 10px 18px;
  font-size: 20px;
  font-weight: 500;
  border-radius: 25px;
  opacity: 0;
  pointer-events: none;
  box-shadow: 0px 10px 10px rgba(0,0,0,0.1);
  transition: 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);
}
.wrapper .icon:hover .tooltip{
  top: -70px;
  opacity: 1;
  pointer-events: auto;
}
.icon .tooltip:before{
  position: absolute;
  content: "";
  height: 15px;
  width: 15px;
  background: 	#fff;
  left: 50%;
  bottom: -6px;
  transform: translateX(-50%) rotate(45deg);
  transition: 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);
}
.wrapper .icon:hover span{
  color: #fff;
}
.wrapper .icon:hover span,
.wrapper .icon:hover .tooltip{
  text-shadow: 0px -1px 0px rgba(0,0,0,0.4);
}
.wrapper .facebook:hover span,
.wrapper .facebook:hover .tooltip,
.wrapper .facebook:hover .tooltip:before{
  background: #3B5999;
}
.wrapper .twitter:hover span,
.wrapper .twitter:hover .tooltip,
.wrapper .twitter:hover .tooltip:before{
  background: #46C1F6;
}


.center {
 width: 100%;
 height: 600px;
}

.clearfix::after {
  content: "";
  clear: both;
  display: table;
}
.wrapper{
    margin-top: 10%;
}
        </style>
    </head>
    <body>
    <div class="wrapper">
         <div class="icon facebook">
            <div class="tooltip">
    <p>Product: Camera<br>Age of Product: 25<br>
  </p>
            </div>
            <span><img src="111.webp" width="200" height="200" style="background-color: white;"></span>
         </div>
         <div class="icon twitter" class="clearfix">
            <div class="tooltip">
               Join Auction
            </div>
            <span>  <a href="5.php"><img src="ja1.JPEG" width="200" height="200"></a></span>
         </div>
         <div class="icon facebook">
            <div class="tooltip">
    <p>Product:    <br>Age of product:    <br></p>
            </div>
            <span><img src="222.webp" width="200" height="200" style="background-color: white;"></span>
         </div></div><br>
         <div class="wrapper">
         <div class="icon twitter" class="clearfix">
            <div class="tooltip">
               Join Auction
            </div>
            <span>  <a href="5.php"><img src="ja1.JPEG" width="200" height="200"></a></span>
         </div>
         <div class="icon facebook">
            <div class="tooltip">
    <p>Product:   <br>Age of product:    <br></p>
            </div>
            <span><img src="333.jpg" width="200" height="200" style="background-color: white;"></span>
         </div>
         <div class="icon twitter" class="clearfix">
            <div class="tooltip">
               Join Auction
            </div>
            <span>  <a href="5.php"><img src="ja1.JPEG" width="200" height="200"></a></span>
         </div>
         <div class="icon facebook">
            <div class="tooltip">
    <p>Product:   <br> Age of product:   <br></p>
            </div>
            <span><img src="444.webp" width="200" height="200" style="background-color: white;"></span>
         </div>
         <div class="icon twitter" class="clearfix">
            <div class="tooltip">
               Join Auction
            </div>
            <span>  <a href="5.php"><img src="ja1.JPEG" width="200" height="200"></a></span>
         </div>
        </div></body>
        </html>