<?php
// Home.php - Sudixon website
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sudixon - Business, Legal & Architecture Services in Delhi NCR</title>
    <meta name="description" content="Professional services for tenders, legal compliance, ITR filing, company registration, and architectural approvals in Delhi NCR. One partner for your business needs.">
    <meta name="keywords" content="business development, legal services, architecture, tenders, Delhi NCR, company registration, ITR filing, DSC registration">
    <style>
        * { margin:0; padding:0; box-sizing:border-box; }

        body {
            font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height:1.2;
            color:#333;
        }

         /* Header */
        header {
            background:linear-gradient(315deg,#1e3a5f 0%,#e0f2e9 100%);
            color:#fff;
            position:sticky;
            top:0;
            z-index:100;
            box-shadow:0 2px 10px rgba(0,0,0,0.1);
        }

        nav {
            max-width:1200px;
            margin:0 auto;
            padding:1rem 2rem;
            display:flex;
            justify-content:space-between;
            align-items:center;
        }

        .logo {
            font-size:24px;
            font-weight:bold;
            text-decoration:none;
            color:#fff;
            letter-spacing:1px;
        }

        nav ul { list-style:none; display:flex; gap:2rem; }
        nav a { color:#fff; text-decoration:none; font-weight:500; transition:0.3s; }
        nav a:hover { color:#ffd700; border-bottom:2px solid #ffd700; padding-bottom:5px; }

        .hero {
            background:linear-gradient(135deg,#1e3a5f 0%,#2c5aa0 100%);
            color:#fff;
            text-align:center;
            padding:70px 20px;
        }

        .hero h1 { font-size:48px; margin-bottom:20px; font-weight:700; }
        .hero p { font-size:20px; margin-bottom:30px; opacity:0.95; }

        .hero-buttons {
            display:flex;
            gap:20px;
            justify-content:center;
            flex-wrap:wrap;
        }

        .btn {
            padding:12px 30px;
            font-size:16px;
            border:none;
            border-radius:5px;
            cursor:pointer;
            text-decoration:none;
            transition:0.3s;
            font-weight:600;
        }

        .btn-primary { background:#ffd700; color:#1e3a5f; }
        .btn-primary:hover {
            background:#ffed4e;
            transform:translateY(-2px);
            box-shadow:0 5px 15px rgba(0,0,0,0.2);
        }

        .btn-secondary { background:transparent; color:#fff; border:2px solid #fff; }
        .btn-secondary:hover { background:#fff; color:#1e3a5f; }

        .container { max-width:1200px; margin:0 auto; padding:0 10px; }
        section { padding:40px 10px; }

        section h2 {
            font-size:36px;
            margin-bottom:30px;
            text-align:center;
            color:#1e3a5f;
            font-weight:700;
        }

        section p { font-size:16px; margin-bottom:15px; color:#555; }

        #about { background:#f8f9fa; }

        .about-content {
            display:grid;
            grid-template-columns:1fr 1fr;
            gap:40px;
            align-items:center;
            margin-bottom:40px;
        }

        .about-text h3 { font-size:24px; color:#1e3a5f; margin-bottom:15px; }

        .about-values {
            background:#fff;
            padding:20px;
            border-radius:8px;
            border-left:5px solid #ffd700;
            margin-top:20px;
        }

        .about-values h4 { color:#1e3a5f; margin-bottom:10px; }

        .divider {
            width:60px;
            height:3px;
            background:#ffd700;
            margin:20px auto;
        }

        .highlight { color:#2c5aa0; font-weight:600; }

        /* Team */
        #team { background:#ffffff; }
		
		/* dropdown-menu */
		
		/* Dropdown menu */
		.dropdown
		{
			position:relative;
		}

		.dropdown-menu
		{
			position:absolute;
			top:100%;
			left:0;
			background:#ffffff;
			min-width:220px;
			box-shadow:0 4px 12px rgba(0,0,0,0.15);
			display:none;
			z-index:999;
			border-radius:6px;
			overflow:hidden;
		}

		.dropdown-menu li{
			border-bottom:1px solid #e4e4e4;
		}

		.dropdown-menu li:last-child{
			border-bottom:none;
		}

		.dropdown-menu a{
			display:block;
			padding:10px 14px;
			color:#222222;
			font-size:.9rem;
		}

		.dropdown-menu a:hover{
			background:#1e3a5f;
			color:#ffffff;
		}

		/* Show dropdown on hover */
		.dropdown:hover .dropdown-menu{
			display:block;
		}


        .team-wrapper {
            display:grid;
            grid-template-columns:0.70fr 1.4fr;
            gap:10px;
            align-items:center;
            margin-top:10px;
        }

        .team-photo img {
            width:50%;
            max-width:640px;
            border-radius:10px;
            box-shadow:0 4px 18px rgba(0,0,0,0.18);
            object-fit:cover;
        }

        .team-content h3 { font-size:24px; color:#1e3a5f; margin-bottom:6px; }
        .team-role { font-size:16px; color:#2c5aa0; font-weight:600; margin-bottom:7px; }

        #services { background:#fff; }

        .services-grid {
            display:grid;
            grid-template-columns:repeat(auto-fit,minmax(300px,1fr));
            gap:30px;
            margin-top:40px;
        }

        .service-card {
            background:#f8f9fa;
            padding:30px;
            border-radius:8px;
            border-top:5px solid #2c5aa0;
            transition:0.3s;
            box-shadow:0 2px 8px rgba(0,0,0,0.1);
        }

        .service-card:hover {
            transform:translateY(-5px);
            box-shadow:0 5px 20px rgba(0,0,0,0.15);
            border-top-color:#ffd700;
        }

        .service-card h3 { color:#1e3a5f; font-size:22px; margin-bottom:15px; }
        .service-card ul { list-style:none; padding-left:0; }

        .service-card li {
            padding:8px 0;
            color:#555;
            border-bottom:1px solid #ddd;
            padding-left:20px;
            position:relative;
        }

        .service-card li:last-child { border-bottom:none; }
        .service-card li:before {
            content:"✓";
            position:absolute;
            left:0;
            color:#2c5aa0;
            font-weight:bold;
        }

        #contact {
            background:linear-gradient(135deg,#1e3a5f 0%,#2c5aa0 100%);
            color:#fff;
        }

        #contact h2 { color:#fff; }

        .contact-wrapper {
            display:grid;
            grid-template-columns:1fr 1fr;
            gap:40px;
            margin-top:40px;
            align-items:start;
        }

        .contact-info h3 { font-size:22px; margin-bottom:20px; color:#ffd700; }

        .contact-detail {
            margin-bottom:25px;
            padding-bottom:15px;
            border-bottom:1px solid rgba(255,255,255,0.2);
        }

        .contact-detail strong {
            display:block;
            color:#ffd700;
            margin-bottom:5px;
        }

        .contact-form {
            background:rgba(255,255,255,0.1);
            padding:30px;
            border-radius:8px;
            backdrop-filter:blur(10px);
        }

        .form-group { margin-bottom:20px; }
        .form-group label { display:block; margin-bottom:8px; font-weight:600; }

        .form-group input,
        .form-group select,
        .form-group textarea {
            width:100%;
            padding:12px;
            border:none;
            border-radius:5px;
            font-family:inherit;
            font-size:14px;
        }

        .form-group textarea { resize:vertical; min-height:100px; }

        .contact-form .btn-primary { width:100%; }

        footer {
            background:#0f1f2f;
            color:#fff;
            text-align:center;
            padding:30px 20px;
            margin-top:40px;
        }

        footer p { color:#aaa; }

        @media (max-width:768px) {
            nav ul { gap:1rem; font-size:14px; flex-wrap:wrap; }
            .hero h1 { font-size:36px; }
            .hero p { font-size:16px; }
            .about-content,
            .contact-wrapper,
            .team-wrapper { grid-template-columns:1fr; }
            section h2 { font-size:28px; }
            .services-grid { grid-template-columns:1fr; }
            .team-photo img { margin:0 auto; }
        }
		
			.logo{
			display:flex;
			align-items:center;
		}

		.logo img{
			height:60px;        /* best size for navbar */
			width:auto;
			object-fit:contain;
		}
		
		.team-photo img {
    width: 260px;
    border-radius: 15px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.15);
}
    </style>
</head>
<body>
<<header>
    <nav>
        <a href="index.php" class="logo">
    <img src="sudixon1.png" alt="Sudixon Logo">
</a>

        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="index.php#about">About Us</a></li>
            <li><a href="index.php#team">Team</a></li>
            <li class="dropdown">
    
	<a>Services </a>
    <ul class="dropdown-menu">
        <li><a href="Tender.php">Tendering Services</a></li>
        <li><a href="legal.php">Legal Services</a></li>
        <li><a href="architecture.php">Architecture Services</a></li>
    </ul>
</li>
<li><a href="book-order.php">Book Order</a></li>

            <li><a href="#contact">Contact Us</a></li>
        </ul>
    </nav>
</header>

<section id="home" class="hero">
    <div class="container">
        <h1>One Partner for Business, Legal & Architecture</h1>
        <p>Integrated solutions for your business needs in Delhi NCR</p>
        <div class="hero-buttons">
            <button class="btn btn-primary" onclick="document.getElementById('contact').scrollIntoView({behavior:'smooth'})">Enquire Now</button>
            <button class="btn btn-secondary" onclick="document.getElementById('contact').scrollIntoView({behavior:'smooth'})">Request Consultation</button>
        </div>
    </div>
</section>

<section id="about">
    <div class="container">
        <h2>About Sudixon</h2>
        <div class="divider"></div>

        <div class="about-content">
            <div class="about-text">
                <h3>Who We Are</h3>
                <p>Sudixon is a <span class="highlight">multi-disciplinary consultancy</span> serving clients across Delhi NCR, combining expertise in business advisory, legal compliance, and architectural approvals.</p>
                <p>The team works with entrepreneurs, contractors, and property owners to simplify complex procedures like tenders, registrations, disputes, and building permissions.</p>

                <div class="about-values">
                    <h4>🎯 Our Mission</h4>
                    <p>To provide reliable, transparent, and timely solutions that save clients time and reduce risk.</p>
                </div>

                <div class="about-values">
                    <h4>💡 Our Values</h4>
                    <p><strong>Professionalism</strong> • <strong>Confidentiality</strong> • <strong>Compliance</strong> • <strong>Client-Focused Service</strong></p>
                </div>
            </div>
            <div class="about-text">
                <h3>Why Choose Sudixon?</h3>
                <ul style="list-style:none; padding-left:0;">
                    <li style="padding:12px 0 12px 25px; position:relative; border-bottom:1px solid #ddd;">
                        <span style="position:absolute; left:0; color:#2c5aa0; font-weight:bold;">✓</span>
                        Expert team with years of experience
                    </li>
                    <li style="padding:12px 0 12px 25px; position:relative; border-bottom:1px solid #ddd;">
                        <span style="position:absolute; left:0; color:#2c5aa0; font-weight:bold;">✓</span>
                        All services under one roof
                    </li>
                    <li style="padding:12px 0 12px 25px; position:relative; border-bottom:1px solid #ddd;">
                        <span style="position:absolute; left:0; color:#2c5aa0; font-weight:bold;">✓</span>
                        Deep understanding of Delhi NCR regulations
                    </li>
                    <li style="padding:12px 0 12px 25px; position:relative; border-bottom:1px solid #ddd;">
                        <span style="position:absolute; left:0; color:#2c5aa0; font-weight:bold;">✓</span>
                        Transparent pricing and timelines
                    </li>
                    <li style="padding:12px 0 12px 25px; position:relative; border-bottom:1px solid #ddd;">
                        <span style="position:absolute; left:0; color:#2c5aa0; font-weight:bold;">✓</span>
                        24/7 client support
                    </li>
                    <li style="padding:12px 0 12px 25px; position:relative;">
                        <span style="position:absolute; left:0; color:#2c5aa0; font-weight:bold;">✓</span>
                        Proven track record of success
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section id="team">
    <div class="container">
        <h2>Our Team</h2>
        <div class="divider"></div>

        <div class="team-wrapper">
            <div class="team-photo">
                <img src="sudhanshu-photo.png" alt="Mr. Sudhanshu Dixit - Founder, Sudixon">
            </div>
            <div class="team-content">
                <h3>Mr. Sudhanshu Dixit</h3>
                <p class="team-role">Founder, Sudixon</p>
                <p>Mr. Sudhanshu Dixit leads Sudixon with a strong technical and strategic foundation, holding academic qualifications in BCA and MCA. He brings valuable experience in data analysis and market research, enabling data-driven decision-making and effective business strategies.</p>
                <p>With a focus on delivering integrated business development, legal, and architectural solutions for clients across Delhi NCR, he combines technical expertise with practical industry knowledge</p>
				<p>He is actively involved in tendering, client coordination, and project execution, ensuring that every assignment is handled with professionalism, transparency, and timely delivery</p>
            </div>
        </div>
    </div>
</section>

<section id="services">
    <div class="container">
        <h2>Our Services</h2>
        <div class="divider"></div>
        <p style="text-align:center; font-size:16px; color:#666; margin-bottom:40px;">
            Comprehensive solutions tailored to individuals, SMEs, and corporates in Delhi NCR
        </p>

        <div class="services-grid">
            <div class="service-card">
                <h3>📋 Business Development & Tendering</h3>
                <ul>
                    <li>Tender identification and tracking</li>
                    <li>Government & PSU project bids</li>
                    <li>Tender document preparation</li>
                    <li>Bid compilation & submission</li>
                    <li>Vendor registrations & empanelments</li>
                    <li>Technical & financial documentation</li>
                </ul>
            </div>

            <div class="service-card">
                <h3>⚖️ Legal Services</h3>
                <ul>
                    <li>Cheque bounce & recovery matters</li>
                    <li>Legal notice drafting</li>
                    <li>ITR filing support</li>
                    <li>Company registration guidance</li>
                    <li>DSC registration & renewal</li>
                    <li>GST & compliance coordination</li>
                </ul>
            </div>

            <div class="service-card">
                <h3>🏗️ Architecture & Approvals</h3>
                <ul>
                    <li>Architectural planning & design</li>
                    <li>Building plan drawings</li>
                    <li>Municipal compliance documentation</li>
                    <li>Plan sanctioning assistance</li>
                    <li>Occupancy certificates</li>
                    <li>Single-window approval coordination</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section id="contact">
    <div class="container">
        <h2>Get In Touch</h2>
        <div class="divider" style="background:#ffd700;"></div>
        <p style="text-align:center; font-size:16px; margin-bottom:40px;">
            Need assistance with tenders, legal matters, or building approvals in Delhi NCR? Reach out to us today.
        </p>

        <div class="contact-wrapper">
            <div class="contact-info">
                <h3>Contact Information</h3>

                <div class="contact-detail">
                    <strong>📍 Location</strong>
                    Delhi NCR Region
                </div>

                <div class="contact-detail">
                    <strong>📞 Phone</strong>
                    +91 [Your Phone Number]
                </div>

                <div class="contact-detail">
                    <strong>📧 Email</strong>
                    info@sudixon.com
                </div>

                <div class="contact-detail">
                    <strong>💬 WhatsApp</strong>
                    +91 [8178958394]
                </div>

                <div class="contact-detail">
                    <strong>⏰ Working Hours</strong>
                    Monday - Friday: 9:00 AM - 6:00 PM<br>
                    Saturday: 10:00 AM - 4:00 PM<br>
                    Sunday: Closed
                </div>
            </div>

            <form class="contact-form" onsubmit="handleSubmit(event)">
                <div class="form-group">
                    <label for="name">Full Name *</label>
                    <input type="text" id="name" name="name" required>
                </div>

                <div class="form-group">
                    <label for="phone">Mobile Number *</label>
                    <input type="tel" id="phone" name="phone" required>
                </div>

                <div class="form-group">
                    <label for="email">Email Address *</label>
                    <input type="email" id="email" name="email" required>
                </div>

                <div class="form-group">
                    <label for="service">Service Interested In *</label>
                    <select id="service" name="service" required>
                        <option value="">-- Select Service --</option>
                        <option value="Business Development">Business Development & Tendering</option>
                        <option value="Legal Services">Legal Services</option>
                        <option value="Architecture">Architecture & Approvals</option>
                        <option value="Multiple">Multiple Services</option>
                        <option value="Other">Other</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="message">Message *</label>
                    <textarea id="message" name="message" required></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Send Enquiry</button>
            </form>
        </div>
    </div>
</section>

<footer>
    <div class="container">
        <p>&copy; 2025 Sudixon. All Rights Reserved. | Integrated Business, Legal & Architecture Solutions for Delhi NCR</p>
        <p style="font-size:12px; margin-top:10px;">Professional Services | Business Development | Legal Compliance | Architectural Approvals</p>
    </div>
</footer>

<script>
function handleSubmit(event) {
    event.preventDefault();
    alert('Thank you! Your enquiry has been received. We will contact you shortly.');
    document.querySelector('.contact-form').reset();
}
</script>
</body>
</html>