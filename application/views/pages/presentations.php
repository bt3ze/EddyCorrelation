<body>

		<div id="wrapper" class="wrapper">
			<div id="wrapper-inner" class="wrapper-inner">
				<div class="wrapper-header">

					<?php
					$this->view("templates/navbar");
					$this->view("templates/page-header");
					?>
				</div>

				<div style="text-align: center" class="wrapper-content container-fluid">
					<div class="row-fluid">
						<div class="span10 offset1">
							<div class="row-fluid explanation">
								<p>
									The PowerPoint slides and animations available here have all been used in our presentations on the eddy covariance technique.
									The slides and animations must be viewed in ‘Slide Show’ mode to work correctly.
									A brief explanation is given in the PowerPoint text box below each of them.
									Please reference to the slides and animations as indicated on them:
								</p>
								<ul>
									<li>
										<a href="/berg/slides/Instrument%20animation.ppt" target="_blank">Instrument animation</a>
										– Animations of our typical instrument for oxygen flux measurements and how it records data.
										For more information, see <a href="/berg/journals/Berg%20and%20Huettel%202008%20Oceanography.pdf" target="_blank">Berg and Huettel (2008)</a>
									</li>
									<li>
										<a href="/berg/slides/Instrument%20illustration.ppt">Instrument illustration</a>
										– Illustration of an instrument on the seafloor and its footprint.
									</li>
									<li>
										<a href="/berg/slides/Visible%20eddy%20correlation%20in%20data%201.ppt">Visible eddy covariance in data 1</a>
										– Real data with visible covariance between the vertical velocity and oxygen concentration that gives the flux. 
									</li>
									<li>
										<a href="/berg/slides/Visible%20eddy%20correlation%20in%20data%202.ppt">Visible eddy covariance in data 2</a>
										 – Same as above but with cumulative flux calculation added.
									</li>
									<li>
										<a href="/berg/slides/Eddy%20correlation%20footprint.ppt">Eddy covariance footprint</a>
										– The area on the seafloor that gives the measured eddy flux. For more information, see
										<a href="/berg/journals/Berg%20et%20al%202007%20L&O.pdf" target="_blank">Berg et al. (2007)</a> and
										<a href="/berg/journals/Rheuban%20and%20Berg%202013%20L&OM.pdf" target="_blank">Rheuban and Berg (2013)</a>.
									</li>
									<li>
										<a href="/berg/slides/Transport%20by%20turbulent%20eddy.ppt">Transport by turbulent eddy</a>
										– Illustration of an eddy that brings oxygen down to the seafloor.
									</li>
								</ul>
							</div> 
						</div>
					</div>

				</div>
				<!-- wrapper-content -->
				<?php
				$this->view('templates/footer');
				?>
			</div>
			<!--wrapper-inner-->
		</div>
		<!-- wrapper-outer -->

		<?php
		$this->view('templates/scripts');
		?>
	</body>