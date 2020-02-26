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

/* @Project/Default/AfficherLogBack.html.twig */
class __TwigTemplate_c9187beacff613087f999b188006c52a35bd55a00506761e16f9e4d36003c250 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Project/Default/AfficherLogBack.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Project/Default/AfficherLogBack.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "@Project/Default/AfficherLogBack.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <br>
    <br>
    <br>
    <br>

    <div class=\"card-body\">
        <h2 class=\"card-title\" align=\"center\"> LISTE DES LOGEMENTS </h2>
        <br>
        <br>



        <p class=\"card-description\">
            <a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("project_AfficherLogBack");
        echo "\">
                <center>
                    ";
        // line 19
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ASSO")) {
            // line 20
            echo "                    <button type=\"button\" class=\"btn btn-success btn-rounded btn-fw\">Accéder Aux Actions</button>
                    ";
        }
        // line 22
        echo "                </center>
            </a>
        </p>
        <br>
        <br>
        <br>
        <div class=\"table-responsive\">
            <table id=\"contenu\" class=\"table table-hover\" >
                <thead>
                <tr>
                    <th>
                        Nom logement
                    </th>
                    <th>
                        Adresse du Logement
                    </th>
                    <th>
                        Nombre de chambres
                    </th>
                    <th>
                        Etat Logement
                    </th>


                </tr>
                </thead>
                <tbody>
                ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Logement"] ?? $this->getContext($context, "Logement")));
        foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
            // line 50
            echo "                    <tr>
                        <td>
                            ";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "nomLog", []), "html", null, true);
            echo "
                        </td>
                        <td>
                            ";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "adresse", []), "html", null, true);
            echo "
                        </td>
                        <td>
                            ";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "nbChambre", []), "html", null, true);
            echo "
                        </td>
                        <td>
                            ";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "etatLog", []), "html", null, true);
            echo "
                        </td>

                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "                </tbody>
            </table>
            <br>
            <br>
            <br>
        </div>
    </div>




";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Project/Default/AfficherLogBack.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 66,  141 => 61,  135 => 58,  129 => 55,  123 => 52,  119 => 50,  115 => 49,  86 => 22,  82 => 20,  80 => 19,  75 => 17,  60 => 4,  51 => 3,  29 => 1,);
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
    <br>
    <br>
    <br>
    <br>

    <div class=\"card-body\">
        <h2 class=\"card-title\" align=\"center\"> LISTE DES LOGEMENTS </h2>
        <br>
        <br>



        <p class=\"card-description\">
            <a href=\"{{ path('project_AfficherLogBack') }}\">
                <center>
                    {% if is_granted('ROLE_ASSO') %}
                    <button type=\"button\" class=\"btn btn-success btn-rounded btn-fw\">Accéder Aux Actions</button>
                    {% endif %}
                </center>
            </a>
        </p>
        <br>
        <br>
        <br>
        <div class=\"table-responsive\">
            <table id=\"contenu\" class=\"table table-hover\" >
                <thead>
                <tr>
                    <th>
                        Nom logement
                    </th>
                    <th>
                        Adresse du Logement
                    </th>
                    <th>
                        Nombre de chambres
                    </th>
                    <th>
                        Etat Logement
                    </th>


                </tr>
                </thead>
                <tbody>
                {% for l in Logement %}
                    <tr>
                        <td>
                            {{ l.nomLog }}
                        </td>
                        <td>
                            {{ l.adresse }}
                        </td>
                        <td>
                            {{ l.nbChambre }}
                        </td>
                        <td>
                            {{ l.etatLog }}
                        </td>

                    </tr>
                {% endfor %}
                </tbody>
            </table>
            <br>
            <br>
            <br>
        </div>
    </div>




{% endblock %}

", "@Project/Default/AfficherLogBack.html.twig", "C:\\wamp64\\www\\ProjetFIN\\src\\ProjectBundle\\Resources\\views\\Default\\AfficherLogBack.html.twig");
    }
}
