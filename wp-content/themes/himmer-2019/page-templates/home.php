<?php
/**
 * Template Name: Home
 *
 * Custom template for home page
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
?>
<!-- == Home == -->
<main class="site-main home-page" id="main" role="main">
	<section class="home-hero">
		<div class="container">
			<h1 class="mission-intro"><span class="smaller">I design and fullfill</span><br> <em>wellness</em> perscriptions<br> <span class="smaller">for orgs and families.</span></h1>
			<div class="row">
				<div class="col col-12 col-md-6">
					<div class="perscription">
						<img class="rx-icon" src="https://himmer-center.s3.us-east-2.amazonaws.com/icons/icon-rx-logo.png" >
						<h2 class="mission-stmt"><b>Organizations</b><br> need a healthy culture</h2>
					</div>
				</div>
				<div class="col col-12 col-md-6">
					<div class="perscription">
						<img class="rx-icon" src="https://himmer-center.s3.us-east-2.amazonaws.com/icons/icon-rx-logo.png" >
						<h2 class="mission-stmt"><b>Individuals</b><br> need a safe environment</h2>
					</div>
				</div>
			</div><!-- .row -->
			<p class="approach">Our approach</p>
		</div><!-- .container -->
	</section>
	<section class="section services">
		<div class="container">
			<header class="justify-center m_b_2">
				<h1>Organizational options</h1>
			</header>
			<div class="row">
				<div class="col col-4 col-lg-4">
					<div class="card grad-orange">
						<img src ="https://himmer-center.s3.us-east-2.amazonaws.com/icons/icon-lecture.png">
						<div class="card-body">
							<h3>Training Workshop</h3>
							<p>Training workshops are usually department-team and/or purpose focused.</p>
							<ul>
								<li>Engineering department training on Emotional Intelligence</li>
								<li>Sales department on increasing their closing ratios</li>
								<li>Leaders on improving communication and innovation</li>
							</ul>
						</div>
					</div>
				</div><!-- .col -->
				<div class="col col-4 col-lg-4">
					<div class="card grad-blue">
						<img src ="https://himmer-center.s3.us-east-2.amazonaws.com/icons/icon-keynote.png">
						<div class="card-body">
							<h3>Keynote Speaker</h3>
							<p>Dr. Himmer is an engaging keynote speaker with a great sense of humor. His stories have a way of moving past motivational and landing on the transformational. He combines his experiences with principles and applies them in the training. Knowledge is not power without the ability to apply it. Experiencing a keynote address is an uplifting emotional journey that feels like your drinking from a fire-hydrant of principles and applied knowledge that leaves the participants wanting more.</p>
						</div>
					</div>
				</div><!-- .col -->
				<div class="col col-4 col-lg-4">
					<div class="card grad-green">
						<img src ="https://himmer-center.s3.us-east-2.amazonaws.com/icons/icon-consultation.png">
						<div class="card-body">
							<h3>Executive Coaching</h3>
							<p>One on one coaching for the executive. To work at the executive level without a coach is like being in surveillance without a camera and using carrier pigeons. There are so many moving parts and balancing the workload and homelife is a critical aspect of being productive. It is not so much about time management but more about prioritizing life based on governing principles. Having one’s own Rules of Engagement and Conditions of Satisfaction are first steps to creating the right environment that makes good decisions for you.</p>
						</div>
					</div>
				</div><!-- .col -->

			</div><!-- .row -->
			<h3 class="m_t_2">Speaking and training topics</h3>
			<ul class="topics">
				<li>Leadership vs. management training</li>
				<li>Emotional intelligence</li>
				<li>Communication skills</li>
				<li>Civility in the workplace (bullying)</li>
				<li>Employee engagement and retention</li>
				<li>Employee hiring</li>
			</ul>
			<p class="text-center">The <a href="https://www.harrisonassessments.com/">Harrison Assessment</a> is usually required for all levels of coaching.</p>
			<h3 class="services-cta">Reach out to learn more about these services</h3>
			<p class="text-center"><a class="btn btn-lg btn-dark" href="contact">Email me</a></p>
		</div><!-- .container -->
	</section>
	<section class="section section-top-divider services">
		<div class="container">
			<header class="justify-center m_b_2">
				<h1>Individual options</h1>
			</header>
			<div class="row">
				<div class="col col-6 col-lg-6">
					<div class="card grad-orange">
						<img src ="https://himmer-center.s3.us-east-2.amazonaws.com/icons/icon-lecture.png">
						<div class="card-body">
							<h3>Personal coaching</h3>
							<p>Personal coaching is a one on one experience that covers the following opportunities:</p>
							<ul>
								<li>Anxiety/stress</li>
								<li>PTSD/C-PTSD</li>
								<li>Addiction recovery</li>
							</ul>
						</div>
					</div>
				</div><!-- .col -->
				<div class="col col-6 col-lg-6">
					<div class="card grad-blue">
						<img src ="https://himmer-center.s3.us-east-2.amazonaws.com/icons/icon-keynote.png">
						<div class="card-body">
							<h3>Couples/Family coaching</h3>
							<p>There is one condition before you consider working with Dr. Himmer; you must be willing to work on yourself and not your spouse, partner, or fiancé. Opportunities available in couples coaching:</p>
							<ul>
								<li>Pre-marital coaching</li>
								<li>Communication challenges</li>
								<li>Mixed families</li>
							</ul>
						</div>
					</div>
				</div><!-- .col -->

			</div><!-- .row -->
			<h3 class="services-cta">Reach out with any questions</h3>
			<p class="text-center"><a class="btn btn-lg btn-dark" href="contact">Email me</a></p>
		</div><!-- .container -->
	</section>
	<section class="section section-top-divider book-promo">
		<div class="container">
			<h2>Check out my book</h2>
			<div class="row">
				<div class="col book-details">
					<h3 class="book-title">Listen &amp; Lead</h3>
					<h4 class="book-sub-title">The Seven Micro Skills of a Leader</h4>
					<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
					    <ol class="carousel-indicators">
					      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
					      <li data-target="#carouselExampleCaptions" data-slide-to="1" class=""></li>
					      <li data-target="#carouselExampleCaptions" data-slide-to="2" class=""></li>
					      <li data-target="#carouselExampleCaptions" data-slide-to="3" class=""></li>
					      <li data-target="#carouselExampleCaptions" data-slide-to="4" class=""></li>
					      <li data-target="#carouselExampleCaptions" data-slide-to="5" class=""></li>
					      <li data-target="#carouselExampleCaptions" data-slide-to="6" class=""></li>
					    </ol>
					    <div class="carousel-inner">
					      <div class="carousel-item active">
					        <div class="carousel-content">
					          <h5>#1 No unsolicited opinions</h5>
					          <p>Effective leaders know how to be neutral and invite learning, change, and growth. They don’t contaminate space with personal biases.</p>
					        </div>
					      </div>
					      <div class="carousel-item">
					        <div class="carousel-content">
										<h5>#2 No judging</h5>
										<p>Whether it’s constant criticism or overly positive affirmations such as awesome, great etc., judging is judging and thou shalt not!</p>
					        </div>
					      </div>
					      <div class="carousel-item">
					        <div class="carousel-content">
										<h5>#3 No relating</h5>
										<p>Keep it about them. The moment a person steals the attention from another there is a gap in the bridge of trust.</p>
					        </div>
					      </div>
					      <div class="carousel-item">
					        <div class="carousel-content">
										<h5>#4 Be neutral in your communication</h5>
										<p>Be neutral in your communication. Neutrality offers the most effective vantage point and when questioning the direction, decision, or motives of people, neutrality will get you closer to the truth with minimal push back.</p>
					        </div>
					      </div>
					      <div class="carousel-item">
					        <div class="carousel-content">
										<h5>#5 Know your Communication Blind Spots</h5>
										<p>Emotional self-awareness is the first and most important skill in Emotional Intelligence.</p>
					        </div>
					      </div>
					      <div class="carousel-item">
					        <div class="carousel-content">
										<h5>#6 Learn to teach</h5>
										<p>Teaching is a two-way street of communication and conducted in a neutral space where the teacher invites the student to learn. Telling is a monologue and can create codependency and it manifests an unhealthy bias, especially when unsolicited.</p>
					        </div>
					      </div>
					      <div class="carousel-item">
					        <div class="carousel-content">
										<h5>Skill #7: Get small commitments</h5>
										<p>Using neutral questioning, effective leaders learn that getting a yes can only happen when the other person can say no. Small commitments are wants based and not needs based.</p>
					        </div>
					      </div>
					    </div><!-- .carousel-inner -->
					    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
					      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
					      <span class="sr-only">Previous</span>
					    </a>
					    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
					      <span class="carousel-control-next-icon" aria-hidden="true"></span>
					      <span class="sr-only">Next</span>
					    </a>
					  </div>
					</div><!-- .col .book-details -->
				<div class="col-sm-4 col-lg-6 book-cover-wrapper">
					<img class="book-cover" src="https://s3-us-west-2.amazonaws.com/katamount-media/misc/listen-lead-book-cover.jpg" alt="Listen & Lead" />
				</div><!-- .col .book-cover -->
			</div><!-- .row -->
			<p class="m_t_4 text-center"><a class="btn btn-primary btn-lg" target="_blank" href="https://www.amazon.com/Listen-Lead-Seven-Skills-Leader/dp/1467571288">Get the book</a></p>
		</div><!-- .container -->
	</section>
	<section class="section subscribe">
		<div class="container">
			<h2>Subscribe to self-improvement</h2>
			<p class="font_2 m_b_2">When I write and publish something, you will be the first to know.
			<!-- Begin Mailchimp Signup Form -->
			<link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
			<style type="text/css">
				#mc_embed_signup{clear:left;}
				/* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
				   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
			</style>
			<div id="mc_embed_signup">
				<form action="https://richardhimmer.us1.list-manage.com/subscribe/post?u=68d5e4f7f59a3de29f91f3455&amp;id=abd7145f2e" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
					<div class="input-group input-group-lg">
						<input type="email" value="" name="EMAIL" class="required email form-control" id="mce-EMAIL" placeholder="your@email.com">
					</div>
					<div class="row m_t_2">
						<div class="col-6 col-lg-6 col-md-12 col-sm-12 input-group-lg">
							<input type="text" value="" name="FNAME" class="form-control" id="mce-FNAME" placeholder="First name">
						</div>
						<div class="col-6 col-lg-6 col-md-12 col-sm-12 input-group-lg">
							<input type="text" value="" name="LNAME" class="form-control" id="mce-LNAME" placeholder="Last name">
						</div>
					</div><!-- .row .mc_embed_signup_scroll -->
					<input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="btn-lg btn-dark">
					<div id="mce-responses" class="clear">
						<div class="response" id="mce-error-response" style="display:none"></div>
						<div class="response" id="mce-success-response" style="display:none"></div>
					</div>
					<!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
			    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_68d5e4f7f59a3de29f91f3455_abd7145f2e" tabindex="-1" value=""></div>
			    <div class="clear"></div>
				</form>
			</div>
			<!--End mc_embed_signup-->
		</div><!-- .container -->
	</section>
</main><!-- #main -->

<?php get_footer(); ?>
