<!DOCTYPE HTML>
<html lang="en-US">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vegetable & Fruits Rack | IEJA Racks & Interior</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
    <!-- bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css" media="all">
    <!-- carousel CSS -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css" type="text/css" media="all">
    <!-- animate CSS -->
    <link rel="stylesheet" href="assets/css/animate.css" type="text/css" media="all">
    <!-- animate CSS -->
    <link rel="stylesheet" href="assets/css/animate.min.css" type="text/css" media="all">
    <!-- animated-text CSS -->
    <link rel="stylesheet" href="assets/css/animated-text.css" type="text/css" media="all">
    <!-- font-awesome CSS -->
    <link rel="stylesheet" href="assets/css/all.min.css" type="text/css" media="all">
    <!-- font-flaticon CSS -->
    <link rel="stylesheet" href="assets/css/flaticon.css" type="text/css" media="all">
    <!-- theme-default CSS -->
    <link rel="stylesheet" href="assets/css/theme-default.css" type="text/css" media="all">
    <!-- meanmenu CSS -->
    <link rel="stylesheet" href="assets/css/meanmenu.min.css" type="text/css" media="all">
    <!-- transitions CSS -->
    <link rel="stylesheet" href="assets/css/owl.transitions.css" type="text/css" media="all">
    <!-- venobox CSS -->
    <link rel="stylesheet" href="venobox/venobox.css" type="text/css" media="all">
    <!-- bootstrap icons -->
    <link rel="stylesheet" href="assets/css/bootstrap-icons.css" type="text/css" media="all">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css" type="text/css" media="all">
    <!-- responsive CSS -->
    <link rel="stylesheet" href="assets/css/responsive.css" type="text/css" media="all">
    <!-- modernizr js -->
    <script src="assets/js/vendor/modernizr-3.5.0.min.js"></script>
</head>

<body>

    <?php include 'header.php'; ?>

    <!--==================================================-->
    <!-- Start Hero Banner Area -->
    <!--==================================================-->
    <section class="hero-banner">
        <div class="hero-overlay"></div>

        <div class="hero-content">
            
            <h1>Contact Us</h1>

            <a href="contact.php" class="hero-btn">
                KNOW MORE
            </a>
        </div>
    </section>


    <style>
        /* Contact Page */
        .contact-page {
            --contact-primary: #1e2b64;
            --contact-accent: #f6b508;
            font-family: Arial, sans-serif;
            padding: 70px 20px;
            background: #f5f7fc;
        }

        .contact-page * {
            box-sizing: border-box;
        }

        .contact-container {
            max-width: 1150px;
            margin: auto;
            display: grid;
            grid-template-columns: 0.85fr 1.15fr;
            background: #fff;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 15px 50px rgba(30, 43, 100, 0.10);
        }

        /* Left Information Panel */
        .contact-info {
            background: var(--contact-primary);
            color: #fff;
            padding: 50px 38px;
            position: relative;
            overflow: hidden;
        }

        .contact-info::after {
            content: "";
            position: absolute;
            width: 220px;
            height: 220px;
            right: -90px;
            bottom: -90px;
            border: 35px solid rgba(255, 255, 255, 0.07);
            border-radius: 50%;
            pointer-events: none;
        }

        .contact-tag {
            display: inline-block;
            background: rgba(246, 181, 8, 0.15);
            color: #ffd45d;
            padding: 8px 15px;
            border-radius: 30px;
            font-size: 12px;
            font-weight: 700;
            letter-spacing: 1px;
            margin-bottom: 20px;
        }

        .contact-info h2 {
            font-size: 34px;
            line-height: 1.3;
            margin: 0 0 18px;
            color: #fff;
        }

        .contact-info>p {
            color: #d5d9ec;
            line-height: 1.8;
            font-size: 15px;
            margin-bottom: 38px;
        }

        .contact-detail {
            display: flex;
            align-items: flex-start;
            gap: 15px;
            margin-bottom: 28px;
        }

        .contact-icon {
            min-width: 44px;
            height: 44px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(255, 255, 255, 0.10);
            color: var(--contact-accent);
            border-radius: 12px;
            font-size: 20px;
        }

        .contact-detail h4 {
            margin: 2px 0 7px;
            font-size: 15px;
            color: #fff;
        }

        .contact-detail p,
        .contact-detail a {
            color: #d5d9ec;
            font-size: 14px;
            line-height: 1.7;
            margin: 0;
            text-decoration: none;
            overflow-wrap: anywhere;
        }

        .contact-detail a:hover {
            color: #ffd45d;
        }

        .contact-note {
            margin-top: 35px;
            padding: 18px;
            border-left: 3px solid var(--contact-accent);
            background: rgba(255, 255, 255, 0.06);
            color: #e1e5f5;
            font-size: 13px;
            line-height: 1.7;
        }

        /* Right Form Panel */
        .contact-form-area {
            padding: 50px 45px;
        }

        .contact-form-area h2 {
            color: var(--contact-primary);
            font-size: 30px;
            margin: 0 0 10px;
        }

        .contact-form-area .contact-subtitle {
            color: #737b90;
            font-size: 14px;
            line-height: 1.7;
            margin: 0 0 30px;
        }

        .contact-form {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 20px;
        }

        .contact-field {
            display: flex;
            flex-direction: column;
            min-width: 0;
        }

        .contact-field.full-width {
            grid-column: 1 / -1;
        }

        .contact-field label {
            font-size: 13px;
            font-weight: 700;
            color: #29324e;
            margin-bottom: 9px;
        }

        .contact-field input,
        .contact-field select,
        .contact-field textarea {
            width: 100%;
            padding: 14px 15px;
            border: 1px solid #e0e4ef;
            border-radius: 9px;
            background: #fafbfe;
            color: #26304b;
            font-family: inherit;
            font-size: 14px;
            outline: none;
            transition: border-color 0.25s, box-shadow 0.25s;
        }

        .contact-field input,
        .contact-field select {
            height: 49px;
        }

        .contact-field textarea {
            min-height: 135px;
            resize: vertical;
        }

        .contact-field input:focus,
        .contact-field select:focus,
        .contact-field textarea:focus {
            border-color: var(--contact-primary);
            box-shadow: 0 0 0 3px rgba(30, 43, 100, 0.08);
            background: #fff;
        }

        .contact-field input::placeholder,
        .contact-field textarea::placeholder {
            color: #a3a9b9;
        }

        .contact-submit {
            grid-column: 1 / -1;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 12px;
            width: 100%;
            min-height: 53px;
            border: none;
            border-radius: 9px;
            background: var(--contact-primary);
            color: #fff;
            font-size: 15px;
            font-weight: 700;
            cursor: pointer;
            transition: background 0.25s, transform 0.25s;
        }

        .contact-submit:hover {
            background: #30448f;
            transform: translateY(-2px);
        }

        .contact-submit span {
            color: var(--contact-accent);
            font-size: 20px;
        }

        .contact-privacy {
            grid-column: 1 / -1;
            color: #858da0;
            font-size: 12px;
            text-align: center;
            line-height: 1.6;
            margin: -5px 0 0;
        }

        /* Tablet */
        @media (max-width: 900px) {
            .contact-page {
                padding: 45px 18px;
            }

            .contact-container {
                grid-template-columns: 1fr 1.2fr;
            }

            .contact-info {
                padding: 40px 25px;
            }

            .contact-form-area {
                padding: 40px 25px;
            }

            .contact-info h2 {
                font-size: 29px;
            }
        }

        /* Mobile */
        @media (max-width: 650px) {
            .contact-page {
                padding: 30px 14px;
            }

            .contact-container {
                grid-template-columns: 1fr;
                border-radius: 14px;
            }

            .contact-info,
            .contact-form-area {
                padding: 32px 22px;
            }

            .contact-info h2,
            .contact-form-area h2 {
                font-size: 27px;
            }

            .contact-info>p {
                margin-bottom: 28px;
            }

            .contact-form {
                grid-template-columns: 1fr;
                gap: 17px;
            }

            .contact-field.full-width,
            .contact-submit,
            .contact-privacy {
                grid-column: auto;
            }
        }
    </style>


    <body style="margin:0;">

        <section class="contact-page">
            <div class="contact-container">

                <!-- Contact Information -->

                <!-- Contact Information -->
                <div class="contact-info">

                    <h2>Contact Us</h2>

                    <div class="contact-detail">
                        <div class="contact-icon">&#9906;</div>
                        <div>
                            <h4>Address:</h4>
                            <p>
                                Karyalpur ChaturSingh Phoolchaur Road,
                                Near Maharani School, Haldwani,
                                Uttarakhand - 263139
                            </p>
                        </div>
                    </div>

                    <div class="contact-detail">
                        <div class="contact-icon">&#9742;</div>
                        <div>
                            <h4>Phone Number</h4>
                            <p>
                                <a href="tel:+916396576430">
                                    +91 6396576430
                                </a>
                            </p>
                        </div>
                    </div>

                    <div class="contact-detail">
                        <div class="contact-icon">&#9993;</div>
                        <div>
                            <h4>Email</h4>
                            <p>
                                <a href="mailto:iejaracks@gmail.com">
                                    iejaracks@gmail.com
                                </a>
                            </p>
                        </div>
                    </div>

                    <div class="contact-detail">
                        <div class="contact-icon">&#127760;</div>
                        <div>
                            <h4>Website</h4>
                            <p>
                                <a href="https://iejaracks.com" target="_blank"
                                    rel="noopener noreferrer">
                                    iejaracks.com
                                </a>
                            </p>
                        </div>
                    </div>

                </div>


                <!-- Contact Form -->
                <div class="contact-form-area">

                    <h2>Send an Enquiry</h2>

                    <p class="contact-subtitle">
                        Fill in the details below and we'll be happy
                        to assist you.
                    </p>

                    <form class="contact-form" action="" method="post">

                        <div class="contact-field">
                            <label for="contact-name">Full Name *</label>
                            <input
                                type="text"
                                id="contact-name"
                                name="name"
                                placeholder="Enter your full name"
                                autocomplete="name"
                                required>
                        </div>

                        <div class="contact-field">
                            <label for="contact-email">Email Address *</label>
                            <input
                                type="email"
                                id="contact-email"
                                name="email"
                                placeholder="Enter your email"
                                autocomplete="email"
                                required>
                        </div>

                        <div class="contact-field">
                            <label for="contact-phone">Phone Number *</label>
                            <input
                                type="tel"
                                id="contact-phone"
                                name="phone"
                                placeholder="+91 XXXXX XXXXX"
                                autocomplete="tel"
                                required>
                        </div>

                        <div class="contact-field">
                            <label for="contact-subject">Enquiry Type *</label>
                            <select id="contact-subject"
                                name="subject" required>
                                <option value="" disabled selected>
                                    Select enquiry type
                                </option>
                                <option value="Product Enquiry">
                                    Product Enquiry
                                </option>
                                <option value="Quotation Request">
                                    Request a Quotation
                                </option>
                                <option value="General Enquiry">
                                    General Enquiry
                                </option>
                                <option value="Support">
                                    Support
                                </option>
                            </select>
                        </div>

                        <div class="contact-field full-width">
                            <label for="contact-message">Your Message *</label>
                            <textarea
                                id="contact-message"
                                name="message"
                                placeholder="Tell us about your requirements..."
                                required></textarea>
                        </div>

                        <button type="submit" class="contact-submit">
                            Send Your Enquiry <span>&rarr;</span>
                        </button>

                        <p class="contact-privacy">
                            * Required fields. Your details should be
                            handled securely and used to respond to your enquiry.
                        </p>

                    </form>
                </div>

            </div>
        </section>




















        <?php include 'footer.php'; ?>

     