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
class __TwigTemplate_37aff90d2c98b4da3f115d72defd1fea221d18a7893781c75140473d4c9a9670 extends \Twig\Template
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

";
        // line 5
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "


    <script type=\"text/javascript\" >
        \$(document).ready(function () {

            \$(\"#projectbundle_logement_Ajouter\").click(function () {

                if (\$('#nomlog').val().length == \"\") {

                    // si la chaîne de caractères est inférieure à 5
                    swal({
                        title: \"Champ nom vide! \",
                        text: \"Veuiller remplir le champ du nom s'il vous plait\",
                        icon: \"error\",
                        button: \"ok\",
                    });

                    \$('#projectbundle_logement_nomLog').css({ // on rend le champ rouge
                        borderColor: 'red',
                        color: 'red'

                    });

                } else {

                    if (\$('#projectbundle_logement_nomLog').val().length > 10 || \$('#projectbundle_logement_nomLog').val().length < 3) {

                        // si la chaîne de caractères est inférieure à 5
                        swal({
                            title: \"Champs vide! \",
                            text: \"Veuillez saisir un nom de catégorie  avec au moins 3 caractères et au plus 10 caractères\",
                            icon: \"warning\",
                            button: \"ok\",
                        });

                        \$('#projectbundle_logement_nomLog').css({ // on rend le champ rouge
                            borderColor: 'orange',
                            color: 'orange'

                        });

                    }

                    else {

                        swal({
                            title: \" Remplissage complet  :)  \",
                            text: \"  Remplissage des champs avec succés \",
                            icon: \"success\",
                            button: \"ok\",
                        });
                        \$('#projectbundle_logement_nomLog').css({ // on rend le champ rouge
                            borderColor: 'green',
                            color: 'green'

                        });
                    }



                }

            });

        });
    </script>
";
        
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
        return array (  64 => 5,  60 => 3,  51 => 2,  29 => 1,);
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


{{ form(form) }}


    <script type=\"text/javascript\" >
        \$(document).ready(function () {

            \$(\"#projectbundle_logement_Ajouter\").click(function () {

                if (\$('#nomlog').val().length == \"\") {

                    // si la chaîne de caractères est inférieure à 5
                    swal({
                        title: \"Champ nom vide! \",
                        text: \"Veuiller remplir le champ du nom s'il vous plait\",
                        icon: \"error\",
                        button: \"ok\",
                    });

                    \$('#projectbundle_logement_nomLog').css({ // on rend le champ rouge
                        borderColor: 'red',
                        color: 'red'

                    });

                } else {

                    if (\$('#projectbundle_logement_nomLog').val().length > 10 || \$('#projectbundle_logement_nomLog').val().length < 3) {

                        // si la chaîne de caractères est inférieure à 5
                        swal({
                            title: \"Champs vide! \",
                            text: \"Veuillez saisir un nom de catégorie  avec au moins 3 caractères et au plus 10 caractères\",
                            icon: \"warning\",
                            button: \"ok\",
                        });

                        \$('#projectbundle_logement_nomLog').css({ // on rend le champ rouge
                            borderColor: 'orange',
                            color: 'orange'

                        });

                    }

                    else {

                        swal({
                            title: \" Remplissage complet  :)  \",
                            text: \"  Remplissage des champs avec succés \",
                            icon: \"success\",
                            button: \"ok\",
                        });
                        \$('#projectbundle_logement_nomLog').css({ // on rend le champ rouge
                            borderColor: 'green',
                            color: 'green'

                        });
                    }



                }

            });

        });
    </script>
{% endblock %}", "@Project/Default/ModifierLog.html.twig", "C:\\wamp64\\www\\ProjetPI\\src\\ProjectBundle\\Resources\\views\\Default\\ModifierLog.html.twig");
    }
}
