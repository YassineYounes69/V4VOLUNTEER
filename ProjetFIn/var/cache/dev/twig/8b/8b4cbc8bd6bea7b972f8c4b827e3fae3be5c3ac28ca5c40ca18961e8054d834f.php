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

/* @Project/Default/ModifierLog.html.twig */
class __TwigTemplate_08318f0d9c73a4536733a65b8bf96b764f0d0636049698311b3ace0eef5b66e0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Project/Default/ModifierLog.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Project/Default/ModifierLog.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "@Project/Default/ModifierLog.html.twig", 1);
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
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nomLog", []), "vars", []), "valid", [])) {
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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nomLog", []), "vars", []), "id", []), "html", null, true);
        echo "\">Nom Du Logement</label>
                <br>
                <input type=\"text\"  style=\"width: 320px\" class=\"form-control\" id=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nomLog", []), "vars", []), "id", []), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nomLog", []), "vars", []), "full_name", []), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nomLog", []), "vars", []), "value", []), "html", null, true);
        echo "\">
                ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nomLog", []), 'errors');
        echo "
                ";
        // line 28
        $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nomLog", []), "setRendered", []);
        // line 29
        echo "                ";
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nomLog", []), "vars", []), "valid", [])) {
            // line 30
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nomLog", []), "vars", []), "errors", []));
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
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "adresse", []), "vars", []), "valid", [])) {
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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "adresse", []), "vars", []), "id", []), "html", null, true);
        echo "\">Adresse Du Logement</label>
                <br>
                <input type=\"text\" style=\"width: 320px\" class=\"form-control\" id=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "adresse", []), "vars", []), "id", []), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "adresse", []), "vars", []), "full_name", []), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "adresse", []), "vars", []), "value", []), "html", null, true);
        echo "\">
                ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "adresse", []), 'errors');
        echo "
                ";
        // line 45
        $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "adresse", []), "setRendered", []);
        // line 46
        echo "                ";
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "adresse", []), "vars", []), "valid", [])) {
            // line 47
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "adresse", []), "vars", []), "errors", []));
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
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nbChambre", []), "vars", []), "valid", [])) {
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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nbChambre", []), "vars", []), "id", []), "html", null, true);
        echo "\">Nombre De Chambres</label>
                <input type=\"number\" style=\"width: 320px\" class=\"form-control\" id=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nbChambre", []), "vars", []), "id", []), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nbChambre", []), "vars", []), "full_name", []), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nbChambre", []), "vars", []), "value", []), "html", null, true);
        echo "\">
                ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nbChambre", []), 'errors');
        echo "
                ";
        // line 61
        $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nbChambre", []), "setRendered", []);
        // line 62
        echo "                ";
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nbChambre", []), "vars", []), "valid", [])) {
            // line 63
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nbChambre", []), "vars", []), "errors", []));
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

            <br>
            <br>


        </div>
        <br>
        <br>

        <div align=\"center\">


            <button href=\"";
        // line 80
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("project_AjouterLog");
        echo "\" type=\"submit\" class=\"btn btn-primary btn-icon-text\" id=\"submit\"  > Modifier </button>
            ";
        // line 81
        $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "Ajouter", []), "setRendered", []);
        // line 82
        echo "


        </div>
        ";
        // line 86
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
        <br>
        <br>
        <br>
        <br>
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

        echo "Modifier un Logement";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Project/Default/ModifierLog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  301 => 8,  281 => 86,  275 => 82,  273 => 81,  269 => 80,  254 => 67,  251 => 66,  244 => 64,  239 => 63,  236 => 62,  234 => 61,  230 => 60,  222 => 59,  218 => 58,  215 => 57,  212 => 56,  209 => 55,  206 => 54,  204 => 53,  200 => 51,  197 => 50,  190 => 48,  185 => 47,  182 => 46,  180 => 45,  176 => 44,  168 => 43,  163 => 41,  160 => 40,  157 => 39,  154 => 38,  151 => 37,  149 => 36,  145 => 34,  142 => 33,  135 => 31,  130 => 30,  127 => 29,  125 => 28,  121 => 27,  113 => 26,  108 => 24,  105 => 23,  102 => 22,  99 => 21,  96 => 20,  94 => 19,  89 => 17,  81 => 12,  77 => 11,  72 => 9,  68 => 8,  61 => 3,  52 => 2,  30 => 1,);
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
        <title>{% block title %}Modifier un Logement{% endblock %}</title>
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
            {% if not form.nomLog.vars.valid %}
                {% set class='has-error' %}
            {% endif %}
            <div class=\"form-group\">
                <label class=\"control-label\" for=\"{{ form.nomLog.vars.id}}\">Nom Du Logement</label>
                <br>
                <input type=\"text\"  style=\"width: 320px\" class=\"form-control\" id=\"{{ form.nomLog.vars.id}}\" name=\"{{  form.nomLog.vars.full_name}}\" value=\"{{  form.nomLog.vars.value}}\">
                {{ form_errors(form.nomLog) }}
                {% do form.nomLog.setRendered %}
                {% if not form.nomLog.vars.valid %}
                    {% for error in form.nomLog.vars.errors  %}
                        <span class=\"help-block\"></span>
                    {% endfor %}
                {% endif %}
            </div>

            {% set class='' %}
            {% if not form.adresse.vars.valid %}
                {% set class='has-error' %}
            {% endif %}
            <div class=\"form-group\">
                <label class=\"control-label\" for=\"{{ form.adresse.vars.id}}\">Adresse Du Logement</label>
                <br>
                <input type=\"text\" style=\"width: 320px\" class=\"form-control\" id=\"{{ form.adresse.vars.id}}\" name=\"{{  form.adresse.vars.full_name}}\" value=\"{{  form.adresse.vars.value}}\">
                {{ form_errors(form.adresse) }}
                {% do form.adresse.setRendered %}
                {% if not form.adresse.vars.valid %}
                    {% for error in form.adresse.vars.errors  %}
                        <span class=\"help-block\"></span>
                    {% endfor %}
                {% endif %}
            </div>

            {% set class='' %}
            {% if not form.nbChambre.vars.valid %}
                {% set class='has-error' %}
            {% endif %}
            <div class=\"form-group\">
                <label class=\"control-label\" for=\"{{ form.nbChambre.vars.id}}\">Nombre De Chambres</label>
                <input type=\"number\" style=\"width: 320px\" class=\"form-control\" id=\"{{ form.nbChambre.vars.id}}\" name=\"{{  form.nbChambre.vars.full_name}}\" value=\"{{  form.nbChambre.vars.value}}\">
                {{ form_errors(form.nbChambre) }}
                {% do form.nbChambre.setRendered %}
                {% if not form.nbChambre.vars.valid %}
                    {% for error in form.nbChambre.vars.errors  %}
                        <span class=\"help-block\"></span>
                    {% endfor %}
                {% endif %}
            </div>

            <br>
            <br>


        </div>
        <br>
        <br>

        <div align=\"center\">


            <button href=\"{{ path('project_AjouterLog') }}\" type=\"submit\" class=\"btn btn-primary btn-icon-text\" id=\"submit\"  > Modifier </button>
            {% do form.Ajouter.setRendered %}



        </div>
        {{ form_end(form) }}
        </div>
        <br>
        <br>
        <br>
        <br>
    </form>
    </body>
    </html>
{% endblock %}
", "@Project/Default/ModifierLog.html.twig", "C:\\wamp64\\www\\ProjetFIN\\src\\ProjectBundle\\Resources\\views\\Default\\ModifierLog.html.twig");
    }
}
