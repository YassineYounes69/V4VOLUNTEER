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

/* @Project/Default/AfficherLog.html.twig */
class __TwigTemplate_f520e65b734c212f069cda1e9681867f671f76826fa27ced1bc5382ca82bed11 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Project/Default/AfficherLog.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Project/Default/AfficherLog.html.twig"));

        $this->parent = $this->loadTemplate("EspaceAdmin.html.twig", "@Project/Default/AfficherLog.html.twig", 1);
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
    <div class=\"card-body\">
        <h4 class=\"card-title\">LISTE DES LOGEMENT </h4>
        <p class=\"card-description\">
            <a href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("project_AjouterLog");
        echo "\">
                <button type=\"button\" class=\"btn btn-success btn-rounded btn-fw\">NOUVEAU</button>
            </a>                                <div class=\"table-responsive\">
            <table id=\"contenu\" class=\"table table-hover\" >
                <thead>
                <tr>
                    <th>
                        Nom logement
                    </th>
                    <th>
                        Adresse du Logement
                    </th>
                    <th>
                        Nombre de chambres
                    </th>
                    <th>
                        Etat Logement
                    </th>

                    <th>
                        Action
                    </th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Logement"] ?? $this->getContext($context, "Logement")));
        foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
            // line 34
            echo "                    <tr>
                        <td>
                            ";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "nomLog", []), "html", null, true);
            echo "
                        </td>
                        <td>
                            ";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "adresse", []), "html", null, true);
            echo "
                        </td>
                        <td>
                            ";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "nbChambre", []), "html", null, true);
            echo "
                        </td>
                        <td>
                            ";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "etatLog", []), "html", null, true);
            echo "
                        </td>
                        <td>

                            <a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("project_ModifierLog", ["idlog" => $this->getAttribute($context["l"], "idlog", [])]), "html", null, true);
            echo "\">
                                <button type=\"button\" class=\"btn btn-success btn-rounded btn-icon\">
                                    <i class=\"ti-pencil\"></i>
                                </button>
                            </a>

                            <a href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("project_SupprimerLog", ["idlog" => $this->getAttribute($context["l"], "idlog", [])]), "html", null, true);
            echo "\">
                                <button type=\"button\" class=\"btn btn-danger btn-rounded btn-icon\">
                                    <i class=\"ti-trash\"></i>
                                </button>
                            </a>

                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "                </tbody>
            </table>
        </div>
    </div>


    <script src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("jquery-3.1.1.js"), "html", null, true);
        echo "\"></script>
    <script>
        function myFunction() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById(\"searsh\");
            filter = input.value.toUpperCase();
            table = document.getElementById(\"contenu\");
            tr = table.getElementsByTagName(\"tr\");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName(\"td\")[0];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = \"\";
                    } else {
                        tr[i].style.display = \"none\";
                    }
                }

            }
        }
    </script>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Project/Default/AfficherLog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 70,  151 => 64,  136 => 55,  127 => 49,  120 => 45,  114 => 42,  108 => 39,  102 => 36,  98 => 34,  94 => 33,  66 => 8,  60 => 4,  51 => 3,  29 => 1,);
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

    <div class=\"card-body\">
        <h4 class=\"card-title\">LISTE DES LOGEMENT </h4>
        <p class=\"card-description\">
            <a href=\"{{ path('project_AjouterLog') }}\">
                <button type=\"button\" class=\"btn btn-success btn-rounded btn-fw\">NOUVEAU</button>
            </a>                                <div class=\"table-responsive\">
            <table id=\"contenu\" class=\"table table-hover\" >
                <thead>
                <tr>
                    <th>
                        Nom logement
                    </th>
                    <th>
                        Adresse du Logement
                    </th>
                    <th>
                        Nombre de chambres
                    </th>
                    <th>
                        Etat Logement
                    </th>

                    <th>
                        Action
                    </th>
                </tr>
                </thead>
                <tbody>
                {% for l in Logement %}
                    <tr>
                        <td>
                            {{ l.nomLog }}
                        </td>
                        <td>
                            {{ l.adresse }}
                        </td>
                        <td>
                            {{ l.nbChambre }}
                        </td>
                        <td>
                            {{ l.etatLog }}
                        </td>
                        <td>

                            <a href=\"{{ path('project_ModifierLog',{idlog:l.idlog}) }}\">
                                <button type=\"button\" class=\"btn btn-success btn-rounded btn-icon\">
                                    <i class=\"ti-pencil\"></i>
                                </button>
                            </a>

                            <a href=\"{{ path('project_SupprimerLog',{idlog:l.idlog}) }}\">
                                <button type=\"button\" class=\"btn btn-danger btn-rounded btn-icon\">
                                    <i class=\"ti-trash\"></i>
                                </button>
                            </a>

                        </td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        </div>
    </div>


    <script src=\"{{ asset('jquery-3.1.1.js') }}\"></script>
    <script>
        function myFunction() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById(\"searsh\");
            filter = input.value.toUpperCase();
            table = document.getElementById(\"contenu\");
            tr = table.getElementsByTagName(\"tr\");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName(\"td\")[0];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = \"\";
                    } else {
                        tr[i].style.display = \"none\";
                    }
                }

            }
        }
    </script>


{% endblock %}





", "@Project/Default/AfficherLog.html.twig", "C:\\wamp64\\www\\ProjetPI\\src\\ProjectBundle\\Resources\\views\\Default\\AfficherLog.html.twig");
    }
}
