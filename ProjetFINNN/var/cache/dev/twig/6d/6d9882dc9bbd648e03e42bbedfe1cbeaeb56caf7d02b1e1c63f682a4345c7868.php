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

/* @Project/Default/AfficherBackk.html.twig */
class __TwigTemplate_eb4d67895019d815d0a952c7588885fe893b8d345612297167ba2de47a532a5a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Project/Default/AfficherBackk.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Project/Default/AfficherBackk.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "@Project/Default/AfficherBackk.html.twig", 1);
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
        <h2 class=\"card-title\" align=\"center\"> LISTE DES REFUGIES </h2>
        <br>
        <br>


        <p class=\"card-description\">

            <a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("project_AfficherRefBack");
        echo "\">
                <center>
                    ";
        // line 19
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ASSO")) {
            // line 20
            echo "                <button type=\"button\" class=\"btn btn-success btn-rounded btn-fw\"  >Accéder Aux Actions </button>
                    ";
        }
        // line 22
        echo "                </center>

            </a>
        </p>
        <br>
        <br>
        <br>
        <script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/sorttable.js"), "html", null, true);
        echo "\"></script>
        <div class=\"table-responsive\">
            <table id=\"contenu\" class=\"sortable\" width=\"100%\" >
                <thead>
                <tr>
                    <th>
                        Nom
                    </th>
                    <th>
                        Prenom
                    </th>
                    <th>
                        Pays
                    </th>
                    <th>
                        Etat Civil
                    </th>

                    <th>
                        Age
                    </th>

                    <th>
                        Gender
                    </th>
                    <th>
                        Image
                    </th>


                </tr>
                </thead>
                <tbody>
                ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Refugies"] ?? $this->getContext($context, "Refugies")));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            // line 63
            echo "                    <tr>
                        <td>";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "nomref", []), "html", null, true);
            echo "</td>
                        <td>";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "prenomref", []), "html", null, true);
            echo "</td>
                        <td>";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "paysref", []), "html", null, true);
            echo "</td>
                        <td>";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "etatref", []), "html", null, true);
            echo "</td>
                        <td>";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "ageref", []), "html", null, true);
            echo "</td>
                        <td>";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "genderref", []), "html", null, true);
            echo "</td>
                        <td>";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "image", []), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
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
        return "@Project/Default/AfficherBackk.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 73,  162 => 70,  158 => 69,  154 => 68,  150 => 67,  146 => 66,  142 => 65,  138 => 64,  135 => 63,  131 => 62,  95 => 29,  86 => 22,  82 => 20,  80 => 19,  75 => 17,  60 => 4,  51 => 3,  29 => 1,);
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
        <h2 class=\"card-title\" align=\"center\"> LISTE DES REFUGIES </h2>
        <br>
        <br>


        <p class=\"card-description\">

            <a href=\"{{ path('project_AfficherRefBack') }}\">
                <center>
                    {% if is_granted('ROLE_ASSO') %}
                <button type=\"button\" class=\"btn btn-success btn-rounded btn-fw\"  >Accéder Aux Actions </button>
                    {% endif %}
                </center>

            </a>
        </p>
        <br>
        <br>
        <br>
        <script src=\"{{ asset('js/sorttable.js') }}\"></script>
        <div class=\"table-responsive\">
            <table id=\"contenu\" class=\"sortable\" width=\"100%\" >
                <thead>
                <tr>
                    <th>
                        Nom
                    </th>
                    <th>
                        Prenom
                    </th>
                    <th>
                        Pays
                    </th>
                    <th>
                        Etat Civil
                    </th>

                    <th>
                        Age
                    </th>

                    <th>
                        Gender
                    </th>
                    <th>
                        Image
                    </th>


                </tr>
                </thead>
                <tbody>
                {% for r in Refugies %}
                    <tr>
                        <td>{{ r.nomref }}</td>
                        <td>{{ r.prenomref }}</td>
                        <td>{{ r.paysref }}</td>
                        <td>{{ r.etatref }}</td>
                        <td>{{ r.ageref }}</td>
                        <td>{{ r.genderref }}</td>
                        <td>{{ r.image }}</td>
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

", "@Project/Default/AfficherBackk.html.twig", "C:\\wamp64\\www\\ProjetFIN\\src\\ProjectBundle\\Resources\\views\\Default\\AfficherBackk.html.twig");
    }
}
