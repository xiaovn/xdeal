<?php
include "config.php";
?>
<html>
  <head>
    <meta charset="utf-8">
    <title>GiaLaiCamera Order Builder</title>
    <style>
      body {
        padding: 10px;
      }
 
      h1 {
          margin: 0 0 0.5em 0;
          color: #343434;
          font-weight: normal;
          font-family: 'Ultra', sans-serif;   
          font-size: 36px;
          line-height: 42px;
          text-transform: uppercase;
          text-shadow: 0 2px white, 0 3px #777;
      }
 
      h2 {
          margin: 1em 0 0.3em 0;
          color: #343434;
          font-weight: normal;
          font-size: 30px;
          line-height: 40px;
          font-family: 'Orienta', sans-serif;
      }
 
      #phones {
        font-family: Tahoma;
        font-size: 14px;
        background: #fff;
        margin: 15px 25px 0 50px;
        border-collapse: collapse;
        text-align: center;
        float: left;
        width: 900px;
      }
 
      #phones th {
        font-size: 14px;
        font-weight: normal;
        color: #039;
        padding: 10px 8px;
        border-bottom: 2px solid #6678b1;
      }
 
      #phones td {
        border-bottom: 1px solid #ccc;
        color: #669;
        padding: 8px 10px;
      }
 
      #phones tbody tr:hover td {
        color: #009;
      }
 
      #filter {
        float:left;
      }
    </style>
	<script src="http://code.jquery.com/jquery-latest.js"></script> 
	<script>
        $(document).ready(function(){
            $(".addtocart").on('click', function()
            {
				var id = $(this).attr("id");
				var qty = $("#qty").val();
				alert(id);
				alert(qty);
				var dataString = 'productid='+ id + '&productqty=' + qty + "&cartadd=new";
                $.ajax({
                    type: "POST",
                    url: "<?php echo XC_URL;?>/cart/update",
                    data: dataString,
                    cache: false,
                    success: function(html)
                    {
                        $("#"+id).text("Added");
                    }
                });
			    return false;
            });
        });
    </script>
  </head>
  <body> 
    <h1 style="text-align: center;">Gia Lai Camera's Quotations Auto Creater </h1>
	<form name="filter" action="" method="POST">
	<div id="filter">
		<div>
			<h3>Product price</h3>
			<div>
				<input type="radio" class="price" name="price" checked value="300000">
				<label for="car">≥ 300.000 VNĐ</label>
			</div>
			<div>
				<input type="radio" class="price" name="price" value="500000">
				<label for="language">≥ 500.000 VNĐ</label>
			</div>
			<div>
				<input type="radio" class="price" name="price" value="1000000">
				<label for="nights">≥ 1.000.000 VNĐ</label>
			</div>
		</div>
		<div>
		  <h3>Resolution Option</h3>
		  <div>
			<input type="radio" class="resolution" name="resolution" checked value="480">
			<label for="car"> ≥ 480 TVL</label>
		  </div>
		  <div>
			<input type="radio" class="resolution" name="resolution" value="600">
			<label for="language"> ≥ 600 TVL</label>
		  </div>
		  <div>
			<input type="radio" class="resolution" name="resolution" value="700">
			<label for="nights">≥ 700 TVL</label>
		  </div>
		  <div>
			<input type="radio" class="resolution" name="resolution" value="800">
			<label for="student">≥ 800 TVL</label>
		  </div>
				<div>
			<input type="radio" class="resolution" name="resolution" value="1000">
			<label for="student">≥ 1000 TVL</label>
		  </div>
		 </div>
		<div>
			<h3>IR Led Option</h3>
			<div>
				<input type="radio" class="ir" name="ir" checked value="1">
				<label for="ir"> ≥ 1 IR Led</label>
			</div>
			<div>
				<input type="radio" class="ir"  name="ir" value="12">
				<label for="ir"> ≥ 12 IR Led</label>
			</div>
			<div>
				<input type="radio" class="ir" name="ir" value="24">
				<label for="ir"> ≥ 24 IR Led</label>
			</div>
		</div>
		<div>
			<hr>
			<div>
				<input type="submit" name="search" value="Search">
			</div>
		</div>
    </div>
	</form>
    <table id="phones">
      <thead>
        <tr>
          <th>Product ID</th>
          <th>Picture</th>
		  <th>Product Name</th>
          <th>Product Price</th>
          <th>Camera Resolution</th>
          <th>Camera IR</th>
          <th>Quantity</th>
          <th>Add to cart</th>
        </tr>
      </thead>
      <tbody>
	  <?php
	  for($i = 0;$i < count($_SESSION['av']);$i++)
	  {
		$pid = $_SESSION['av'][$i]['productid'];
	  ?>
	  <tr>
		<td><?php echo $pid;?></td>
		<td><img typeof="foaf:Image" src="<?php echo $upload_path."/product/".product::getInstance()->get_product_feature_image($pid);?>" width="100" height="75" alt="" /></td>
		<td><?php echo $_SESSION['av'][$i]['product_title'];?></td>
		<td><?php echo number_format($_SESSION['av'][$i]['product_price'], 0, ',', '.');?> VND</td>
		<td><?php echo product::getInstance()->get_product_feature("44",$pid,"resolution");?> TVL</td>
		<td><?php echo product::getInstance()->get_product_feature("44",$pid,"ir");?> IR ON/￠5</td>
		<td><input type="text" name="qty" id="qty" value="" size="3"></td>
		<td><a href="#" id="<?php echo $pid;?>" class="addtocart">Add</a></td>
		
	</tr>
	  <?php
	  }
	  ?>
      </tbody>
    </table>
 
    
    
     
  </body> 
</html>