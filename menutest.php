<?php 
		$sql_category = mysqli_query($con,'SELECT * FROM loai ORDER BY maLoai DESC');
	?>
<div class="navbar-inner">
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
				    aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto text-center mr-xl-5">
						
						<?php 
							$sql_category_danhmuc = mysqli_query($con,'SELECT * FROM loai ORDER BY maLoai DESC');
							while($row_category_danhmuc = mysqli_fetch_array($sql_category_danhmuc)){
						?>
						<li class="nav-item  mr-lg-2 mb-lg-0 mb-2">

							<a class="nav-link " href="?quanly=danhmuc&id=<?php echo $row_category_danhmuc['maLoai'] ?>" role="button"  aria-haspopup="true" aria-expanded="false">
								<?php echo $row_category_danhmuc['tenLoai'] ?>
							</a>
							
						</li>
						<?php
						} 
						?>
						
					</ul>
				</div>
			</nav>
		</div>
	</div>
	<!-- //navigation -->