<?php
// ------------ SETTINGS ------------
$toEmail = "info@sudixon.com";   // where you receive leads
$fromEmail = "no-reply@sudixon.com"; // use a real domain email on hosting
$sent = false;
$error = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name    = trim($_POST["name"] ?? "");
    $phone   = trim($_POST["phone"] ?? "");
    $email   = trim($_POST["email"] ?? "");
    $service = trim($_POST["service"] ?? "");
    $message = trim($_POST["message"] ?? "");

    if ($name === "" || $phone === "" || $email === "" || $service === "") {
        $error = "Please fill all required fields.";
    } else {
        $subject = "New Order Booking - Sudixon";
        $body  = "New booking request:

";
        $body .= "Name: $name
";
        $body .= "Phone: $phone
";
        $body .= "Email: $email
";
        $body .= "Service: $service
";
        $body .= "Message: $message
";

        $headers  = "From: Sudixon <".$fromEmail.">
";
        $headers .= "Reply-To: ".$email."
";

        // send to you
        $ok1 = mail($toEmail, $subject, $body, $headers);
        // confirmation to client
        $confirmSub = "Thank you for your booking - Sudixon";
        $confirmMsg = "Dear $name,

Thank you for booking with Sudixon.
We will contact you shortly.

Regards,
Sudixon";
        $ok2 = mail($email, $confirmSub, $confirmMsg, $headers);

        if ($ok1 && $ok2) {
            $sent = true;
        } else {
            $error = "Unable to send email. Please try again later.";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Book Order - Sudixon</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
	 <style>
        * { margin:0; padding:0; box-sizing:border-box; }

        body {
            font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height:1.2;
            color:#333;
        }

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
			height:70px;        /* best size for navbar */
			width:auto;
			object-fit:contain;
		}
   
        nav ul { list-style:none; display:flex; gap:2rem; }
        nav a { color:#fff; text-decoration:none; font-weight:500; transition:0.3s; }
        nav a:hover { color:#ffd700; border-bottom:2px solid #ffd700; padding-bottom:5px; }
		
        body { font-family:'Segoe UI', Tahoma, sans-serif; margin:0; background:#f4f4f4; }
        .wrapper { max-width:600px; margin:40px auto; background:#fff; padding:30px; border-radius:8px; box-shadow:0 2px 10px rgba(0,0,0,0.1); }
        h1 { text-align:center; color:#1e3a5f; margin-bottom:10px; }
        p  { text-align:center; color:#555; margin-bottom:25px; }
        .form-group { margin-bottom:15px; }
        label { display:block; margin-bottom:6px; font-weight:600; color:#1e3a5f; }
        input, select, textarea {
            width:100%; padding:10px; border-radius:5px; border:1px solid #ccc; font-size:14px;
        }
        textarea { resize:vertical; min-height:90px; }
        .btn { width:100%; padding:12px; border:none; border-radius:5px; background:#ffd700; color:#1e3a5f; font-weight:600; cursor:pointer; }
        .btn:hover { background:#ffed4e; }
        .msg-success { background:#d4edda; color:#155724; padding:10px; border-radius:5px; margin-bottom:15px; }
        .msg-error { background:#f8d7da; color:#721c24; padding:10px; border-radius:5px; margin-bottom:15px; }
        .note { font-size:12px; color:#777; margin-top:8px; }
		footer { background:#0f1f2f; color:#fff; text-align:center; padding:30px 20px; margin-top:40px; } footer p { color:#aaa; }
    </style>
</head>
<<header>
    <nav>
        <a href="index.php" class="logo">
    <img src="sudixon1.png" alt="Sudixon Logo">
</a>

        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="#about">About Us</a></li>
            <li><a href="#team">Team</a></li>
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
<body>
<div class="wrapper">
    <h1>Book Your Order</h1>
    <p>Fill your details and our team will contact you with confirmation and invoice.</p>

    <?php if ($sent): ?>
        <div class="msg-success">
            Thank you! Your order request has been submitted. You will receive a confirmation email shortly.
        </div>
    <?php elseif ($error !== ""): ?>
        <div class="msg-error">
            <?php echo htmlspecialchars($error); ?>
        </div>
    <?php endif; ?>

    <form method="post" action="">
        <div class="form-group">
            <label for="name">Full Name *</label>
            <input type="text" id="name" name="name" required value="<?php echo htmlspecialchars($name ?? ''); ?>">
        </div>

        <div class="form-group">
            <label for="phone">Mobile Number *</label>
            <input type="tel" id="phone" name="phone" required value="<?php echo htmlspecialchars($phone ?? ''); ?>">
        </div>

        <div class="form-group">
            <label for="email">Email ID *</label>
            <input type="email" id="email" name="email" required value="<?php echo htmlspecialchars($email ?? ''); ?>">
        </div>

        <div class="form-group">
            <label for="service">Service Required *</label>
            <select id="service" name="service" required>
                <option value="">-- Select Service --</option>
                <option value="Business Development & Tendering">Business Development & Tendering</option>
                <option value="Legal - Cheque Bounce / ITR / Company / DSC">Legal - Cheque Bounce / ITR / Company / DSC</option>
                <option value="Architecture & Approvals">Architecture & Approvals</option>
                <option value="Other">Other</option>
            </select>
        </div>

        <div class="form-group">
            <label for="message">Short Description (optional)</label>
            <textarea id="message" name="message"><?php echo htmlspecialchars($message ?? ''); ?></textarea>
        </div>

        <button type="submit" class="btn">Submit Order</button>
        <div class="note">* Required fields</div>
    </form>
</div>
<footer>
    <div class="container">
        <p>&copy; 2025 Sudixon. All Rights Reserved. | Integrated Business, Legal & Architecture Solutions for Delhi NCR</p>
        <p style="font-size:12px; margin-top:10px;">Professional Services | Business Development | Legal Compliance | Architectural Approvals</p>
    </div>
</footer>
</body>
</html>