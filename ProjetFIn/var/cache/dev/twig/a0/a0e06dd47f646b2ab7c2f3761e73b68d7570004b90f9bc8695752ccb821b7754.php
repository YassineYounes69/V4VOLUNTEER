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

/* donation/show.html.twig */
class __TwigTemplate_fdc8295a661cd655cf5eaa8a76c0f4dd29e155719462a4c91fa887d78ee2736a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "donation/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "donation/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "donation/show.html.twig", 1);
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
        <h2>don</h2>
    </div>








    <div class=\"blog-section\">
        <div class=\"container\">
            <div class=\"blog-top\">
                <div class=\"grid_3 two\">
                    <h3>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute(($context["donation"] ?? $this->getContext($context, "donation")), "userDonation", []), "html", null, true);
        echo "</h3>
                    <p>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["donation"] ?? $this->getContext($context, "donation")), "quantiteDonation", []), "html", null, true);
        echo " elements de type ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["donation"] ?? $this->getContext($context, "donation")), "typeDonation", []), "html", null, true);
        echo "</p>
                    <p>

                        <span class=\"button\"><a class=\"read trd\" href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("demande_index");
        echo "\">Retour à la liste</a></span>
                        <span class=\"button\"><a class=\"read trd\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("donation_edit", ["id" => $this->getAttribute(($context["donation"] ?? $this->getContext($context, "donation")), "id", [])]), "html", null, true);
        echo "\">Modifier le Don</a></span>

                        <span class=\"button\" type=\"submit\" value=\"Delete\"><a class=\"read trd\"  href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("donation_delete", ["id" => $this->getAttribute(($context["donation"] ?? $this->getContext($context, "donation")), "id", [])]), "html", null, true);
        echo "\">Effacer le Don</a></span>

                    </p>

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
        return "donation/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 32,  99 => 30,  95 => 29,  87 => 26,  83 => 25,  60 => 4,  51 => 3,  29 => 1,);
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
        <h2>don</h2>
    </div>








    <div class=\"blog-section\">
        <div class=\"container\">
            <div class=\"blog-top\">
                <div class=\"grid_3 two\">
                    <h3>{{ donation.userDonation }}</h3>
                    <p>{{ donation.quantiteDonation }} elements de type {{ donation.typeDonation }}</p>
                    <p>

                        <span class=\"button\"><a class=\"read trd\" href=\"{{ path('demande_index') }}\">Retour à la liste</a></span>
                        <span class=\"button\"><a class=\"read trd\" href=\"{{ path('donation_edit', { 'id': donation.id }) }}\">Modifier le Don</a></span>

                        <span class=\"button\" type=\"submit\" value=\"Delete\"><a class=\"read trd\"  href=\"{{ path('donation_delete', { 'id': donation.id }) }}\">Effacer le Don</a></span>

                    </p>

                </div>
            </div>
        </div>
    </div>






{% endblock %}
", "donation/show.html.twig", "C:\\wamp64\\www\\ProjetPI\\app\\Resources\\views\\donation\\show.html.twig");
    }
}
