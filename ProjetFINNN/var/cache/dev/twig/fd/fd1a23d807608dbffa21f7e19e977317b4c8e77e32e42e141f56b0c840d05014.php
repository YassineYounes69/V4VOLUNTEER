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

/* @Project/Back/AfficherListe.html.twig */
class __TwigTemplate_b73c4569df2595c012d7e1b08f627ffb521f0a7f0f144b67438ea2abdd17c074 extends \Twig\Template
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
        return "EspaceAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Project/Back/AfficherListe.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Project/Back/AfficherListe.html.twig"));

        $this->parent = $this->loadTemplate("EspaceAdmin.html.twig", "@Project/Back/AfficherListe.html.twig", 1);
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
        echo "
    <div class=\"col-lg-12 stretch-card\">
        <div class=\"card\">
            <div class=\"card-body\">
                <h4 class=\"card-title\">Gestion des evenements</h4>
                <div class=\"col-sm-6 col-md-4 col-lg-3\"> <a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajouterEvenement");
        echo "\"> <i class=\"ti-plus\"></i> Ajouter Evenement</a></div>

                <div class=\"table-responsive pt-3\">
                    <table class=\"table table-bordered\">
                        <thead>
                        <tr class=\"table-danger\">
                            <th>Identifiant</th>
                            <th>Nom</th>
                            <th>créateur</th>
                            <th>Lieu</th>
                            <th>Date</th>
                            <th>Capacité</th>
                            <th>Prix</th>
                            <th>Nombre des participants</th>
                            <th>Déscription</th>
                            <th>Actions</th>

                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["evenement"] ?? $this->getContext($context, "evenement")));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 30
            echo "                        <tr class=\"table-info\">
                            <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "reference", []), "html", null, true);
            echo "</td>
                            <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "nom", []), "html", null, true);
            echo "</td>
                            <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "createur", []), "html", null, true);
            echo "</td>
                            <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "lieu", []), "html", null, true);
            echo "</td>
                            <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["e"], "date", [])), "html", null, true);
            echo "</td>
                            <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "capacite", []), "html", null, true);
            echo "</td>
                            <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "prix", []), "html", null, true);
            echo "</td>
                            <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "nbParticipant", []), "html", null, true);
            echo "</td>
                            <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "description", []), "html", null, true);
            echo "</td>

                            <td>
                                <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modifierEvenement", ["reference" => $this->getAttribute($context["e"], "reference", [])]), "html", null, true);
            echo "\"> Modifier</a>
                                <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("supprimerEvenement", ["reference" => $this->getAttribute($context["e"], "reference", [])]), "html", null, true);
            echo "\" >Supprimer</a>
                            </td>
                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Project/Back/AfficherListe.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 47,  139 => 43,  135 => 42,  129 => 39,  125 => 38,  121 => 37,  117 => 36,  113 => 35,  109 => 34,  105 => 33,  101 => 32,  97 => 31,  94 => 30,  90 => 29,  67 => 9,  60 => 4,  51 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'EspaceAdmin.html.twig' %}

{% block content %}

    <div class=\"col-lg-12 stretch-card\">
        <div class=\"card\">
            <div class=\"card-body\">
                <h4 class=\"card-title\">Gestion des evenements</h4>
                <div class=\"col-sm-6 col-md-4 col-lg-3\"> <a href=\"{{ path('ajouterEvenement') }}\"> <i class=\"ti-plus\"></i> Ajouter Evenement</a></div>

                <div class=\"table-responsive pt-3\">
                    <table class=\"table table-bordered\">
                        <thead>
                        <tr class=\"table-danger\">
                            <th>Identifiant</th>
                            <th>Nom</th>
                            <th>créateur</th>
                            <th>Lieu</th>
                            <th>Date</th>
                            <th>Capacité</th>
                            <th>Prix</th>
                            <th>Nombre des participants</th>
                            <th>Déscription</th>
                            <th>Actions</th>

                        </tr>
                        </thead>
                        <tbody>
                        {% for e in evenement %}
                        <tr class=\"table-info\">
                            <td>{{ e.reference }}</td>
                            <td>{{ e.nom }}</td>
                            <td>{{ e.createur }}</td>
                            <td>{{ e.lieu }}</td>
                            <td>{{ e.date|date }}</td>
                            <td>{{ e.capacite }}</td>
                            <td>{{ e.prix }}</td>
                            <td>{{ e.nbParticipant }}</td>
                            <td>{{ e.description }}</td>

                            <td>
                                <a href=\"{{ path('modifierEvenement', {'reference': e.reference}) }}\"> Modifier</a>
                                <a href=\"{{ path('supprimerEvenement', {'reference': e.reference}) }}\" >Supprimer</a>
                            </td>
                        </tr>
                        {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
{% endblock %}", "@Project/Back/AfficherListe.html.twig", "C:\\wamp64\\www\\ProjetPI\\src\\ProjectBundle\\Resources\\views\\Back\\AfficherListe.html.twig");
    }
}
