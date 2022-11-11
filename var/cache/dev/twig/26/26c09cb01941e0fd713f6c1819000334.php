<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* utilisateur/test.html.twig */
class __TwigTemplate_1db0619397ce368209cf93a2f139cf84 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateur/test.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateur/test.html.twig"));

        // line 1
        echo "<html class=\"no-js\" lang=\"zxx\"><head><meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">

    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    <title>JobGrids - Job Portal HTML Template.</title>
    <meta name=\"description\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">



    <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/bootstrap.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/LineIcons.2.0.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/animate.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/tiny-slider.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/glightbox.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/main.css"), "html", null, true);
        echo "\">
    <style></style>
    <style></style>
    <style></style>
    <style type=\"text/css\"> @font-face { font-family: Roboto; src: url(\"chrome-extension://mcgbeeipkmelnpldkobichboakdfaeon/css/Roboto-Regular.ttf\"); }</style><script type=\"text/javascript\" async=\"\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/ga.js.téléchargé"), "html", null, true);
        echo "\"></script><script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/001.js.téléchargé"), "html", null, true);
        echo "\"></script><script type=\"text/javascript\" async=\"\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/taas"), "html", null, true);
        echo "\"></script></head>
<body>

<div id=\"loading-area\" style=\"opacity: 0 ; display: none;\"></div>

<header class=\"header\">
    <div class=\"navbar-area\">
        <div class=\"container\">
            <div class=\"row align-items-center\">
                <div class=\"col-lg-12\">
                    <nav class=\"navbar navbar-expand-lg\">
                        <a class=\"navbar-brand logo\" href=\"https://157781.cc/index.html\">
                            <img class=\"logo1\" src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/logo.svg"), "html", null, true);
        echo "\" alt=\"Logo\">
                        </a>
                        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                            <span class=\"toggler-icon\"></span>
                            <span class=\"toggler-icon\"></span>
                            <span class=\"toggler-icon\"></span>
                        </button>
                        <div class=\"collapse navbar-collapse sub-menu-bar\" id=\"navbarSupportedContent\">
                            <ul id=\"nav\" class=\"navbar-nav ml-auto\">
                                <li class=\"nav-item\">
                                    <a class=\"active\" href=\"https://157781.cc/index.html\">Home</a>
                                    <ul class=\"sub-menu\">
                                        <li><a href=\"https://157781.cc/index.html\">Home 1</a></li>
                                        <li><a class=\"active\" href=\"https://157781.cc/index2.html\">Home 2</a></li>
                                        <li><a href=\"https://157781.cc/index3.html\">Home 3</a></li>
                                        <li><a href=\"https://157781.cc/index4.html\">Home 4</a></li>
                                    </ul>
                                </li>
                                <li class=\"nav-item\"><a href=\"https://157781.cc/index2.html#\">Pages</a>
                                    <ul class=\"sub-menu\">
                                        <li><a href=\"https://157781.cc/about-us.html\">About Us</a></li>
                                        <li><a href=\"https://157781.cc/job-list.html\">Job List</a></li>
                                        <li><a href=\"https://157781.cc/job-details.html\">Job Details</a></li>
                                        <li><a href=\"https://157781.cc/resume.html\">Resume Page</a></li>
                                        <li><a href=\"https://157781.cc/privacy-policy.html\">Privacy Policy</a></li>
                                        <li><a href=\"https://157781.cc/faq.html\">Faq</a></li>
                                        <li><a href=\"https://157781.cc/pricing.html\">Our Pricing</a></li>
                                        <li><a href=\"https://157781.cc/404.html\">404 Error</a></li>
                                        <li><a href=\"https://157781.cc/mail-success.html\">Mail Success</a></li>
                                    </ul>
                                </li>
                                <li class=\"nav-item\"><a href=\"https://157781.cc/index2.html#\">Candidates</a>
                                    <ul class=\"sub-menu\">
                                        <li><a href=\"https://157781.cc/browse-jobs.html\">Browse Jobs</a></li>
                                        <li><a href=\"https://157781.cc/browse-categories.html\">Browse Categories</a></li>
                                        <li><a href=\"https://157781.cc/add-resume.html\">Add Resume</a></li>
                                        <li><a href=\"https://157781.cc/job-alerts.html\">Job Alerts</a></li>
                                    </ul>
                                </li>
                                <li class=\"nav-item\"><a href=\"https://157781.cc/index2.html#\">Employers </a>
                                    <ul class=\"sub-menu\">
                                        <li><a href=\"https://157781.cc/post-job.html\">Add Job</a></li>
                                        <li><a href=\"https://157781.cc/manage-jobs.html\">Manage Jobs</a></li>
                                        <li><a href=\"https://157781.cc/manage-applications.html\">Manage Applications</a></li>
                                        <li><a href=\"https://157781.cc/manage-resumes.html\">Manage Resume</a></li>
                                        <li><a href=\"https://157781.cc/browse-resumes.html\">Browse Resumes</a></li>
                                    </ul>
                                </li>
                                <li class=\"nav-item\"><a href=\"https://157781.cc/index2.html#\">Blog</a>
                                    <ul class=\"sub-menu\">
                                        <li><a href=\"https://157781.cc/blog-grid-sidebar.html\">Blog Grid Sidebar</a></li>
                                        <li><a href=\"https://157781.cc/blog-single.html\">Blog Single</a></li>
                                        <li><a href=\"https://157781.cc/blog-single-sidebar.html\">Blog Single Sibebar</a></li>
                                    </ul>
                                </li>
                                <li class=\"nav-item\"><a href=\"https://157781.cc/contact.html\">Contact </a> </li>
                            </ul>
                        </div>

                        <div class=\"button\">
                            <a href=\"javascript:;\" data-toggle=\"modal\" data-target=\"#login\" class=\"login\"><i class=\"lni lni-lock-alt\"></i> Login</a>
                            <a href=\"javascript:;\" data-toggle=\"modal\" data-target=\"#signup\" class=\"btn\">Sign Up</a>
                        </div>
                    </nav>

                </div>
            </div>

        </div>

    </div>

</header>


<section class=\"hero-area\">
    <div class=\"hero-inner\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-6 co-12\">
                    <div class=\"inner-content\">
                        <div class=\"hero-text\">
                            <h1 class=\"wow fadeInUp\" data-wow-delay=\".3s\" style=\"visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;\">Find Your Career <br>to Make a Better Life</h1>
                            <p class=\"wow fadeInUp\" data-wow-delay=\".5s\" style=\"visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;\">
                                Creating a beautiful job website is not easy <br>
                                always. To make your life easier, we are<br>
                                introducing Jobcamp template.
                            </p>
                        </div>
                        <div class=\"job-search-wrap-two mt-50 wow fadeInUp\" data-wow-delay=\".7s\" style=\"visibility: visible; animation-delay: 0.7s; animation-name: fadeInUp;\">
                            <div class=\"job-search-form\">
                                <form action=\"#\">
                                    <div class=\"single-field-item keyword\">
                                        <label for=\"keyword\">What</label>
                                        <input id=\"keyword\" placeholder=\"What jobs you want?\" name=\"keyword\" type=\"text\">
                                    </div>

                                    <div class=\"single-field-item location\">
                                        <label for=\"location\">Where</label>
                                        <input id=\"location\" class=\"input-field input-field-location\" placeholder=\"Location\" name=\"location\" type=\"text\">
                                    </div>

                                    <div class=\"submit-btn\">
                                        <button class=\"btn\" type=\"submit\">Search</button>
                                    </div>
                                </form>
                            </div>
                            <div class=\"trending-keywords mt-30\">
                                <div class=\"keywords style-two\">
                                    <span class=\"title\">Popular Keywords:</span>
                                    <ul>
                                        <li><a href=\"#\">Administrative</a></li>
                                        <li><a href=\"#\">Android</a></li>
                                        <li><a href=\"#\">app</a></li>
                                        <li><a href=\"#\">ASP.NET</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-6 co-12\">
                    <div class=\"hero-video-head wow fadeInRight\" data-wow-delay=\".5s\" style=\"visibility: visible; animation-delay: 0.5s; animation-name: fadeInRight;\">
                        <div class=\"video-inner\">
                            <img src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/hero-image.png"), "html", null, true);
        echo "\" alt=\"#\">
                            <a href=\"javascript:;\" class=\"glightbox hero-video\"><i class=\"lni lni-play\"></i></a>

                            <div class=\"promo-video\">
                                <div class=\"waves-block\">
                                    <div class=\"waves wave-1\"></div>
                                    <div class=\"waves wave-2\"></div>
                                    <div class=\"waves wave-3\"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>














<section class=\"find-job section\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"section-title\">
                    <span class=\"wow fadeInDown\" data-wow-delay=\".2s\" style=\"visibility: visible; animation-delay: 0.2s; animation-name: fadeInDown;\">Hot Jobs</span>
                    <h2 class=\"wow fadeInUp\" data-wow-delay=\".4s\" style=\"visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;\">Browse Recent Jobs</h2>
                    <p class=\"wow fadeInUp\" data-wow-delay=\".6s\" style=\"visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;\">There are many variations of passages of Lorem
                        Ipsum available, but the majority have suffered alteration in some form.</p>
                </div>
            </div>
        </div>
        <div class=\"single-head\">
            <div class=\"row\">
                <div class=\"col-lg-6 col-12\">

                    <div class=\"single-job wow fadeInUp\" data-wow-delay=\".3s\" style=\"visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;\">
                        <div class=\"job-image\">
                            <img src=\"";
        // line 206
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img1.png"), "html", null, true);
        echo "\" >
                        </div>
                        <div class=\"job-content\">
                            <h4><a href=\"https://157781.cc/job-details.html\">Software Engineer</a></h4>
                            <p>We are looking for Enrollment Advisors who are looking to take 30-35 appointments per
                                week. All leads are pre-scheduled. </p>
                            <ul>
                                <li><i class=\"lni lni-website\"></i><a href=\"https://157781.cc/index2.html#\"> winbrans.com</a></li>
                                <li><i class=\"lni lni-dollar\"></i> \$20k - \$25k</li>
                                <li><i class=\"lni lni-map-marker\"></i> New York</li>
                            </ul>
                        </div>
                        <div class=\"job-button\">
                            <ul>
                                <li><a href=\"https://157781.cc/job-details.html\">Apply</a></li>
                                <li><span>full time</span></li>
                            </ul>
                        </div>
                    </div>


                    <div class=\"single-job wow fadeInUp\" data-wow-delay=\".3s\" style=\"visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;\">
                        <div class=\"job-image\">
                            <img src=\"";
        // line 229
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img2.png"), "html", null, true);
        echo "\" >
                        </div>
                        <div class=\"job-content\">
                            <h4><a href=\"https://157781.cc/job-details.html\">Graphics Design</a></h4>
                            <p>We are looking for Enrollment Advisors who are looking to take 30-35 appointments per
                                week. All leads are pre-scheduled. </p>
                            <ul>
                                <li><i class=\"lni lni-website\"></i><a href=\"https://157781.cc/index2.html#\"> designhub.com</a></li>
                                <li><i class=\"lni lni-dollar\"></i> \$20k - \$25k</li>
                                <li><i class=\"lni lni-map-marker\"></i> Washington, USA</li>
                            </ul>
                        </div>
                        <div class=\"job-button\">
                            <ul>
                                <li><a href=\"https://157781.cc/job-details.html\">Apply</a></li>
                                <li><span>Intern</span></li>
                            </ul>
                        </div>
                    </div>


                    <div class=\"single-job wow fadeInUp\" data-wow-delay=\".3s\" style=\"visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;\">
                        <div class=\"job-image\">
                            <img src=\"";
        // line 252
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img3.png"), "html", null, true);
        echo "\" >
                        </div>
                        <div class=\"job-content\">
                            <h4><a href=\"https://157781.cc/job-details.html\">Ui/Ux Design</a></h4>
                            <p>We are looking for Enrollment Advisors who are looking to take 30-35 appointments per
                                week. All leads are pre-scheduled. </p>
                            <ul>
                                <li><i class=\"lni lni-website\"></i><a href=\"https://157781.cc/index2.html#\"> uddesign.com</a></li>
                                <li><i class=\"lni lni-dollar\"></i> \$20k - \$25k</li>
                                <li><i class=\"lni lni-map-marker\"></i> Cupertino, USA</li>
                            </ul>
                        </div>
                        <div class=\"job-button\">
                            <ul>
                                <li><a href=\"https://157781.cc/job-details.html\">Apply</a></li>
                                <li><span>Part Time</span></li>
                            </ul>
                        </div>
                    </div>


                    <div class=\"single-job wow fadeInUp\" data-wow-delay=\".3s\" style=\"visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;\">
                        <div class=\"job-image\">
                            <img src=\"";
        // line 275
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img4.png"), "html", null, true);
        echo "\" >
                        </div>
                        <div class=\"job-content\">
                            <h4><a href=\"https://157781.cc/job-details.html\">Web Developer</a></h4>
                            <p>We are looking for Enrollment Advisors who are looking to take 30-35 appointments per
                                week. All leads are pre-scheduled. </p>
                            <ul>
                                <li><i class=\"lni lni-website\"></i><a href=\"https://157781.cc/index2.html#\"> webinner.com</a></li>
                                <li><i class=\"lni lni-dollar\"></i> \$20k - \$25k</li>
                                <li><i class=\"lni lni-map-marker\"></i> Delaware, USA</li>
                            </ul>
                        </div>
                        <div class=\"job-button\">
                            <ul>
                                <li><a href=\"https://157781.cc/job-details.html\">Apply</a></li>
                                <li><span>Intern</span></li>
                            </ul>
                        </div>
                    </div>

                </div>
                <div class=\"col-lg-6 col-12\">

                    <div class=\"single-job wow fadeInUp\" data-wow-delay=\".5s\" style=\"visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;\">
                        <div class=\"job-image\">
                            <img src=\"";
        // line 300
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img7.png"), "html", null, true);
        echo "\" >
                        </div>
                        <div class=\"job-content\">
                            <h4><a href=\"https://157781.cc/job-details.html\">Digital Marketer</a></h4>
                            <p>We are looking for Enrollment Advisors who are looking to take 30-35 appointments per
                                week. All leads are pre-scheduled. </p>
                            <ul>
                                <li><i class=\"lni lni-website\"></i><a href=\"https://157781.cc/index2.html#\"> marketers.com</a></li>
                                <li><i class=\"lni lni-dollar\"></i> \$20k - \$25k</li>
                                <li><i class=\"lni lni-map-marker\"></i> New York, USA</li>
                            </ul>
                        </div>
                        <div class=\"job-button\">
                            <ul>
                                <li><a href=\"https://157781.cc/job-details.html\">Apply</a></li>
                                <li><span>Part Time</span></li>
                            </ul>
                        </div>
                    </div>


                    <div class=\"single-job wow fadeInUp\" data-wow-delay=\".5s\" style=\"visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;\">
                        <div class=\"job-image\">
                            <img src=\"";
        // line 323
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img5.png"), "html", null, true);
        echo "\" >
                        </div>
                        <div class=\"job-content\">
                            <h4><a href=\"https://157781.cc/job-details.html\">Sales Manager</a></h4>
                            <p>We are looking for Enrollment Advisors who are looking to take 30-35 appointments per
                                week. All leads are pre-scheduled. </p>
                            <ul>
                                <li><i class=\"lni lni-website\"></i><a href=\"https://157781.cc/index2.html#\"> winbrans.com</a></li>
                                <li><i class=\"lni lni-dollar\"></i> \$20k - \$25k</li>
                                <li><i class=\"lni lni-map-marker\"></i> Delaware, USA</li>
                            </ul>
                        </div>
                        <div class=\"job-button\">
                            <ul>
                                <li><a href=\"https://157781.cc/job-details.html\">Apply</a></li>
                                <li><span>full time</span></li>
                            </ul>
                        </div>
                    </div>


                    <div class=\"single-job wow fadeInUp\" data-wow-delay=\".5s\" style=\"visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;\">
                        <div class=\"job-image\">
                            <img src=\"";
        // line 346
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img6.png"), "html", null, true);
        echo "\" >
                        </div>
                        <div class=\"job-content\">
                            <h4><a href=\"https://157781.cc/job-details.html\">Product Designer</a></h4>
                            <p>We are looking for Enrollment Advisors who are looking to take 30-35 appointments per
                                week. All leads are pre-scheduled. </p>
                            <ul>
                                <li><i class=\"lni lni-website\"></i><a href=\"https://157781.cc/index2.html\"> winbrans.com</a></li>
                                <li><i class=\"lni lni-dollar\"></i> \$20k - \$25k</li>
                                <li><i class=\"lni lni-map-marker\"></i> New York, USA</li>
                            </ul>
                        </div>
                        <div class=\"job-button\">
                            <ul>
                                <li><a href=\"https://157781.cc/job-details.html\">Apply</a></li>
                                <li><span>full time</span></li>
                            </ul>
                        </div>
                    </div>


                    <div class=\"single-job wow fadeInUp\" data-wow-delay=\".5s\" style=\"visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;\">
                        <div class=\"job-image\">
                            <img src=\"";
        // line 369
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img8.png"), "html", null, true);
        echo "\" >
                        </div>
                        <div class=\"job-content\">
                            <h4><a href=\"https://157781.cc/job-details.html\">Android Developer</a></h4>
                            <p>We are looking for Enrollment Advisors who are looking to take 30-35 appointments per
                                week. All leads are pre-scheduled. </p>
                            <ul>
                                <li><i class=\"lni lni-website\"></i><a href=\"https://157781.cc/index2.html#\"> androidplex.com</a></li>
                                <li><i class=\"lni lni-dollar\"></i> \$20k - \$25k</li>
                                <li><i class=\"lni lni-map-marker\"></i> Cupertino, USA</li>
                            </ul>
                        </div>
                        <div class=\"job-button\">
                            <ul>
                                <li><a href=\"https://157781.cc/job-details.html\">Apply</a></li>
                                <li><span>Part Time</span></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>

            <div class=\"row\">
                <div class=\"col-12\">
                    <div class=\"pagination center wow fadeInUp\" data-wow-delay=\".3s\" style=\"visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;\">
                        <ul class=\"pagination-list\">
                            <li><a href=\"https://157781.cc/index2.html#\"><i class=\"lni lni-arrow-left\"></i></a></li>
                            <li class=\"active\"><a href=\"https://157781.cc/index2.html#\">1</a></li>
                            <li><a href=\"https://157781.cc/index2.html#\">2</a></li>
                            <li><a href=\"https://157781.cc/index2.html#\">3</a></li>
                            <li><a href=\"https://157781.cc/index2.html#\">4</a></li>
                            <li><a href=\"https://157781.cc/index2.html#\"><i class=\"lni lni-arrow-right\"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>





<section class=\" testimonials\">
    <img class=\"patern1 wow fadeInRight\" data-wow-delay=\".3s\" src=\"";
        // line 416
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/patern1.png"), "html", null, true);
        echo "\"  style=\"visibility: visible; animation-delay: 0.3s; animation-name: fadeInRight;\">
    <img class=\"patern2 wow fadeInLeft\" data-wow-delay=\".5s\" src=\"";
        // line 417
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/patern1.png"), "html", null, true);
        echo "\"  style=\"visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-6 col-12\">
                <div class=\"section-title align-left wow fadeInLeft\" data-wow-delay=\".3s\" style=\"visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;\">
                    <span>What saye's Our Clients</span>
                    <h2>Our Testimonials</h2>
                </div>
                <div class=\"testimonial-inner-head wow fadeInLeft\" data-wow-delay=\".3s\" style=\"visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;\">
                    <div class=\" testimonial-inner\">
                        <div class=\"tns-outer\" id=\"tns2-ow\"><div class=\"tns-controls\" aria-label=\"Carousel Navigation\" tabindex=\"0\"><button type=\"button\" data-controls=\"prev\" tabindex=\"-1\" aria-controls=\"tns2\"><i class=\"lni lni-arrow-left\"></i></button><button type=\"button\" data-controls=\"next\" tabindex=\"-1\" aria-controls=\"tns2\"><i class=\"lni lni-arrow-right\"></i></button></div><div class=\"tns-liveregion tns-visually-hidden\" aria-live=\"polite\" aria-atomic=\"true\">slide <span class=\"current\">3</span>  of 4</div><div id=\"tns2-mw\" class=\"tns-ovh\"><div class=\"tns-inner\" id=\"tns2-iw\"><div class=\"testimonial-slider  tns-slider tns-carousel tns-subpixel tns-calc tns-horizontal\" id=\"tns2\" style=\"transform: translate3d(-33.3333%, 0px, 0px);\"><div class=\"single-testimonial tns-item tns-slide-cloned\" aria-hidden=\"true\" tabindex=\"-1\">
                                            <div class=\"quote\">
                                                <i class=\"lni lni-quotation\"></i>
                                            </div>
                                            <p>\" I just brought it and i love it. Lorem Ipsum is simply dummy text of the and
                                                typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                                ever
                                                since the 1500s.\" </p>
                                            <div class=\"bottom\">
                                                <div class=\"clien-image\">
                                                    <img src=\"";
        // line 437
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/testi4.jpg"), "html", null, true);
        echo "\" >
                                                </div>
                                                <h4 class=\"name\">Goro Chala <span>CEO - Dream App</span></h4>
                                            </div>
                                        </div>

                                        <div class=\"single-testimonial tns-item\" id=\"tns2-item0\" aria-hidden=\"true\" tabindex=\"-1\">
                                            <div class=\"quote\">
                                                <i class=\"lni lni-quotation\"></i>
                                            </div>
                                            <p>\" I just brought it and i love it. Lorem Ipsum is simply dummy text of the and
                                                typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                                ever
                                                since the 1500s.\" </p>
                                            <div class=\"bottom\">
                                                <div class=\"clien-image\">
                                                    <img src=\"";
        // line 453
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/testi1.jpg"), "html", null, true);
        echo "\" >
                                                </div>
                                                <h4 class=\"name\">Musharof Chowdhury <span>CEO - Graygrids</span></h4>
                                            </div>
                                        </div>


                                        <div class=\"single-testimonial tns-item tns-slide-active\" id=\"tns2-item1\">
                                            <div class=\"quote\">
                                                <i class=\"lni lni-quotation\"></i>
                                            </div>
                                            <p>\" I just brought it and i love it. Lorem Ipsum is simply dummy text of the and
                                                typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                                ever
                                                since the 1500s.\" </p>
                                            <div class=\"bottom\">
                                                <div class=\"clien-image\">
                                                    <img src=\"";
        // line 470
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/testi2.jpg"), "html", null, true);
        echo "\" >
                                                </div>
                                                <h4 class=\"name\">Naimur Rahman <span>CEO - Wpthemes Grid</span></h4>
                                            </div>
                                        </div>


                                        <div class=\"single-testimonial tns-item\" id=\"tns2-item2\" aria-hidden=\"true\" tabindex=\"-1\">
                                            <div class=\"quote\">
                                                <i class=\"lni lni-quotation\"></i>
                                            </div>
                                            <p>\" I just brought it and i love it. Lorem Ipsum is simply dummy text of the and
                                                typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                                ever
                                                since the 1500s.\" </p>
                                            <div class=\"bottom\">
                                                <div class=\"clien-image\">
                                                    <img src=\"";
        // line 487
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/testi3.jpg"), "html", null, true);
        echo "\" >
                                                </div>
                                                <h4 class=\"name\">Karmo kerin<span>CEO - Tredex</span></h4>
                                            </div>
                                        </div>


                                        <div class=\"single-testimonial tns-item\" id=\"tns2-item3\" aria-hidden=\"true\" tabindex=\"-1\">
                                            <div class=\"quote\">
                                                <i class=\"lni lni-quotation\"></i>
                                            </div>
                                            <p>\" I just brought it and i love it. Lorem Ipsum is simply dummy text of the and
                                                typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                                ever
                                                since the 1500s.\" </p>
                                            <div class=\"bottom\">
                                                <div class=\"clien-image\">
                                                    <img src=\"";
        // line 504
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/testi4.jpg"), "html", null, true);
        echo "\" >
                                                </div>
                                                <h4 class=\"name\">Goro Chala <span>CEO - Dream App</span></h4>
                                            </div>
                                        </div>

                                        <div class=\"single-testimonial tns-item tns-slide-cloned\" aria-hidden=\"true\" tabindex=\"-1\">
                                            <div class=\"quote\">
                                                <i class=\"lni lni-quotation\"></i>
                                            </div>
                                            <p>\" I just brought it and i love it. Lorem Ipsum is simply dummy text of the and
                                                typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                                ever
                                                since the 1500s.\" </p>
                                            <div class=\"bottom\">
                                                <div class=\"clien-image\">
                                                    <img src=\"";
        // line 520
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/testi1.jpg"), "html", null, true);
        echo "\" >
                                                </div>
                                                <h4 class=\"name\">Musharof Chowdhury <span>CEO - Graygrids</span></h4>
                                            </div>
                                        </div></div></div></div></div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-6 col-12\">
                <div class=\"testimonial-right wow fadeInRight\" data-wow-delay=\".5s\" style=\"visibility: visible; animation-delay: 0.5s; animation-name: fadeInRight;\">
                    <img src=\"";
        // line 530
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/testimonial-right.png"), "html", null, true);
        echo "\" >
                </div>
            </div>
        </div>
    </div>
</section>





<div class=\"latest-news-area section\">

</div>





<div class=\"modal fade form-modal\" id=\"login\" tabindex=\"-1\" aria-hidden=\"true\">
    <div class=\"modal-dialog max-width-px-840 position-relative\">
        <button type=\"button\" class=\"circle-32 btn-reset bg-white pos-abs-tr mt-md-n6 mr-lg-n6 focus-reset z-index-supper\" data-dismiss=\"modal\"><i class=\"lni lni-close\"></i></button>
        <div class=\"login-modal-main\">
            <div class=\"row no-gutters\">
                <div class=\"col-12\">
                    <div class=\"row\">
                        <div class=\"heading\">
                            <h3>Login From Here</h3>
                            <p>Log in to continue your account <br> and explore new jobs.</p>
                        </div>
                        <div class=\"social-login\">
                            <ul>
                                <li><a class=\"linkedin\" href=\"https://157781.cc/index2.html#\"><i class=\"lni lni-linkedin-original\"></i> Log in
                                        with LinkedIn</a></li>
                                <li><a class=\"google\" href=\"https://157781.cc/index2.html#\"><i class=\"lni lni-google\"></i> Log in with
                                        Google</a></li>
                                <li><a class=\"facebook\" href=\"https://157781.cc/index2.html#\"><i class=\"lni lni-facebook-original\"></i> Log in
                                        with Facebook</a></li>
                            </ul>
                        </div>
                        <div class=\"or-devider\">
                            <span>Or</span>
                        </div>
                        <form action=\"https://157781.cc/\">
                            <div class=\"form-group\">
                                <label for=\"email\" class=\"label\">E-mail</label>
                                <input type=\"email\" class=\"form-control\" placeholder=\"example@gmail.com\" id=\"email\">
                            </div>
                            <div class=\"form-group\">
                                <label for=\"password\" class=\"label\">Password</label>
                                <div class=\"position-relative\">
                                    <input type=\"password\" class=\"form-control\" id=\"password\" placeholder=\"Enter password\">
                                </div>
                            </div>
                            <div class=\"form-group d-flex flex-wrap justify-content-between\">

                                <div class=\"form-check\">
                                    <input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"flexCheckDefault\">
                                    <label class=\"form-check-label\" for=\"flexCheckDefault\">Remember password</label>
                                </div>
                                <a href=\"https://157781.cc/index2.html\" class=\"font-size-3 text-dodger line-height-reset\">Forget Password</a>
                            </div>
                            <div class=\"form-group mb-8 button\">
                                <button class=\"btn \">Log in
                                </button>
                            </div>
                            <p class=\"text-center create-new-account\">Don’t have an account? <a href=\"https://157781.cc/index2.html#\">Create a free account</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class=\"modal fade form-modal\" id=\"signup\" tabindex=\"-1\" aria-hidden=\"true\">
    <div class=\"modal-dialog max-width-px-840 position-relative\">
        <button type=\"button\" class=\"circle-32 btn-reset bg-white pos-abs-tr mt-md-n6 mr-lg-n6 focus-reset z-index-supper\" data-dismiss=\"modal\"><i class=\"lni lni-close\"></i></button>
        <div class=\"login-modal-main\">
            <div class=\"row no-gutters\">
                <div class=\"col-12\">
                    <div class=\"row\">
                        <div class=\"heading\">
                            <h3>Create a free Account <br> Today</h3>
                            <p>Create your account to continue <br> and explore new jobs.</p>
                        </div>
                        <div class=\"social-login\">
                            <ul>
                                <li><a class=\"linkedin\" href=\"https://157781.cc/index2.html#\"><i class=\"lni lni-linkedin-original\"></i> Import from LinkedIn</a></li>
                                <li><a class=\"google\" href=\"https://157781.cc/index2.html#\"><i class=\"lni lni-google\"></i> Import from
                                        Google</a></li>
                                <li><a class=\"facebook\" href=\"https://157781.cc/index2.html#\"><i class=\"lni lni-facebook-original\"></i> Import from Facebook</a></li>
                            </ul>
                        </div>
                        <div class=\"or-devider\">
                            <span>Or</span>
                        </div>
                        <form action=\"https://157781.cc/\">
                            <div class=\"form-group\">
                                <label for=\"email\" class=\"label\">E-mail</label>
                                <input type=\"email\" class=\"form-control\" placeholder=\"example@gmail.com\">
                            </div>
                            <div class=\"form-group\">
                                <label for=\"password\" class=\"label\">Password</label>
                                <div class=\"position-relative\">
                                    <input type=\"password\" class=\"form-control\" placeholder=\"Enter password\">
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label for=\"password\" class=\"label\">Confirm Password</label>
                                <div class=\"position-relative\">
                                    <input type=\"password\" class=\"form-control\" placeholder=\"Enter password\">
                                </div>
                            </div>
                            <div class=\"form-group d-flex flex-wrap justify-content-between\">

                                <div class=\"form-check\">
                                    <input class=\"form-check-input\" type=\"checkbox\" value=\"\">
                                    <label class=\"form-check-label\" for=\"flexCheckDefault\">Agree to the <a href=\"https://157781.cc/index2.html#\">Terms &amp; Conditions</a></label>
                                </div>
                            </div>
                            <div class=\"form-group mb-8 button\">
                                <button class=\"btn \">Sign Up
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<footer class=\"footer\">
    <div class=\"footer-top\">
        <div class=\"container\">
            <div class=\"row align-items-center justify-content-center\">
                <div class=\"col-lg-6 col-12\">
                    <div class=\"download-text\">
                        <h3>Download Our Best Apps</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do<br> eiusmod tempor
                            incididunt ut labore et dolore</p>
                    </div>
                </div>
                <div class=\"col-lg-6 col-12\">
                    <div class=\"download-button\">
                        <div class=\"button\">
                            <a class=\"btn\" href=\"https://157781.cc/index2.html#\"><i class=\"lni lni-apple\"></i> App Store</a>
                            <a class=\"btn\" href=\"https://157781.cc/index2.html#\"><i class=\"lni lni-play-store\"></i> Google Play</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"footer-middle\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-4 col-md-6 col-12\">

                    <div class=\"f-about single-footer\">
                        <div class=\"logo\">
                            <a href=\"https://157781.cc/index.html\"><img src=\"";
        // line 695
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/logo.svg"), "html", null, true);
        echo "\" alt=\"Logo\"></a>
                        </div>
                        <p>Start building your creative website with our awesome template Massive.</p>
                        <ul class=\"contact-address\">
                            <li><span>Address:</span> 555 Wall Street, USA, NY</li>
                            <li><span>Email:</span> example@apus.com</li>
                            <li><span>Call:</span> 555-555-1234</li>
                        </ul>
                        <div class=\"footer-social\">
                            <ul>
                                <li><a href=\"https://157781.cc/index2.html#\"><i class=\"lni lni-facebook-original\"></i></a></li>
                                <li><a href=\"https://157781.cc/index2.html#\"><i class=\"lni lni-twitter-original\"></i></a></li>
                                <li><a href=\"https://157781.cc/index2.html#\"><i class=\"lni lni-linkedin-original\"></i></a></li>
                                <li><a href=\"https://157781.cc/index2.html#\"><i class=\"lni lni-pinterest\"></i></a></li>
                            </ul>
                        </div>
                    </div>

                </div>
                <div class=\"col-lg-8 col-12\">
                    <div class=\"row\">
                        <div class=\"col-lg-4 col-md-6 col-12\">

                            <div class=\"single-footer f-link\">
                                <h3>For Candidates</h3>
                                <ul>
                                    <li><a href=\"https://157781.cc/index2.html#\">User Dashboard</a></li>
                                    <li><a href=\"https://157781.cc/index2.html#\">CV Packages</a></li>
                                    <li><a href=\"https://157781.cc/index2.html#\">Jobs Featured</a></li>
                                    <li><a href=\"https://157781.cc/index2.html#\">Jobs Urgent</a></li>
                                    <li><a href=\"https://157781.cc/index2.html#\">Candidate List</a></li>
                                    <li><a href=\"https://157781.cc/index2.html#\">Candidates Grid</a></li>
                                </ul>
                            </div>

                        </div>
                        <div class=\"col-lg-4 col-md-6 col-12\">

                            <div class=\"single-footer f-link\">
                                <h3>For Employers</h3>
                                <ul>
                                    <li><a href=\"https://157781.cc/index2.html#\">Post New</a></li>
                                    <li><a href=\"https://157781.cc/index2.html#\">Employer List</a></li>
                                    <li><a href=\"https://157781.cc/index2.html#\">Employers Grid</a></li>
                                    <li><a href=\"https://157781.cc/index2.html#\">Job Packages</a></li>
                                    <li><a href=\"https://157781.cc/index2.html#\">Jobs Listing</a></li>
                                    <li><a href=\"https://157781.cc/index2.html#\">Jobs Featured</a></li>
                                </ul>
                            </div>

                        </div>
                        <div class=\"col-lg-4 col-md-6 col-12\">

                            <div class=\"single-footer newsletter\">
                                <h3>Join Our Newsletter</h3>
                                <p>Subscribe to get the latest jobs posted, candidates...</p>
                                <form action=\"https://157781.cc/mail/mail.php\" method=\"get\" target=\"_blank\" class=\"newsletter-inner\">
                                    <input name=\"EMAIL\" placeholder=\"Your email address\" class=\"common-input\" onfocus=\"this.placeholder = &#39;&#39;\" onblur=\"this.placeholder = &#39;Your email address&#39;\" required=\"\" type=\"email\">
                                    <div class=\"button\">
                                        <button class=\"btn\">Subscribe Now! <span class=\"dir-part\"></span></button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class=\"footer-bottom\">
        <div class=\"container\">
            <div class=\"inner\">
                <div class=\"row\">
                    <div class=\"col-lg-6 col-md-6 col-12\">
                        <div class=\"left\">
                            <p>Copyright © 2022.Company name All rights reserved.</p>
                        </div>
                    </div>
                    <div class=\"col-lg-6 col-md-6 col-12\">
                        <div class=\"right\">
                            <ul>
                                <li><a href=\"https://157781.cc/index2.html#\">Terms of use</a></li>
                                <li><a href=\"https://157781.cc/index2.html#\"> Privacy Policy</a></li>
                                <li><a href=\"https://157781.cc/index2.html#\">Faq</a></li>
                                <li><a href=\"https://157781.cc/index2.html#\">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</footer>


<a href=\"https://157781.cc/index2.html#\" class=\"scroll-top btn-hover\" style=\"display: none;\">
    <i class=\"lni lni-chevron-up\"></i>
</a>

<script src=\"";
        // line 798
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/bootstrap.min.js.téléchargé"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 799
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/wow.min.js.téléchargé"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 800
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/tiny-slider.js.téléchargé"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 801
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/glightbox.min.js.téléchargé"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 802
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/main.js.téléchargé"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">
    //====== Clients Logo Slider
    tns({
        container: '.client-logo-carousel',
        slideBy: 'page',
        autoplay: true,
        autoplayButtonOutput: false,
        mouseDrag: true,
        gutter: 15,
        nav: false,
        controls: false,
        responsive: {
            0: {
                items: 1,
            },
            540: {
                items: 2,
            },
            768: {
                items: 3,
            },
            992: {
                items: 4,
            },
            1170: {
                items: 6,
            }
        }
    });
    //========= testimonial
    tns({
        container: '.testimonial-slider',
        items: 1,
        slideBy: 'page',
        autoplayButtonOutput: false,
        autoplay: true,
        mouseDrag: true,
        gutter: 0,
        nav: false,
        controls: true,
        controlsText: ['<i class=\"lni lni-arrow-left\"></i>', '<i class=\"lni lni-arrow-right\"></i>'],
        responsive: {
            0: {
                items: 1,
            },
            540: {
                items: 1,
            },
            768: {
                items: 1,
            },
            992: {
                items: 1,
            },
            1170: {
                items: 1,
            }
        }
    });

    //======== Home Slider
    var slider = new tns({
        container: '.home-slider',
        slideBy: 'page',
        autoplay: true,
        autoplayButtonOutput: false,
        mouseDrag: true,
        gutter: 0,
        items: 1,
        nav: false,
        controls: true,
        controlsText: [
            '<i class=\"lni lni-arrow-left prev\"></i>',
            '<i class=\"lni lni-arrow-right next\"></i>'
        ],
        responsive: {
            1200: {
                items: 1,
            },
            992: {
                items: 1,
            },
            0: {
                items: 1,
            }

        }
    });
</script>

<iframe src=\"";
        // line 893
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/saved_resource.html"), "html", null, true);
        echo "\" style=\"display: none;\">

</iframe>
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "utilisateur/test.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1040 => 893,  946 => 802,  942 => 801,  938 => 800,  934 => 799,  930 => 798,  824 => 695,  656 => 530,  643 => 520,  624 => 504,  604 => 487,  584 => 470,  564 => 453,  545 => 437,  522 => 417,  518 => 416,  468 => 369,  442 => 346,  416 => 323,  390 => 300,  362 => 275,  336 => 252,  310 => 229,  284 => 206,  232 => 157,  105 => 33,  86 => 21,  79 => 17,  75 => 16,  71 => 15,  67 => 14,  63 => 13,  59 => 12,  54 => 10,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html class=\"no-js\" lang=\"zxx\"><head><meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">

    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    <title>JobGrids - Job Portal HTML Template.</title>
    <meta name=\"description\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">



    <link href=\"{{asset('assets/css2.css')}}\" rel=\"stylesheet\">

    <link rel=\"stylesheet\" href=\"{{asset('assets/bootstrap.min.css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('assets/LineIcons.2.0.css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('assets/animate.css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('assets/tiny-slider.css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('assets/glightbox.min.css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('assets/main.css')}}\">
    <style></style>
    <style></style>
    <style></style>
    <style type=\"text/css\"> @font-face { font-family: Roboto; src: url(\"chrome-extension://mcgbeeipkmelnpldkobichboakdfaeon/css/Roboto-Regular.ttf\"); }</style><script type=\"text/javascript\" async=\"\" src=\"{{asset('assets/ga.js.téléchargé')}}\"></script><script type=\"text/javascript\" src=\"{{asset('assets/001.js.téléchargé')}}\"></script><script type=\"text/javascript\" async=\"\" src=\"{{asset('assets/taas')}}\"></script></head>
<body>

<div id=\"loading-area\" style=\"opacity: 0 ; display: none;\"></div>

<header class=\"header\">
    <div class=\"navbar-area\">
        <div class=\"container\">
            <div class=\"row align-items-center\">
                <div class=\"col-lg-12\">
                    <nav class=\"navbar navbar-expand-lg\">
                        <a class=\"navbar-brand logo\" href=\"https://157781.cc/index.html\">
                            <img class=\"logo1\" src=\"{{asset('assets/logo.svg')}}\" alt=\"Logo\">
                        </a>
                        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                            <span class=\"toggler-icon\"></span>
                            <span class=\"toggler-icon\"></span>
                            <span class=\"toggler-icon\"></span>
                        </button>
                        <div class=\"collapse navbar-collapse sub-menu-bar\" id=\"navbarSupportedContent\">
                            <ul id=\"nav\" class=\"navbar-nav ml-auto\">
                                <li class=\"nav-item\">
                                    <a class=\"active\" href=\"https://157781.cc/index.html\">Home</a>
                                    <ul class=\"sub-menu\">
                                        <li><a href=\"https://157781.cc/index.html\">Home 1</a></li>
                                        <li><a class=\"active\" href=\"https://157781.cc/index2.html\">Home 2</a></li>
                                        <li><a href=\"https://157781.cc/index3.html\">Home 3</a></li>
                                        <li><a href=\"https://157781.cc/index4.html\">Home 4</a></li>
                                    </ul>
                                </li>
                                <li class=\"nav-item\"><a href=\"https://157781.cc/index2.html#\">Pages</a>
                                    <ul class=\"sub-menu\">
                                        <li><a href=\"https://157781.cc/about-us.html\">About Us</a></li>
                                        <li><a href=\"https://157781.cc/job-list.html\">Job List</a></li>
                                        <li><a href=\"https://157781.cc/job-details.html\">Job Details</a></li>
                                        <li><a href=\"https://157781.cc/resume.html\">Resume Page</a></li>
                                        <li><a href=\"https://157781.cc/privacy-policy.html\">Privacy Policy</a></li>
                                        <li><a href=\"https://157781.cc/faq.html\">Faq</a></li>
                                        <li><a href=\"https://157781.cc/pricing.html\">Our Pricing</a></li>
                                        <li><a href=\"https://157781.cc/404.html\">404 Error</a></li>
                                        <li><a href=\"https://157781.cc/mail-success.html\">Mail Success</a></li>
                                    </ul>
                                </li>
                                <li class=\"nav-item\"><a href=\"https://157781.cc/index2.html#\">Candidates</a>
                                    <ul class=\"sub-menu\">
                                        <li><a href=\"https://157781.cc/browse-jobs.html\">Browse Jobs</a></li>
                                        <li><a href=\"https://157781.cc/browse-categories.html\">Browse Categories</a></li>
                                        <li><a href=\"https://157781.cc/add-resume.html\">Add Resume</a></li>
                                        <li><a href=\"https://157781.cc/job-alerts.html\">Job Alerts</a></li>
                                    </ul>
                                </li>
                                <li class=\"nav-item\"><a href=\"https://157781.cc/index2.html#\">Employers </a>
                                    <ul class=\"sub-menu\">
                                        <li><a href=\"https://157781.cc/post-job.html\">Add Job</a></li>
                                        <li><a href=\"https://157781.cc/manage-jobs.html\">Manage Jobs</a></li>
                                        <li><a href=\"https://157781.cc/manage-applications.html\">Manage Applications</a></li>
                                        <li><a href=\"https://157781.cc/manage-resumes.html\">Manage Resume</a></li>
                                        <li><a href=\"https://157781.cc/browse-resumes.html\">Browse Resumes</a></li>
                                    </ul>
                                </li>
                                <li class=\"nav-item\"><a href=\"https://157781.cc/index2.html#\">Blog</a>
                                    <ul class=\"sub-menu\">
                                        <li><a href=\"https://157781.cc/blog-grid-sidebar.html\">Blog Grid Sidebar</a></li>
                                        <li><a href=\"https://157781.cc/blog-single.html\">Blog Single</a></li>
                                        <li><a href=\"https://157781.cc/blog-single-sidebar.html\">Blog Single Sibebar</a></li>
                                    </ul>
                                </li>
                                <li class=\"nav-item\"><a href=\"https://157781.cc/contact.html\">Contact </a> </li>
                            </ul>
                        </div>

                        <div class=\"button\">
                            <a href=\"javascript:;\" data-toggle=\"modal\" data-target=\"#login\" class=\"login\"><i class=\"lni lni-lock-alt\"></i> Login</a>
                            <a href=\"javascript:;\" data-toggle=\"modal\" data-target=\"#signup\" class=\"btn\">Sign Up</a>
                        </div>
                    </nav>

                </div>
            </div>

        </div>

    </div>

</header>


<section class=\"hero-area\">
    <div class=\"hero-inner\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-6 co-12\">
                    <div class=\"inner-content\">
                        <div class=\"hero-text\">
                            <h1 class=\"wow fadeInUp\" data-wow-delay=\".3s\" style=\"visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;\">Find Your Career <br>to Make a Better Life</h1>
                            <p class=\"wow fadeInUp\" data-wow-delay=\".5s\" style=\"visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;\">
                                Creating a beautiful job website is not easy <br>
                                always. To make your life easier, we are<br>
                                introducing Jobcamp template.
                            </p>
                        </div>
                        <div class=\"job-search-wrap-two mt-50 wow fadeInUp\" data-wow-delay=\".7s\" style=\"visibility: visible; animation-delay: 0.7s; animation-name: fadeInUp;\">
                            <div class=\"job-search-form\">
                                <form action=\"#\">
                                    <div class=\"single-field-item keyword\">
                                        <label for=\"keyword\">What</label>
                                        <input id=\"keyword\" placeholder=\"What jobs you want?\" name=\"keyword\" type=\"text\">
                                    </div>

                                    <div class=\"single-field-item location\">
                                        <label for=\"location\">Where</label>
                                        <input id=\"location\" class=\"input-field input-field-location\" placeholder=\"Location\" name=\"location\" type=\"text\">
                                    </div>

                                    <div class=\"submit-btn\">
                                        <button class=\"btn\" type=\"submit\">Search</button>
                                    </div>
                                </form>
                            </div>
                            <div class=\"trending-keywords mt-30\">
                                <div class=\"keywords style-two\">
                                    <span class=\"title\">Popular Keywords:</span>
                                    <ul>
                                        <li><a href=\"#\">Administrative</a></li>
                                        <li><a href=\"#\">Android</a></li>
                                        <li><a href=\"#\">app</a></li>
                                        <li><a href=\"#\">ASP.NET</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-6 co-12\">
                    <div class=\"hero-video-head wow fadeInRight\" data-wow-delay=\".5s\" style=\"visibility: visible; animation-delay: 0.5s; animation-name: fadeInRight;\">
                        <div class=\"video-inner\">
                            <img src=\"{{asset('assets/hero-image.png')}}\" alt=\"#\">
                            <a href=\"javascript:;\" class=\"glightbox hero-video\"><i class=\"lni lni-play\"></i></a>

                            <div class=\"promo-video\">
                                <div class=\"waves-block\">
                                    <div class=\"waves wave-1\"></div>
                                    <div class=\"waves wave-2\"></div>
                                    <div class=\"waves wave-3\"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>














<section class=\"find-job section\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"section-title\">
                    <span class=\"wow fadeInDown\" data-wow-delay=\".2s\" style=\"visibility: visible; animation-delay: 0.2s; animation-name: fadeInDown;\">Hot Jobs</span>
                    <h2 class=\"wow fadeInUp\" data-wow-delay=\".4s\" style=\"visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;\">Browse Recent Jobs</h2>
                    <p class=\"wow fadeInUp\" data-wow-delay=\".6s\" style=\"visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;\">There are many variations of passages of Lorem
                        Ipsum available, but the majority have suffered alteration in some form.</p>
                </div>
            </div>
        </div>
        <div class=\"single-head\">
            <div class=\"row\">
                <div class=\"col-lg-6 col-12\">

                    <div class=\"single-job wow fadeInUp\" data-wow-delay=\".3s\" style=\"visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;\">
                        <div class=\"job-image\">
                            <img src=\"{{asset('assets/img1.png')}}\" >
                        </div>
                        <div class=\"job-content\">
                            <h4><a href=\"https://157781.cc/job-details.html\">Software Engineer</a></h4>
                            <p>We are looking for Enrollment Advisors who are looking to take 30-35 appointments per
                                week. All leads are pre-scheduled. </p>
                            <ul>
                                <li><i class=\"lni lni-website\"></i><a href=\"https://157781.cc/index2.html#\"> winbrans.com</a></li>
                                <li><i class=\"lni lni-dollar\"></i> \$20k - \$25k</li>
                                <li><i class=\"lni lni-map-marker\"></i> New York</li>
                            </ul>
                        </div>
                        <div class=\"job-button\">
                            <ul>
                                <li><a href=\"https://157781.cc/job-details.html\">Apply</a></li>
                                <li><span>full time</span></li>
                            </ul>
                        </div>
                    </div>


                    <div class=\"single-job wow fadeInUp\" data-wow-delay=\".3s\" style=\"visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;\">
                        <div class=\"job-image\">
                            <img src=\"{{asset('assets/img2.png')}}\" >
                        </div>
                        <div class=\"job-content\">
                            <h4><a href=\"https://157781.cc/job-details.html\">Graphics Design</a></h4>
                            <p>We are looking for Enrollment Advisors who are looking to take 30-35 appointments per
                                week. All leads are pre-scheduled. </p>
                            <ul>
                                <li><i class=\"lni lni-website\"></i><a href=\"https://157781.cc/index2.html#\"> designhub.com</a></li>
                                <li><i class=\"lni lni-dollar\"></i> \$20k - \$25k</li>
                                <li><i class=\"lni lni-map-marker\"></i> Washington, USA</li>
                            </ul>
                        </div>
                        <div class=\"job-button\">
                            <ul>
                                <li><a href=\"https://157781.cc/job-details.html\">Apply</a></li>
                                <li><span>Intern</span></li>
                            </ul>
                        </div>
                    </div>


                    <div class=\"single-job wow fadeInUp\" data-wow-delay=\".3s\" style=\"visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;\">
                        <div class=\"job-image\">
                            <img src=\"{{asset('assets/img3.png')}}\" >
                        </div>
                        <div class=\"job-content\">
                            <h4><a href=\"https://157781.cc/job-details.html\">Ui/Ux Design</a></h4>
                            <p>We are looking for Enrollment Advisors who are looking to take 30-35 appointments per
                                week. All leads are pre-scheduled. </p>
                            <ul>
                                <li><i class=\"lni lni-website\"></i><a href=\"https://157781.cc/index2.html#\"> uddesign.com</a></li>
                                <li><i class=\"lni lni-dollar\"></i> \$20k - \$25k</li>
                                <li><i class=\"lni lni-map-marker\"></i> Cupertino, USA</li>
                            </ul>
                        </div>
                        <div class=\"job-button\">
                            <ul>
                                <li><a href=\"https://157781.cc/job-details.html\">Apply</a></li>
                                <li><span>Part Time</span></li>
                            </ul>
                        </div>
                    </div>


                    <div class=\"single-job wow fadeInUp\" data-wow-delay=\".3s\" style=\"visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;\">
                        <div class=\"job-image\">
                            <img src=\"{{asset('assets/img4.png')}}\" >
                        </div>
                        <div class=\"job-content\">
                            <h4><a href=\"https://157781.cc/job-details.html\">Web Developer</a></h4>
                            <p>We are looking for Enrollment Advisors who are looking to take 30-35 appointments per
                                week. All leads are pre-scheduled. </p>
                            <ul>
                                <li><i class=\"lni lni-website\"></i><a href=\"https://157781.cc/index2.html#\"> webinner.com</a></li>
                                <li><i class=\"lni lni-dollar\"></i> \$20k - \$25k</li>
                                <li><i class=\"lni lni-map-marker\"></i> Delaware, USA</li>
                            </ul>
                        </div>
                        <div class=\"job-button\">
                            <ul>
                                <li><a href=\"https://157781.cc/job-details.html\">Apply</a></li>
                                <li><span>Intern</span></li>
                            </ul>
                        </div>
                    </div>

                </div>
                <div class=\"col-lg-6 col-12\">

                    <div class=\"single-job wow fadeInUp\" data-wow-delay=\".5s\" style=\"visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;\">
                        <div class=\"job-image\">
                            <img src=\"{{asset('assets/img7.png')}}\" >
                        </div>
                        <div class=\"job-content\">
                            <h4><a href=\"https://157781.cc/job-details.html\">Digital Marketer</a></h4>
                            <p>We are looking for Enrollment Advisors who are looking to take 30-35 appointments per
                                week. All leads are pre-scheduled. </p>
                            <ul>
                                <li><i class=\"lni lni-website\"></i><a href=\"https://157781.cc/index2.html#\"> marketers.com</a></li>
                                <li><i class=\"lni lni-dollar\"></i> \$20k - \$25k</li>
                                <li><i class=\"lni lni-map-marker\"></i> New York, USA</li>
                            </ul>
                        </div>
                        <div class=\"job-button\">
                            <ul>
                                <li><a href=\"https://157781.cc/job-details.html\">Apply</a></li>
                                <li><span>Part Time</span></li>
                            </ul>
                        </div>
                    </div>


                    <div class=\"single-job wow fadeInUp\" data-wow-delay=\".5s\" style=\"visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;\">
                        <div class=\"job-image\">
                            <img src=\"{{asset('assets/img5.png')}}\" >
                        </div>
                        <div class=\"job-content\">
                            <h4><a href=\"https://157781.cc/job-details.html\">Sales Manager</a></h4>
                            <p>We are looking for Enrollment Advisors who are looking to take 30-35 appointments per
                                week. All leads are pre-scheduled. </p>
                            <ul>
                                <li><i class=\"lni lni-website\"></i><a href=\"https://157781.cc/index2.html#\"> winbrans.com</a></li>
                                <li><i class=\"lni lni-dollar\"></i> \$20k - \$25k</li>
                                <li><i class=\"lni lni-map-marker\"></i> Delaware, USA</li>
                            </ul>
                        </div>
                        <div class=\"job-button\">
                            <ul>
                                <li><a href=\"https://157781.cc/job-details.html\">Apply</a></li>
                                <li><span>full time</span></li>
                            </ul>
                        </div>
                    </div>


                    <div class=\"single-job wow fadeInUp\" data-wow-delay=\".5s\" style=\"visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;\">
                        <div class=\"job-image\">
                            <img src=\"{{asset('assets/img6.png')}}\" >
                        </div>
                        <div class=\"job-content\">
                            <h4><a href=\"https://157781.cc/job-details.html\">Product Designer</a></h4>
                            <p>We are looking for Enrollment Advisors who are looking to take 30-35 appointments per
                                week. All leads are pre-scheduled. </p>
                            <ul>
                                <li><i class=\"lni lni-website\"></i><a href=\"https://157781.cc/index2.html\"> winbrans.com</a></li>
                                <li><i class=\"lni lni-dollar\"></i> \$20k - \$25k</li>
                                <li><i class=\"lni lni-map-marker\"></i> New York, USA</li>
                            </ul>
                        </div>
                        <div class=\"job-button\">
                            <ul>
                                <li><a href=\"https://157781.cc/job-details.html\">Apply</a></li>
                                <li><span>full time</span></li>
                            </ul>
                        </div>
                    </div>


                    <div class=\"single-job wow fadeInUp\" data-wow-delay=\".5s\" style=\"visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;\">
                        <div class=\"job-image\">
                            <img src=\"{{asset('assets/img8.png')}}\" >
                        </div>
                        <div class=\"job-content\">
                            <h4><a href=\"https://157781.cc/job-details.html\">Android Developer</a></h4>
                            <p>We are looking for Enrollment Advisors who are looking to take 30-35 appointments per
                                week. All leads are pre-scheduled. </p>
                            <ul>
                                <li><i class=\"lni lni-website\"></i><a href=\"https://157781.cc/index2.html#\"> androidplex.com</a></li>
                                <li><i class=\"lni lni-dollar\"></i> \$20k - \$25k</li>
                                <li><i class=\"lni lni-map-marker\"></i> Cupertino, USA</li>
                            </ul>
                        </div>
                        <div class=\"job-button\">
                            <ul>
                                <li><a href=\"https://157781.cc/job-details.html\">Apply</a></li>
                                <li><span>Part Time</span></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>

            <div class=\"row\">
                <div class=\"col-12\">
                    <div class=\"pagination center wow fadeInUp\" data-wow-delay=\".3s\" style=\"visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;\">
                        <ul class=\"pagination-list\">
                            <li><a href=\"https://157781.cc/index2.html#\"><i class=\"lni lni-arrow-left\"></i></a></li>
                            <li class=\"active\"><a href=\"https://157781.cc/index2.html#\">1</a></li>
                            <li><a href=\"https://157781.cc/index2.html#\">2</a></li>
                            <li><a href=\"https://157781.cc/index2.html#\">3</a></li>
                            <li><a href=\"https://157781.cc/index2.html#\">4</a></li>
                            <li><a href=\"https://157781.cc/index2.html#\"><i class=\"lni lni-arrow-right\"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>





<section class=\" testimonials\">
    <img class=\"patern1 wow fadeInRight\" data-wow-delay=\".3s\" src=\"{{asset('assets/patern1.png')}}\"  style=\"visibility: visible; animation-delay: 0.3s; animation-name: fadeInRight;\">
    <img class=\"patern2 wow fadeInLeft\" data-wow-delay=\".5s\" src=\"{{asset('assets/patern1.png')}}\"  style=\"visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-6 col-12\">
                <div class=\"section-title align-left wow fadeInLeft\" data-wow-delay=\".3s\" style=\"visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;\">
                    <span>What saye's Our Clients</span>
                    <h2>Our Testimonials</h2>
                </div>
                <div class=\"testimonial-inner-head wow fadeInLeft\" data-wow-delay=\".3s\" style=\"visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;\">
                    <div class=\" testimonial-inner\">
                        <div class=\"tns-outer\" id=\"tns2-ow\"><div class=\"tns-controls\" aria-label=\"Carousel Navigation\" tabindex=\"0\"><button type=\"button\" data-controls=\"prev\" tabindex=\"-1\" aria-controls=\"tns2\"><i class=\"lni lni-arrow-left\"></i></button><button type=\"button\" data-controls=\"next\" tabindex=\"-1\" aria-controls=\"tns2\"><i class=\"lni lni-arrow-right\"></i></button></div><div class=\"tns-liveregion tns-visually-hidden\" aria-live=\"polite\" aria-atomic=\"true\">slide <span class=\"current\">3</span>  of 4</div><div id=\"tns2-mw\" class=\"tns-ovh\"><div class=\"tns-inner\" id=\"tns2-iw\"><div class=\"testimonial-slider  tns-slider tns-carousel tns-subpixel tns-calc tns-horizontal\" id=\"tns2\" style=\"transform: translate3d(-33.3333%, 0px, 0px);\"><div class=\"single-testimonial tns-item tns-slide-cloned\" aria-hidden=\"true\" tabindex=\"-1\">
                                            <div class=\"quote\">
                                                <i class=\"lni lni-quotation\"></i>
                                            </div>
                                            <p>\" I just brought it and i love it. Lorem Ipsum is simply dummy text of the and
                                                typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                                ever
                                                since the 1500s.\" </p>
                                            <div class=\"bottom\">
                                                <div class=\"clien-image\">
                                                    <img src=\"{{asset('assets/testi4.jpg')}}\" >
                                                </div>
                                                <h4 class=\"name\">Goro Chala <span>CEO - Dream App</span></h4>
                                            </div>
                                        </div>

                                        <div class=\"single-testimonial tns-item\" id=\"tns2-item0\" aria-hidden=\"true\" tabindex=\"-1\">
                                            <div class=\"quote\">
                                                <i class=\"lni lni-quotation\"></i>
                                            </div>
                                            <p>\" I just brought it and i love it. Lorem Ipsum is simply dummy text of the and
                                                typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                                ever
                                                since the 1500s.\" </p>
                                            <div class=\"bottom\">
                                                <div class=\"clien-image\">
                                                    <img src=\"{{asset('/testi1.jpg')}}\" >
                                                </div>
                                                <h4 class=\"name\">Musharof Chowdhury <span>CEO - Graygrids</span></h4>
                                            </div>
                                        </div>


                                        <div class=\"single-testimonial tns-item tns-slide-active\" id=\"tns2-item1\">
                                            <div class=\"quote\">
                                                <i class=\"lni lni-quotation\"></i>
                                            </div>
                                            <p>\" I just brought it and i love it. Lorem Ipsum is simply dummy text of the and
                                                typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                                ever
                                                since the 1500s.\" </p>
                                            <div class=\"bottom\">
                                                <div class=\"clien-image\">
                                                    <img src=\"{{asset('assets/testi2.jpg')}}\" >
                                                </div>
                                                <h4 class=\"name\">Naimur Rahman <span>CEO - Wpthemes Grid</span></h4>
                                            </div>
                                        </div>


                                        <div class=\"single-testimonial tns-item\" id=\"tns2-item2\" aria-hidden=\"true\" tabindex=\"-1\">
                                            <div class=\"quote\">
                                                <i class=\"lni lni-quotation\"></i>
                                            </div>
                                            <p>\" I just brought it and i love it. Lorem Ipsum is simply dummy text of the and
                                                typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                                ever
                                                since the 1500s.\" </p>
                                            <div class=\"bottom\">
                                                <div class=\"clien-image\">
                                                    <img src=\"{{asset('assets/testi3.jpg')}}\" >
                                                </div>
                                                <h4 class=\"name\">Karmo kerin<span>CEO - Tredex</span></h4>
                                            </div>
                                        </div>


                                        <div class=\"single-testimonial tns-item\" id=\"tns2-item3\" aria-hidden=\"true\" tabindex=\"-1\">
                                            <div class=\"quote\">
                                                <i class=\"lni lni-quotation\"></i>
                                            </div>
                                            <p>\" I just brought it and i love it. Lorem Ipsum is simply dummy text of the and
                                                typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                                ever
                                                since the 1500s.\" </p>
                                            <div class=\"bottom\">
                                                <div class=\"clien-image\">
                                                    <img src=\"{{asset('assets/testi4.jpg')}}\" >
                                                </div>
                                                <h4 class=\"name\">Goro Chala <span>CEO - Dream App</span></h4>
                                            </div>
                                        </div>

                                        <div class=\"single-testimonial tns-item tns-slide-cloned\" aria-hidden=\"true\" tabindex=\"-1\">
                                            <div class=\"quote\">
                                                <i class=\"lni lni-quotation\"></i>
                                            </div>
                                            <p>\" I just brought it and i love it. Lorem Ipsum is simply dummy text of the and
                                                typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                                ever
                                                since the 1500s.\" </p>
                                            <div class=\"bottom\">
                                                <div class=\"clien-image\">
                                                    <img src=\"{{asset('assets/testi1.jpg')}}\" >
                                                </div>
                                                <h4 class=\"name\">Musharof Chowdhury <span>CEO - Graygrids</span></h4>
                                            </div>
                                        </div></div></div></div></div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-6 col-12\">
                <div class=\"testimonial-right wow fadeInRight\" data-wow-delay=\".5s\" style=\"visibility: visible; animation-delay: 0.5s; animation-name: fadeInRight;\">
                    <img src=\"{{asset('/testimonial-right.png')}}\" >
                </div>
            </div>
        </div>
    </div>
</section>





<div class=\"latest-news-area section\">

</div>





<div class=\"modal fade form-modal\" id=\"login\" tabindex=\"-1\" aria-hidden=\"true\">
    <div class=\"modal-dialog max-width-px-840 position-relative\">
        <button type=\"button\" class=\"circle-32 btn-reset bg-white pos-abs-tr mt-md-n6 mr-lg-n6 focus-reset z-index-supper\" data-dismiss=\"modal\"><i class=\"lni lni-close\"></i></button>
        <div class=\"login-modal-main\">
            <div class=\"row no-gutters\">
                <div class=\"col-12\">
                    <div class=\"row\">
                        <div class=\"heading\">
                            <h3>Login From Here</h3>
                            <p>Log in to continue your account <br> and explore new jobs.</p>
                        </div>
                        <div class=\"social-login\">
                            <ul>
                                <li><a class=\"linkedin\" href=\"https://157781.cc/index2.html#\"><i class=\"lni lni-linkedin-original\"></i> Log in
                                        with LinkedIn</a></li>
                                <li><a class=\"google\" href=\"https://157781.cc/index2.html#\"><i class=\"lni lni-google\"></i> Log in with
                                        Google</a></li>
                                <li><a class=\"facebook\" href=\"https://157781.cc/index2.html#\"><i class=\"lni lni-facebook-original\"></i> Log in
                                        with Facebook</a></li>
                            </ul>
                        </div>
                        <div class=\"or-devider\">
                            <span>Or</span>
                        </div>
                        <form action=\"https://157781.cc/\">
                            <div class=\"form-group\">
                                <label for=\"email\" class=\"label\">E-mail</label>
                                <input type=\"email\" class=\"form-control\" placeholder=\"example@gmail.com\" id=\"email\">
                            </div>
                            <div class=\"form-group\">
                                <label for=\"password\" class=\"label\">Password</label>
                                <div class=\"position-relative\">
                                    <input type=\"password\" class=\"form-control\" id=\"password\" placeholder=\"Enter password\">
                                </div>
                            </div>
                            <div class=\"form-group d-flex flex-wrap justify-content-between\">

                                <div class=\"form-check\">
                                    <input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"flexCheckDefault\">
                                    <label class=\"form-check-label\" for=\"flexCheckDefault\">Remember password</label>
                                </div>
                                <a href=\"https://157781.cc/index2.html\" class=\"font-size-3 text-dodger line-height-reset\">Forget Password</a>
                            </div>
                            <div class=\"form-group mb-8 button\">
                                <button class=\"btn \">Log in
                                </button>
                            </div>
                            <p class=\"text-center create-new-account\">Don’t have an account? <a href=\"https://157781.cc/index2.html#\">Create a free account</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class=\"modal fade form-modal\" id=\"signup\" tabindex=\"-1\" aria-hidden=\"true\">
    <div class=\"modal-dialog max-width-px-840 position-relative\">
        <button type=\"button\" class=\"circle-32 btn-reset bg-white pos-abs-tr mt-md-n6 mr-lg-n6 focus-reset z-index-supper\" data-dismiss=\"modal\"><i class=\"lni lni-close\"></i></button>
        <div class=\"login-modal-main\">
            <div class=\"row no-gutters\">
                <div class=\"col-12\">
                    <div class=\"row\">
                        <div class=\"heading\">
                            <h3>Create a free Account <br> Today</h3>
                            <p>Create your account to continue <br> and explore new jobs.</p>
                        </div>
                        <div class=\"social-login\">
                            <ul>
                                <li><a class=\"linkedin\" href=\"https://157781.cc/index2.html#\"><i class=\"lni lni-linkedin-original\"></i> Import from LinkedIn</a></li>
                                <li><a class=\"google\" href=\"https://157781.cc/index2.html#\"><i class=\"lni lni-google\"></i> Import from
                                        Google</a></li>
                                <li><a class=\"facebook\" href=\"https://157781.cc/index2.html#\"><i class=\"lni lni-facebook-original\"></i> Import from Facebook</a></li>
                            </ul>
                        </div>
                        <div class=\"or-devider\">
                            <span>Or</span>
                        </div>
                        <form action=\"https://157781.cc/\">
                            <div class=\"form-group\">
                                <label for=\"email\" class=\"label\">E-mail</label>
                                <input type=\"email\" class=\"form-control\" placeholder=\"example@gmail.com\">
                            </div>
                            <div class=\"form-group\">
                                <label for=\"password\" class=\"label\">Password</label>
                                <div class=\"position-relative\">
                                    <input type=\"password\" class=\"form-control\" placeholder=\"Enter password\">
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label for=\"password\" class=\"label\">Confirm Password</label>
                                <div class=\"position-relative\">
                                    <input type=\"password\" class=\"form-control\" placeholder=\"Enter password\">
                                </div>
                            </div>
                            <div class=\"form-group d-flex flex-wrap justify-content-between\">

                                <div class=\"form-check\">
                                    <input class=\"form-check-input\" type=\"checkbox\" value=\"\">
                                    <label class=\"form-check-label\" for=\"flexCheckDefault\">Agree to the <a href=\"https://157781.cc/index2.html#\">Terms &amp; Conditions</a></label>
                                </div>
                            </div>
                            <div class=\"form-group mb-8 button\">
                                <button class=\"btn \">Sign Up
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<footer class=\"footer\">
    <div class=\"footer-top\">
        <div class=\"container\">
            <div class=\"row align-items-center justify-content-center\">
                <div class=\"col-lg-6 col-12\">
                    <div class=\"download-text\">
                        <h3>Download Our Best Apps</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do<br> eiusmod tempor
                            incididunt ut labore et dolore</p>
                    </div>
                </div>
                <div class=\"col-lg-6 col-12\">
                    <div class=\"download-button\">
                        <div class=\"button\">
                            <a class=\"btn\" href=\"https://157781.cc/index2.html#\"><i class=\"lni lni-apple\"></i> App Store</a>
                            <a class=\"btn\" href=\"https://157781.cc/index2.html#\"><i class=\"lni lni-play-store\"></i> Google Play</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"footer-middle\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-4 col-md-6 col-12\">

                    <div class=\"f-about single-footer\">
                        <div class=\"logo\">
                            <a href=\"https://157781.cc/index.html\"><img src=\"{{asset('assets/logo.svg')}}\" alt=\"Logo\"></a>
                        </div>
                        <p>Start building your creative website with our awesome template Massive.</p>
                        <ul class=\"contact-address\">
                            <li><span>Address:</span> 555 Wall Street, USA, NY</li>
                            <li><span>Email:</span> example@apus.com</li>
                            <li><span>Call:</span> 555-555-1234</li>
                        </ul>
                        <div class=\"footer-social\">
                            <ul>
                                <li><a href=\"https://157781.cc/index2.html#\"><i class=\"lni lni-facebook-original\"></i></a></li>
                                <li><a href=\"https://157781.cc/index2.html#\"><i class=\"lni lni-twitter-original\"></i></a></li>
                                <li><a href=\"https://157781.cc/index2.html#\"><i class=\"lni lni-linkedin-original\"></i></a></li>
                                <li><a href=\"https://157781.cc/index2.html#\"><i class=\"lni lni-pinterest\"></i></a></li>
                            </ul>
                        </div>
                    </div>

                </div>
                <div class=\"col-lg-8 col-12\">
                    <div class=\"row\">
                        <div class=\"col-lg-4 col-md-6 col-12\">

                            <div class=\"single-footer f-link\">
                                <h3>For Candidates</h3>
                                <ul>
                                    <li><a href=\"https://157781.cc/index2.html#\">User Dashboard</a></li>
                                    <li><a href=\"https://157781.cc/index2.html#\">CV Packages</a></li>
                                    <li><a href=\"https://157781.cc/index2.html#\">Jobs Featured</a></li>
                                    <li><a href=\"https://157781.cc/index2.html#\">Jobs Urgent</a></li>
                                    <li><a href=\"https://157781.cc/index2.html#\">Candidate List</a></li>
                                    <li><a href=\"https://157781.cc/index2.html#\">Candidates Grid</a></li>
                                </ul>
                            </div>

                        </div>
                        <div class=\"col-lg-4 col-md-6 col-12\">

                            <div class=\"single-footer f-link\">
                                <h3>For Employers</h3>
                                <ul>
                                    <li><a href=\"https://157781.cc/index2.html#\">Post New</a></li>
                                    <li><a href=\"https://157781.cc/index2.html#\">Employer List</a></li>
                                    <li><a href=\"https://157781.cc/index2.html#\">Employers Grid</a></li>
                                    <li><a href=\"https://157781.cc/index2.html#\">Job Packages</a></li>
                                    <li><a href=\"https://157781.cc/index2.html#\">Jobs Listing</a></li>
                                    <li><a href=\"https://157781.cc/index2.html#\">Jobs Featured</a></li>
                                </ul>
                            </div>

                        </div>
                        <div class=\"col-lg-4 col-md-6 col-12\">

                            <div class=\"single-footer newsletter\">
                                <h3>Join Our Newsletter</h3>
                                <p>Subscribe to get the latest jobs posted, candidates...</p>
                                <form action=\"https://157781.cc/mail/mail.php\" method=\"get\" target=\"_blank\" class=\"newsletter-inner\">
                                    <input name=\"EMAIL\" placeholder=\"Your email address\" class=\"common-input\" onfocus=\"this.placeholder = &#39;&#39;\" onblur=\"this.placeholder = &#39;Your email address&#39;\" required=\"\" type=\"email\">
                                    <div class=\"button\">
                                        <button class=\"btn\">Subscribe Now! <span class=\"dir-part\"></span></button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class=\"footer-bottom\">
        <div class=\"container\">
            <div class=\"inner\">
                <div class=\"row\">
                    <div class=\"col-lg-6 col-md-6 col-12\">
                        <div class=\"left\">
                            <p>Copyright © 2022.Company name All rights reserved.</p>
                        </div>
                    </div>
                    <div class=\"col-lg-6 col-md-6 col-12\">
                        <div class=\"right\">
                            <ul>
                                <li><a href=\"https://157781.cc/index2.html#\">Terms of use</a></li>
                                <li><a href=\"https://157781.cc/index2.html#\"> Privacy Policy</a></li>
                                <li><a href=\"https://157781.cc/index2.html#\">Faq</a></li>
                                <li><a href=\"https://157781.cc/index2.html#\">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</footer>


<a href=\"https://157781.cc/index2.html#\" class=\"scroll-top btn-hover\" style=\"display: none;\">
    <i class=\"lni lni-chevron-up\"></i>
</a>

<script src=\"{{asset('assets/bootstrap.min.js.téléchargé')}}\"></script>
<script src=\"{{asset('assets/wow.min.js.téléchargé')}}\"></script>
<script src=\"{{asset('assets/tiny-slider.js.téléchargé')}}\"></script>
<script src=\"{{asset('assets/glightbox.min.js.téléchargé')}}\"></script>
<script src=\"{{asset('assets/main.js.téléchargé')}}\"></script>
<script type=\"text/javascript\">
    //====== Clients Logo Slider
    tns({
        container: '.client-logo-carousel',
        slideBy: 'page',
        autoplay: true,
        autoplayButtonOutput: false,
        mouseDrag: true,
        gutter: 15,
        nav: false,
        controls: false,
        responsive: {
            0: {
                items: 1,
            },
            540: {
                items: 2,
            },
            768: {
                items: 3,
            },
            992: {
                items: 4,
            },
            1170: {
                items: 6,
            }
        }
    });
    //========= testimonial
    tns({
        container: '.testimonial-slider',
        items: 1,
        slideBy: 'page',
        autoplayButtonOutput: false,
        autoplay: true,
        mouseDrag: true,
        gutter: 0,
        nav: false,
        controls: true,
        controlsText: ['<i class=\"lni lni-arrow-left\"></i>', '<i class=\"lni lni-arrow-right\"></i>'],
        responsive: {
            0: {
                items: 1,
            },
            540: {
                items: 1,
            },
            768: {
                items: 1,
            },
            992: {
                items: 1,
            },
            1170: {
                items: 1,
            }
        }
    });

    //======== Home Slider
    var slider = new tns({
        container: '.home-slider',
        slideBy: 'page',
        autoplay: true,
        autoplayButtonOutput: false,
        mouseDrag: true,
        gutter: 0,
        items: 1,
        nav: false,
        controls: true,
        controlsText: [
            '<i class=\"lni lni-arrow-left prev\"></i>',
            '<i class=\"lni lni-arrow-right next\"></i>'
        ],
        responsive: {
            1200: {
                items: 1,
            },
            992: {
                items: 1,
            },
            0: {
                items: 1,
            }

        }
    });
</script>

<iframe src=\"{{asset('assets/saved_resource.html')}}\" style=\"display: none;\">

</iframe>
</body>
</html>", "utilisateur/test.html.twig", "C:\\Users\\ADMIN\\OneDrive\\Bureau\\Nouveau dossier\\Workbot-web\\templates\\utilisateur\\test.html.twig");
    }
}
