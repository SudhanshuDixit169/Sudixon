

		
<?php
// architecture.php - Sudixon Architecture Services Page
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Architecture Services Delhi NCR | Building Plans, Approvals | Sudixon</title>
    <meta name="description" content="Professional architecture services in Delhi NCR: Building plan design, municipal approvals, residential/commercial projects, completion certificates. Complete approval support.">
    <style>
        /* SAME EXACT CSS AS HOMEPAGE & LEGAL PAGE */
        * { margin:0; padding:0; box-sizing:border-box; }
		
        body { font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; line-height:1.6; color:#333; }
		
        header { background: linear-gradient(315deg, #1e3a5f 0%, #e0f2e9 100%); color:#fff; position:sticky; top:0; z-index:100; box-shadow:0 2px 10px rgba(0,0,0,0.1); }
		
        nav { max-width:1200px; margin:0 auto; padding:0.8rem 1rem; display:flex; justify-content:space-between; align-items:center; }

		
        .logo { font-size:36px; font-weight:bold; text-decoration:none; color:#fff; letter-spacing:1px; }
		
        nav ul { list-style:none; display:flex; gap:2rem; } nav a { color:#fff; text-decoration:none; font-weight:500; transition:0.3s; } nav a:hover { color:#ffd700; border-bottom:2px solid #ffd700; padding-bottom:5px; }
        .hero { background:linear-gradient(135deg,#1e3a5f 0%,#2c5aa0 100%); color:#fff; text-align:center; padding:80px 20px; }
        .hero h1 { font-size:48px; margin-bottom:20px; font-weight:700; } .hero p { font-size:20px; margin-bottom:30px; opacity:0.95; }
        .hero-buttons { display:flex; gap:20px; justify-content:center; flex-wrap:wrap; }
        .btn { padding:12px 30px; font-size:16px; border:none; border-radius:5px; cursor:pointer; text-decoration:none; transition:0.3s; font-weight:600; }
        .btn-primary { background:#ffd700; color:#1e3a5f; } .btn-primary:hover { background:#ffed4e; transform:translateY(-2px); box-shadow:0 5px 15px rgba(0,0,0,0.2); }
        .btn-secondary { background:transparent; color:#fff; border:2px solid #fff; } .btn-secondary:hover { background:#fff; color:#1e3a5f; }
        .container { max-width:1200px; margin:0 auto; padding:0 20px; } section { padding:60px 20px; }
        section h2 { font-size:36px; margin-bottom:30px; text-align:center; color:#1e3a5f; font-weight:700; }
        section p { font-size:16px; margin-bottom:15px; color:#555; }
        .divider { width:60px; height:3px; background:#ffd700; margin:20px auto; }
        .highlight { color:#2c5aa0; font-weight:600; }
        .services-grid { display:grid; grid-template-columns:repeat(auto-fit,minmax(300px,1fr)); gap:30px; margin-top:40px; }
        .service-card { background:#f8f9fa; padding:30px; border-radius:8px; border-top:5px solid #2c5aa0; transition:0.3s; box-shadow:0 2px 8px rgba(0,0,0,0.1); }
        .service-card:hover { transform:translateY(-5px); box-shadow:0 5px 20px rgba(0,0,0,0.15); border-top-color:#ffd700; }
        .service-card h3 { color:#1e3a5f; font-size:22px; margin-bottom:15px; } .service-card ul { list-style:none; padding-left:0; }
        .service-card li { padding:8px 0; color:#555; border-bottom:1px solid #ddd; padding-left:20px; position:relative; } .service-card li:last-child { border-bottom:none; }
        .service-card li:before { content:"✓"; position:absolute; left:0; color:#2c5aa0; font-weight:bold; }
		
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
		
				.logo{
			display:flex;
			align-items:center;
		}

		.logo img{
			height:60px;        /* best size for navbar */
			width:auto;
			object-fit:contain;
		}

		
        #contact { background:linear-gradient(135deg,#1e3a5f 0%,#2c5aa0 100%); color:#fff; } #contact h2 { color:#fff; }
        .contact-wrapper { display:grid; grid-template-columns:1fr 1fr; gap:40px; margin-top:40px; align-items:start; }
        .contact-info h3 { font-size:22px; margin-bottom:20px; color:#ffd700; } .contact-detail { margin-bottom:25px; padding-bottom:15px; border-bottom:1px solid rgba(255,255,255,0.2); }
        .contact-detail strong { display:block; color:#ffd700; margin-bottom:5px; }
        .contact-form { background:rgba(255,255,255,0.1); padding:30px; border-radius:8px; backdrop-filter:blur(10px); }
        .form-group { margin-bottom:20px; } .form-group label { display:block; margin-bottom:8px; font-weight:600; }
        .form-group input, .form-group select, .form-group textarea { width:100%; padding:12px; border:none; border-radius:5px; font-family:inherit; font-size:14px; }
        .form-group textarea { resize:vertical; min-height:100px; } .contact-form .btn-primary { width:100%; }
        footer { background:#0f1f2f; color:#fff; text-align:center; padding:30px 20px; margin-top:40px; } footer p { color:#aaa; }
        @media (max-width:768px) { nav ul { gap:1rem; font-size:14px; flex-wrap:wrap; } .hero h1 { font-size:36px; } .hero p { font-size:16px; } .contact-wrapper { grid-template-columns:1fr; } section h2 { font-size:28px; } .services-grid { grid-template-columns:1fr; } }
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

<section id="home" class="hero">
    <div class="container">
        <h1>🏗️ Architecture & Approvals</h1>
        <p>Complete design to approval services for residential, commercial & industrial projects in Delhi NCR</p>
        <div class="hero-buttons">
            <button class="btn btn-primary" onclick="document.getElementById('contact').scrollIntoView({behavior:'smooth'})">Start Your Project</button>
            <button class="btn btn-secondary" onclick="document.getElementById('services').scrollIntoView({behavior:'smooth'})">View Services</button>
        </div>
    </div>
</section>

<section id="services">
    <div class="container">
        <h2>Architecture Services</h2>
        <div class="divider"></div>
        <p style="text-align:center; font-size:16px; color:#666; margin-bottom:40px;">From concept design to complete municipal approval - Single window solution for Delhi NCR</p>

        <div class="services-grid">
            <!-- Building Plan Design -->
            <div class="service-card">
                <h3>📐 Building Plan Design</h3>
                <ul>
                    <li>Residential house/villa plans</li>
                    <li>Commercial building layouts</li>
                    <li>Industrial shed/factory design</li>
                    <li>2D & 3D architectural drawings</li>
                    <li>Structural engineering drawings</li>
                    <li>Interior layout planning</li>
                </ul>
            </div>

            <!-- Municipal Approvals -->
            <div class="service-card">
                <h3>🏛️ Municipal Approvals</h3>
                <ul>
                    <li>MCD, DDA, NDMC plan sanction</li>
                    <li>Building plan submission</li>
                    <li>Site plan & layout approval</li>
                    <li>Revised plan processing</li>
                    <li>Regularization of unauthorized construction</li>
                    <li>Completion certificate (CC)</li>
                </ul>
            </div>

            <!-- Residential Projects -->
            <div class="service-card">
                <h3>🏠 Residential Projects</h3>
                <ul>
                    <li>Independent floors & builder floors</li>
                    <li>Group housing projects</li>
                    <li>Stilt + 4 floors design</li>
                    <li>Basement approvals</li>
                    <li>Vaastu compliant designs</li>
                    <li>15m-30m height compliance</li>
                </ul>
            </div>

            <!-- Commercial Projects -->
            <div class="service-card">
                <h3>🏢 Commercial Projects</h3>
                <ul>
                    <li>Office buildings & showrooms</li>
                    <li>Retail complexes & malls</li>
                    <li>Hotels & guest houses</li>
                    <li>Parking provisions & ramps</li>
                    <li>Fire safety compliance</li>
                    <li>Lift & staircase approvals</li>
                </ul>
            </div>

            <!-- Industrial Projects -->
            <div class="service-card">
                <h3>🏭 Industrial Projects</h3>
                <ul>
                    <li>Factory sheds & warehouses</li>
                    <li>Godown & storage facilities</li>
                    <li>Boundary wall approvals</li>
                    <li>Effluent treatment compliance</li>
                    <li>Heavy machinery foundations</li>
                    <li>Expansion project approvals</li>
                </ul>
            </div>

            <!-- Approval Documents -->
            <div class="service-card">
                <h3>📋 Approval Documents</h3>
                <ul>
                    <li>Architectural working drawings</li>
                    <li>Structural stability certificate</li>
                    <li>Soil test reports</li>
                    <li>No objection certificates (NOCs)</li>
                    <li>Fire NOC & electrical safety</li>
                    <li>Occupancy certificate processing</li>
                </ul>
            </div>

            <!-- Single Window Service -->
            <div class="service-card">
                <h3>🚀 Single Window Service</h3>
                <ul>
                    <li>Complete project coordination</li>
                    <li>Liaison with all authorities</li>
                    <li>Site visits & inspections</li>
                    <li>Rejection handling & resubmission</li>
                    <li>Timeline tracking & updates</li>
                    <li>Handover with all approvals</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section id="process">
    <div class="container">
        <h2>Our Architecture Process</h2>
        <div class="divider"></div>
        <div style="display:grid; grid-template-columns:repeat(auto-fit,minmax(250px,1fr)); gap:30px; margin-top:40px;">
            <div style="text-align:center; padding:30px; background:#f8f9fa; border-radius:8px;">
                <div style="font-size:48px; margin-bottom:15px;">1</div>
                <h3>Site Analysis</h3>
                <p>Site visit, survey & requirement analysis</p>
            </div>
            <div style="text-align:center; padding:30px; background:#f8f9fa; border-radius:8px;">
                <div style="font-size:48px; margin-bottom:15px;">2</div>
                <h3>Design Development</h3>
                <p>Concept, layout & 3D presentation</p>
            </div>
            <div style="text-align:center; padding:30px; background:#f8f9fa; border-radius:8px;">
                <div style="font-size:48px; margin-bottom:15px;">3</div>
                <h3>Drawing Preparation</h3>
                <p>Complete working drawings & calculations</p>
            </div>
            <div style="text-align:center; padding:30px; background:#f8f9fa; border-radius:8px;">
                <div style="font-size:48px; margin-bottom:15px;">4</div>
                <h3>Approval Execution</h3>
                <p>Submission, processing & final sanction</p>
            </div>
        </div>
    </div>
</section>

<section id="contact">
    <div class="container">
        <h2>Architecture Consultation</h2>
        <div class="divider" style="background:#ffd700;"></div>
        <p style="text-align:center; font-size:16px; margin-bottom:40px;">Ready to start your project? Get free initial consultation from our architects</p>

        <div class="contact-wrapper">
            <div class="contact-info">
                <h3>Architecture Team</h3>
                <div class="contact-detail">
                    <strong>📍 Coverage</strong> Delhi NCR
                </div>
                <div class="contact-detail">
                    <strong>📞 Phone</strong> +91 [81789 58394]
                </div>
                <div class="contact-detail">
                    <strong>📧 Email</strong> architecture@sudixon.com
                </div>
                <div class="contact-detail">
                    <strong>⏰ Site Visits</strong> Mon-Sat | 10AM-6PM
                </div>
            </div>

            <form class="contact-form" method="POST" action="contact-process.php">
                <div class="form-group">
                    <label>Full Name *</label>
                    <input type="text" name="name" required>
                </div>
                <div class="form-group">
                    <label>Phone Number *</label>
                    <input type="tel" name="phone" required>
                </div>
                <div class="form-group">
                    <label>Project Type *</label>
                    <select name="project_type" required>
                        <option value="">Select Project</option>
                        <option>Residential House/Floor</option>
                        <option>Commercial Building</option>
                        <option>Industrial Shed/Factory</option>
                        <option>Building Plan Approval</option>
                        <option>Completion Certificate</option>
                        <option>Other</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Plot Size (sqft)</label>
                    <input type="number" name="plot_size">
                </div>
                <div class="form-group">
                    <label>Requirements</label>
                    <textarea name="requirements" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Request Architect Visit</button>
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
</footer>
</body>
</html>
