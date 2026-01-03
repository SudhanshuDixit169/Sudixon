<?php
// tender.php – Sudixon multi‑service homepage (business, legal, tender, architecture)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sudixon – GeM, Tender, Legal & Architecture Services in Delhi NCR</title>
    <meta name="description" content="Sudixon provides GeM consulting, tender support services, legal compliance and architectural approval solutions in Delhi NCR. End‑to‑end support for PSUs, private and government tenders.">
    <meta name="keywords" content="GeM consultant, tender support services, Delhi NCR, business development, legal services, architecture approvals, Sudixon">

    <style>
        :root {
            --primary:#1e3a5f;
            --primary-light:#2c5aa0;
            --gold:#ffd700;
            --bg-light:#f8f9fa;
            --text:#333;
            --muted:#555;
        }
        *{margin:0;padding:0;box-sizing:border-box;}
        body{
            font-family:'Segoe UI',Tahoma,Geneva,Verdana,sans-serif;
            line-height:1.6;
            color:var(--text);
            background:#fff;
        }
        a{text-decoration:none;color:inherit;}
        ul{list-style:none;}

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
       
	   /* Generic layout */
        .container{
            max-width:1200px;
            margin:0 auto;
            padding:0 1.5rem;
        }
        section{padding:60px 0;}
        h2.section-title{
            text-align:center;
            font-size:2.1rem;
            color:var(--primary);
            margin-bottom:.5rem;
        }
        .divider{
            width:60px;
            height:3px;
            background:var(--gold);
            margin:0 auto 1.5rem;
        }
        .section-subtitle{
            text-align:center;
            max-width:720px;
            margin:0 auto 2rem;
            color:var(--muted);
        }
        .btn{
            display:inline-block;
            padding:10px 26px;
            border-radius:4px;
            font-weight:600;
            border:none;
            cursor:pointer;
            font-size:.95rem;
            transition:.25s;
        }
        .btn-primary{
            background:var(--gold);
            color:var(--primary);
        }
        .btn-primary:hover{
            background:#ffed4e;
            transform:translateY(-2px);
            box-shadow:0 4px 12px rgba(0,0,0,.18);
        }
        .btn-outline{
            background:transparent;
            border:2px solid #fff;
            color:#fff;
        }
        .btn-outline:hover{
            background:#fff;
            color:var(--primary);
        }

        /* Hero */
        .hero{
            background:linear-gradient(135deg,var(--primary) 0%,var(--primary-light) 100%);
            color:#fff;
            padding:70px 0 80px;
        }
        .hero-grid{
            display:grid;
            grid-template-columns:1.4fr 1fr;
            gap:40px;
            align-items:center;
        }
        .hero h1{
            font-size:2.6rem;
            margin-bottom:10px;
        }
        .hero h3{
            font-size:1.15rem;
            font-weight:400;
            margin-bottom:20px;
            opacity:.95;
        }
        .hero-points{
            margin:15px 0 25px;
        }
        .hero-points li{
            padding:4px 0 4px 22px;
            position:relative;
            font-size:.95rem;
        }
        .hero-points li:before{
            content:"✓";
            position:absolute;
            left:0;
            top:0;
            color:var(--gold);
            font-weight:700;
        }
        .hero-actions{
            display:flex;
            flex-wrap:wrap;
            gap:12px;
            margin-top:10px;
        }
        .hero-contact{
            font-size:.9rem;
            margin-top:10px;
            opacity:.9;
        }
        .hero-box{
            background:rgba(255,255,255,.1);
            padding:18px 18px 20px;
            border-radius:8px;
            backdrop-filter:blur(12px);
        }
        .hero-box h4{
            margin-bottom:8px;
            font-size:1rem;
        }
        .hero-box p{
            font-size:.92rem;
        }
		
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

        /* Sectors / who we support */
        .pill-row{
            display:flex;
            flex-wrap:wrap;
            gap:10px;
            justify-content:center;
            margin-top:10px;
        }
        .pill{
            padding:6px 12px;
            border-radius:30px;
            border:1px solid #A3FF12;
            font-size:.85rem;
            background:#6A0DAD;
        }

        /* Why choose */
        #why
		{
			background:#e2e2e2;   /* better contrast than #f8f9fa */
			color:#222222;        /* force readable text */
		}
        }
        .why-grid{
            display:grid;
            grid-template-columns:1.2fr 1fr;
            gap:30px;
            align-items:flex-start;
        }
        .why-list li
		{
			padding:10px 0 10px 26px;
			border-bottom:1px solid #cccccc;
			position:relative;
			font-size:.95rem;
			color:#222222;
		}

        .why-list li:last-child{border-bottom:none;}
        .why-list li:before{
            content:"✔";
            position:absolute;
            left:8px;
            color:#1e3a5f;
            font-weight:700;
        }
		.why-grid > div{
    background:#ffffff;
    padding:20px;
    border-radius:8px;
    box-shadow:0 2px 8px rgba(0,0,0,0.08);
}

        .compare-table{
            width:100%;
            border-collapse:collapse;
            font-size:.9rem;
            margin-top:10px;
        }
        .compare-table th,
        .compare-table td{
            border:1px solid #ddd;
            padding:8px 10px;
            text-align:left;
        }
        .compare-table th{
            background:#eef2f7;
            color:var(--primary);
        }

        /* Services */
        .services-grid{
            display:grid;
            grid-template-columns:repeat(auto-fit,minmax(260px,1fr));
            gap:24px;
        }
        .service-card{
            border-radius:8px;
            border-top:4px solid var(--primary-light);
            background:#f8f9fa;
            padding:20px 18px 22px;
            box-shadow:0 2px 8px rgba(0,0,0,.06);
            transition:.25s;
        }
        .service-card:hover{
            transform:translateY(-4px);
            box-shadow:0 4px 16px rgba(0,0,0,.12);
            border-top-color:var(--gold);
        }
        .service-card h3{
            font-size:1.1rem;
            color:var(--primary);
            margin-bottom:6px;
        }
        .service-tag{
            font-size:.8rem;
            color:var(--primary-light);
            margin-bottom:8px;
            text-transform:uppercase;
            letter-spacing:.06em;
        }
        .service-card ul li{
            padding:4px 0 4px 18px;
            font-size:.9rem;
            position:relative;
            color:var(--muted);
            border-bottom:1px solid #e4e4e4;
        }
        .service-card ul li:last-child{border-bottom:none;}
        .service-card ul li:before{
            content:"›";
            position:absolute;
            left:4px;
            color:var(--primary-light);
            font-weight:700;
        }

        /* Plans */
        #plans{background:var(--bg-light);}
        .plans-grid{
            display:grid;
            grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
            gap:24px;
        }
        .plan-card{
            background:#fff;
            border-radius:8px;
            padding:22px 18px 24px;
            box-shadow:0 2px 10px rgba(0,0,0,.08);
            border-top:4px solid var(--gold);
        }
        .plan-title{
            font-size:1.1rem;
            color:var(--primary);
            margin-bottom:4px;
        }
        .plan-price{
            font-size:1.4rem;
            font-weight:700;
            color:var(--primary);
            margin:4px 0 10px;
        }
        .plan-note{
            font-size:.8rem;
            color:var(--muted);
            margin-bottom:8px;
        }
        .plan-card ul li{
            font-size:.9rem;
            padding:4px 0 4px 18px;
            position:relative;
        }
        .plan-card ul li:before{
            content:"✓";
            position:absolute;
            left:0;
            color:var(--primary-light);
            font-weight:700;
        }

        /* Testimonials */
        #testimonials{}
        .testi-grid{
            display:grid;
            grid-template-columns:repeat(auto-fit,minmax(260px,1fr));
            gap:20px;
        }
        .testi-card{
            background:#f8f9fa;
            border-radius:8px;
            padding:18px 16px 20px;
            box-shadow:0 1px 6px rgba(0,0,0,.06);
            font-size:.9rem;
        }
        .testi-name{
            margin-top:10px;
            font-weight:600;
            color:var(--primary);
        }
        .testi-role{
            font-size:.8rem;
            color:var(--muted);
        }

        /* Contact */
        #contact{
            background:linear-gradient(135deg,var(--primary) 0%,var(--primary-light) 100%);
            color:#fff;
        }
        #contact h2{color:#fff;}
        .contact-grid{
            display:grid;
            grid-template-columns:1.1fr 1fr;
            gap:30px;
            align-items:flex-start;
        }
        .contact-box{
            background:rgba(255,255,255,.08);
            padding:18px 18px 20px;
            border-radius:8px;
        }
        .contact-box h4{
            margin-bottom:8px;
            font-size:1rem;
        }
        .contact-item{
            margin-bottom:12px;
            font-size:.92rem;
        }
        .contact-item strong{
            display:block;
            color:var(--gold);
        }
        .contact-form{
            background:#fff;
            color:#333;
            padding:20px 18px 22px;
            border-radius:8px;
        }
        .form-group{margin-bottom:12px;}
        .form-group label{
            font-size:.85rem;
            font-weight:600;
            margin-bottom:4px;
            display:block;
        }
        .form-group input,
        .form-group select,
        .form-group textarea{
            width:100%;
            padding:8px 10px;
            font-family:inherit;
            font-size:.9rem;
            border-radius:4px;
            border:1px solid #ccc;
        }
        .form-group textarea{min-height:80px;resize:vertical;}

        footer{
            background:#0f1f2f;
            color:#aaa;
            text-align:center;
            padding:18px 10px;
            font-size:.8rem;
        }

        /* Responsive */
        @media(max-width:900px){
            .hero-grid,
            .why-grid,
            .contact-grid{
                grid-template-columns:1fr;
            }
            .hero{
                padding-top:60px;
            }
        }
        @media(max-width:720px){
            .nav-links{display:none;} /* simple mobile – could be replaced with burger */
            .hero h1{font-size:2rem;}
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
    </style>
</head>
<body>

		<header>
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

<!-- HERO -->
<section id="home" class="hero">
    <div class="container hero-grid">
        <div>
            <h1>Best GeM, Tender & Business Consultant in Delhi NCR</h1>
            <h3>End‑to‑end support for GeM vendor registration, tender search, bid submission, legal compliances and architectural approvals – all under one roof.</h3>
            <ul class="hero-points">
                <li>Support for PSUs, private sector and government departments.</li>
                <li>Dedicated account manager and tender experts.</li>
                <li>Flexible, affordable and result‑oriented service packages.</li>
            </ul>
            <div class="hero-actions">
                <a href="#contact" class="btn btn-primary">Talk to Our Team</a>
                <a href="https://wa.me/918178958394" class="btn btn-outline">Chat on WhatsApp</a>
            </div>
            <p class="hero-contact">24/7 assistance for urgent tender submissions and compliances.</p>
        </div>
        <div class="hero-box">
            <h4>We support you to submit tenders for:</h4>
            <p>PSUs, private sector and government departments across India with complete documentation, portal configuration and follow‑up.</p>
            <div class="pill-row" style="margin-top:10px;">
                <span class="pill">GeM Marketplace</span>
                <span class="pill">CPPP / e‑Proc Portals</span>
                <span class="pill">State e‑tenders</span>
                <span class="pill">Department Portals</span>
            </div>
        </div>
    </div>
</section>

<!-- WHY CHOOSE -->
<section id="why">
    <div class="container">
        <h2 class="section-title">Why Choose Sudixon</h2>
        <div class="divider"></div>
        <p class="section-subtitle">
            A systematic process‑driven approach to improve your win rate and reduce your internal workload across GeM, tenders, legal compliances and approvals.
        </p>

        <div class="why-grid">
            <div>
                <ul class="why-list">
                    <li>Easy and guided documentation process for all registrations and bids.</li>
                    <li>Daily tender / bid summary as per your products, turnover and target markets.</li>
                    <li>End‑to‑end handling of bid preparation, portal upload and submission.</li>
                    <li>Query response management with departments and buyers.</li>
                    <li>Digital Signature (DSC) mapping and browser / system technical support.</li>
                    <li>EMD, PO, payment and performance guarantee follow‑up when required.</li>
                    <li>OEM panel, catalogue and stock management for GeM sellers.</li>
                    <li>Training and development sessions for your internal tender team.</li>
                </ul>
            </div>
            <div>
                <table class="compare-table">
                    <tr>
                        <th>Particular</th>
                        <th>Sudixon</th>
                        <th>Others / In‑house</th>
                    </tr>
                    <tr>
                        <td>Dedicated account manager</td>
                        <td>Yes</td>
                        <td>Sometimes / No</td>
                    </tr>
                    <tr>
                        <td>Tender expert &amp; communication in‑charge</td>
                        <td>Yes</td>
                        <td>Limited</td>
                    </tr>
                    <tr>
                        <td>Tender summary &amp; documentation record</td>
                        <td>Yes</td>
                        <td>Partial</td>
                    </tr>
                    <tr>
                        <td>Technical support for portals &amp; DSC</td>
                        <td>Yes</td>
                        <td>Rare</td>
                    </tr>
                    <tr>
                        <td>OEM / catalogue / order management</td>
                        <td>Yes</td>
                        <td>Mostly No</td>
                    </tr>
                    <tr>
                        <td>24/7 working for urgent bids</td>
                        <td>Yes</td>
                        <td>Office hours only</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</section>

<!-- SERVICES -->
<section id="services">
    <div class="container">
        <h2 class="section-title">Our Core Services</h2>
        <div class="divider"></div>
        <p class="section-subtitle">
            Choose exactly what you need – from GeM vendor registration and tender bidding to legal support and architecture approvals.
        </p>

        <div class="services-grid">
            <!-- GeM / Tender -->
            <div class="service-card">
                <div class="service-tag">GeM &amp; Tender Consulting</div>
                <h3>GeM Vendor Registration</h3>
                <ul>
                    <li>End‑to‑end registration on GeM portal for your organisation.</li>
                    <li>Profile completion, documents upload and verification support.</li>
                    <li>Category, product and service mapping as per your business.</li>
                </ul>
            </div>

            <div class="service-card">
                <div class="service-tag">Bid Search &amp; Summary</div>
                <h3>Tender Search Service</h3>
                <ul>
                    <li>Daily tender search across GeM, PSUs, state and central portals.</li>
                    <li>Shortlisting based on your experience, turnover and specialisation.</li>
                    <li>Easy‑to‑read tender summary with key conditions and documents.</li>
                </ul>
            </div>

            <div class="service-card">
                <div class="service-tag">Bid Management</div>
                <h3>Bid Documentation &amp; Submission</h3>
                <ul>
                    <li>Preparation of technical and commercial bid documentation.</li>
                    <li>Online form filling, file conversions and portal uploads.</li>
                    <li>Final bid submission with pre‑check to avoid rejections.</li>
                </ul>
            </div>

            <div class="service-card">
                <div class="service-tag">Post‑Bid Support</div>
                <h3>Tender Result &amp; Order Management</h3>
                <ul>
                    <li>Monitoring of tender results and analysis of winning prices.</li>
                    <li>PO, payment, EMD and PBG follow‑up as per requirement.</li>
                    <li>Order and invoice management for GeM and other portals.</li>
                </ul>
            </div>

            <!-- Legal -->
            <div class="service-card">
                <div class="service-tag">Legal &amp; Compliance</div>
                <h3>Business‑Linked Legal Services</h3>
                <ul>
                    <li>Cheque bounce notice and case coordination with advocates.</li>
                    <li>ITR filing support for proprietors, firms and companies.</li>
                    <li>Company / LLP incorporation and DSC registration.</li>
                    <li>GST, licences and routine compliance guidance via experts.</li>
                </ul>
            </div>

            <!-- Architecture -->
            <div class="service-card">
                <div class="service-tag">Architecture &amp; Approvals</div>
                <h3>Planning &amp; Sanction Support</h3>
                <ul>
                    <li>Architectural planning and design coordination for projects.</li>
                    <li>Building plan drawings and documentation as per authority norms.</li>
                    <li>Plan sanction, completion certificate and occupancy approvals.</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- PLANS -->
<section id="plans">
    <div class="container">
        <h2 class="section-title">Flexible Service Plans</h2>
        <div class="divider"></div>
        <p class="section-subtitle">
            Pocket‑friendly packages for startups, MSMEs and established organisations. All plans include basic tender guidance and phone support.
        </p>

        <div class="plans-grid">
            <div class="plan-card">
                <div class="plan-title">Starter Plan</div>
                <div class="plan-price">₹15,000</div>
                <div class="plan-note">Ideal for new businesses exploring tenders.</div>
                <ul>
                    <li>GeM vendor registration (single organisation).</li>
                    <li>Up to 25 tender summaries per month.</li>
                    <li>Up to 10 tender / GeM bid submissions.</li>
                    <li>Basic documentation and portal support.</li>
                </ul>
            </div>

            <div class="plan-card">
                <div class="plan-title">Growth Plan</div>
                <div class="plan-price">₹25,000</div>
                <div class="plan-note">For SMEs bidding regularly on tenders.</div>
                <ul>
                    <li>Up to 50 tender summaries.</li>
                    <li>Up to 20 bid submissions.</li>
                    <li>Tender result updates and basic price analysis.</li>
                    <li>Support for vendor registrations on major portals.</li>
                </ul>
            </div>

            <div class="plan-card">
                <div class="plan-title">Advanced GeM Plan</div>
                <div class="plan-price">₹30,000</div>
                <div class="plan-note">For active GeM sellers with catalogues.</div>
                <ul>
                    <li>Catalogue creation &amp; brand approval support.</li>
                    <li>Up to 50 tender submissions and 100 summaries.</li>
                    <li>OEM panel &amp; catalogue management, stock updates.</li>
                    <li>Order management, EMD/PBG record and invoice help.</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- TESTIMONIALS -->
<section id="testimonials">
    <div class="container">
        <h2 class="section-title">What Our Clients Say</h2>
        <div class="divider"></div>
        <p class="section-subtitle">
            Organisations from different sectors trust Sudixon for hassle‑free GeM registration, tender management and consultancy support.
        </p>

        <div class="testi-grid">
            <div class="testi-card">
                Sudixon’s team handles our tender orders and documentation very smoothly. Their follow‑ups and clarity of process save us a lot of time.
                <div class="testi-name">Client A</div>
                <div class="testi-role">Co‑Founder, Trading Company</div>
            </div>
            <div class="testi-card">
                From GeM registration to OEM assessment, the guidance was clear and hassle‑free. We are happy with the coordination and support.
                <div class="testi-name">Client B</div>
                <div class="testi-role">Manager, OEM Partner</div>
            </div>
            <div class="testi-card">
                With Sudixon’s help we understood the tender process and started bidding confidently. Their training sessions were very useful for our team.
                <div class="testi-name">Client C</div>
                <div class="testi-role">Finance Manager, Service Firm</div>
            </div>
        </div>
    </div>
</section>

<!-- CONTACT -->
<section id="contact">
    <div class="container">
        <h2 class="section-title">Contact &amp; Enquiry</h2>
        <div class="divider"></div>
        <p class="section-subtitle" style="color:#f0f0f0;">
            Share your requirements and get a customised proposal for GeM, tenders, legal compliance or architecture approvals.
        </p>

        <div class="contact-grid">
            <div class="contact-box">
                <h4>Office Address</h4>
                <div class="contact-item">
                    <strong>Location</strong>
                    Delhi NCR Region (exact address to be updated).
                </div>
                <div class="contact-item">
                    <strong>Phone / WhatsApp</strong>
                    +91-81789 58394
                </div>
                <div class="contact-item">
                    <strong>Email</strong>
                    info@sudixon.com
                </div>
                <div class="contact-item">
                    <strong>Working Hours</strong>
                    Monday – Saturday: 9:30 AM – 7:00 PM<br>
                    Sunday / Holidays: On prior appointment.
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
                    <label for="email">Email *</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="service">Service Interested In *</label>
                    <select id="service" name="service" required>
                        <option value="">-- Select --</option>
                        <option value="GeM / Tender">GeM / Tender Support</option>
                        <option value="Business Development">Business Development</option>
                        <option value="Legal">Legal &amp; Compliance</option>
                        <option value="Architecture">Architecture &amp; Approvals</option>
                        <option value="Multiple">Multiple Services</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="message">Brief Requirement *</label>
                    <textarea id="message" name="message" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary" style="width:100%;">Send Enquiry</button>
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
function handleSubmit(e){
    e.preventDefault();
    alert('Thank you! Your enquiry has been received. The Sudixon team will contact you shortly.');
    e.target.reset();
}
</script>

</body>
</html>
