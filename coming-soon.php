<?php
session_start();

// Connect Database
include "./config/db.php";

//Subscribe Script
if (isset($_POST['subscribe_btn'])) {

    $email  =   $conn->real_escape_string($_POST['email']);

    $query = "INSERT INTO subscription (email)"."VALUES ('$email')";
    mysqli_query($conn, $query);
    if(mysqli_affected_rows($conn) > 0) {
        $_SESSION['email'] = $email;
        $_SESSION['subscribe_message_title'] = "We never expected it!";
        $_SESSION['subscribe_message'] = "You will hear from us ";
    }else{
        error_log("Error is ".mysqli_error($conn));
    }
}
?>
<!DOCTYPE html>
<html lang="en">
    
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Coming Soon :: Webify&trade;</title>
        <meta property="og:locale" content="en_US" />
        <meta property="og:url" content="https://webify.com.ng/"/>
        <meta property="og:site_name" content="Webify" />
	    <meta property="og:type" content="website" />
        <meta property="og:title" content="TG&trade; :: Web + App Developer, UI/UX Designer, Product Designer & Graphic Designer." />
        <meta name="og:description" content="Webify is a digital/branding agency that collaborates with brands to increase their value and impact through branding, user interface and experience design, app development and web development.">
        <meta name="keywords" content="Creative Agency,Lagos,Nigeria,Port Harcourt,Website Development,Application Development,Software Development,Build Website,Wordpress,Software,Developer,Development,Programmer,Programming,Coder,Coding,Blogger,Blogging,Digital,Creator,Creation,Graphic Designer,Product Designer,Product,Graphics,Branding,Lekki,Abuja,Bootstrap,Angular,Vue,Frontend,Front-end,UX,UI,UI/UX">
        <meta property="og:image" content="https://i.imgur.com/uIvHnMQ.jpg">
        <link rel="icon" type="image/png" href="https://i.imgur.com/ZqEiVRm.png">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&amp;display=swap" rel="stylesheet">
        <link rel="stylesheet" href="assets/vendor/swiper/dist/css/swiper.min.css" />
        <link rel="stylesheet" href="assets/vendor/fancybox/dist/jquery.fancybox.min.css" />
        <link rel="stylesheet" href="assets/css/themebau.min.css">
        <link rel="stylesheet" href="assets/css/custom.css">
        <!-- END: Styles -->
        <!-- jQuery -->
        <script src="assets/vendor/jquery/dist/jquery.min.js"></script>
    </head>
    <body class="bg-dark">

        <div class="content-wrap">
            <div class="min-vh-100 text-center pt-20 pb-40 d-flex align-items-center">
                <div class="background show-on-scroll" data-show-duration="400">
                    <div class="background-video jarallax" data-jarallax-video="mp4:assets/videos/coming-soon.mp4"></div>
                    <div class="background-color" style="background-color: #0e0e0e; opacity: .4;"></div>
                </div>
                <div class="container h-100 text-white d-flex align-items-center justify-content-center">
                    <div class="d-flex flex-column align-items-center justify-content-between w-100">
                        <div>
                        <img width=" " src="assets/images/logo-white.png" alt="" class="pb-6">
                            <p class="mb-12 show-on-scroll" data-show-duration="500" data-show-distance="10" data-show-delay="100">We’ll be here soon with our website, subscribe to be notified.</p>
                        </div>
                        <div class="mt-60 mb-60 show-on-scroll" data-show-duration="500" data-show-distance="10" data-show-delay="200">
                            <div class="countdown h2 text-white d-flex justify-content-center" data-end="2021-02-28 12:00" data-timezone="EST"></div>
                        </div>
                        <div class="row justify-content-center w-100 mt-20 show-on-scroll" data-show-duration="500" data-show-distance="10" data-show-delay="300">
                            <form class="col-lg-7" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" autocomplete="off">
                                <div class="form-group-overlay">
                                    <input class="form-control form-control-white" type="email" name="email" placeholder="Your Email *">
                                    <button class="btn btn-clean btn-with-ball text-white" type="submit" name="subscribe_btn">send</button>
                                </div>
                            </form>
                        </div>
                        <ul class="nav nav-gap-sm align-items-center text-white mt-90">
                            <li class="nav-item show-on-scroll" data-show-duration="500" data-show-distance="10" data-show-delay="400">
                                <a href="https://www.facebook.com/webifyng" target="_blank" class="nav-link">
                                    <svg width="7" height="15" viewBox="0 0 10 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.17421 3.65234H9.99996V0.154687C9.68557 0.107422 8.60224 0 7.34088 0C4.70831 0 2.90529 1.82188 2.90529 5.16914V8.25H0V12.1602H2.90529V22H6.46588V12.1602H9.25375L9.69693 8.25H6.46588V5.55586C6.46588 4.42578 6.7424 3.65234 8.17421 3.65234Z" fill="currentColor"></path>
                                    </svg>
                                </a>
                            </li>
                            <li class="nav-item show-on-scroll" data-show-duration="500" data-show-distance="10" data-show-delay="450">
                                <a href="https://www.twitter.com/webifyng" target="_blank" class="nav-link">
                                    <svg width="17" height="14" viewBox="0 0 25 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M22.0706 5.51356C22.086 5.73504 22.086 5.95656 22.086 6.17804C22.086 12.9334 17.0783 20.7172 7.92575 20.7172C5.10601 20.7172 2.48661 19.8787 0.283203 18.4232C0.683835 18.4707 1.069 18.4865 1.48505 18.4865C3.81167 18.4865 5.95347 17.6797 7.6638 16.3033C5.47581 16.2558 3.64221 14.7845 3.01046 12.7594C3.31865 12.8069 3.6268 12.8385 3.9504 12.8385C4.39723 12.8385 4.84411 12.7752 5.2601 12.6645C2.97968 12.1898 1.2693 10.1332 1.2693 7.64935V7.58609C1.93183 7.96579 2.70231 8.20309 3.5189 8.2347C2.17837 7.31709 1.30013 5.75086 1.30013 3.97894C1.30013 3.02972 1.54661 2.15959 1.97807 1.40019C4.42801 4.50103 8.11063 6.52604 12.24 6.74756C12.163 6.36787 12.1168 5.97239 12.1168 5.57687C12.1168 2.76076 14.3356 0.466797 17.0937 0.466797C18.5266 0.466797 19.8209 1.0838 20.73 2.0805C21.8548 1.85902 22.9334 1.43184 23.8887 0.846495C23.5189 2.03307 22.7331 3.02977 21.7008 3.66255C22.7023 3.55186 23.673 3.26702 24.5667 2.87155C23.8888 3.88403 23.0413 4.78577 22.0706 5.51356Z" fill="currentColor"></path>
                                    </svg>
                                </a>
                            </li>
                            <li class="nav-item show-on-scroll" data-show-duration="500" data-show-distance="10" data-show-delay="500">
                                <a href="https://www.instagram.com/webifyng" target="_blank" class="nav-link">
                                    <svg width="15" height="15" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.2827 5.3166C8.24087 5.3166 5.78732 7.8148 5.78732 10.912C5.78732 14.0092 8.24087 16.5074 11.2827 16.5074C14.3245 16.5074 16.7781 14.0092 16.7781 10.912C16.7781 7.8148 14.3245 5.3166 11.2827 5.3166ZM11.2827 14.5497C9.31698 14.5497 7.70998 12.9183 7.70998 10.912C7.70998 8.90563 9.3122 7.27425 11.2827 7.27425C13.2532 7.27425 14.8554 8.90563 14.8554 10.912C14.8554 12.9183 13.2484 14.5497 11.2827 14.5497ZM18.2846 5.08772C18.2846 5.81331 17.7107 6.39282 17.0029 6.39282C16.2902 6.39282 15.7211 5.80844 15.7211 5.08772C15.7211 4.36699 16.295 3.78261 17.0029 3.78261C17.7107 3.78261 18.2846 4.36699 18.2846 5.08772ZM21.9243 6.4123C21.843 4.66404 21.4508 3.11545 20.1929 1.83956C18.9399 0.563678 17.419 0.164355 15.7019 0.0766992C13.9323 -0.0255664 8.62827 -0.0255664 6.85865 0.0766992C5.14643 0.159486 3.62552 0.558809 2.36766 1.83469C1.10979 3.11058 0.722392 4.65917 0.636302 6.40743C0.535865 8.20925 0.535865 13.6098 0.636302 15.4117C0.717609 17.1599 1.10979 18.7085 2.36766 19.9844C3.62552 21.2603 5.14165 21.6596 6.85865 21.7473C8.62827 21.8495 13.9323 21.8495 15.7019 21.7473C17.419 21.6645 18.9399 21.2652 20.1929 19.9844C21.446 18.7085 21.8382 17.1599 21.9243 15.4117C22.0247 13.6098 22.0247 8.21412 21.9243 6.4123ZM19.6381 17.345C19.2651 18.2995 18.5429 19.0348 17.6007 19.4195C16.1898 19.9893 12.8419 19.8578 11.2827 19.8578C9.72352 19.8578 6.37081 19.9844 4.96469 19.4195C4.02727 19.0397 3.30507 18.3043 2.92724 17.345C2.36766 15.9084 2.49679 12.4995 2.49679 10.912C2.49679 9.32443 2.37244 5.91071 2.92724 4.47899C3.30029 3.52451 4.02248 2.78917 4.96469 2.40446C6.37559 1.83469 9.72352 1.96618 11.2827 1.96618C12.8419 1.96618 16.1946 1.83956 17.6007 2.40446C18.5381 2.7843 19.2603 3.51964 19.6381 4.47899C20.1977 5.91558 20.0686 9.32443 20.0686 10.912C20.0686 12.4995 20.1977 15.9133 19.6381 17.345Z" fill="currentColor"></path>
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
 
        <script src="assets/vendor/object-fit-images/dist/ofi.min.js"></script>
        <script src="assets/vendor/popper.js/dist/umd/popper.min.js"></script>
        <script src="assets/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="assets/vendor/bootstrap-validator/dist/validator.min.js"></script>
        <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
        <script src="assets/vendor/swiper/dist/js/swiper.min.js"></script>
        <script src="assets/vendor/animejs/lib/anime.min.js"></script>
        <script src="assets/vendor/rellax/rellax.min.js"></script>
        <script src="assets/vendor/jquery-countdown/dist/jquery.countdown.min.js"></script>
        <script src="assets/vendor/moment/min/moment.min.js"></script>
        <script src="assets/vendor/moment-timezone/builds/moment-timezone-with-data.min.js"></script>
        <script src="assets/vendor/isotope-layout/dist/isotope.pkgd.min.js"></script>
        <script src="assets/vendor/isotope-packery/packery-mode.pkgd.min.js"></script>
        <script src="assets/vendor/jarallax/dist/jarallax.min.js"></script>
        <script src="assets/vendor/jarallax/dist/jarallax-video.min.js"></script>
        <script src="assets/vendor/fancybox/dist/jquery.fancybox.min.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="assets/js/themebau.min.js"></script>
        <script type="text/javascript">
            $('.countdown').each(function()
            {
                const $this = $(this);
                const tz = $this.attr('data-timezone');
                let end = $this.attr('data-end');
                end = moment.tz(end, tz).toDate();
                $this.countdown(end, function(event)
                {
                    $this.html(event.strftime(['<div class="countdown-item">', '<span>%D</span>', '<span>days</span>', '</div>', '<div class="countdown-separator">', '<svg width="5" height="19" viewBox="0 0 5 19" fill="none" xmlns="http://www.w3.org/2000/svg">', '<path d="M2.41477 18.3161C1.75473 18.3161 1.18726 18.0826 0.712358 17.6158C0.237453 17.1409 0 16.5694 0 15.9013C0 15.2412 0.237453 14.6778 0.712358 14.2109C1.18726 13.736 1.75473 13.4986 2.41477 13.4986C3.07481 13.4986 3.64228 13.736 4.11719 14.2109C4.59209 14.6778 4.82955 15.2412 4.82955 15.9013C4.82955 16.344 4.71686 16.7505 4.49148 17.1207C4.27415 17.483 3.98438 17.7727 3.62216 17.9901C3.25994 18.2074 2.85748 18.3161 2.41477 18.3161ZM2.41477 4.81747C1.75473 4.81747 1.18726 4.58404 0.712358 4.11719C0.237453 3.64228 0 3.07079 0 2.4027C0 1.74266 0.237453 1.17921 0.712358 0.712357C1.18726 0.237452 1.75473 0 2.41477 0C3.07481 0 3.64228 0.237452 4.11719 0.712357C4.59209 1.17921 4.82955 1.74266 4.82955 2.4027C4.82955 2.84541 4.71686 3.25189 4.49148 3.62216C4.27415 3.98438 3.98438 4.27415 3.62216 4.49148C3.25994 4.70881 2.85748 4.81747 2.41477 4.81747Z" fill="currentColor"/>', '</svg>', '</div>', '<div class="countdown-item">', '<span>%H</span>', '<span>hours</span>', '</div>', '<div class="countdown-separator">', '<svg width="5" height="19" viewBox="0 0 5 19" fill="none" xmlns="http://www.w3.org/2000/svg">', '<path d="M2.41477 18.3161C1.75473 18.3161 1.18726 18.0826 0.712358 17.6158C0.237453 17.1409 0 16.5694 0 15.9013C0 15.2412 0.237453 14.6778 0.712358 14.2109C1.18726 13.736 1.75473 13.4986 2.41477 13.4986C3.07481 13.4986 3.64228 13.736 4.11719 14.2109C4.59209 14.6778 4.82955 15.2412 4.82955 15.9013C4.82955 16.344 4.71686 16.7505 4.49148 17.1207C4.27415 17.483 3.98438 17.7727 3.62216 17.9901C3.25994 18.2074 2.85748 18.3161 2.41477 18.3161ZM2.41477 4.81747C1.75473 4.81747 1.18726 4.58404 0.712358 4.11719C0.237453 3.64228 0 3.07079 0 2.4027C0 1.74266 0.237453 1.17921 0.712358 0.712357C1.18726 0.237452 1.75473 0 2.41477 0C3.07481 0 3.64228 0.237452 4.11719 0.712357C4.59209 1.17921 4.82955 1.74266 4.82955 2.4027C4.82955 2.84541 4.71686 3.25189 4.49148 3.62216C4.27415 3.98438 3.98438 4.27415 3.62216 4.49148C3.25994 4.70881 2.85748 4.81747 2.41477 4.81747Z" fill="currentColor"/>', '</svg>', '</div>', '<div class="countdown-item">', '<span>%M</span>', '<span>minutes</span>', '</div>', '<div class="countdown-separator">', '<svg width="5" height="19" viewBox="0 0 5 19" fill="none" xmlns="http://www.w3.org/2000/svg">', '<path d="M2.41477 18.3161C1.75473 18.3161 1.18726 18.0826 0.712358 17.6158C0.237453 17.1409 0 16.5694 0 15.9013C0 15.2412 0.237453 14.6778 0.712358 14.2109C1.18726 13.736 1.75473 13.4986 2.41477 13.4986C3.07481 13.4986 3.64228 13.736 4.11719 14.2109C4.59209 14.6778 4.82955 15.2412 4.82955 15.9013C4.82955 16.344 4.71686 16.7505 4.49148 17.1207C4.27415 17.483 3.98438 17.7727 3.62216 17.9901C3.25994 18.2074 2.85748 18.3161 2.41477 18.3161ZM2.41477 4.81747C1.75473 4.81747 1.18726 4.58404 0.712358 4.11719C0.237453 3.64228 0 3.07079 0 2.4027C0 1.74266 0.237453 1.17921 0.712358 0.712357C1.18726 0.237452 1.75473 0 2.41477 0C3.07481 0 3.64228 0.237452 4.11719 0.712357C4.59209 1.17921 4.82955 1.74266 4.82955 2.4027C4.82955 2.84541 4.71686 3.25189 4.49148 3.62216C4.27415 3.98438 3.98438 4.27415 3.62216 4.49148C3.25994 4.70881 2.85748 4.81747 2.41477 4.81747Z" fill="currentColor"/>', '</svg>', '</div>', '<div class="countdown-item">', '<span>%S</span>', '<span>seconds</span>', '</div>'].join('')));
                });
            });
        </script>
    <?php
    if (isset($_SESSION['subscribe_message']))
    {
    ?>
        <script>
            swal({
            title: "<?php echo $_SESSION['subscribe_message_title']; ?>",
            text: "<?php echo $_SESSION['subscribe_message']; ?>",
            icon: "success",
            button: false,
            timer: 4000,
            });
        </script>
    <?php
        unset($_SESSION['subscribe_message']);
    }
    ?>
    </body>

</html>