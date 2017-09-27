<!DOCTYPE HTML>
<html>
    <head>
        <title>Starboard Technology Consulting</title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
        <script src="old/js/jquery.min.js"></script>
        <script src="old/js/jquery.poptrox.min.js"></script>
        <script src="old/js/skel.min.js"></script>
        <script src="old/js/init.js"></script>
        <!--script>
            function validateForm() {
                var f = document.forms["myForm"];
                var e = f["email"].value;
                var atpos = e.indexOf("@");
                var dotpos = e.lastIndexOf(".");
                if (atpos<1 || dotpos<atpos+2 || dotpos+2>=e.length) {
                    alert("Not a valid e-mail address");
                    return false;
                } else {
                    f.action = "email" + "2" + ".php";
                }

            }
        </script-->
        <script>
            var mndFileds=new Array('First Name','Last Name','Email','Description');
            var fldLangVal=new Array('First Name','Last Name','Email Address','Nature of your inquiry');
            var name='';
            var email='';

            function checkMandatory() {
                for(i=0;i<mndFileds.length;i++) {
                    var fieldObj=document.forms['WebToLeads1906760000000100159'][mndFileds[i]];
                    if(fieldObj) {
                        if (((fieldObj.value).replace(/^\s+|\s+$/g, '')).length==0) {
                            if(fieldObj.type =='file'){ 
                                alert('Please select a file to upload'); 
                                fieldObj.focus(); 
                                return false;
                            } 
                            alert(fldLangVal[i] +' cannot be empty'); 
                            fieldObj.focus();
                            return false;
                        }  else if(fieldObj.nodeName=='SELECT') {
                            if(fieldObj.options[fieldObj.selectedIndex].value=='-None-') {
                                alert(fldLangVal[i] +' cannot be none'); 
                                fieldObj.focus();
                                return false;
                            }
                        } else if(fieldObj.type =='checkbox'){
                            if(fieldObj.checked == false){
                                alert('Please accept  '+fldLangVal[i]);
                                fieldObj.focus();
                                return false;
                            } 
                        } 
                        try {
                            if(fieldObj.name == 'Last Name') {
                                name = fieldObj.value;
                                var pattern = /\d+/;
                                var hasNumbers = name.match(pattern);
                                if (hasNumbers) {
                                    return(false);
                                }
                            }
                        } catch (e) {}
                    }
                }

                var f = document.forms["WebToLeads1906760000000100159"];
                var e = f["Email"].value;
                var atpos = e.indexOf("@");
                var dotpos = e.lastIndexOf(".");
                if (atpos<1 || dotpos<atpos+2 || dotpos+2>=e.length) {
                    alert("Not a valid e-mail address");
                    return false;
                }

            }
          
        </script>
        <noscript>
            <link rel="stylesheet" href="old/css/skel-noscript.css" />
            <link rel="stylesheet" href="old/css/style.css" />
        </noscript>

        <!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->

        <!-- Facebook Pixel Code -->
        <script>
        !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
        n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
        document,'script','https://connect.facebook.net/en_US/fbevents.js');

        fbq('init', '1713960918871799');
        fbq('track', "PageView");</script>
        <noscript><img height="1" width="1" style="display:none"
        src="https://www.facebook.com/tr?id=1713960918871799&ev=PageView&noscript=1"
        /></noscript>
        <!-- End Facebook Pixel Code -->

    </head>
    <body>

        <!-- Header -->
            <header id="header">

                <!-- Logo -->
                    <h1 id="logo"><a href="#">OLD Starboard Technology Consulting</a></h1>
                
                <!-- Nav -->
                    <nav id="nav">
                        <ul>
                            <li><a href="#intro">Welcome</a></li>
                            <li><a href="#one">Services</a></li>
                            <li><a href="#work">Experience</a></li>
                            <li><a href="#two">About</a></li>
                            <li><a href="#contact">Inquire</a></li>
                        </ul>
                    </nav>

            </header>
            
        <!-- INTRO PAGE -->
            <section id="intro" class="main style1 style1a dark fullscreen">
                <div class="content container small">
                    <header>
                        <h2>Starboard Technology Consulting</h2>
                    </header>
                    <p class="home">Affordable web development &amp; marketing services and strategic technical consulting<br>
                    for lean start-ups and small businesses.</p>
                    <footer>
                        <a href="#one" class="button style2 down">More</a>
                    </footer>
                </div>
            </section>
        
        <!-- WHAT WE DO -->
            <section id="one" class="main style2 right dark fullscreen">
                <div class="content box style2">
                    <header>
                        <h2>Services</h2>
                    </header>
                    <p>
                        <ul class="home">
                            <li>Web Development, from Wordpress to interactive</li>
                            <li>SEO and Inbound Marketing</li>
                            <li>Agile / DevOps / Program Management</li>
                            <li>Strategic and Platform Planning</li>
                            <li>Application &amp; System Architecture</li>
                        </ul>
                    </p>
                    <p>Less is More: Less time.  Less money.  Less waste.</p>

                    <p><a href="#contact" style="color:gray;">Inquire</a></p>
                </div>
                <a href="#work" class="button style2 down anchored">Next</a>
            </section>
            
        <!-- EXPERIENCE -->
            <section id="work" class="main style3 primary">
                <div class="content container">
                    <header>
                        <h2>Experience</h2>
                        <p>Experience a variety of complex web-based collaborative and interactive applications.<br>
                            <a href="#contact" style="color:gray;">Inquire</a>
                        </p>
                    </header>
                    
                    <!--
                         Lightbox Gallery
                         
                         Powered by poptrox. Full docs here: https://github.com/n33/jquery.poptrox
                    -->
                        <div class="container small gallery">
                            <div class="row flush images">
                                <div class="6u">Local Motors</div>
                                <div class="6u">Berklee Music College Online</div>
                            </div>
                            <div class="row flush images">
                                <div class="6u"><a href="images/fulls/01.jpg" class="image full l"><img src="images/thumbs/01.jpg" title="Local Motors, CIO" alt="Local Motors, CIO" /></a></div>
                                <div class="6u"><a href="images/fulls/03.jpg" class="image full r"><img src="images/thumbs/03.jpg" title="Berklee College Online, Director Technology" alt="Berklee College Online, Director Technology" /></a></div>
                            </div>
                            <br>
                            <div class="row flush images">
                                <div class="6u">Divorce Partner</div>
                                <div class="6u">Smarter Travel</div>
                            </div>
                            <iv class="row flush images">
                                <div class="6u"><a href="images/fulls/02.jpg" class="image full l"><img src="images/thumbs/02.jpg" title="Divorce Partner, Founder" alt="Divorce Partner, Founder" /></a></div>
                                <div class="6u"><a href="images/fulls/04.jpg" class="image full r"><img src="images/thumbs/04.jpg" title="Smarter Travel, Director Technology" alt="Smarter Travel, Director Technology" /></a></div>
                            </div>
                            <br>
                            <div class="row flush images">
                                <div class="6u">PaineWebber Properties</div>
                                <div class="6u">Nynex BISC</div>
                            </div>
                            <div class="row flush images">
                                <div class="6u">Specialized Applications</div>
                                <div class="6u">The Boston Company</div>
                            </div>
                            <div class="row flush images">
                                <div class="6u">essential.com</div>
                                <div class="6u"></div>
                            </div>
                        </div>

                </div>
                <a href="#two" class="button style2 down anchored">Next</a>
            </section>
        
        <!-- ABOUT US -->
            <section id="two" class="main style2 left dark fullscreen">
                <div class="content box style2">
                    <header>
                        <h2>About</h2>
                    </header>
                    <p>Tim Thomas founded Starboard Technology Consulting to provide affordable
                    web development services and strategic technical consulting and for lean start-ups and 
                    enterprises. With over 25 years experience, Tim and his team have applied their passion for 
                    quality yet affordable website development and strategic digital marketing to highly successful 
                    startups. They also provide strategic planning and assist with company's roadmaps as well as 
                    agile and scrum methodologies to help companies form and manage top performing internal teams.
                    </p>

                </div>
                <a href="#contact" class="button style2 down anchored">Next</a>
            </section>
            
        <!-- CONTACT -->
            <section id="contact" class="main style3 secondary">
                <div class="content container">
                    <div class="box container small">
                        <header>
                            <h2>Inquire</h2>
                        </header>
                        <p>Send us a message and we will promptly contact you to discuss your needs.</p>


<!--z0h0-->
                        <div id='crmWebToEntityForm' style='width:600px;margin:auto;'>
                           <META HTTP-EQUIV ='content-type' CONTENT='text/html;charset=UTF-8'>
                           <form action='https://crm.zoho.com/crm/WebToLeadForm' name=WebToLeads1906760000000100159 method='POST' onSubmit='javascript:document.charset="UTF-8"; return checkMandatory();' accept-charset='UTF-8'>

                            <!-- Do not remove this code. -->
                            <input type='text' style='display:none;' name='xnQsjsdp' value='49c480df0c8b9c1fd7a2ca70ce123ce8feaf35e714761a5e933e2b79888ba7c9'/>
                            <input type='hidden' name='zc_gad' id='zc_gad' value=''/>
                            <input type='text' style='display:none;' name='xmIwtLD' value='09c260d479a17e5522a7b5a83e436ca54af632c858db8499cba9c9e1d2a1049e'/>
                            <input type='text' style='display:none;'  name='actionType' value='TGVhZHM='/>

                            <input type='text' style='display:none;' name='returnURL' value='http&#x3a;&#x2f;&#x2f;imstarboard.com&#x2f;email2.php' /> 
                            <!-- Do not remove this code. -->
                            <style>
                                tr , td { 
                                    padding:6px;
                                    border-spacing:0px;
                                    border-width:0px;
                                }
                            </style>
                            <table style='width:600px;background-color:white;color:black'>

                                <tr><td colspan='2' style='text-align:left;color:black;font-family:Arial;font-size:14px;'><strong>Contact Us Form</strong></td></tr>
                                <tr><td  style='nowrap:nowrap;text-align:left;font-size:12px;font-family:Arial;width:200px;'>First Name<span style='color:red;'>*</span></td><td style='width:250px;' ><input type='text' style='width:250px;'  maxlength='40' name='First Name' /></td></tr>
                                <tr><td  style='nowrap:nowrap;text-align:left;font-size:12px;font-family:Arial;width:200px;'>Last Name<span style='color:red;'>*</span></td><td style='width:250px;' ><input type='text' style='width:250px;'  maxlength='80' name='Last Name' /></td></tr>
                                <tr><td  style='nowrap:nowrap;text-align:left;font-size:12px;font-family:Arial;width:200px;'>Email Address<span style='color:red;'>*</span></td><td style='width:250px;' ><input type='text' style='width:250px;'  maxlength='100' name='Email' /></td></tr>
                                <tr><td  style='nowrap:nowrap;text-align:left;font-size:12px;font-family:Arial;width:200px;'>Phone &#x28;optional&#x29;</td><td style='width:250px;' ><input type='text' style='width:250px;'  maxlength='30' name='Phone' /></td></tr>
                                <tr><td  style='nowrap:nowrap;text-align:left;font-size:12px;font-family:Arial;width:200px;'>Nature of your inquiry<span style='color:red;'>*</span> </td><td> <textarea name='Description' maxlength='32000' style='width:250;'>&nbsp;</textarea></td></tr>
                                <tr><td  style='nowrap:nowrap;text-align:left;font-size:12px;font-family:Arial;width:200px;'>Company</td><td style='width:250px;' ><input type='text' style='width:250px;'  maxlength='100' name='Company' /></td></tr>

                                <tr style='display:none;' >
                                    <td style='nowrap:nowrap;text-align:left;font-size:12px;font-family:Arial;width:50%'>Lead Status</td>
                                    <td style='width:250px;'>
                                        <select style='width:250px;' name='Lead Status'>
                                            <option value='-None-'>-None-</option>
                                            <option selected value='Not&#x20;Contacted'>Not Contacted</option>
                                            <option value='Attempted&#x20;to&#x20;Contact'>Attempted to Contact</option>
                                            <option value='Contacted'>Contacted</option>
                                            <option value='Contact&#x20;in&#x20;Future'>Contact in Future</option>
                                            <option value='Junk&#x20;Lead'>Junk Lead</option>
                                            <option value='Lost&#x20;Lead'>Lost Lead</option>
                                            <option value='Pre&#x20;Qualified'>Pre Qualified</option>
                                        </select>
                                    </td>
                                </tr>

                                <tr style='display:none;' >
                                    <td style='nowrap:nowrap;text-align:left;font-size:12px;font-family:Arial;width:50%'>Lead Source</td>
                                    <td style='width:250px;'>
                                        <select style='width:250px;' name='Lead Source'>
                                            <option value='-None-'>-None-</option>
                                            <option value='Advertisement'>Advertisement</option>
                                            <option value='Cold&#x20;Call'>Cold Call</option>
                                            <option value='Employee&#x20;Referral'>Employee Referral</option>
                                            <option value='External&#x20;Referral'>External Referral</option>
                                            <option value='OnlineStore'>OnlineStore</option>
                                            <option value='Partner'>Partner</option>
                                            <option value='Public&#x20;Relations'>Public Relations</option>
                                            <option value='Sales&#x20;Mail&#x20;Alias'>Sales Mail Alias</option>
                                            <option value='Seminar&#x20;Partner'>Seminar Partner</option>
                                            <option value='Seminar-Internal'>Seminar-Internal</option>
                                            <option value='Trade&#x20;Show'>Trade Show</option>
                                            <option selected value='Web&#x20;Download'>Web Download</option>
                                            <option value='Web&#x20;Research'>Web Research</option>
                                            <option value='Chat'>Chat</option>
                                        </select>
                                    </td>
                                </tr>

                                <tr style='display:none;' >
                                    <td style='nowrap:nowrap;text-align:left;font-size:12px;font-family:Arial;width:50%'>Contact Type</td>
                                    <td style='width:250px;'>
                                        <select style='width:250px;' name='LEADCF1'>
                                            <option value='-None-'>-None-</option>
                                            <option selected value='Potential&#x20;Client'>Potential Client</option>
                                            <option value='Business&#x20;Referrer'>Business Referrer</option>
                                            <option value='Networking&#x20;-&#x20;job'>Networking - job</option>
                                            <option value='Networking&#x20;-&#x20;new&#x20;business'>Networking - new business</option>
                                            <option value='Exposure'>Exposure</option>
                                            <option value='Other'>Other</option>
                                        </select>
                                    </td>
                                </tr>

                                <tr>
                                    <td colspan='2' style='text-align:center; padding-top:15px;'>
                                        <input style='font-size:12px;color:#131307' type='submit' value='Submit' />
                                        <input type='reset' style='font-size:12px;color:#131307' value='Reset' />
                                   </td>
                                </tr>
                            </table>
                            <div class="g-recaptcha" data-sitekey="6LeBfSUUAAAAADVxaVavphqzm7FfWvTv6KLr5sim"></div>
                        </form>
                        </div>

<!--end z0h0-->


                            <!--form name="myForm" method="post" action="#" onsubmit="return validateForm();" method="post">
                                <div class="row half">
                                    <div class="6u"><input type="text" name="name" placeholder="Name" /></div>
                                    <div class="6u"><input type="text" name="email" placeholder="Email" /></div>
                                </div>
                                <div class="row half">
                                    <div class="12u"><textarea name="message" placeholder="Nature of you inquiry. Please include your industry and company size." rows="6"></textarea></div>
                                </div>
                                <div class="row">
                                    <div class="12u">
                                        <ul class="actions">
                                            <li><input type="submit" class="button" value="Send Message" /></li>
                                        </ul>
                                    </div>
                                </div>
                            </form-->

                    </div>
                </div>
            </section>
            
        <!-- Footer -->
            <footer id="footer">
            
                <!--
                     Social Icons
                     
                     Use anything from here: http://fortawesome.github.io/Font-Awesome/cheatsheet/)
                -->
                    <ul class="actions">
                        <li><a href="http://twitter.com/imstarboard" class="fa solo fa-twitter"><span>Twitter</span></a></li>
                        <!--li><a href="https://www.facebook.com/IMStarboard" class="fa solo fa-facebook"><span>Facebook</span></a></li>
                        <li><a href="#" class="fa solo fa-google-plus"><span>Google+</span></a></li>
                        <li><a href="#" class="fa solo fa-dribbble"><span>Dribbble</span></a></li>
                        <li><a href="#" class="fa solo fa-pinterest"><span>Pinterest</span></a></li>
                        <li><a href="#" class="fa solo fa-instagram"><span>Instagram</span></a></li-->
                    </ul>

                <!-- Menu -->
                    <!--ul class="menu">
                        <li>&copy; Untitled</li>
                        <li>Design: <a href="http://html5up.net/">HTML5 UP</a></li>
                    </ul-->
            
            </footer>
        <!-- Hotjar Tracking Code for http://timothybthomas.com -->
        <script>
            (function(h,o,t,j,a,r){
                h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
                h._hjSettings={hjid:159729,hjsv:5};
                a=o.getElementsByTagName('head')[0];
                r=o.createElement('script');r.async=1;
                r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
                a.appendChild(r);
            })(window,document,'//static.hotjar.com/c/hotjar-','.js?sv=');
        </script>

        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-51500089-1', 'imstarboard.com');
          ga('send', 'pageview');

        </script>           

        <!-- Start of HubSpot Embed Code -->
          <script type="text/javascript" id="hs-script-loader" async defer src="/old/js.hs-scripts.com/3930447.js"></script>
        <!-- End of HubSpot Embed Code -->
    </body>
</html>
