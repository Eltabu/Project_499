<div class="container ProductInfo">
	<div class="row form-group">
        <div class="col-xs-12">
            <ul class="nav nav-pills nav-justified thumbnail setup-panel">
                <li class="active"><a href="#step-1">
                    <h4 class="list-group-item-heading">Step 1</h4>
                    <p class="list-group-item-text">Customer information</p>
                </a></li>
                <li class="disabled"><a href="#step-2">
                    <h4 class="list-group-item-heading">Step 2</h4>
                    <p class="list-group-item-text">Payment information</p>
                </a></li>
                <li class="disabled"><a href="#step-3">
                    <h4 class="list-group-item-heading">Step 3</h4>
                    <p class="list-group-item-text">Aggrement & Commit</p>
                </a></li>

                <!--<li class="disabled"><a href="#step-4">
                    <h4 class="list-group-item-heading">Step 4</h4>
                    <p class="list-group-item-text">Complete</p>
                </a></li>-->

            </ul>
        </div>
	</div>
    <div class="row setup-content" id="step-1">
        <div class="col-xs-12">
            <div class="col-md-12 well">
                
                <form class="col-md-6">
                    <h1> Customer information:</h1>
                    <div class="form-group">
						<label for="FirstName" class="control-label">First name:</label>
						<input name="FirstName" type="text" id="step1-firstname" class="form-control" required="required">
					</div>

					<div class="form-group">
						<label for="LastName" class="control-label">Last name:</label>
						<input name="LastName" type="text" id="step1-lastname" class="form-control" required="required">
					</div>

                    <div class="form-group">
						<label for="suffix" class="control-label">Suffix:</label>
                        <select name="suffix" id="step1-suffix" class="form-control" required="required">
								<option value="1">Mr.</option>
                                <option value="2">Ms</option>
                                <option value="3">Miss</option>    
						</select>
					</div>

                    <div class="form-group">
						<label for="countries" class="control-label">Your role: </label>
						<select name="countries" id="step1-role" class="form-control" required="required">
								<option value="1">Antigua and Barbuda</option>
                                <option value="2">Australia</option>
                                <option value="3">The Bahamas</option>
                                <option value="4">Barbados</option>
                                <option value="5">Belize</option>
                                <option value="6">Canada</option>
						</select>
					</div>

					<div class="form-group">
						<label for="Email" class="control-label">Your E-mail:</label>
						<input name="Email" id="step1-email" class="form-control" type="email" required="required">
					</div>

					<div class="form-group">
						<label for="Phone" class="control-label">Your phone:</label>
						<input name="Phone" id="step1-phone" class="form-control" type="tel" required="required">
					</div>	
				
                </form>
                <form class="col-md-6">
                    <h1> Company information:</h1>
                    <div class="form-group">
						<label for="companyName" class="control-label">Company name:</label>
						<input name="companyName" type="text" id="step1-companyName" class="form-control" required="required">
					</div>
                    <div class="form-group">
						<label for="websiteName" class="control-label">Website name:</label>
						<input name="websiteName" type="text" id="step1-websiteName" class="form-control" required="required">
					</div>

                    <div class="form-group">
						<label for="countries" class="col-sm-4 control-label">Country: <span>*</span> </label>
						<select name="countries" id="step1-countries" class="form-control" required="required">
								<option value="1">Antigua and Barbuda</option>
                                <option value="2">Australia</option>
                                <option value="3">The Bahamas</option>
                                <option value="4">Barbados</option>
                                <option value="5">Belize</option>
                                <option value="6">Canada</option>
						</select>
					</div>
                    <div class="form-group">
						<label for="Email" class="control-label">Company E-mail:</label>
						<input name="Email" id="step1-companyemail" class="form-control" type="email" required="required">
					</div>

					<div class="form-group">
						<label for="Phone" class="control-label">Company phone:</label>
						<input name="Phone" id="step1-companyphone" class="form-control" type="tel" required="required">
					</div>
                </form>                
            </div>
            <button id="activate-step-2" class="btn btn-primary btn-md pull-right">Next Step</button>
        </div>
    </div>

    <div class="row setup-content" id="step-2">
        <div class="col-xs-12">
            <div class="col-md-12">
                
                <div class="col-md-3">
                </div>

                <form class="col-md-6" >

                        <!-- You can make it whatever width you want. I'm making it full width
                            on <= small devices and 4/12 page width on >= medium devices -->                        
                        
                            <!-- CREDIT CARD FORM STARTS HERE -->
                            <div class="panel panel-default credit-card-box">
                                <div class="panel-heading display-table" >
                                    <div class="row display-tr" >
                                        <h2 class="panel-title display-td text-center" >Payment Details</h2>
                                        <div class="display-td" >                            
                                            <img class="img-responsive pull-right" src="http://i76.imgup.net/accepted_c22e0.png">
                                        </div>
                                    </div>                    
                                </div>
                                <div class="panel-body">
                                    <form role="form" id="payment-form">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label for="cardNumber">CARD NUMBER</label>
                                                    <div class="input-group">
                                                        <input 
                                                            type="tel"
                                                            class="form-control"
                                                            name="cardNumber"
                                                            id="step2-cardNumber"
                                                            placeholder="Valid Card Number"
                                                            autocomplete="cc-number"
                                                            required autofocus 
                                                        />
                                                        
                                                    </div>
                                                </div>                            
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="cardExpiry"><span class="hidden-xs">EXPIRATION MONTH</label>
                                                    <input 
                                                        type="tel" 
                                                        class="form-control" 
                                                        name="cardExpiry"
                                                        id="step2-cardExpiryMM"
                                                        placeholder="MM"
                                                        autocomplete="cc-exp"
                                                        required 
                                                    />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="cardExpiry"><span class="hidden-xs">EXPIRATION YEAR</label>
                                                    <input 
                                                        type="tel" 
                                                        class="form-control" 
                                                        name="cardExpiry"
                                                        id="step2-cardExpiryYY"
                                                        placeholder="YY"
                                                        autocomplete="cc-exp"
                                                        required 
                                                    />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-5 col-md-5">
                                                <div class="form-group">
                                                    <label for="cardCVC">CV CODE</label>
                                                    <input 
                                                        type="tel" 
                                                        class="form-control"
                                                        name="cardCVC"
                                                        id="step2-cardCVC"
                                                        placeholder="CVC"
                                                        autocomplete="cc-csc"
                                                        required
                                                    />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <button class="subscribe btn btn-success btn-lg btn-block" type="button">Validate</button>
                                            </div>
                                        </div>
                                        <div class="row" style="display:none;">
                                            <div class="col-xs-12">
                                                <p class="payment-errors"></p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>            
                            <!-- CREDIT CARD FORM ENDS HERE -->   
                
                
                </form>


            </div>
            <button id="activate-step-3" class="btn btn-primary btn-md pull-right">Next Step</button>
            
        </div>
    </div>
    <div class="row setup-content" id="step-3">
        <div class="col-xs-12">
            <div class="col-md-12 well">
                <h1 class="text-center"> Terms of use</h1>

                <form>

                    <div class="sppb-column-addons">
                    <div id="sppb-addon-1507107420" class="clearfix">
                        <div class="sppb-addon sppb-addon-text-block sppb-text-left ">
                            <h2 class="sppb-addon-title">Introduction</h2>
                            <div class="sppb-addon-content">Before you sign up and download or use downloadable product from ThemeHunt for your own purposes, please make sure you have read, understood, and agreed to all the terms. By accessing or using ThemeHunt, we assume you’ve accepted the terms of use given below. These Terms apply to all visitors, users and others who wish to access or use the Service. If you disagree with any part of the terms then you do not have permission to access the Service.</div>
                        </div>
                    </div>
                    <div id="sppb-addon-1507107421" class="clearfix">
                        <div class="sppb-empty-space  clearfix"></div>
                    </div>
                    <div id="sppb-addon-1507107422" class="clearfix">
                        <div class="sppb-addon sppb-addon-text-block sppb-text-left ">
                            <h2 class="sppb-addon-title">Communications</h2>
                            <div class="sppb-addon-content">By creating an Account on our service, you agree to subscribe to newsletters, marketing or promotional materials and other information we may send. However, you may opt out of receiving any, or all, of these communications from us by using the unsubscribe link or instructions provided in any email we send.</div>
                        </div>
                    </div>
                    <div id="sppb-addon-1507107423" class="clearfix"><div class="sppb-empty-space  clearfix"></div></div><div id="sppb-addon-1507107424" class="clearfix"><div class="sppb-addon sppb-addon-text-block sppb-text-left "><h2 class="sppb-addon-title">Purchases</h2><div class="sppb-addon-content">If you wish to purchase any product or service made available through the Service (“Purchase”), you may be asked to supply certain information relevant to your Purchase including, without limitation, your credit card number, the expiration date of your credit card, your billing address, and your shipping information.<br><br>You represent and warrant that: you have the legal right to use any credit card(s) or other payment method(s) in connection with any Purchase; and that the information you supply to us is true, correct and complete.<br><br>The service may employ the use of third party services for the purpose of facilitating payment and the completion of Purchases. By submitting your information, you grant us the right to provide the information to these third parties subject to our Privacy Policy.<br><br>We reserve the right to refuse or cancel your order at any time for reasons including but not limited to: product or service availability, errors in the description or price of the product or service, error in your order or other reasons.<br><br>We reserve the right to refuse or cancel your order if fraud or an unauthorized or illegal transaction is suspected.<br><br>We don't store any payment information like&nbsp;bank details or card numbers in our server.</div></div></div><div id="sppb-addon-1507107425" class="clearfix"><div class="sppb-empty-space  clearfix"></div></div><div id="sppb-addon-1507107426" class="clearfix"><div class="sppb-addon sppb-addon-text-block sppb-text-left "><h2 class="sppb-addon-title">Accounts</h2><div class="sppb-addon-content">When you create an account with us, you guarantee that you are above the age of 18, and that the information you provide us is accurate, complete, and current at all times. Inaccurate, incomplete, or obsolete information may result in the immediate termination of your account on the Service.<br><br>You are responsible for maintaining the confidentiality of your account and password, including but not limited to the restriction of access to your computer and/or account. You agree to accept responsibility for any and all activities or actions that occur under your account and/or password, whether your password is with our Service or a third-party service. You must notify us immediately upon becoming aware of any breach of security or unauthorized use of your account.<br><br>You may not use as a username the name of another person or entity or that is not lawfully available for use, a name or trademark that is subject to any rights of another person or entity other than you, without appropriate authorization. You may not use as a username any name that is offensive, vulgar or obscene.<br><br>We reserve the right to refuse service, terminate accounts, remove or edit content, or cancel orders in our sole discretion.</div></div></div><div id="sppb-addon-1507107427" class="clearfix"><div class="sppb-empty-space  clearfix"></div></div><div id="sppb-addon-1507107428" class="clearfix"><div class="sppb-addon sppb-addon-text-block sppb-text-left "><h2 class="sppb-addon-title">Product delivery</h2><div class="sppb-addon-content">All our free downloadable products are available for direct download. All paid downloadable products can be downloaded as a single product. Paid products will be accessible for download after payment is received and verified. To process our payments we use Paypal, Master Card, Visa and all major credit cards. You must agree with their terms and conditions before paying for any template or theme.<br><br>Your membership information will be emailed to the email address. Normally our system creates the account after successful payment. There are some cases that your payment is not successful done and then we have to review and process download information manually. So, delays can be as long as 1 hr up to 24hrs depending on the situation and amount of investigation required after a fraud alert has been activated.</div></div></div><div id="sppb-addon-1507107429" class="clearfix"><div class="sppb-empty-space  clearfix"></div></div><div id="sppb-addon-1507107430" class="clearfix"><div class="sppb-addon sppb-addon-text-block sppb-text-left "><h2 class="sppb-addon-title">Return and Refund Policy</h2><div class="sppb-addon-content">We do not issue refunds for digital products once the order is confirmed and the product was sent/ready to download. We can issue a refund if there is a major technical problem with a product you purchased, and the seller is unable to help resolve the matter, or if there was a misrepresentation in the product’s description.<br><br>There is no obligation to provide a refund or credit in situations if you have changed your mind about an item, you bought an item by mistake or you can no longer access the item because it has been removed by its author from ThemeHunt Market (we advise you to download items as soon as you buy them to avoid this situation).<br><br>We recommend contacting us for assistance if you experience any issues receiving or downloading offered products.</div></div></div><div id="sppb-addon-1507107431" class="clearfix"><div class="sppb-empty-space  clearfix"></div></div><div id="sppb-addon-1507107432" class="clearfix"><div class="sppb-addon sppb-addon-text-block sppb-text-left "><h2 class="sppb-addon-title">Product Compatibility/Updates</h2><div class="sppb-addon-content">All themes should be designed to be compatible with the latest available version of CMS, but we cannot guarantee that older templates will run with future versions of CMS. All templates support the latest modern web browsers including (but not limited to) Firefox, Safari, Chrome and Internet Explorer 9+. We check all sellers themes/templates before final publishing but we cannot give you full warranty of their proper work. <br><br>Paid template updates are available to our members while their subscription is still active. Note, you can still use installed themes/templates even when your membership will ends.</div></div></div><div id="sppb-addon-1507107433" class="clearfix"><div class="sppb-empty-space  clearfix"></div></div><div id="sppb-addon-1507107434" class="clearfix"><div class="sppb-addon sppb-addon-text-block sppb-text-left "><h2 class="sppb-addon-title">Modifications</h2><div class="sppb-addon-content">Yes, you are allowed to modify any of published on ThemeHunt products according to your requirements. However, please note that before you modify, check induced documentation (if available) and ask on the support forum if there is an easier and better way to achieve what you want to do. You can use a purchased and customized product (theme/template) for your own personal or a client website.</div></div></div><div id="sppb-addon-1507107435" class="clearfix"><div class="sppb-empty-space  clearfix"></div></div><div id="sppb-addon-1507107436" class="clearfix"><div class="sppb-addon sppb-addon-text-block sppb-text-left "><h2 class="sppb-addon-title">Unauthorized/Illegal Usage</h2><div class="sppb-addon-content">You may not use the ThemeHunt products for any illegal or unauthorized purpose nor may you, in the use of the Service, violate any laws in your jurisdiction (including but not limited to copyright laws) as well as the laws of European Union and International law. In particular, it is prohibited to use our templates for pages that promote: violence, terrorism, hard pornography, racism, vulgarity content or warez software links.<br><br>You cannot to reproduce, duplicate, copy, sell, resell or exploit any portion of the ThemeHunt, use of the offered on ThemeHunt items, or access to the Service without the express written permission by ThemeHunt or product owner.<br><br>You cannot include the purchased template/theme with a website offered for sale or distributed for free for example under a General Public License (GPL). Also you cannot convert a purchased website template to a CMS theme to sell or distribute for free.<br><br>All template XML copyright data must remain as is when purchased, you agree not to edit this information in any way.<br><br>You shall not purchase search engine or other pay per click keywords (such as Google AdWords), or domain names that use ThemeHunt or ThemeHunt trademarks and/or variations and misspellings.<br><br>ThemeHunt Members are responsible for all content posted on forum and activity that occurs under your account.<br><br>We reserve the possibility of blocking your membership account immediately if we will know about such a not permitted behavior.<br><br>If you create an account on the ThemeHunt website, you are responsible for maintaining the security of your account, and you are fully responsible for all activities that occur under the account and any other actions taken in connection with the account. You must immediately notify ThemeHunt of any unauthorized uses of your account or any other breaches of security.</div></div></div><div id="sppb-addon-1507107437" class="clearfix"><div class="sppb-empty-space  clearfix"></div></div><div id="sppb-addon-1507107438" class="clearfix"><div class="sppb-addon sppb-addon-text-block sppb-text-left "><h2 class="sppb-addon-title">Support</h2><div class="sppb-addon-content">Once you have downloaded a product, you may contact for support with seller/developer of product via their support channel or using a commenting system. Template and theme support is offered to verified customers only. Support requests made by email, tweet, facebook comment or any other method in most cases will be redirected or ignored.<br><br>If your support requires additional modification of the template or the CMS theme then you have two options:<br><br>
                    <ul>
                    <li>Wait for further development of the product.</li>
                    <li>Or ask for customization service (an additional fee).</li>
                    </ul>
                    </div>
                    </div>
                    </div>
                    <div id="sppb-addon-1507107439" class="clearfix">
                        <div class="sppb-empty-space  clearfix"></div>
                    </div>
                    <div id="sppb-addon-1507107440" class="clearfix">
                        <div class="sppb-addon sppb-addon-text-block sppb-text-left ">
                            <h2 class="sppb-addon-title">Ownership</h2>
                            <div class="sppb-addon-content">You may not claim intellectual or exclusive ownership to any of offered on ThemeHunt items, modified or unmodified. Products are property of template/theme developer which is mostly a seller on ThemeHunt. Their products are provided “as is” without warranty of any kind, either expressed or implied. In no event shall our juridical person be liable for any damages including, but not limited to, direct, indirect, special, incidental or consequential damages or other losses arising out of the use of or inability to use their products.<br><br>The above assignment is not true for those templates and extensions which are released under the license of GNU/GPL (GNU GENERAL PUBLIC LICENSE). For more information regarding this license please visit GNU page.</div>
                        </div>
                    </div>
                    <div id="sppb-addon-1507107441" class="clearfix"><div class="sppb-empty-space  clearfix"></div></div><div id="sppb-addon-1507107442" class="clearfix"><div class="sppb-addon sppb-addon-text-block sppb-text-left "><h2 class="sppb-addon-title">Anti-fraud</h2><div class="sppb-addon-content">Instant downloads are available after signing up. However, all of our customers purchases can be pending for manual anti-fraud check up to review of 2Checkout. You will receive a detailed email about your payment. Anti-fraud check occurs due to the growing number of fraudulent transactions from persons who are not actual cardholders of the credit cards used during purchase.</div></div></div><div id="sppb-addon-1507107443" class="clearfix"><div class="sppb-empty-space  clearfix"></div></div><div id="sppb-addon-1507107444" class="clearfix"><div class="sppb-addon sppb-addon-text-block sppb-text-left "><h2 class="sppb-addon-title">Price Changes</h2><div class="sppb-addon-content">ThemeHunt and product sellers reserve the right at any time and from time to time to modify temporarily or permanently, a product prices with or without notice.</div></div></div><div id="sppb-addon-1507107445" class="clearfix"><div class="sppb-empty-space  clearfix"></div></div><div id="sppb-addon-1507107446" class="clearfix"><div class="sppb-addon sppb-addon-text-block sppb-text-left "><h2 class="sppb-addon-title">Intellectual Property</h2><div class="sppb-addon-content">The Service and its original content (excluding Content provided by sellers), features and functionality are and will remain the exclusive property of ThemeHunt and its licensors. The Service is protected by copyright, trademark, and other law rules. Our trademarks and trade dress may not be used in connection with any product or service without the prior written consent of ThemeHunt.</div></div></div><div id="sppb-addon-1507107447" class="clearfix"><div class="sppb-empty-space  clearfix"></div></div><div id="sppb-addon-1507107448" class="clearfix"><div class="sppb-addon sppb-addon-text-block sppb-text-left "><h2 class="sppb-addon-title">Links To Other Websites</h2><div class="sppb-addon-content">Our Service may contain links to third party web sites or services that are not owned or controlled by ThemeHunt. ThemeHunt has alsp no control over, and assumes no responsibility for the content, privacy policies, or practices of any third party web sites or services. We do not warrant the offerings of any of these entities/individuals or their websites.</div></div></div><div id="sppb-addon-1507107449" class="clearfix"><div class="sppb-empty-space  clearfix"></div></div><div id="sppb-addon-1507107450" class="clearfix"><div class="sppb-addon sppb-addon-text-block sppb-text-left "><h2 class="sppb-addon-title">Termination</h2><div class="sppb-addon-content">We may terminate or suspend your account and bar access to the Service immediately, without prior notice or liability, under our sole discretion, for any reason whatsoever and without limitation, including but not limited to a breach of the Terms.<br><br>If you wish to terminate your account, you may simply discontinue using the Service.<br><br>All provisions of the Terms which by their nature should survive termination shall survive termination, including, without limitation, ownership provisions, warranty disclaimers, indemnity and limitations of liability.</div></div></div><div id="sppb-addon-1507107451" class="clearfix"><div class="sppb-empty-space  clearfix"></div></div><div id="sppb-addon-1507107452" class="clearfix"><div class="sppb-addon sppb-addon-text-block sppb-text-left "><h2 class="sppb-addon-title">Disclaimer</h2><div class="sppb-addon-content">Your use of the Service is at your sole risk. The Service is provided on an “AS IS” and “AS AVAILABLE” basis. The Service is provided without warranties of any kind, whether express or implied, including, but not limited to, implied warranties of merchantability, fitness for a particular purpose, non-infringement or course of performance.<br><br>ThemeHunt its subsidiaries, affiliates, and its licensors do not warrant that:<br><br>
                    <ul>
                    <li>The Service will function uninterrupted, secure or available at any particular time or location;</li>
                    <li>Any errors or defects will be corrected;</li>
                    <li>The Service is free of viruses or other harmful components;</li>
                    <li>Or the results of using the Service/Products will meet your requirements.</li>
                    </ul>
                    </div></div></div><div id="sppb-addon-1507107453" class="clearfix"><div class="sppb-empty-space  clearfix"></div></div><div id="sppb-addon-1507107454" class="clearfix"><div class="sppb-addon sppb-addon-text-block sppb-text-left "><h2 class="sppb-addon-title">Exclusions</h2><div class="sppb-addon-content">Some jurisdictions do not allow the exclusion of certain warranties or the exclusion or limitation of liability for consequential or incidental damages, so the limitations above may not apply to you.<br><br>We reserve the right to change and modify terms and conditions at any time without any prior notice. By continuing to access or use our Service after any revisions become effective, you agree to be bound by the revised terms. If you do not agree to the new terms, you are no longer authorized to use the Service.</div></div></div></div>

                    <div class="form-group">
                        <div class="">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" id="step3-agree" name="agree" value="agree" /> Agree with the terms and conditions
                                </label>
                            </div>
                        </div>
                    </div>

                    <!--<div class="form-group">
                        <div class="">
                            <button type="submit" class="btn btn-primary" name="signup" value="Sign up">Submit</button>
                        </div>
                    </div>-->
                </form>

            </div>
            <button id="last-step" class="btn btn-primary btn-md pull-right" onclick="purchase_product('<?php echo $data['produnct_id']; ?>');">Complete</button>
            
        </div>
    </div>

    <!--<div class="row setup-content" id="step-4">
        <div class="col-xs-12">
            <div class="col-md-12">

            <?php //require_once('invoice.php'); ?>

            </div>
        </div>
    </div>-->

</div>
