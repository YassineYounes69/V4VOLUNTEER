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

/* base.html.twig */
class __TwigTemplate_9804c63e1deb3ac34ecbc5c677fd141444779d6b0dd4f19d3fa6a4c5799824b7 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'header' => [$this, 'block_header'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>Kindness a Charity Category Flat Bootstarp Resposive Website Template | Home :: w3layouts</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <meta name=\"keywords\" content=\"Kindness Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design\" />
        <script type=\"application/x-javascript\"> addEventListener(\"load\", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
        <!-- Custom Theme files -->
        <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
        <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"> </script>
        <!--webfonts-->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,400,300,600,700|Playball' rel='stylesheet' type='text/css'>
        <!--//webfonts-->
    </head>
    <body>


        ";
        // line 21
        $this->displayBlock('header', $context, $blocks);
        // line 54
        echo "

        ";
        // line 56
        $this->displayBlock('content', $context, $blocks);
        // line 58
        echo "

        ";
        // line 60
        $this->displayBlock('footer', $context, $blocks);
        // line 109
        echo "

        ";
        // line 111
        $this->displayBlock('javascripts', $context, $blocks);
        // line 113
        echo "

    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 21
    public function block_header($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 22
        echo "            <div class=\"header-bottom\">
                <div class=\"container\">
                    <div class=\"logo\">
                        <a href=\"#\"><h1>V4<span>Volunteer</span></h1></a>
                    </div>
                    <span class=\"menu\"></span>
                    <div class=\"top-menu\">
                        <ul class=\"cl-effect-16\">
                            <li><a class=\"active\" href=\"#\" data-hover=\"HOME\">Home</a></li>
                            <li><a href=\"#\" data-hover=\"About\">Personnes Agées</a></li>
                            <li><a href=\"#\" data-hover=\"SERVICES\">Forum</a></li>
                            <li><a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("project_Temp");
        echo "\" data-hover=\"Donations\">Réfugiés</a></li>
                            <li><a href=\"#\" data-hover=\"BLOG\">Donation</a></li>
                            <li><a href=\"#\" data-hover=\"BLOG\">Nsit</a></li>
                            <li><a href=\"#\" data-hover=\"BLOG\">Evénements</a></li>
                            <li><a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "\" data-hover=\"CONTACT\">Se connecter</a></li>
                            <div class=\"clearfix\"> </div>
                        </ul>
                    </div>
                    <!-- script for menu -->
                    <script>
                        \$( \"span.menu\" ).click(function() {
                            \$( \".top-menu\" ).slideToggle( \"slow\", function() {
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

    // line 56
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 57
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 60
    public function block_footer($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 61
        echo "        <div class=\"footer text-center\">
            <div class=\"container\">
                <div class=\"footer-grids\">
                    <div class=\"col-md-4 footer-text\">
                        <h3>About Us</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum has been the industry's.</p>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum has been the industry's.</p>
                    </div>
                    <div class=\"col-md-4 footer-flickr\">
                        <h3>Flickr Feed</h3>
                        <div class=\"flickr-grids\">
                            <div class=\"flickr-grid\">
                                <a href=\"#\"><img src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/t1.jpg"), "html", null, true);
        echo "\" alt=\"\"/></a>
                            </div>
                            <div class=\"flickr-grid\">
                                <a href=\"#\"><img src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/t2.jpg"), "html", null, true);
        echo "\" alt=\"\"/></a>
                            </div>
                            <div class=\"flickr-grid\">
                                <a href=\"#\"><img src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/t3.jpg"), "html", null, true);
        echo "\" alt=\"\"/></a>
                            </div>
                            <div class=\"clearfix\"> </div>

                            <div class=\"flickr-grid\">
                                <a href=\"#\"><img src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/t4.jpg"), "html", null, true);
        echo "\" alt=\"\"/></a>
                            </div>
                            <div class=\"flickr-grid\">
                                <a href=\"#\"><img src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/t1.jpg"), "html", null, true);
        echo "\" alt=\"\"/></a>
                            </div>
                            <div class=\"flickr-grid\">
                                <a href=\"#\"><img src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/t3.jpg"), "html", null, true);
        echo "\" alt=\"\"/></a>
                            </div>
                            <div class=\"clearfix\"> </div>
                        </div>
                    </div>
                    <div class=\"col-md-4 footer-info\">
                        <h3>Get In Touch</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum has been the industry's standard dummy text ever since, </p>
                        <div class=\"support\">
                            <form>
                                <input type=\"text\" value=\"\" onfocus=\"this.value='';\" onblur=\"if (this.value == '') {this.value ='';}\">
                                <input type=\"submit\" value=\"SUBSCRIBE\">
                            </form>
                        </div>
                    </div>

                    <div class=\"clearfix\"> </div>
                </div>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 111
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 112
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  273 => 112,  264 => 111,  235 => 90,  229 => 87,  223 => 84,  215 => 79,  209 => 76,  203 => 73,  189 => 61,  180 => 60,  170 => 57,  161 => 56,  134 => 37,  127 => 33,  114 => 22,  105 => 21,  91 => 113,  89 => 111,  85 => 109,  83 => 60,  79 => 58,  77 => 56,  73 => 54,  71 => 21,  60 => 13,  56 => 12,  51 => 10,  40 => 1,);
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
        <title>Kindness a Charity Category Flat Bootstarp Resposive Website Template | Home :: w3layouts</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <meta name=\"keywords\" content=\"Kindness Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design\" />
        <script type=\"application/x-javascript\"> addEventListener(\"load\", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <link href=\"{{ asset('css/bootstrap.css') }}\" rel='stylesheet' type='text/css' />
        <!-- Custom Theme files -->
        <link href=\"{{ asset('css/style.css') }}\" rel='stylesheet' type='text/css' />
        <script src=\"{{ asset('js/jquery.min.js') }}\"> </script>
        <!--webfonts-->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,400,300,600,700|Playball' rel='stylesheet' type='text/css'>
        <!--//webfonts-->
    </head>
    <body>


        {% block header %}
            <div class=\"header-bottom\">
                <div class=\"container\">
                    <div class=\"logo\">
                        <a href=\"#\"><h1>V4<span>Volunteer</span></h1></a>
                    </div>
                    <span class=\"menu\"></span>
                    <div class=\"top-menu\">
                        <ul class=\"cl-effect-16\">
                            <li><a class=\"active\" href=\"#\" data-hover=\"HOME\">Home</a></li>
                            <li><a href=\"#\" data-hover=\"About\">Personnes Agées</a></li>
                            <li><a href=\"#\" data-hover=\"SERVICES\">Forum</a></li>
                            <li><a href=\"{{ path(\"project_Temp\") }}\" data-hover=\"Donations\">Réfugiés</a></li>
                            <li><a href=\"#\" data-hover=\"BLOG\">Donation</a></li>
                            <li><a href=\"#\" data-hover=\"BLOG\">Nsit</a></li>
                            <li><a href=\"#\" data-hover=\"BLOG\">Evénements</a></li>
                            <li><a href=\"{{ path(\"fos_user_security_login\") }}\" data-hover=\"CONTACT\">Se connecter</a></li>
                            <div class=\"clearfix\"> </div>
                        </ul>
                    </div>
                    <!-- script for menu -->
                    <script>
                        \$( \"span.menu\" ).click(function() {
                            \$( \".top-menu\" ).slideToggle( \"slow\", function() {
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
        {% endblock %}


        {% block footer %}
        <div class=\"footer text-center\">
            <div class=\"container\">
                <div class=\"footer-grids\">
                    <div class=\"col-md-4 footer-text\">
                        <h3>About Us</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum has been the industry's.</p>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum has been the industry's.</p>
                    </div>
                    <div class=\"col-md-4 footer-flickr\">
                        <h3>Flickr Feed</h3>
                        <div class=\"flickr-grids\">
                            <div class=\"flickr-grid\">
                                <a href=\"#\"><img src=\"{{ asset('images/t1.jpg') }}\" alt=\"\"/></a>
                            </div>
                            <div class=\"flickr-grid\">
                                <a href=\"#\"><img src=\"{{ asset('images/t2.jpg') }}\" alt=\"\"/></a>
                            </div>
                            <div class=\"flickr-grid\">
                                <a href=\"#\"><img src=\"{{ asset('images/t3.jpg') }}\" alt=\"\"/></a>
                            </div>
                            <div class=\"clearfix\"> </div>

                            <div class=\"flickr-grid\">
                                <a href=\"#\"><img src=\"{{ asset('images/t4.jpg') }}\" alt=\"\"/></a>
                            </div>
                            <div class=\"flickr-grid\">
                                <a href=\"#\"><img src=\"{{ asset('images/t1.jpg') }}\" alt=\"\"/></a>
                            </div>
                            <div class=\"flickr-grid\">
                                <a href=\"#\"><img src=\"{{ asset('images/t3.jpg') }}\" alt=\"\"/></a>
                            </div>
                            <div class=\"clearfix\"> </div>
                        </div>
                    </div>
                    <div class=\"col-md-4 footer-info\">
                        <h3>Get In Touch</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum has been the industry's standard dummy text ever since, </p>
                        <div class=\"support\">
                            <form>
                                <input type=\"text\" value=\"\" onfocus=\"this.value='';\" onblur=\"if (this.value == '') {this.value ='';}\">
                                <input type=\"submit\" value=\"SUBSCRIBE\">
                            </form>
                        </div>
                    </div>

                    <div class=\"clearfix\"> </div>
                </div>
        {% endblock %}


        {% block javascripts %}
        {% endblock %}


    </body>
</html>
", "base.html.twig", "C:\\wamp64\\www\\ProjetPI\\app\\Resources\\views\\base.html.twig");
    }
}
