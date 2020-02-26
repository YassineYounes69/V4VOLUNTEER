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

/* donation/index_back.html.twig */
class __TwigTemplate_7bb7dbd0c0489ee3b32bdd144218a4c5a0101724d44a6fbd41c702b8c46f8e0d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "donation/index_back.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "donation/index_back.html.twig"));

        $this->parent = $this->loadTemplate("EspaceAdmin.html.twig", "donation/index_back.html.twig", 1);
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
        <h2>Donations</h2>
    </div>
    <span class=\"button\"><a class=\"read trd\" href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("liste_donation_pdf");
        echo "\">  📇 imprimer la liste</a></span>

    <br>
    <br>

    <script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/sorttable.js"), "html", null, true);
        echo "\"></script>


    <table id=\"dtBasicExample\" class=\"sortable\" cellspacing=\"0\" border=\"1\" width=\"100%\">
    <thead>
    <tr>
        <th class=\"text-center\">Id</th>
        <th class=\"text-center\">Type</th>
        <th class=\"text-center\">Etat</th>
        <th class=\"text-center\">Quantite</th>
        <th class=\"text-center\">Volontaire</th>
        <th class=\"text-center\">Demande</th>
        <th class=\"text-center\">Supprimer</th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["donations"] ?? $this->getContext($context, "donations")));
        foreach ($context['_seq'] as $context["_key"] => $context["donation"]) {
            // line 31
            echo "        <tr>
            <td align =\"center\"><a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("donation_show", ["id" => $this->getAttribute($context["donation"], "id", [])]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["donation"], "id", []), "html", null, true);
            echo "</a></td>
            <td align =\"center\">";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["donation"], "typeDonation", []), "html", null, true);
            echo "</td>
            <td align =\"center\">";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["donation"], "etatDonation", []), "html", null, true);
            echo "</td>
            <td align =\"center\">";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["donation"], "quantiteDonation", []), "html", null, true);
            echo "</td>
            <td align =\"center\">";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["donation"], "userDonation", []), "html", null, true);
            echo "</td>
            <td align =\"center\">";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["donation"], "demandeDonation", []), "html", null, true);
            echo "</td>
            <td align =\"center\">
                <ul>



                        <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("donation_delete", ["id" => $this->getAttribute($context["donation"], "id", [])]), "html", null, true);
            echo "\">❌</a>


                </ul>
            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['donation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "    </tbody>
</table>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "donation/index_back.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 50,  132 => 43,  123 => 37,  119 => 36,  115 => 35,  111 => 34,  107 => 33,  101 => 32,  98 => 31,  94 => 30,  75 => 14,  67 => 9,  60 => 4,  51 => 3,  29 => 1,);
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
        <h2>Donations</h2>
    </div>
    <span class=\"button\"><a class=\"read trd\" href=\"{{ path('liste_donation_pdf') }}\">  📇 imprimer la liste</a></span>

    <br>
    <br>

    <script src=\"{{ asset('js/sorttable.js') }}\"></script>


    <table id=\"dtBasicExample\" class=\"sortable\" cellspacing=\"0\" border=\"1\" width=\"100%\">
    <thead>
    <tr>
        <th class=\"text-center\">Id</th>
        <th class=\"text-center\">Type</th>
        <th class=\"text-center\">Etat</th>
        <th class=\"text-center\">Quantite</th>
        <th class=\"text-center\">Volontaire</th>
        <th class=\"text-center\">Demande</th>
        <th class=\"text-center\">Supprimer</th>
    </tr>
    </thead>
    <tbody>
    {% for donation in donations %}
        <tr>
            <td align =\"center\"><a href=\"{{ path('donation_show', { 'id': donation.id }) }}\">{{ donation.id }}</a></td>
            <td align =\"center\">{{ donation.typeDonation }}</td>
            <td align =\"center\">{{ donation.etatDonation }}</td>
            <td align =\"center\">{{ donation.quantiteDonation }}</td>
            <td align =\"center\">{{ donation.userDonation }}</td>
            <td align =\"center\">{{ donation.demandeDonation }}</td>
            <td align =\"center\">
                <ul>



                        <a href=\"{{ path('donation_delete', { 'id': donation.id }) }}\">❌</a>


                </ul>
            </td>
        </tr>
    {% endfor %}
    </tbody>
</table>

{% endblock %}", "donation/index_back.html.twig", "C:\\wamp64\\www\\ProjetPI\\app\\Resources\\views\\donation\\index_back.html.twig");
    }
}
