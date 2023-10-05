<html>
    
        <center>
            <style>
                #myDiv 
                {
               border: thick solid rgb(0, 255, 136);
                }
                .Maths {
             background-image: url('D.JPG');
            }
            div.gallery{
margin: 100px;
  border: 10px solid #ccc;
  float: left;
  width: 200px;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}
div.desc {
  padding: 25px;
  text-align: center;
}
.button {
              border: none;
              color: white;
              padding: 15px 32px;
              text-align: center;
              text-decoration: none;
              display: inline-block;
              font-size: 16px;
              margin: 4px 2px;
              cursor: pointer;
            }
            .button {background-color: #00FFFF;} /* Green */
            </style>
            <body>
                
                <div class="Maths">
                    <div id="myDiv">
                <center>
        <h1 style="color:DodgerBlue;">ADD YOUR PRODUCT FOR BIDDING:</h1><br><br><br><br>
    <label for="Product"><b style="color:DodgerBlue;">Name of The Product  :</b></label>
    <input type="Name of Product" placeholder="Enter Name" name="Product" required><br><br><br><br>

    <label for="Product Description"><b style="color:DodgerBlue;">Product Description :</b></label>
    <input type=" Product Description" placeholder="Enter Description" name="Product" required><br><br><br><br>

    <label for="Amount"><b style="color:DodgerBlue;"> Minimum  Price (in RS):</b></label>
    <input type="Minimum Price" placeholder="Enter Amount" name="Product" required><br><br><br><br>

    <label for="Category"><b style="color:DodgerBlue;">Category of Product :</b></label>
    <input type="Category of Product" placeholder="Enter Category" name="Category" required><br><br><br><br>

    <label for="Image"><b style="color:DodgerBlue;">Upload Image:</b></label>
    <form action="/action_page.php">
        <input type="file" id="myFile" name="filename">
        <input type="submit">
      </form>
    <br><br><br><br>
    
    <a class="n" href="ADD.html"><button class="button" class="btn">ADD</button></a>&nbsp;&nbsp;</div>
    

</div>
<script>
function myFunction() {
    document.getElementById("myDiv").style.border = "thin dotted red";
  }
</script>

</body>
</html>
