<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @Project/Default/ref.html.twig */
class __TwigTemplate_c740c07b8f44c954c298843c31bc15de2ec70dd2ed8ceefed7e912e51a0c6bf4 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'header' => [$this, 'block_header'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Project/Default/ref.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Project/Default/ref.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>

    <meta charset=\"UTF-8\"/>
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <title>Kindness a Charity Category Flat Bootstarp Resposive Website Template | Home :: w3layouts</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"/>
    <meta name=\"keywords\" content=\"Kindness Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
    Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design\"/>
    <script type=\"application/x-javascript\"> addEventListener(\"load\", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>
    <link href='";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/css/bootstrap.css"), "html", null, true);
        echo "' rel='stylesheet' type='text/css'/>
    <!-- Custom Theme files -->
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/css/style.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css'/>
    <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <!--webfonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,400,300,600,700|Playball'
          rel='stylesheet' type='text/css'>
    <!--//webfonts-->


    ";
        // line 29
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 34
        echo "
</head>


<body>
";
        // line 39
        $this->displayBlock('header', $context, $blocks);
        // line 70
        echo "
";
        // line 71
        $this->displayBlock('content', $context, $blocks);
        // line 122
        echo "

";
        // line 124
        $this->displayBlock('footer', $context, $blocks);
        // line 177
        echo "


        ";
        // line 180
        $this->displayBlock('javascripts', $context, $blocks);
        // line 183
        echo "    </div>
</div>
</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "V4VOLUNTEER";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 29
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 30
        echo "        <link href=\" ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\" ";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("font/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <!-- <link href=\" ";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/swipebox.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" >-->
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 39
    public function block_header($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 40
        echo "    <div class=\"header-bottom\">
        <div class=\"container\">
            <div class=\"logo\">
                <a href=\"index.html\"><h1>V4<span>Volunteer</span></h1></a>
            </div>
            <span class=\"menu\"></span>
            <div class=\"top-menu\">
                <ul class=\"cl-effect-16\">
                    <li><a class=\"active\" href=\"index.html\" data-hover=\"HOME\">Home</a></li>
                    <li><a href=\"about.html\" data-hover=\"About\">About</a></li>
                    <li><a href=\"404.html\" data-hover=\"SERVICES\">SERVICES</a></li>
                    <li><a href=\"donate.html\" data-hover=\"Donations\">Donations</a></li>
                    <li><a href=\"blog.html\" data-hover=\"BLOG\">BLOG</a></li>
                    <li><a href=\"contact.html\" data-hover=\"CONTACT\">Contact</a></li>
                    <div class=\"clearfix\"></div>
                </ul>
            </div>
            <!-- script for menu -->
            <script>
                \$(\"span.menu\").click(function () {
                    \$(\".top-menu\").slideToggle(\"slow\", function () {
                        // Animation complete.
                    });
                });
            </script>
            <!-- script for menu -->
            <div class=\"clearfix\"></div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 71
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 72
        echo "
    <div class=\"banner two\">
        <h2>BIENVENUE</h2>
        <h6>---</h6>
    </div>
    </div>
    <!--welcome-->
    <div class=\"blog-section\">
        <div class=\"container\">
            <div class=\"blog-top\">
                <div class=\"col-md-6 grid_3\">
                    <h3><a href=\"";
        // line 83
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("project_AfficherLog");
        echo "\">NOS LOGEMENTS</a></h3>
                    <a href=\"";
        // line 84
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("project_AfficherLog");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/images/b1.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"/></a>
                    <div class=\"blog-poast-admin\">
                        <a href=\"#\"><img src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/images/b_small.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" title=\"admin\" alt=\"\"/></a>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <div class=\"button\"><a class=\"read trd\" href=\"";
        // line 89
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("project_AfficherLog");
        echo "\">VISITER</a></div>
                </div>



                <div class=\"col-md-6 grid_3\">
                    <h3><a href=\"";
        // line 95
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("project_AfficherRef");
        echo "\">NOS REFUGIES</a></h3>
                    <a href=\"";
        // line 96
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("project_AfficherRef");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/images/b1.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"/></a>
                    <div class=\"blog-poast-admin\">
                        <a href=\"#\"><img src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/images/b_small.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" title=\"admin\" alt=\"\"/></a>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <div class=\"button\"><a class=\"read trd\" href=\"";
        // line 101
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("project_AfficherRef");
        echo "\">VISITER</a></div>
                </div>

                <div class=\"clearfix\"></div>
            </div>

            <div class=\"blog-bottom\">

                <div class=\"clearfix\"></div>
            </div>
            <!--start-blog-pagenate-->

            <!--//End-blog-pagenate-->
        </div>
    </div>
    <svg id=\"bigTriangleShadow\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" width=\"100%\" height=\"100\" viewBox=\"0 0 100 100\" preserveAspectRatio=\"none\">
        <path id=\"trianglePath5\" d=\"M0 0 L50 100 L100 0 Z\"></path>
        <path id=\"trianglePath6\" d=\"M50 100 L100 40 L100 0 Z\"></path>
    </svg>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 124
    public function block_footer($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 125
        echo "<div class=\"footer text-center\">
    <div class=\"container\">
        <div class=\"footer-grids\">
            <div class=\"col-md-4 footer-text\">
                <h3>About Us</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum has been the
                    industry's.</p>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum has been the
                    industry's.</p>
            </div>
            <div class=\"col-md-4 footer-flickr\">
                <h3>Flickr Feed</h3>
                <div class=\"flickr-grids\">
                    <div class=\"flickr-grid\">
                        <a href=\"#\"><img src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/images/t1.jpg"), "html", null, true);
        echo "\" alt=\"\"/></a>
                    </div>
                    <div class=\"flickr-grid\">
                        <a href=\"#\"><img src=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/images/t2.jpg"), "html", null, true);
        echo "\" alt=\"\"/></a>
                    </div>
                    <div class=\"flickr-grid\">
                        <a href=\"#\"><img src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/images/t3.jpg"), "html", null, true);
        echo "\" alt=\"\"/></a>
                    </div>
                    <div class=\"clearfix\"></div>

                    <div class=\"flickr-grid\">
                        <a href=\"#\"><img src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/images/t4.jpg"), "html", null, true);
        echo "\" alt=\"\"/></a>
                    </div>
                    <div class=\"flickr-grid\">
                        <a href=\"#\"><img src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/images/t1.jpg"), "html", null, true);
        echo "\" alt=\"\"/></a>
                    </div>
                    <div class=\"flickr-grid\">
                        <a href=\"#\"><img src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/images/t3.jpg"), "html", null, true);
        echo "\" alt=\"\"/></a>
                    </div>
                    <div class=\"clearfix\"></div>
                </div>
            </div>
            <div class=\"col-md-4 footer-info\">
                <h3>Get In Touch</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum has been the
                    industry's standard dummy text ever since, </p>
                <div class=\"support\">
                    <form>
                        <input type=\"text\" value=\"\" onfocus=\"this.value='';\"
                               onblur=\"if (this.value == '') {this.value ='';}\">
                        <input type=\"submit\" value=\"SUBSCRIBE\">
                    </form>
                </div>
            </div>

            <div class=\"clearfix\"></div>
        </div>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 180
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 181
        echo "
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Project/Default/ref.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  416 => 181,  407 => 180,  376 => 156,  370 => 153,  364 => 150,  356 => 145,  350 => 142,  344 => 139,  328 => 125,  319 => 124,  288 => 101,  282 => 98,  275 => 96,  271 => 95,  262 => 89,  256 => 86,  249 => 84,  245 => 83,  232 => 72,  223 => 71,  184 => 40,  175 => 39,  163 => 32,  159 => 31,  154 => 30,  145 => 29,  127 => 6,  113 => 183,  111 => 180,  106 => 177,  104 => 124,  100 => 122,  98 => 71,  95 => 70,  93 => 39,  86 => 34,  84 => 29,  74 => 22,  70 => 21,  65 => 19,  49 => 6,  42 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>

    <meta charset=\"UTF-8\"/>
    <title>{% block title %}V4VOLUNTEER{% endblock %}</title>
    <title>Kindness a Charity Category Flat Bootstarp Resposive Website Template | Home :: w3layouts</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"/>
    <meta name=\"keywords\" content=\"Kindness Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
    Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design\"/>
    <script type=\"application/x-javascript\"> addEventListener(\"load\", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>
    <link href='{{ asset(\"front/css/bootstrap.css\") }}' rel='stylesheet' type='text/css'/>
    <!-- Custom Theme files -->
    <link href=\"{{ asset('front/css/style.css') }}\" rel='stylesheet' type='text/css'/>
    <script src=\"{{ asset('front/js/jquery.min.js') }}\"></script>
    <!--webfonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,400,300,600,700|Playball'
          rel='stylesheet' type='text/css'>
    <!--//webfonts-->


    {% block stylesheets %}
        <link href=\" {{ asset('front/css/bootstrap.css') }}\" rel=\"stylesheet\">
        <link href=\" {{ asset('font/css/style.css') }}\" rel=\"stylesheet\">
        <!-- <link href=\" {{ asset('css/swipebox.css') }}\" rel=\"stylesheet\" >-->
    {% endblock %}

</head>


<body>
{% block header %}
    <div class=\"header-bottom\">
        <div class=\"container\">
            <div class=\"logo\">
                <a href=\"index.html\"><h1>V4<span>Volunteer</span></h1></a>
            </div>
            <span class=\"menu\"></span>
            <div class=\"top-menu\">
                <ul class=\"cl-effect-16\">
                    <li><a class=\"active\" href=\"index.html\" data-hover=\"HOME\">Home</a></li>
                    <li><a href=\"about.html\" data-hover=\"About\">About</a></li>
                    <li><a href=\"404.html\" data-hover=\"SERVICES\">SERVICES</a></li>
                    <li><a href=\"donate.html\" data-hover=\"Donations\">Donations</a></li>
                    <li><a href=\"blog.html\" data-hover=\"BLOG\">BLOG</a></li>
                    <li><a href=\"contact.html\" data-hover=\"CONTACT\">Contact</a></li>
                    <div class=\"clearfix\"></div>
                </ul>
            </div>
            <!-- script for menu -->
            <script>
                \$(\"span.menu\").click(function () {
                    \$(\".top-menu\").slideToggle(\"slow\", function () {
                        // Animation complete.
                    });
                });
            </script>
            <!-- script for menu -->
            <div class=\"clearfix\"></div>
        </div>
    </div>
{% endblock %}

{% block content %}

    <div class=\"banner two\">
        <h2>BIENVENUE</h2>
        <h6>---</h6>
    </div>
    </div>
    <!--welcome-->
    <div class=\"blog-section\">
        <div class=\"container\">
            <div class=\"blog-top\">
                <div class=\"col-md-6 grid_3\">
                    <h3><a href=\"{{ path('project_AfficherLog') }}\">NOS LOGEMENTS</a></h3>
                    <a href=\"{{ path('project_AfficherLog') }}\"><img src=\"{{ asset('front/images/b1.jpg') }}\" class=\"img-responsive\" alt=\"\"/></a>
                    <div class=\"blog-poast-admin\">
                        <a href=\"#\"><img src=\"{{ asset('front/images/b_small.jpg') }}\" class=\"img-responsive\" title=\"admin\" alt=\"\"/></a>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <div class=\"button\"><a class=\"read trd\" href=\"{{ path('project_AfficherLog') }}\">VISITER</a></div>
                </div>



                <div class=\"col-md-6 grid_3\">
                    <h3><a href=\"{{ path('project_AfficherRef') }}\">NOS REFUGIES</a></h3>
                    <a href=\"{{ path('project_AfficherRef') }}\"><img src=\"{{ asset('front/images/b1.jpg') }}\" class=\"img-responsive\" alt=\"\"/></a>
                    <div class=\"blog-poast-admin\">
                        <a href=\"#\"><img src=\"{{ asset('front/images/b_small.jpg') }}\" class=\"img-responsive\" title=\"admin\" alt=\"\"/></a>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <div class=\"button\"><a class=\"read trd\" href=\"{{ path('project_AfficherRef') }}\">VISITER</a></div>
                </div>

                <div class=\"clearfix\"></div>
            </div>

            <div class=\"blog-bottom\">

                <div class=\"clearfix\"></div>
            </div>
            <!--start-blog-pagenate-->

            <!--//End-blog-pagenate-->
        </div>
    </div>
    <svg id=\"bigTriangleShadow\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" width=\"100%\" height=\"100\" viewBox=\"0 0 100 100\" preserveAspectRatio=\"none\">
        <path id=\"trianglePath5\" d=\"M0 0 L50 100 L100 0 Z\"></path>
        <path id=\"trianglePath6\" d=\"M50 100 L100 40 L100 0 Z\"></path>
    </svg>

{% endblock %}


{% block footer %}
<div class=\"footer text-center\">
    <div class=\"container\">
        <div class=\"footer-grids\">
            <div class=\"col-md-4 footer-text\">
                <h3>About Us</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum has been the
                    industry's.</p>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum has been the
                    industry's.</p>
            </div>
            <div class=\"col-md-4 footer-flickr\">
                <h3>Flickr Feed</h3>
                <div class=\"flickr-grids\">
                    <div class=\"flickr-grid\">
                        <a href=\"#\"><img src=\"{{ asset('front/images/t1.jpg') }}\" alt=\"\"/></a>
                    </div>
                    <div class=\"flickr-grid\">
                        <a href=\"#\"><img src=\"{{ asset('front/images/t2.jpg') }}\" alt=\"\"/></a>
                    </div>
                    <div class=\"flickr-grid\">
                        <a href=\"#\"><img src=\"{{ asset('front/images/t3.jpg') }}\" alt=\"\"/></a>
                    </div>
                    <div class=\"clearfix\"></div>

                    <div class=\"flickr-grid\">
                        <a href=\"#\"><img src=\"{{ asset('front/images/t4.jpg') }}\" alt=\"\"/></a>
                    </div>
                    <div class=\"flickr-grid\">
                        <a href=\"#\"><img src=\"{{ asset('front/images/t1.jpg') }}\" alt=\"\"/></a>
                    </div>
                    <div class=\"flickr-grid\">
                        <a href=\"#\"><img src=\"{{ asset('front/images/t3.jpg') }}\" alt=\"\"/></a>
                    </div>
                    <div class=\"clearfix\"></div>
                </div>
            </div>
            <div class=\"col-md-4 footer-info\">
                <h3>Get In Touch</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum has been the
                    industry's standard dummy text ever since, </p>
                <div class=\"support\">
                    <form>
                        <input type=\"text\" value=\"\" onfocus=\"this.value='';\"
                               onblur=\"if (this.value == '') {this.value ='';}\">
                        <input type=\"submit\" value=\"SUBSCRIBE\">
                    </form>
                </div>
            </div>

            <div class=\"clearfix\"></div>
        </div>
        {% endblock %}



        {% block javascripts %}

        {% endblock %}
    </div>
</div>
</body>
</html>
", "@Project/Default/ref.html.twig", "C:\\wamp64\\www\\ProjetPI\\src\\ProjectBundle\\Resources\\views\\Default\\ref.html.twig");
    }
}
