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

/* @Project/Back/ReservationBack.html.twig */
class __TwigTemplate_87c70344c2b404d863a36798cee643495efc71712b26c4df221649e4596f45cf extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Project/Back/ReservationBack.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Project/Back/ReservationBack.html.twig"));

        $this->parent = $this->loadTemplate("EspaceAdmin.html.twig", "@Project/Back/ReservationBack.html.twig", 1);
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
                <h4 class=\"card-title\">Gestion des resrvation</h4>
                <div class=\"col-sm-6 col-md-4 col-lg-3\"> <a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajouterReservation");
        echo "\"> <i class=\"ti-plus\"></i> Ajouter Réservation</a></div>

                <div class=\"table-responsive pt-3\">
                    <table class=\"table table-bordered\">
                        <thead>
                        <tr class=\"table-danger\">
                            <th>Réference</th>
                            <th>Volontaire</th>
                            <th>ID volentaire</th>
                            <th>ID Evenement</th>
                            <th>Actions</th>

                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["reservation"] ?? $this->getContext($context, "reservation")));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            // line 25
            echo "                            <tr class=\"table-info\">
                                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "ref", []), "html", null, true);
            echo "</td>
                                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["r"], "idUser", []), "nom", []), "html", null, true);
            echo "</td>
                                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["r"], "idUser", []), "id", []), "html", null, true);
            echo "</td>
                                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["r"], "idEvenement", []), "reference", []), "html", null, true);
            echo "</td>


                                <td>
                                    <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modifierReservation", ["ref" => $this->getAttribute($context["r"], "ref", [])]), "html", null, true);
            echo "\"> Modifier</a>
                                    <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("supprimerReservation", ["ref" => $this->getAttribute($context["r"], "ref", [])]), "html", null, true);
            echo "\" >Supprimer</a>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
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
        return "@Project/Back/ReservationBack.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 38,  115 => 34,  111 => 33,  104 => 29,  100 => 28,  96 => 27,  92 => 26,  89 => 25,  85 => 24,  67 => 9,  60 => 4,  51 => 3,  29 => 1,);
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
                <h4 class=\"card-title\">Gestion des resrvation</h4>
                <div class=\"col-sm-6 col-md-4 col-lg-3\"> <a href=\"{{ path('ajouterReservation') }}\"> <i class=\"ti-plus\"></i> Ajouter Réservation</a></div>

                <div class=\"table-responsive pt-3\">
                    <table class=\"table table-bordered\">
                        <thead>
                        <tr class=\"table-danger\">
                            <th>Réference</th>
                            <th>Volontaire</th>
                            <th>ID volentaire</th>
                            <th>ID Evenement</th>
                            <th>Actions</th>

                        </tr>
                        </thead>
                        <tbody>
                        {% for r in reservation %}
                            <tr class=\"table-info\">
                                <td>{{ r.ref }}</td>
                                <td>{{ r.idUser.nom }}</td>
                                <td>{{ r.idUser.id }}</td>
                                <td>{{ r.idEvenement.reference }}</td>


                                <td>
                                    <a href=\"{{ path('modifierReservation', {'ref': r.ref}) }}\"> Modifier</a>
                                    <a href=\"{{ path('supprimerReservation', {'ref': r.ref}) }}\" >Supprimer</a>
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
{% endblock %}", "@Project/Back/ReservationBack.html.twig", "C:\\wamp64\\www\\ProjetPI\\src\\ProjectBundle\\Resources\\views\\Back\\ReservationBack.html.twig");
    }
}
