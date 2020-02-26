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

/* demande/index_back.html.twig */
class __TwigTemplate_1f2a8d61b137a0f78d3c087f0cd3ed1fa84e13df7fa156a336a56b679c7f11a7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "demande/index_back.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "demande/index_back.html.twig"));

        $this->parent = $this->loadTemplate("EspaceAdmin.html.twig", "demande/index_back.html.twig", 1);
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
    <div class=\"clearfix\"></div>
    <div class=\"banner two\">
        <h2>Demandes</h2>
    </div>
    <span class=\"button\"><a class=\"read trd\" href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("liste_demande_pdf");
        echo "\">  📇 imprimer la liste</a></span>
<br>
    <br>
    <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/sorttable.js"), "html", null, true);
        echo "\"></script>


    <table id=\"dtBasicExample\" class=\"sortable\" cellspacing=\"0\" border=\"1\" width=\"100%\">
        <thead>
        <tr>
            <th class=\"text-center\">Id</th>
            <th class=\"text-center\">Type</th>
            <th class=\"text-center\">Etat</th>
            <th class=\"text-center\">Titre</th>
            <th class=\"text-center\">Supprimer</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["demandes"] ?? $this->getContext($context, "demandes")));
        foreach ($context['_seq'] as $context["_key"] => $context["demande"]) {
            // line 27
            echo "            <tr>
                <td align =\"center\"><a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("demande_show", ["id" => $this->getAttribute($context["demande"], "id", [])]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["demande"], "id", []), "html", null, true);
            echo "</a></td>
                <td align =\"center\">";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["demande"], "typeDemande", []), "html", null, true);
            echo "</td>
                <td align =\"center\">";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["demande"], "etatDemande", []), "html", null, true);
            echo "</td>
                <td align =\"center\">";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["demande"], "titreDemande", []), "html", null, true);
            echo "</td>
                <td align =\"center\">
                    <ul>
                            <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("demande_delete", ["id" => $this->getAttribute($context["demande"], "id", [])]), "html", null, true);
            echo "\">❌</a>


                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['demande'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "        </tbody>
    </table>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "demande/index_back.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 41,  117 => 34,  111 => 31,  107 => 30,  103 => 29,  97 => 28,  94 => 27,  90 => 26,  73 => 12,  67 => 9,  60 => 4,  51 => 3,  29 => 1,);
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

    <div class=\"clearfix\"></div>
    <div class=\"banner two\">
        <h2>Demandes</h2>
    </div>
    <span class=\"button\"><a class=\"read trd\" href=\"{{ path('liste_demande_pdf') }}\">  📇 imprimer la liste</a></span>
<br>
    <br>
    <script src=\"{{ asset('js/sorttable.js') }}\"></script>


    <table id=\"dtBasicExample\" class=\"sortable\" cellspacing=\"0\" border=\"1\" width=\"100%\">
        <thead>
        <tr>
            <th class=\"text-center\">Id</th>
            <th class=\"text-center\">Type</th>
            <th class=\"text-center\">Etat</th>
            <th class=\"text-center\">Titre</th>
            <th class=\"text-center\">Supprimer</th>
        </tr>
        </thead>
        <tbody>
        {% for demande in demandes %}
            <tr>
                <td align =\"center\"><a href=\"{{ path('demande_show', { 'id': demande.id }) }}\">{{ demande.id }}</a></td>
                <td align =\"center\">{{ demande.typeDemande }}</td>
                <td align =\"center\">{{ demande.etatDemande }}</td>
                <td align =\"center\">{{ demande.titreDemande }}</td>
                <td align =\"center\">
                    <ul>
                            <a href=\"{{ path('demande_delete', { 'id': demande.id }) }}\">❌</a>


                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>


{% endblock %}
", "demande/index_back.html.twig", "C:\\wamp64\\www\\ProjetPI\\app\\Resources\\views\\demande\\index_back.html.twig");
    }
}
