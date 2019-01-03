<?php
/**
 * Template Name: Custom Policy
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package House_Leading
 */

get_header();
?>
<div id="primary" class="content-area">
		<main id="main" class="site-main">
    <div class="banner-section">
      <div class="banner-layout banner-layout-privacy-policy">
      <h1>
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'custom' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
    ?>
    </h1>
    </div>
</div>

<article class="privacy">
        <div class="container">
          <br>
          <div class="privacy-img1">
          </div>
          <p>
            The #1 Online Privacy Policy Generator! Here at Free Privacy Policy, we've helped 815,960 website owners create easy-to-read, highly effective, custom privacy policies.
            Our intuitive, easy-to-use system allows you to create a custom privacy policy using our free website privacy policy generator.
            All you do is answer a few simple questions about your business <br><br> website privacy policy is created and ready to add to your site. In fact, for most people it takes less than 15 minutes.
            Our Privacy Policy Creator includes several compliance verification tools to help you effectively protect your customers privacy, while limiting your liability, all while adhering to the most notable state and federal privacy laws and 3rd party initiatives, including
            We use information to help improve the safety and reliability of our services. This includes detecting, preventing, and responding to fraud, abuse, security risks, and technical issues that could harm Google, our users, or the public.
            We use different technologies to process your information for these purposes. <br><br> We use automated systems that analyze your content to provide you with things like customized search results, personalized ads, or other features tailored to how you use our services. And we analyze your content to help us detect abuse such as spam, malware, and illegal content. We also use algorithms to recognize patterns in data. For example, Google Translate helps people communicate across languages by detecting common language patterns in phrases you ask it to translate.
            We may combine the information we collect among our services and across your devices for the purposes described above. For example, if you watch videos of guitar players on YouTube, you might see an ad for guitar lessons on a site that uses our ad products. Depending on your account settings, your activity on other sites and apps may be associated with your personal information in order to improve Google’s services and the ads delivered by Google.
            If other users already have your email address or other information that identifies you, <br><br> we may show them your publicly visible Google Account information, such as your name and photo. This helps people identify an email coming from you, for example.
            We’ll ask for your consent before using your information for a purpose that isn’t covered in this Privacy Policy.
          </p>
          <br>
          <br>
          <div class="privacy-img2">
          </div>
          <br>
          <p>
            The #1 Online Privacy Policy Generator! Here at Free Privacy Policy, we've helped 815,960 website owners create easy-to-read, highly effective, custom privacy policies.
            Our intuitive, easy-to-use system allows you to create a custom privacy policy using our free website privacy policy generator.
            All you do is answer a few simple questions about your business <br><br> website privacy policy is created and ready to add to your site. In fact, for most people it takes less than 15 minutes.
            Our Privacy Policy Creator includes several compliance verification tools to help you effectively protect your customers privacy, while limiting your liability, all while adhering to the most notable state and federal privacy laws and 3rd party initiatives, including
            We use information to help improve the safety and reliability of our services. This includes detecting, preventing, and responding to fraud, abuse, security risks, and technical issues that could harm Google, our users, or the public.
            We use different technologies to process your information for these purposes.
          </p>
          <br>
          <ul>
            <li>We use encryption to keep your data private while in transit</li>
            <li>We offer a range of security features, like Safe Browsing, Security Checkup, and 2 Step Verification to help you protect your account</li>
            <li>We review our information collection, storage, and processing practices, including physical security measures, to prevent unauthorized access to our systems</li>
            <li>We restrict access to personal information to Google employees, contractors, and agents who need that information in order to process it. Anyone with this access is subject to strict contractual confidentiality obligations and may be disciplined or terminated if they fail to meet these obligations.</li>
          </ul>
        </div>
      </article>
      <!-- Policy Container Start -->
<?php get_footer(); ?>