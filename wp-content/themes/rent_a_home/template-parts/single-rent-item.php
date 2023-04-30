<div class="property-single">
			<main class="property-main">
				<div class="property-card">
					<div class="property-primary">
						<header class="property-header">
							<h2 class="property-title"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
							<div class="property-meta">
								<span class="meta-location">Ovcha Kupel, Sofia</span>
								<span class="meta-total-area">Price: 1,100 €/sq.m</span>
							</div>

							<div class="property-details grid">
								<div class="property-details-card">
									<div class="property-details-card-title">
										<h3>Rooms</h3>
									</div>
									<div class="property-details-card-body">
										<ul>
											<li>2 Bedrooms</li>
											<li>1 Bathroom</li>
											<li>1 Living room</li>
											<li>Separated kitchen</li>
										</ul>
									</div>
								</div>
								<div class="property-details-card">
									<div class="property-details-card-title">
										<h3>Additional Details</h3>
									</div>
									<div class="property-details-card-body">
										<ul>
											<li>Floor: 6</li>
											<li>Elevator/Lift</li>
											<li>Brick-built</li>
											<li>Electricity</li>
											<li>Water Supply</li>
											<li>Heating</li>
										</ul>
									</div>
								</div>
							</div>
				
						</header>

						<div class="property-body">
                            <?php the_content(); ?>
						</div>
					</div>
				</div>
			</main>
			<aside class="property-secondary">
				<div class="property-image property-image-single">
					<div class="property-image-box property-image-box-single">
					<?php if (has_post_thumbnail()) {
							the_post_thumbnail();
						} else {
							echo ('<img src="https://i.imgur.com/ZbILm3F.png" alt="false image">');
						}
						?>
					</div>
				</div>
				<a href="#" class="button button-wide">Like the property</a>
			</aside>
		</div>

		<h2 class="section-heading">Other similar properties:</h2>
		<ul class="properties-listing">
			<li class="property-card">
				<div class="property-primary">
					<h2 class="property-title"><a href="#">Two-bedroom apartment</a></h2>
					<div class="property-meta">
						<span class="meta-location">Ovcha Kupel, Sofia</span>
						<span class="meta-total-area">Total area: 99.50 sq.m</span>
					</div>
					<div class="property-details">
						<span class="property-price">€ 100,815</span>
						<span class="property-date">Posted 14 days ago</span>
					</div>
				</div>
				<div class="property-image">
					<div class="property-image-box">
						<img src="images/bedroom.jpg" alt="property image">
					</div>
				</div>
			</li>

			<li class="property-card">
				<div class="property-primary">
					<h2 class="property-title"><a href="#">Two-bedroom apartment</a></h2>
					<div class="property-meta">
						<span class="meta-location">Ovcha Kupel, Sofia</span>
						<span class="meta-total-area">Total area: 91.65 sq.m</span>
					</div>
					<div class="property-details">
						<span class="property-price">€ 100,815</span>
						<span class="property-date">Posted 14 days ago</span>
					</div>
				</div>
				<div class="property-image">
					<div class="property-image-box">
						<img src="images/bedroom.jpg" alt="property image">
					</div>
				</div>
			</li>
		</ul>