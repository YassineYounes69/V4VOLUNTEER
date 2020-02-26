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

/* @Project/Default/index.html.twig */
class __TwigTemplate_8b2aaa7d179eafb1908bf0e6021b87f4e7e68d9f4d6f14e873199278466318dc extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'title' => [$this, 'block_title'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Project/Default/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Project/Default/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "@Project/Default/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "
    <!doctype html>
    <html>
    <head>
        <meta charset=\"UTF-8\"/>
        <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
        <!-- Custom Theme files -->
        <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
        <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"> </script>
    </head>
    <body>
    <form method=\"post\">
        <div class=\"container\"  align=\"left\" >
            ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "

            ";
        // line 19
        $context["class"] = "";
        // line 20
        echo "            ";
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nomRef", []), "vars", []), "valid", [])) {
            // line 21
            echo "                ";
            $context["class"] = "has-error";
            // line 22
            echo "            ";
        }
        // line 23
        echo "            <div class=\"form-group\">
                <label class=\"control-label\" for=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nomRef", []), "vars", []), "id", []), "html", null, true);
        echo "\">Nom Du Réfugié</label>
                <br>
                <input type=\"text\"  style=\"width: 320px\" class=\"form-control\" id=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nomRef", []), "vars", []), "id", []), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nomRef", []), "vars", []), "full_name", []), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nomRef", []), "vars", []), "value", []), "html", null, true);
        echo "\">
                ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nomRef", []), 'errors');
        echo "
                ";
        // line 28
        $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nomRef", []), "setRendered", []);
        // line 29
        echo "                ";
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nomRef", []), "vars", []), "valid", [])) {
            // line 30
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nomRef", []), "vars", []), "errors", []));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 31
                echo "                        <span class=\"help-block\"></span>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "                ";
        }
        // line 34
        echo "            </div>

            ";
        // line 36
        $context["class"] = "";
        // line 37
        echo "            ";
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prenomRef", []), "vars", []), "valid", [])) {
            // line 38
            echo "                ";
            $context["class"] = "has-error";
            // line 39
            echo "            ";
        }
        // line 40
        echo "            <div class=\"form-group\">
                <label class=\"control-label\" for=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prenomRef", []), "vars", []), "id", []), "html", null, true);
        echo "\">Prénom Du Réfugié</label>
                <br>
                <input type=\"text\" style=\"width: 320px\" class=\"form-control\" id=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prenomRef", []), "vars", []), "id", []), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prenomRef", []), "vars", []), "full_name", []), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prenomRef", []), "vars", []), "value", []), "html", null, true);
        echo "\">
                ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prenomRef", []), 'errors');
        echo "
                ";
        // line 45
        $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prenomRef", []), "setRendered", []);
        // line 46
        echo "                ";
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prenomRef", []), "vars", []), "valid", [])) {
            // line 47
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prenomRef", []), "vars", []), "errors", []));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 48
                echo "                        <span class=\"help-block\"></span>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "                ";
        }
        // line 51
        echo "            </div>

            ";
        // line 53
        $context["class"] = "";
        // line 54
        echo "            ";
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ageRef", []), "vars", []), "valid", [])) {
            // line 55
            echo "                ";
            $context["class"] = "has-error";
            // line 56
            echo "            ";
        }
        // line 57
        echo "            <div class=\"form-group\">
                <label class=\"control-label\" for=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ageRef", []), "vars", []), "id", []), "html", null, true);
        echo "\">Age Du Réfugié</label>
                <input type=\"number\" style=\"width: 320px\" class=\"form-control\" id=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ageRef", []), "vars", []), "id", []), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ageRef", []), "vars", []), "full_name", []), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ageRef", []), "vars", []), "value", []), "html", null, true);
        echo "\">
                ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ageRef", []), 'errors');
        echo "
                ";
        // line 61
        $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ageRef", []), "setRendered", []);
        // line 62
        echo "                ";
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ageRef", []), "vars", []), "valid", [])) {
            // line 63
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ageRef", []), "vars", []), "errors", []));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 64
                echo "                        <span class=\"help-block\"></span>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            echo "                ";
        }
        // line 67
        echo "            </div>

            ";
        // line 69
        $context["class"] = "";
        // line 70
        echo "            ";
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "genderRef", []), "vars", []), "valid", [])) {
            // line 71
            echo "                ";
            $context["class"] = "has-error";
            // line 72
            echo "            ";
        }
        // line 73
        echo "            <div class=\"form-group\">
                <label class=\"control-label\" for=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "genderRef", []), "vars", []), "id", []), "html", null, true);
        echo "\">Sexe du Réfugié</label>
                <br>
                <br>
                <input class=\"form-check-label\" type=\"radio\" style=\"width: 100px\" class=\"form-control\" id=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "genderRef", []), "vars", []), "id", []), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "genderRef", []), "vars", []), "full_name", []), "html", null, true);
        echo "\" value=\"homme\">
                <span>Homme</span>
                <input class=\"form-check-label\" type=\"radio\" style=\"width: 100px\" class=\"form-control\" id=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "genderRef", []), "vars", []), "id", []), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "genderRef", []), "vars", []), "full_name", []), "html", null, true);
        echo "\" value=\"femme\">
                <span>Femme</span>
                ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "genderRef", []), 'errors');
        echo "
                ";
        // line 82
        $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "genderRef", []), "setRendered", []);
        // line 83
        echo "                ";
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "genderRef", []), "vars", []), "valid", [])) {
            // line 84
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "genderRef", []), "vars", []), "errors", []));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 85
                echo "                        <span class=\"help-block\"></span>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            echo "                ";
        }
        // line 88
        echo "            </div>
            <br>
            <br>

            ";
        // line 92
        $context["class"] = "";
        // line 93
        echo "            ";
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "paysRef", []), "vars", []), "valid", [])) {
            // line 94
            echo "                ";
            $context["class"] = "has-error";
            // line 95
            echo "            ";
        }
        // line 96
        echo "            <div class=\"form-group\">
                <label  class=\"control-label\" for=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "paysRef", []), "vars", []), "id", []), "html", null, true);
        echo "\">Pays du Réfugié</label>
                <br>
                <br>
                <br>
                <select class=\"btn btn-sm btn-outline-primary dropdown-toggle\" align=\"left\" type=\"text\" style=\"width:320px\"  class=\"form-control \" id=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "paysRef", []), "vars", []), "id", []), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "paysRef", []), "vars", []), "full_name", []), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "paysRef", []), "vars", []), "value", []), "html", null, true);
        echo "\">
                    <option selected>Choose</option>
                    <option value=\"algeria\">Algeria</option>
                    <option value=\"angola\">Angola</option>
                    <option value=\"benin\">Benin</option>
                    <option value=\"botswana\">Botswana</option>
                    <option value=\"burkina Faso\">Burkina Faso</option>
                    <option value=\"burundi\">Burundi</option>
                    <option value=\"cameroon\">Cameroon</option>
                    <option value=\"cape-verde\">Cape Verde</option>
                    <option value=\"central-african-republic\">Central African Republic</option>
                    <option value=\"chad\">Chad</option>
                    <option value=\"comoros\">Comoros</option>
                    <option value=\"congo-brazzaville\">Congo - Brazzaville</option>
                    <option value=\"congo-kinshasa\">Congo - Kinshasa</option>
                    <option value=\"ivory-coast\">Côte d’Ivoire</option>
                    <option value=\"djibouti\">Djibouti</option>
                    <option value=\"egypt\">Egypt</option>
                    <option value=\"equatorial-guinea\">Equatorial Guinea</option>
                    <option value=\"eritrea\">Eritrea</option>
                    <option value=\"ethiopia\">Ethiopia</option>
                    <option value=\"gabon\">Gabon</option>
                    <option value=\"gambia\">Gambia</option>
                    <option value=\"ghana\">Ghana</option>
                    <option value=\"guinea\">Guinea</option>
                    <option value=\"guinea-bissau\">Guinea-Bissau</option>
                    <option value=\"kenya\">Kenya</option>
                    <option value=\"lesotho\">Lesotho</option>
                    <option value=\"liberia\">Liberia</option>
                    <option value=\"libya\">Libya</option>
                    <option value=\"madagascar\">Madagascar</option>
                    <option value=\"malawi\">Malawi</option>
                    <option value=\"mali\">Mali</option>
                    <option value=\"mauritania\">Mauritania</option>
                    <option value=\"mauritius\">Mauritius</option>
                    <option value=\"mayotte\">Mayotte</option>
                    <option value=\"morocco\">Morocco</option>
                    <option value=\"mozambique\">Mozambique</option>
                    <option value=\"namibia\">Namibia</option>
                    <option value=\"niger\">Niger</option>
                    <option value=\"nigeria\">Nigeria</option>
                    <option value=\"rwanda\">Rwanda</option>
                    <option value=\"reunion\">Réunion</option>
                    <option value=\"saint-helena\">Saint Helena</option>
                    <option value=\"senegal\">Senegal</option>
                    <option value=\"seychelles\">Seychelles</option>
                    <option value=\"sierra-leone\">Sierra Leone</option>
                    <option value=\"somalia\">Somalia</option>
                    <option value=\"south-africa\">South Africa</option>
                    <option value=\"sudan\">Sudan</option>
                    <option value=\"south-sudan\">Sudan</option>
                    <option value=\"swaziland\">Swaziland</option>
                    <option value=\"Sao-tome-príncipe\">São Tomé and Príncipe</option>
                    <option value=\"tanzania\">Tanzania</option>
                    <option value=\"togo\">Togo</option>
                    <option value=\"uganda\">Uganda</option>
                    <option value=\"western-sahara\">Western Sahara</option>
                    <option value=\"zambia\">Zambia</option>
                    <option value=\"zimbabwe\">Zimbabwe</option>
                </select>

                ";
        // line 162
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "paysRef", []), 'errors');
        echo "
                ";
        // line 163
        $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "paysRef", []), "setRendered", []);
        // line 164
        echo "                ";
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "paysRef", []), "vars", []), "valid", [])) {
            // line 165
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "paysRef", []), "vars", []), "errors", []));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 166
                echo "                        <span class=\"help-block\"></span>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 168
            echo "                ";
        }
        // line 169
        echo "            </div>
            <br>
            <br>

            ";
        // line 173
        $context["class"] = "";
        // line 174
        echo "            ";
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "etatRef", []), "vars", []), "valid", [])) {
            // line 175
            echo "                ";
            $context["class"] = "has-error";
            // line 176
            echo "            ";
        }
        // line 177
        echo "            <div class=\"form-group\">
                <label class=\"control-label\" for=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "etatRef", []), "vars", []), "id", []), "html", null, true);
        echo "\">Etat civil du Réfugié</label>
                <br>
                <br>
                <select class=\"btn btn-sm btn-outline-primary dropdown-toggle\" type=\"text\"  style=\"width: 320px\" class=\"form-control \" id=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "etatRef", []), "vars", []), "id", []), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "etatRef", []), "vars", []), "full_name", []), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "etatRef", []), "vars", []), "value", []), "html", null, true);
        echo "\" >
                    <option selected>Choose</option>
                    <option value=\"célibataire\">Célibataire</option>
                    <option value=\"marié\">Marié</option>
                    <option value=\"divorcé\">Divorcé</option>
                </select>
                ";
        // line 187
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "etatRef", []), 'errors');
        echo "
                ";
        // line 188
        $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "etatRef", []), "setRendered", []);
        // line 189
        echo "                ";
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "etatRef", []), "vars", []), "valid", [])) {
            // line 190
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "etatRef", []), "vars", []), "errors", []));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 191
                echo "                        <span class=\"help-block\"></span>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 193
            echo "                ";
        }
        // line 194
        echo "            </div>
        </div>
        <br>
        <br>

        ";
        // line 199
        $context["class"] = "";
        // line 200
        echo "        ";
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "image", []), "vars", []), "valid", [])) {
            // line 201
            echo "            ";
            $context["class"] = "has-error";
            // line 202
            echo "        ";
        }
        // line 203
        echo "        <div class=\"form-group\">
            <label class=\"control-label\" for=\"";
        // line 204
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "image", []), "vars", []), "id", []), "html", null, true);
        echo "\">Image Du Réfugié</label>
            <input type=\"image\" style=\"width: 320px\" class=\"form-control\"  id=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "image", []), "vars", []), "id", []), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "image", []), "vars", []), "full_name", []), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "image", []), "vars", []), "value", []), "html", null, true);
        echo "\">
            ";
        // line 206
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "image", []), 'errors');
        echo "
            ";
        // line 207
        $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "image", []), "setRendered", []);
        // line 208
        echo "            ";
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "image", []), "vars", []), "valid", [])) {
            // line 209
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "image", []), "vars", []), "errors", []));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 210
                echo "                    <span class=\"help-block\"></span>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 212
            echo "            ";
        }
        // line 213
        echo "        </div>
        <div align=\"center\">


            <button href=\"";
        // line 217
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("project_AjouterRef");
        echo "\" type=\"submit\" class=\"btn btn-primary btn-icon-text\" id=\"submit\"  > Ajouter </button>
            ";
        // line 218
        $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "Ajouter", []), "setRendered", []);
        // line 219
        echo "


        </div>
        ";
        // line 223
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    </form>
    </body>
    </html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Ajouter un Réfugié";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Project/Default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  589 => 8,  573 => 223,  567 => 219,  565 => 218,  561 => 217,  555 => 213,  552 => 212,  545 => 210,  540 => 209,  537 => 208,  535 => 207,  531 => 206,  523 => 205,  519 => 204,  516 => 203,  513 => 202,  510 => 201,  507 => 200,  505 => 199,  498 => 194,  495 => 193,  488 => 191,  483 => 190,  480 => 189,  478 => 188,  474 => 187,  461 => 181,  455 => 178,  452 => 177,  449 => 176,  446 => 175,  443 => 174,  441 => 173,  435 => 169,  432 => 168,  425 => 166,  420 => 165,  417 => 164,  415 => 163,  411 => 162,  343 => 101,  336 => 97,  333 => 96,  330 => 95,  327 => 94,  324 => 93,  322 => 92,  316 => 88,  313 => 87,  306 => 85,  301 => 84,  298 => 83,  296 => 82,  292 => 81,  285 => 79,  278 => 77,  272 => 74,  269 => 73,  266 => 72,  263 => 71,  260 => 70,  258 => 69,  254 => 67,  251 => 66,  244 => 64,  239 => 63,  236 => 62,  234 => 61,  230 => 60,  222 => 59,  218 => 58,  215 => 57,  212 => 56,  209 => 55,  206 => 54,  204 => 53,  200 => 51,  197 => 50,  190 => 48,  185 => 47,  182 => 46,  180 => 45,  176 => 44,  168 => 43,  163 => 41,  160 => 40,  157 => 39,  154 => 38,  151 => 37,  149 => 36,  145 => 34,  142 => 33,  135 => 31,  130 => 30,  127 => 29,  125 => 28,  121 => 27,  113 => 26,  108 => 24,  105 => 23,  102 => 22,  99 => 21,  96 => 20,  94 => 19,  89 => 17,  81 => 12,  77 => 11,  72 => 9,  68 => 8,  61 => 3,  52 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block content %}

    <!doctype html>
    <html>
    <head>
        <meta charset=\"UTF-8\"/>
        <title>{% block title %}Ajouter un Réfugié{% endblock %}</title>
        <link href=\"{{ asset('css/bootstrap.css') }}\" rel='stylesheet' type='text/css' />
        <!-- Custom Theme files -->
        <link href=\"{{ asset('css/style.css') }}\" rel='stylesheet' type='text/css' />
        <script src=\"{{ asset('js/jquery.min.js') }}\"> </script>
    </head>
    <body>
    <form method=\"post\">
        <div class=\"container\"  align=\"left\" >
            {{ form_start(form,{'attr':{'novalidate':'novalidate'}}) }}

            {% set class='' %}
            {% if not form.nomRef.vars.valid %}
                {% set class='has-error' %}
            {% endif %}
            <div class=\"form-group\">
                <label class=\"control-label\" for=\"{{ form.nomRef.vars.id}}\">Nom Du Réfugié</label>
                <br>
                <input type=\"text\"  style=\"width: 320px\" class=\"form-control\" id=\"{{ form.nomRef.vars.id}}\" name=\"{{  form.nomRef.vars.full_name}}\" value=\"{{  form.nomRef.vars.value}}\">
                {{ form_errors(form.nomRef) }}
                {% do form.nomRef.setRendered %}
                {% if not form.nomRef.vars.valid %}
                    {% for error in form.nomRef.vars.errors  %}
                        <span class=\"help-block\"></span>
                    {% endfor %}
                {% endif %}
            </div>

            {% set class='' %}
            {% if not form.prenomRef.vars.valid %}
                {% set class='has-error' %}
            {% endif %}
            <div class=\"form-group\">
                <label class=\"control-label\" for=\"{{ form.prenomRef.vars.id}}\">Prénom Du Réfugié</label>
                <br>
                <input type=\"text\" style=\"width: 320px\" class=\"form-control\" id=\"{{ form.prenomRef.vars.id}}\" name=\"{{  form.prenomRef.vars.full_name}}\" value=\"{{  form.prenomRef.vars.value}}\">
                {{ form_errors(form.prenomRef) }}
                {% do form.prenomRef.setRendered %}
                {% if not form.prenomRef.vars.valid %}
                    {% for error in form.prenomRef.vars.errors  %}
                        <span class=\"help-block\"></span>
                    {% endfor %}
                {% endif %}
            </div>

            {% set class='' %}
            {% if not form.ageRef.vars.valid %}
                {% set class='has-error' %}
            {% endif %}
            <div class=\"form-group\">
                <label class=\"control-label\" for=\"{{ form.ageRef.vars.id}}\">Age Du Réfugié</label>
                <input type=\"number\" style=\"width: 320px\" class=\"form-control\" id=\"{{ form.ageRef.vars.id}}\" name=\"{{  form.ageRef.vars.full_name}}\" value=\"{{  form.ageRef.vars.value}}\">
                {{ form_errors(form.ageRef) }}
                {% do form.ageRef.setRendered %}
                {% if not form.ageRef.vars.valid %}
                    {% for error in form.ageRef.vars.errors  %}
                        <span class=\"help-block\"></span>
                    {% endfor %}
                {% endif %}
            </div>

            {% set class='' %}
            {% if not form.genderRef.vars.valid %}
                {% set class='has-error' %}
            {% endif %}
            <div class=\"form-group\">
                <label class=\"control-label\" for=\"{{ form.genderRef.vars.id}}\">Sexe du Réfugié</label>
                <br>
                <br>
                <input class=\"form-check-label\" type=\"radio\" style=\"width: 100px\" class=\"form-control\" id=\"{{ form.genderRef.vars.id}}\" name=\"{{  form.genderRef.vars.full_name}}\" value=\"homme\">
                <span>Homme</span>
                <input class=\"form-check-label\" type=\"radio\" style=\"width: 100px\" class=\"form-control\" id=\"{{ form.genderRef.vars.id}}\" name=\"{{  form.genderRef.vars.full_name}}\" value=\"femme\">
                <span>Femme</span>
                {{ form_errors(form.genderRef) }}
                {% do form.genderRef.setRendered %}
                {% if not form.genderRef.vars.valid %}
                    {% for error in form.genderRef.vars.errors  %}
                        <span class=\"help-block\"></span>
                    {% endfor %}
                {% endif %}
            </div>
            <br>
            <br>

            {% set class='' %}
            {% if not form.paysRef.vars.valid %}
                {% set class='has-error' %}
            {% endif %}
            <div class=\"form-group\">
                <label  class=\"control-label\" for=\"{{ form.paysRef.vars.id}}\">Pays du Réfugié</label>
                <br>
                <br>
                <br>
                <select class=\"btn btn-sm btn-outline-primary dropdown-toggle\" align=\"left\" type=\"text\" style=\"width:320px\"  class=\"form-control \" id=\"{{ form.paysRef.vars.id}}\" name=\"{{  form.paysRef.vars.full_name}}\" value=\"{{  form.paysRef.vars.value}}\">
                    <option selected>Choose</option>
                    <option value=\"algeria\">Algeria</option>
                    <option value=\"angola\">Angola</option>
                    <option value=\"benin\">Benin</option>
                    <option value=\"botswana\">Botswana</option>
                    <option value=\"burkina Faso\">Burkina Faso</option>
                    <option value=\"burundi\">Burundi</option>
                    <option value=\"cameroon\">Cameroon</option>
                    <option value=\"cape-verde\">Cape Verde</option>
                    <option value=\"central-african-republic\">Central African Republic</option>
                    <option value=\"chad\">Chad</option>
                    <option value=\"comoros\">Comoros</option>
                    <option value=\"congo-brazzaville\">Congo - Brazzaville</option>
                    <option value=\"congo-kinshasa\">Congo - Kinshasa</option>
                    <option value=\"ivory-coast\">Côte d’Ivoire</option>
                    <option value=\"djibouti\">Djibouti</option>
                    <option value=\"egypt\">Egypt</option>
                    <option value=\"equatorial-guinea\">Equatorial Guinea</option>
                    <option value=\"eritrea\">Eritrea</option>
                    <option value=\"ethiopia\">Ethiopia</option>
                    <option value=\"gabon\">Gabon</option>
                    <option value=\"gambia\">Gambia</option>
                    <option value=\"ghana\">Ghana</option>
                    <option value=\"guinea\">Guinea</option>
                    <option value=\"guinea-bissau\">Guinea-Bissau</option>
                    <option value=\"kenya\">Kenya</option>
                    <option value=\"lesotho\">Lesotho</option>
                    <option value=\"liberia\">Liberia</option>
                    <option value=\"libya\">Libya</option>
                    <option value=\"madagascar\">Madagascar</option>
                    <option value=\"malawi\">Malawi</option>
                    <option value=\"mali\">Mali</option>
                    <option value=\"mauritania\">Mauritania</option>
                    <option value=\"mauritius\">Mauritius</option>
                    <option value=\"mayotte\">Mayotte</option>
                    <option value=\"morocco\">Morocco</option>
                    <option value=\"mozambique\">Mozambique</option>
                    <option value=\"namibia\">Namibia</option>
                    <option value=\"niger\">Niger</option>
                    <option value=\"nigeria\">Nigeria</option>
                    <option value=\"rwanda\">Rwanda</option>
                    <option value=\"reunion\">Réunion</option>
                    <option value=\"saint-helena\">Saint Helena</option>
                    <option value=\"senegal\">Senegal</option>
                    <option value=\"seychelles\">Seychelles</option>
                    <option value=\"sierra-leone\">Sierra Leone</option>
                    <option value=\"somalia\">Somalia</option>
                    <option value=\"south-africa\">South Africa</option>
                    <option value=\"sudan\">Sudan</option>
                    <option value=\"south-sudan\">Sudan</option>
                    <option value=\"swaziland\">Swaziland</option>
                    <option value=\"Sao-tome-príncipe\">São Tomé and Príncipe</option>
                    <option value=\"tanzania\">Tanzania</option>
                    <option value=\"togo\">Togo</option>
                    <option value=\"uganda\">Uganda</option>
                    <option value=\"western-sahara\">Western Sahara</option>
                    <option value=\"zambia\">Zambia</option>
                    <option value=\"zimbabwe\">Zimbabwe</option>
                </select>

                {{ form_errors(form.paysRef) }}
                {% do form.paysRef.setRendered %}
                {% if not form.paysRef.vars.valid %}
                    {% for error in form.paysRef.vars.errors  %}
                        <span class=\"help-block\"></span>
                    {% endfor %}
                {% endif %}
            </div>
            <br>
            <br>

            {% set class='' %}
            {% if not form.etatRef.vars.valid %}
                {% set class='has-error' %}
            {% endif %}
            <div class=\"form-group\">
                <label class=\"control-label\" for=\"{{ form.etatRef.vars.id}}\">Etat civil du Réfugié</label>
                <br>
                <br>
                <select class=\"btn btn-sm btn-outline-primary dropdown-toggle\" type=\"text\"  style=\"width: 320px\" class=\"form-control \" id=\"{{ form.etatRef.vars.id}}\" name=\"{{  form.etatRef.vars.full_name}}\" value=\"{{  form.etatRef.vars.value}}\" >
                    <option selected>Choose</option>
                    <option value=\"célibataire\">Célibataire</option>
                    <option value=\"marié\">Marié</option>
                    <option value=\"divorcé\">Divorcé</option>
                </select>
                {{ form_errors(form.etatRef) }}
                {% do form.etatRef.setRendered %}
                {% if not form.etatRef.vars.valid %}
                    {% for error in form.etatRef.vars.errors  %}
                        <span class=\"help-block\"></span>
                    {% endfor %}
                {% endif %}
            </div>
        </div>
        <br>
        <br>

        {% set class='' %}
        {% if not form.image.vars.valid %}
            {% set class='has-error' %}
        {% endif %}
        <div class=\"form-group\">
            <label class=\"control-label\" for=\"{{ form.image.vars.id}}\">Image Du Réfugié</label>
            <input type=\"image\" style=\"width: 320px\" class=\"form-control\"  id=\"{{ form.image.vars.id}}\" name=\"{{  form.image.vars.full_name}}\" value=\"{{  form.image.vars.value}}\">
            {{ form_errors(form.image) }}
            {% do form.image.setRendered %}
            {% if not form.image.vars.valid %}
                {% for error in form.image.vars.errors  %}
                    <span class=\"help-block\"></span>
                {% endfor %}
            {% endif %}
        </div>
        <div align=\"center\">


            <button href=\"{{ path('project_AjouterRef') }}\" type=\"submit\" class=\"btn btn-primary btn-icon-text\" id=\"submit\"  > Ajouter </button>
            {% do form.Ajouter.setRendered %}



        </div>
        {{ form_end(form) }}

    </form>
    </body>
    </html>
{% endblock %}
", "@Project/Default/index.html.twig", "C:\\wamp64\\www\\ProjetFIN\\src\\ProjectBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
