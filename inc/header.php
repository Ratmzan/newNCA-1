<?php include 'inc/header-scripts.php'; ?>

		<div class="brk-header-mobile">
			<div class="brk-header-mobile__open"><span></span></div>
			<div class="brk-header-mobile__logo"><a href="index.php"><img class="brk-header-mobile__logo-1 lazyload" src="img/logo.png" data-src="img/logo.png" alt="alt"> <img class="brk-header-mobile__logo-2 lazyload" src="img/logo.png" data-src="img/logo.png" alt="alt"></a></div>
		</div>
		<header class="brk-header brk-header_style-1 brk-header_skin-1 position-fixed d-lg-flex flex-column brk-header_color-dark position-fixed bg-white" style="display: none;" data-logo-src="img/logo.png" data-brk-library="component__header">
			<div class="brk-header__main-bar brk-header_border-top-dark order-lg-2 order-1" style="height: 72px;">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-1 align-self-lg-center d-none d-lg-flex">
							<a href="index.php" class="brk-header__logo brk-header__item @@modifier"><img class="brk-header__logo-1 lazyload" src="img/logo.png" data-src="img/logo.png" alt="alt"> <img class="brk-header__logo-2 lazyload" src="img/logo.png" data-src="img/logo.png" alt="alt"></a>
						</div>
						<div class="col-lg align-self-lg-stretch text-lg-right">
							<nav class="brk-nav brk-header__item">
								<ul class="brk-nav__menu">
									<li class="home-menu d-xs-none"><a href="index.php"><div>Home</div></a></li>
									<li><a href="about-us.php"><div>About Us</div></a></li>
									<li><a href="talents.php"><div><span class="d-lg-none menu_for">For</span> Talents</div></a></li>
									<li><a href="entrepreneurs.php"><div><span class="d-lg-none menu_for">For</span> Entrepreneurs </div></a></li>
									<li><a href="co-investors.php"><div><span class="d-lg-none menu_for">For</span> Co-investors</div></a></li>
									<li><a href="business-owners.php"><div><span class="d-lg-none menu_for">For</span> Business owners</div></a></li>
									<li><a href="news-resources.php"><div>Resources</div></a></li>
									<li><a href="insights.php"><div>Insights</div></a></li>
								</ul>
							</nav>
						</div>						
						<div class="col-lg-2 align-self-lg-stretch text-lg-right header_third_part">
						<div class="brk-header__item h-100 d-flex align-items-center justify-content-center">
							<a href="<?php echo $_SESSION['page'] ?>" class="bg-transparent font_family-arial language_btn btn btn-prime btn-sm border-radius-25 font__weight-bold shadow-none header_btn" data-brk-library="component__button"><?php echo $_SESSION['lan']?></a>
							
							

							<div class="footer_btns">
							<a href="https://www.linkedin.com/company/novastone-capital-advisors/" target="_blank" class="social_icon d-inline-flex align-items-center justify-content-center border-radius-5 p-1 font__family-avenir"><i class="fab fa-linkedin-in font__size-18"></i></a></div>
						</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<div class="brk-theme-options form_side_bar bg-primary" data-brk-library="brk-customizer">
		    <div class="brk-theme-options__panel panel-open shadow-none">
			    <a href="#" class="brk-theme-options__panel-link border-0">CONTACT <i class="fa fa-arrow-down mr-2"></i></a>
		    </div>
			<div class="brk-theme-options__control shadow-none bg-primary p-5 get_touch_main">
				<div class="brk-theme-options__header get_title">
					<h2 class="text-white font__family-efb font__size-60 text-uppercase">Get<br> In touch</h2>
					<div class="brk-theme-options__close panel-close function_btn" id="info0"></div>
				</div>
				<div class="row">
					<div style="display: none;" id="form-alert-success form-alert-success" class="alert alert-success" role="alert">
                    	Information was sent successfully!
					</div>
					<div class="col-lg-12" id="infocontent">
						<div class="functon_div current" id="info0content">
							<div class="get_in_touch_content">
								<p class="font__family-open-sans font__size-20 text-white pt-2">
									Select your profile
								</p>
							</div>	
							<div class="links_buttons pt-40">
								<ul class="pl-0">
									<li class="d-inline-block">
										<button class="btn btn-pos function_btn btn-md border-radius-30 rendered brk-library-rendered mr-1" id="info1">Talent</button>
									</li>
									<li class="d-inline-block">
										<button class="btn btn-pos function_btn btn-md border-radius-30 rendered brk-library-rendered ml-1" id="info2">Business Owner</button>
									</li><br>
									<li class="d-inline-block">
										<button class="btn btn-pos function_btn btn-md border-radius-30 rendered brk-library-rendered mr-1" id="info3">Co-investor</button>
									</li>
									<li class="d-inline-block">
										<button class="btn btn-pos function_btn btn-md border-radius-30 rendered brk-library-rendered ml-1 mr-1" id="info4">Intermediary</button>
									</li>
									<li class="d-inline-block">
										<button class="btn btn-pos function_btn btn-md border-radius-30 rendered brk-library-rendered ml-1" id="info5">Other</button>
									</li>
								</ul>
							</div>	
						</div>	
					</div>	
					<div class="col-lg-12" id="infocontent">
						<div class="functon_div" id="info1content">
							<a href="talents.php" class="h-100">
								<div class="get_in_touch_content">
									<p class="font__family-open-sans font__size-20 text-white pt-2 border-bottom pb-3 talent_text pr-30">
										Please visit our Talents page and apply.
									</p>
								</div>
								<div class="text-right arrow_link position-static pt-100">
									<img src="img/arrow.png" alt="arrow" />
								</div>
						    </a>
						</div>	
					</div>
					<div class="col-lg-12" id="infocontent">
						<div class="functon_div" id="info2content">
							<div class="get_in_touch_content">
								<p class="font__family-open-sans font__size-20 text-white pt-2 pb-3 talent_text pr-30">
									Please complete the form below and we will be in touch.
								</p>
							</div>
							<div class="resources_form resources_form_side">  
                                <form id="business_owner_contact_form" class="investors_contact_form needs-validation" novalidate>
									<input value="Business Owner" type="hidden" name="Type">
									<div class="d-inline brk-form-round mr-30 selection_div s_side">
										<select name="Title">
											<option value="Title" selected disabled>Title</option>
											<option value="Mr.">Mr.</option>
											<option value="Ms.">Ms.</option>
											<option value="Dr.">Dr.</option>
										</select>
									</div>
                                	<div class="form-group  position-relative">
                                		<span class="text-white label_staric position-absolute">*</span>
                                		<input type="text" class="form-control bg-white px-4 border-radius-25" name="First_Name" id="first-name" placeholder="Name" required>
                                		<div class="invalid-feedback">
									        Please provide your name.
									      </div>
                                	</div>
                                	<div class="form-group  position-relative">
                                		<span class="text-white label_staric position-absolute">*</span>
                                		<input type="text" class="form-control bg-white px-4 border-radius-25" name="Last_Name" id="last-name" placeholder="Surname" required>
                                		<div class="invalid-feedback">
									        Please provide your surname.
									      </div>
                                	</div>
                                	<div class="form-group  position-relative">
                                		<span class="text-white label_staric position-absolute">*</span>
                                		<input type="email" class="form-control bg-white px-4 border-radius-25" name="Email" id="e_mail" placeholder="E-mail" required>
                                		<div class="invalid-feedback">
									        Please provide your email address.
									      </div>
                                	</div>
                                	
                                	<div class="form-group ml-2">	
									<div class="">
										<p class="font__family-open-sans  text-white  pb-3  font__size-12">
										* = required
										</p>
									</div>

                                	<div class="checkbox checkbox-info checkbox-circle d-flex mb-2 line__height-16 text-white font__size-14">
							            <input id="bussiness01" type="checkbox" name="Newsletter">
							            <label for="bussiness01" class="d-flex align-items-center line__height-14 text-white font__size-14 font__family-open-sans">
							             </label>
							             Subscribe to our newsletter
							          </div>

							          <div class="checkbox checkbox-info checkbox-circle d-flex line__height-16 text-white font__size-14">
							            <input id="bussiness02" type="checkbox">
							            <label for="bussiness02" class="d-flex align-items-center line__height-14 text-white font__size-14 font__family-open-sans">
							             </label>
							              By signing up to the form, you agree to our terms and privacy policy.
							          </div>
                                	</div>
                                	<div id="business_owner_contact_form-submit" class="submit_btn w-100 text-center">	
                                	    <button type="submit" class="text-white btn btn-prime btn-md btn-outline-hover border-radius-5 bg-transparent font__size-14 px-5 shadow-none"><span>Send</span><span class="border-btn submit_border"></span></button>
									</div>
									<div id="business_owner_contact_form-loading" class="submit_btn w-100 text-center" style="display: none;" disabled>	
										<button type="submit" class="text-white btn btn-prime btn-md btn-outline-hover border-radius-5 bg-transparent font__size-14 px-5 shadow-none">
											<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>	
											<span>Sending...</span><span class="border-btn submit_border"></span>
										</button>
									</div>       
                                </form>
                                <div class="privacy_policy_link text-center mt-20">
                                	<a href="img/Terms-and-Conditions-Legal Notice.pdf" target="_blank" class="font__size-12 font__family-open-sans text-white underline">Terms</a><span class="font__size-12 font__family-open-sans text-white underline"> & </span><a href="img/NCA-Privacy-Policy.pdf" target="_blank" class="font__size-12 font__family-open-sans text-white underline">privacy policy</a>
                                </div>	
							</div>
						</div>	
					</div>
					<div class="col-lg-12" id="infocontent">
						<div class="functon_div" id="info3content">
							<div class="get_in_touch_content">
								<p class="font__family-open-sans font__size-20 text-white pt-2 pb-3 talent_text pr-30">
									Please complete the form below and our Investor Relations Director will be in touch shortly.
								</p>
							</div>
							<div class="co_investors_form">  
                                <form id="header_co_investors_contact_form" class="investors_contact_form needs-validation" novalidate>
									<input value="Co-Investor" type="hidden" name="Type" >
									<div class="form-group  position-relative">
                                		<span class="text-white label_staric position-absolute">*</span>
                                		<input type="text" class="form-control bg-white px-4 border-radius-25" name="First_Name" id="first-name" placeholder="Name" required>
                                		<div class="invalid-feedback">
									        Please provide your name.
									      </div>
                                	</div>
                                	<div class="form-group  position-relative">
                                		<span class="text-white label_staric position-absolute">*</span>
                                		<input type="text" class="form-control bg-white px-4 border-radius-25" name="Last_Name" id="last-name" placeholder="Surname" required>
                                		<div class="invalid-feedback">
									        Please provide your surname.
									      </div>
                                	</div>
                                	<div class="form-group  position-relative">
                                		<span class="text-white label_staric position-absolute">*</span>
                                		<input type="email" class="form-control bg-white px-4 border-radius-25" name="Email" id="e_mail" placeholder="E-mail" required>
                                		<div class="invalid-feedback">
									        Please provide your email address.
									      </div>
                                	</div>
                                	<div class="form-group  position-relative">
                                		<textarea class="form-control p-4 bg-white border-radius-25" id="co_investors_text" name="Comment" placeholder="Message" rows="3"></textarea>
                                	</div>
                                	<div class="form-group ml-2">	
									<div class="">
										<p class="font__family-open-sans  text-white  pb-3  font__size-12">
										* = required
										</p>
									</div>
                                	<div class="checkbox checkbox-info checkbox-circle d-flex mb-2 line__height-16 text-white font__size-14">
										<input id="co-investor03" type="checkbox" name="Newsletter">
										<label for="co-investor03" class="d-flex align-items-center line__height-14 text-white font__size-14 font__family-open-sans">
										</label>
										Subscribe to our newsletter
									</div>

							          <div class="checkbox checkbox-info checkbox-circle d-flex line__height-16 text-white font__size-14">
							            <input id="co-investor04" type="checkbox">
							            <label for="co-investor04" class="d-flex align-items-center line__height-14 text-white font__size-14 font__family-open-sans">
							             </label>
							              By signing up to the form, you agree to our terms and privacy policy.
							          </div>
                                	</div>	
                                	
                                	<div id="header_co_investors_contact_form-submit" class="submit_btn w-100 text-center">	
                                	    <button type="submit" class="text-white btn btn-prime btn-md btn-outline-hover border-radius-5 bg-transparent font__size-14 px-5 shadow-none"><span>Send</span><span class="border-btn submit_border"></span></button>
									</div>  
									<div id="header_co_investors_contact_form-loading" class="submit_btn w-100 text-center" style="display: none;" disabled>	
										<button type="submit" class="text-white btn btn-prime btn-md btn-outline-hover border-radius-5 bg-transparent font__size-14 px-5 shadow-none">
											<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>	
											<span>Sending...</span><span class="border-btn submit_border"></span>
										</button>
									</div>   
                                </form>
                                <div class="privacy_policy_link text-center mt-20">
                                	<a href="img/Terms-and-Conditions-Legal Notice.pdf" target="_blank" class="font__size-12 font__family-open-sans text-white underline">Terms</a><span class="font__size-12 font__family-open-sans text-white underline"> & </span><a href="img/NCA-Privacy-Policy.pdf" target="_blank" class="font__size-12 font__family-open-sans text-white underline">privacy policy</a>
                                </div>	
							</div>
						</div>	
					</div>	
					<div class="col-lg-12" id="infocontent">
						<div class="functon_div" id="info4content">
							<div class="get_in_touch_content">
								<p class="font__family-open-sans font__size-20 text-white pt-2 pb-3 talent_text pr-30">
									Please complete the form below and we will be in touch.
								</p>
							</div>
							<div class="resources_form resources_form_side">  
                                <form id="intermediatry_contact_form" class="investors_contact_form needs-validation" novalidate>
									<input value="Intermediary" type="hidden" name="Type" >
									<div class="d-inline brk-form-round mr-30 selection_div s_side ">
										<select name="Title">
											<option value="Title" selected disabled>Title</option>
											<option value="Mr.">Mr.</option>
											<option value="Ms.">Ms.</option>
											<option value="Dr.">Dr.</option>
										</select>
									</div>
                                	<div class="form-group  position-relative">
                                		<span class="text-white label_staric position-absolute">*</span>
                                		<input type="text" class="form-control bg-white px-4 border-radius-25" name="First_Name" id="first-name" placeholder="Name" required>
                                		<div class="invalid-feedback">
									        Please provide your name.
									      </div>
                                	</div>
                                	<div class="form-group  position-relative">
                                		<span class="text-white label_staric position-absolute">*</span>
                                		<input type="text" class="form-control bg-white px-4 border-radius-25" name="Last_Name" id="last-name" placeholder="Surname" required>
                                		<div class="invalid-feedback">
									        Please provide your surname.
									      </div>
                                	</div>
                                	<div class="form-group  position-relative">
                                		<span class="text-white label_staric position-absolute">*</span>
                                		<input type="email" class="form-control bg-white px-4 border-radius-25" name="Email" id="e_mail" placeholder="E-mail" required>
                                		<div class="invalid-feedback">
									        Please provide your email address.
									      </div>
                                	</div>
                                	<div class="form-group ml-2">	
									<div class="">
										<p class="font__family-open-sans  text-white  pb-3  font__size-12">
										* = required
										</p>
									</div>
                                	<div class="checkbox checkbox-info checkbox-circle d-flex mb-2 line__height-16 text-white font__size-14">
							            <input id="Intermediary01" type="checkbox" name="Newsletter">
							            <label for="Intermediary01" class="d-flex align-items-center line__height-14 text-white font__size-14 font__family-open-sans">
							             </label>
							             Subscribe to our newsletter
							          </div>

							          <div class="checkbox checkbox-info checkbox-circle d-flex line__height-16 text-white font__size-14">
							            <input id="Intermediary02" type="checkbox">
							            <label for="Intermediary02" class="d-flex align-items-center line__height-14 text-white font__size-14 font__family-open-sans">
							             </label>
							              By signing up to the form, you agree to our terms and privacy policy.
							          </div>
                                	</div>
                                	<div id="intermediatry_contact_form-submit" class="submit_btn w-100 text-center">	
                                	    <button type="submit" class="text-white btn btn-prime btn-md btn-outline-hover border-radius-5 bg-transparent font__size-14 px-5 shadow-none"><span>Send</span><span class="border-btn submit_border"></span></button>
									</div>    
									<div id="intermediatry_contact_form-loading" class="submit_btn w-100 text-center" style="display: none;" disabled>	
										<button type="submit" class="text-white btn btn-prime btn-md btn-outline-hover border-radius-5 bg-transparent font__size-14 px-5 shadow-none">
											<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>	
											<span>Sending...</span><span class="border-btn submit_border"></span>
										</button>
									</div>   
                                </form>
                                <div class="privacy_policy_link text-center mt-20">
                                	<a href="img/Terms-and-Conditions-Legal Notice.pdf" target="_blank" class="font__size-12 font__family-open-sans text-white underline">Terms</a><span class="font__size-12 font__family-open-sans text-white underline"> & </span><a href="img/NCA-Privacy-Policy.pdf" target="_blank" class="font__size-12 font__family-open-sans text-white underline">privacy policy</a>
                                </div>	
							</div>
						</div>	
					</div>
					<div class="col-lg-12" id="infocontent">
						<div class="functon_div" id="info5content">
							<a href="talents.php" class="h-100">
								<div class="get_in_touch_content">
									<p class="font__family-open-sans font__size-20 text-white pt-2 border-bottom pb-3 talent_text pr-30">
										Please visit our Talents page and apply.
									</p>
								</div>
								<div class="text-right arrow_link position-static pt-100">
									<img src="img/arrow.png" alt="arrow" />
								</div>
						    </a>
						</div>	
					</div>
				</div>	
			</div>
	    </div>
		