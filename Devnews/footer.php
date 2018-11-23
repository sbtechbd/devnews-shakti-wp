 <footer>
			 <div class="footer-04">
			 <?php global $themesbazar; ?>
				<div class="row">
					<div class="col-md-3">
						<a href=""><img src="<?php echo $themesbazar['footer-logo']['url']; ?>" alt="images"  width="100%" height="100%"/></a>
					</div>
					<div class="col-md-4 text">
						<?php echo $themesbazar['editorial'];?>
					</div>
					<div class="col-md-4 text">
						<?php echo $themesbazar['editorial-tow'];?>
					</div>
				</div>
			</div>
			<div class="footer">
				<div class="row">
					<div class="col-md-6"><div class="copyright"><?php echo $themesbazar['copyright'];?></div></div>
					<div class="col-md-6"><div class="design"><?php echo $themesbazar['desing_developed'];?></div></div>
				</div>
			</div>
		     <?php wp_footer(); ?>
			</footer>
	
		
		</div>	
		</section>
	
	</body>
</html>