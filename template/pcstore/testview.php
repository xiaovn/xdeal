<html>
<head>
<style>
.divtable{
	margin-top: 40px;
	margin-left: 50px;
	margin-right: 100px;
	}
.divright{
	float: right; 
	width: 70%;
	border-left-style: solid;
}	
.divleft{
	border: 1px solid;
}
.divrow{
	border-bottom-style: solid;
	height: 250px; width: 30%;
	text-align: center;
}
.divhead{
	box-shadow: 10px 10px 5px #888888;
}
.divlb{
	background-color: #e0ffff;
	text-align: center;
	margin-top: 10px;
    margin-bottom: 20px;
    margin-right: 0px;
    margin-left: 0px;
}
</style>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
     var max_height = 0;
     //Duyệt qua 3 cột để lấy kích thước của cột lớn nhất
     $("#left,#right").each(function(){
         if($(this).height() > max_height)
          max_height = $(this).height();
     });
     //Gán độ cao 3 cột theo giá trị max_height
     $("#left,#right").height(max_height);
    });
</script

</head>
<body>
	<form action = '' name='' method= 'post'>

		<div class="divtable">			
			<div class="divright" id="right">
				<div>
					<div class="divlb"><input type="button" name="" value="Them"><label>Ten san pham 1</label></input></div>
					<div class="divlb"><input type="button" name="" value="Them"><label>Ten san pham 2</label></input></div>
					<div class="divlb"><input type="button" name="" value="Them"><label>Ten san pham 3</label></input></div>							
				</div>
			</div>
			
			<div class="divleft" id="left">
				<div class="divrow">
					<div class="divhead"><h3>Resolution</h3></div>
					<div ><input type="checkbox" name="">800 TVL</input></div>
					<div><input type="checkbox" name="">800 TVL</input></div>
				</div>
				
				<div class="divrow">
					<div class="divhead"><h3>IR</h3></div>
					<div><input type="checkbox" name="">800 TVL</input></div>
					<div><input type="checkbox" name="">800 TVL</input></div>
				</div>				
				
				<div class="divrow">
					<div class="divhead"><h3>Resolution</h3></div>
					<div><input type="checkbox" name="">800 TVL</input></div>
					<div><input type="checkbox" name="">800 TVL</input></div>
				</div>
			</div>				
		</div>
	</form>
</body>
</html>