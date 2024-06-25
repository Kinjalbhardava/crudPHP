<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud Operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


    
<br>
<br>
</head>
<body>




		<div class="charts" >		
			<div class="mid-content-top charts-grids" >
				<div class="middle-content" >
						
					<h1>Booking Data</h1>
					
					<!-- start content_slider -->
					<div class="bs-example widget-shadow" data-example-id="hoverable-table"> 
						<div class="panel-body widget-shadow">
						<table class="table table-hover"> 
							 <thead>
                                        <tr>
                                            <th>name</th>
                                            <th>Email</th>
                                            <!-- <th>Email</th> -->
											<th>phone</th>
                                            <th>Date</th>
											<th>guest</th>
											<th>Special requst</th>
                                         
											
                                        </tr>
                                    </thead>
                                    
										<?php
			$con=mysqli_connect("localhost","root","","crud");
			$q="select * from user";
			$c=mysqli_query($con,$q);
			
			$sql = ("select * from user");
			$res=$con->query($sql);
			
			while($row=mysqli_fetch_array($c) )
			{
				?>
					<tr>
					<td><?php echo $row['name'];?></td>
					
					<td><?php echo $row['email'];?></td>
					<td><?php echo $row['phone'];?></td>
					<td><?php echo $row['date'];?></td>
					<td><?php echo $row['guest'];?></td>
					<td><?php echo $row['request'];?></td>
					<td>   
                    <button type="button" class="btn btn-danger">Delete</button> </th>
                    </td>
					
					
					
					</tr>



				<?php
			}
		?>
		
                                    </tbody>
						</table>
						</div>
					</div>
				</div>
					<!--//sreen-gallery-cursual---->
			</div>
		</div>
		
				
			</div>
		</div>
	
