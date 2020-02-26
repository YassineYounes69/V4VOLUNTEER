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

/* @Project/Default/Afficher.html.twig */
class __TwigTemplate_297ebf54d4cada8975c2f120b3d9ebfca904ff0c585a0afd42807f7158eea6ad extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Project/Default/Afficher.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Project/Default/Afficher.html.twig"));

        $this->parent = $this->loadTemplate("EspaceAdmin.html.twig", "@Project/Default/Afficher.html.twig", 1);
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
        <h4 class=\"card-title\">LISTE DES REFUGIES </h4>
        <p class=\"card-description\">
            <a href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("project_AjouterRef");
        echo "\">
                <button type=\"button\" class=\"btn btn-success btn-rounded btn-fw\">NOUVEAU</button>
            </a>
        </p>
        <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/sorttable.js"), "html", null, true);
        echo "\"></script>
        <div class=\"table-responsive\">
            <table id=\"contenu\" class=\"sortable\" width=\"100%\" >
                <thead>
                <tr>
                    <th>
                        Nom
                    </th>
                    <th>
                        Prenom
                    </th>
                    <th>
                        Pays
                    </th>
                    <th>
                        Etat Civil
                    </th>

                    <th>
                        Age
                    </th>

                    <th>
                        Gender
                    </th>
                    <th>
                        Image
                    </th>

                    <th>
                        Action
                    </th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Refugies"] ?? $this->getContext($context, "Refugies")));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            // line 48
            echo "                    <tr>
                        <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "nomref", []), "html", null, true);
            echo "</td>
                        <td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "prenomref", []), "html", null, true);
            echo "</td>
                        <td>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "paysref", []), "html", null, true);
            echo "</td>
                        <td>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "etatref", []), "html", null, true);
            echo "</td>
                        <td>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "ageref", []), "html", null, true);
            echo "</td>
                        <td>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "genderref", []), "html", null, true);
            echo "</td>
                        <td>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "image", []), "html", null, true);
            echo "</td>                                                <td>

                            <a href=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("project_ModifierRef", ["idref" => $this->getAttribute($context["r"], "idref", [])]), "html", null, true);
            echo "\">
                                <button type=\"button\"
                                        class=\"btn btn-success btn-rounded btn-icon\">
                                    <i class=\"ti-pencil\"></i>
                                </button>
                            </a>

                            <a href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("project_SupprimerRef", ["idref" => $this->getAttribute($context["r"], "idref", [])]), "html", null, true);
            echo "\">
                                <button type=\"button\"
                                        class=\"btn btn-danger btn-rounded btn-icon\">
                                    <i class=\"ti-trash\"></i>
                                </button>
                            </a>

                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "                </tbody>
            </table>
        </div>
    </div>

    <script src=\"";
        // line 79
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
        return "@Project/Default/Afficher.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 79,  173 => 74,  157 => 64,  147 => 57,  142 => 55,  138 => 54,  134 => 53,  130 => 52,  126 => 51,  122 => 50,  118 => 49,  115 => 48,  111 => 47,  73 => 12,  66 => 8,  60 => 4,  51 => 3,  29 => 1,);
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
        <h4 class=\"card-title\">LISTE DES REFUGIES </h4>
        <p class=\"card-description\">
            <a href=\"{{ path('project_AjouterRef') }}\">
                <button type=\"button\" class=\"btn btn-success btn-rounded btn-fw\">NOUVEAU</button>
            </a>
        </p>
        <script src=\"{{ asset('js/sorttable.js') }}\"></script>
        <div class=\"table-responsive\">
            <table id=\"contenu\" class=\"sortable\" width=\"100%\" >
                <thead>
                <tr>
                    <th>
                        Nom
                    </th>
                    <th>
                        Prenom
                    </th>
                    <th>
                        Pays
                    </th>
                    <th>
                        Etat Civil
                    </th>

                    <th>
                        Age
                    </th>

                    <th>
                        Gender
                    </th>
                    <th>
                        Image
                    </th>

                    <th>
                        Action
                    </th>
                </tr>
                </thead>
                <tbody>
                {% for r in Refugies %}
                    <tr>
                        <td>{{ r.nomref }}</td>
                        <td>{{ r.prenomref }}</td>
                        <td>{{ r.paysref }}</td>
                        <td>{{ r.etatref }}</td>
                        <td>{{ r.ageref }}</td>
                        <td>{{ r.genderref }}</td>
                        <td>{{ r.image }}</td>                                                <td>

                            <a href=\"{{ path('project_ModifierRef',{idref:r.idref}) }}\">
                                <button type=\"button\"
                                        class=\"btn btn-success btn-rounded btn-icon\">
                                    <i class=\"ti-pencil\"></i>
                                </button>
                            </a>

                            <a href=\"{{ path('project_SupprimerRef',{idref:r.idref}) }}\">
                                <button type=\"button\"
                                        class=\"btn btn-danger btn-rounded btn-icon\">
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

", "@Project/Default/Afficher.html.twig", "C:\\wamp64\\www\\ProjetFIN\\src\\ProjectBundle\\Resources\\views\\Default\\Afficher.html.twig");
    }
}
