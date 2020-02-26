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

/* demande/show.html.twig */
class __TwigTemplate_5da254ef704c9fb866985ff66056b500915500c651d0f423f45696c216dd38b1 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "demande/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "demande/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "demande/show.html.twig", 1);
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
        <h2>Demande de don</h2>
    </div>








<div class=\"blog-section\">
    <div class=\"container\">
        <div class=\"blog-top\">
            <div class=\"grid_3 two\">
                <h3>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["demande"] ?? $this->getContext($context, "demande")), "titreDemande", []), "html", null, true);
        echo "</h3>
                <img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("images/" . $this->getAttribute(($context["demande"] ?? $this->getContext($context, "demande")), "photoDemande", []))), "html", null, true);
        echo "\" width=\"1140\" alt=\"\"/>
                <div class=\"blog-poast-info\">
                    <ul>
                        <li><i class=\"admin\"> </i>";
        // line 26
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["donations"] ?? $this->getContext($context, "donations"))), "html", null, true);
        echo " donations de type ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["demande"] ?? $this->getContext($context, "demande")), "typeDemande", []), "html", null, true);
        echo "</li>
                    </ul>
                </div>
                <p>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute(($context["demande"] ?? $this->getContext($context, "demande")), "descriptionDemande", []), "html", null, true);
        echo "</p>
                <p>

                <span class=\"button\"><a class=\"read trd\" href=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("demande_index");
        echo "\">Retour à la liste</a></span>
                    ";
        // line 33
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ASSO")) {
            // line 34
            echo "                    <span class=\"button\"><a class=\"read trd\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("donationfiltre_index", ["id" => ($context["demande"] ?? $this->getContext($context, "demande"))]), "html", null, true);
            echo "\">Liste de donations</a></span>
                    ";
        }
        // line 36
        echo "                    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_VOLUN")) {
            // line 37
            echo "                    <span class=\"button\"><a class=\"read trd\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("donation_neww", ["id" => ($context["demande"] ?? $this->getContext($context, "demande"))]), "html", null, true);
            echo "\">ajouter don</a></span>
                    ";
        }
        // line 39
        echo "                    <span class=\"button\"><a class=\"read trd\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("demande_pdf", ["id" => ($context["demande"] ?? $this->getContext($context, "demande"))]), "html", null, true);
        echo "\">imprimer</a></span>



                    ";
        // line 43
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ASSO")) {
            // line 44
            echo "                    <span class=\"button\" type=\"submit\" value=\"Delete\"><a class=\"read trd\"  href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("demande_delete", ["id" => $this->getAttribute(($context["demande"] ?? $this->getContext($context, "demande")), "id", [])]), "html", null, true);
            echo "\">Effacer la Demande</a></span>
                    ";
        }
        // line 46
        echo "                </p>

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
        return "demande/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 46,  135 => 44,  133 => 43,  125 => 39,  119 => 37,  116 => 36,  110 => 34,  108 => 33,  104 => 32,  98 => 29,  90 => 26,  84 => 23,  80 => 22,  60 => 4,  51 => 3,  29 => 1,);
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


    <div class=\"clearfix\"></div>
    <div class=\"banner two\">
        <h2>Demande de don</h2>
    </div>








<div class=\"blog-section\">
    <div class=\"container\">
        <div class=\"blog-top\">
            <div class=\"grid_3 two\">
                <h3>{{ demande.titreDemande }}</h3>
                <img src=\"{{ asset('images/' ~ demande.photoDemande) }}\" width=\"1140\" alt=\"\"/>
                <div class=\"blog-poast-info\">
                    <ul>
                        <li><i class=\"admin\"> </i>{{ donations|length }} donations de type {{ demande.typeDemande }}</li>
                    </ul>
                </div>
                <p>{{ demande.descriptionDemande }}</p>
                <p>

                <span class=\"button\"><a class=\"read trd\" href=\"{{ path('demande_index') }}\">Retour à la liste</a></span>
                    {% if is_granted('ROLE_ASSO') %}
                    <span class=\"button\"><a class=\"read trd\" href=\"{{ path('donationfiltre_index', { 'id': demande }) }}\">Liste de donations</a></span>
                    {% endif %}
                    {% if is_granted('ROLE_VOLUN') %}
                    <span class=\"button\"><a class=\"read trd\" href=\"{{ path('donation_neww', { 'id': demande }) }}\">ajouter don</a></span>
                    {% endif %}
                    <span class=\"button\"><a class=\"read trd\" href=\"{{ path('demande_pdf', { 'id': demande }) }}\">imprimer</a></span>



                    {% if is_granted('ROLE_ASSO') %}
                    <span class=\"button\" type=\"submit\" value=\"Delete\"><a class=\"read trd\"  href=\"{{ path('demande_delete', { 'id': demande.id }) }}\">Effacer la Demande</a></span>
                    {% endif %}
                </p>

            </div>
        </div>
    </div>
</div>


{% endblock %}


















", "demande/show.html.twig", "C:\\wamp64\\www\\ProjetPI\\app\\Resources\\views\\demande\\show.html.twig");
    }
}
