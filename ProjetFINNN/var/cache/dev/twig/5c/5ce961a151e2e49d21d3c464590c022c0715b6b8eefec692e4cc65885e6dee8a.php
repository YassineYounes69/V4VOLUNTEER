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

/* @Project/Reservation/AjouterReservation.html.twig */
class __TwigTemplate_0e5eeed288798561c2f77c531ec34c1489753a2752396506f64be026af3e2b53 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Project/Reservation/AjouterReservation.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Project/Reservation/AjouterReservation.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "@Project/Reservation/AjouterReservation.html.twig", 1);
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
        echo "    <div class=\"clearfix\"></div>
    </div>
    </div>
    <div class=\"clearfix\"></div>
    <div class=\"banner two\">
        <h2>Ajouter une reservation</h2>

    </div>
    </div>
    <!--banner-bottom-->
    <link href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js\"></script>
    <script src=\"//code.jquery.com/jquery-1.11.1.min.js\"></script>
    <link href=\"//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
    <script src=\"//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js\"></script>
    <script src=\"//code.jquery.com/jquery-1.11.1.min.js\"></script>
    <!------ Include the above in your HEAD tag ---------->

    <form class=\"form-horizontal\" action='' method=\"POST\">
        <fieldset>
            <div class=\"row\" style=\"margin-bottom: 50px; margin-top: 50px\">
                <div class=\"col-md-4 col-sm-4\"></div>
                <div class=\"col-md-4 col-sm-4 mt-4\">
                    ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["f"] ?? $this->getContext($context, "f")), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
                    <div id=\"legend\">
                        <legend class=\"\">Ajouter reservation</legend>
                    </div>



                    <div class=\"control-group\">
                        <!-- Username -->
                        <label class=\"control-label\"  for=\"username\">Volontaire</label>
                        <div class=\"controls\">
                            ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "idUser", []), 'widget', ["attr" => ["class" => "input-xlarge"]]);
        echo "
                            <span>";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "idUser", []), 'errors');
        echo "</span>
                        </div>
                    </div>

                    <div class=\"control-group\">
                        <!-- E-mail -->
                        <label class=\"control-label\" for=\"email\">Evénement</label>
                        <div class=\"controls\">
                            ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "idEvenement", []), 'widget', ["attr" => ["class" => "input-xlarge"]]);
        echo "
                            <span>";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "idEvenement", []), 'errors');
        echo "</span>

                        </div>
                    </div>

                    <div class=\"control-group\">
                        <!-- Button -->
                        <div class=\"controls\">
                            <button class=\"btn btn-success\" type=\"submit\" id=\"submit\">Confirmer</button>
                        </div>
                    </div>
                    ";
        // line 59
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["f"] ?? $this->getContext($context, "f")), 'form_end');
        echo "
        </fieldset>
        </div>
    </form>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Project/Reservation/AjouterReservation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 59,  118 => 48,  114 => 47,  103 => 39,  99 => 38,  85 => 27,  60 => 4,  51 => 3,  29 => 1,);
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
    </div>
    </div>
    <div class=\"clearfix\"></div>
    <div class=\"banner two\">
        <h2>Ajouter une reservation</h2>

    </div>
    </div>
    <!--banner-bottom-->
    <link href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js\"></script>
    <script src=\"//code.jquery.com/jquery-1.11.1.min.js\"></script>
    <link href=\"//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
    <script src=\"//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js\"></script>
    <script src=\"//code.jquery.com/jquery-1.11.1.min.js\"></script>
    <!------ Include the above in your HEAD tag ---------->

    <form class=\"form-horizontal\" action='' method=\"POST\">
        <fieldset>
            <div class=\"row\" style=\"margin-bottom: 50px; margin-top: 50px\">
                <div class=\"col-md-4 col-sm-4\"></div>
                <div class=\"col-md-4 col-sm-4 mt-4\">
                    {{ form_start(f, { 'attr': {'novalidate': 'novalidate'}} ) }}
                    <div id=\"legend\">
                        <legend class=\"\">Ajouter reservation</legend>
                    </div>



                    <div class=\"control-group\">
                        <!-- Username -->
                        <label class=\"control-label\"  for=\"username\">Volontaire</label>
                        <div class=\"controls\">
                            {{ form_widget(f.idUser, { 'attr': {'class': 'input-xlarge'}} ) }}
                            <span>{{ form_errors(f.idUser) }}</span>
                        </div>
                    </div>

                    <div class=\"control-group\">
                        <!-- E-mail -->
                        <label class=\"control-label\" for=\"email\">Evénement</label>
                        <div class=\"controls\">
                            {{ form_widget(f.idEvenement, { 'attr': {'class': 'input-xlarge'}} ) }}
                            <span>{{ form_errors(f.idEvenement) }}</span>

                        </div>
                    </div>

                    <div class=\"control-group\">
                        <!-- Button -->
                        <div class=\"controls\">
                            <button class=\"btn btn-success\" type=\"submit\" id=\"submit\">Confirmer</button>
                        </div>
                    </div>
                    {{ form_end(f) }}
        </fieldset>
        </div>
    </form>

{% endblock %}", "@Project/Reservation/AjouterReservation.html.twig", "C:\\wamp64\\www\\ProjetPI\\src\\ProjectBundle\\Resources\\views\\Reservation\\AjouterReservation.html.twig");
    }
}
