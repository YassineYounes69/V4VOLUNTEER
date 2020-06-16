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

/* @Project/Default/AjouterLog.html.twig */
class __TwigTemplate_6b4b6958a44a3d56fe7995de1f10fb1c1653fadf2c91ef51a42b7729d4593b9a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Project/Default/AjouterLog.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Project/Default/AjouterLog.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "@Project/Default/AjouterLog.html.twig", 1);
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
        // line 6
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "



    <script type=\"text/javascript\" >
        \$(document).ready(function () {

            \$(\"#mod\").click(function () {

                if (\$('#nomlog').val().length == \"\") {

                    // si la chaîne de caractères est inférieure à 5
                    swal({
                        title: \"Champ nom vide! \",
                        text: \"Veuiller remplir le champ du nom s'il vous plait\",
                        icon: \"error\",
                        button: \"ok\",
                    });

                    \$('#nomlog').css({ // on rend le champ rouge
                        borderColor: 'red',
                        color: 'red'

                    });

                } else {

                    if (\$('#nomlog').val().length > 10 || \$('#nomlog').val().length < 3) {

                        // si la chaîne de caractères est inférieure à 5
                        swal({
                            title: \"Champs vide! \",
                            text: \"Veuillez saisir un nom de catégorie  avec au moins 3 caractères et au plus 10 caractères\",
                            icon: \"warning\",
                            button: \"ok\",
                        });

                        \$('#nomlog').css({ // on rend le champ rouge
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
        return "@Project/Default/AjouterLog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 6,  60 => 3,  51 => 2,  29 => 1,);
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

            \$(\"#mod\").click(function () {

                if (\$('#nomlog').val().length == \"\") {

                    // si la chaîne de caractères est inférieure à 5
                    swal({
                        title: \"Champ nom vide! \",
                        text: \"Veuiller remplir le champ du nom s'il vous plait\",
                        icon: \"error\",
                        button: \"ok\",
                    });

                    \$('#nomlog').css({ // on rend le champ rouge
                        borderColor: 'red',
                        color: 'red'

                    });

                } else {

                    if (\$('#nomlog').val().length > 10 || \$('#nomlog').val().length < 3) {

                        // si la chaîne de caractères est inférieure à 5
                        swal({
                            title: \"Champs vide! \",
                            text: \"Veuillez saisir un nom de catégorie  avec au moins 3 caractères et au plus 10 caractères\",
                            icon: \"warning\",
                            button: \"ok\",
                        });

                        \$('#nomlog').css({ // on rend le champ rouge
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
{% endblock %}
", "@Project/Default/AjouterLog.html.twig", "C:\\wamp64\\www\\ProjetPI\\src\\ProjectBundle\\Resources\\views\\Default\\AjouterLog.html.twig");
    }
}
