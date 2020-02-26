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

/* demande/index.html.twig */
class __TwigTemplate_1e02b8d02e284b509d1dd6c90b37e565165b2309157d78507a0193dbaee0e44a extends \Twig\Template
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
        return "Base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "demande/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "demande/index.html.twig"));

        $this->parent = $this->loadTemplate("Base.html.twig", "demande/index.html.twig", 1);
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
        <h2>Demandes de don</h2>
    </div>
    <br>
    <ul>
        <li>
            ";
        // line 12
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ASSO")) {
            // line 13
            echo "            <span class=\"button\"><a class=\"read trd\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("demande_new");
            echo "\"> + demande</a></span>
            ";
        }
        // line 15
        echo "            <span class=\"button\"><a class=\"read trd\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("liste_demande_pdf");
        echo "\">imprimer la liste</a></span>
        </li>
    </ul>

    <div class=\"col-lg-offset-6\">

        <div class=\"input-group custom-search-form\">
            <input type=\"text\" id=\"search\" class=\"form-control\" placeholder=\"Chercher...\">
        </div>
        <!-- /input-group -->

        <ul class=\"nav\" id=\"side-menu\">
            <li>
                <a href=\"#\"><span class=\"fa arrow\"></span></a>
                <ul class=\"nav nav-second-level\" id=\"entitiesNav\">
                </ul>
            </li>
        </ul>
    </div>




    <!-- jQuery is necessary -->
    <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js\"></script>

    <script>
        jQuery(document).ready(function() {
            var searchRequest = null;
            \$(\"#search\").keyup(function() {
                var minlength = 3;
                var that = this;
                var value = \$(this).val();
                var entitySelector = \$(\"#entitiesNav\").html('');
                if (value.length >= minlength ) {
                    if (searchRequest != null)
                        searchRequest.abort();
                    searchRequest = \$.ajax({
                        type: \"GET\",
                        url: \"";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajaxx_search");
        echo "\",
                        data: {
                            'q' : value
                        },
                        dataType: \"text\",
                        success: function(msg){
                            //we need to check if the value is the same
                            if (value==\$(that).val()) {
                                var result = JSON.parse(msg);
                                \$.each(result, function(key, arr) {
                                    \$.each(arr, function(id, value) {
                                        if (key == 'demandes') {
                                            if (id != 'error') {
                                                console.log(value[1]);
                                                entitySelector.append('<li><b>'+value[1]+'</b><a href=\"/ProjetPI/web/app_dev.php/demande/show/'+id+'\">'+'<img src=\"/ProjetPI/web/images/'+value[0]+'\" style=\"width: 50px; height: 50px\"/>'+'</a></li>');
                                            } else {
                                                entitySelector.append('<li class=\"errorLi\">'+value+'</li>');
                                            }
                                        }
                                    });
                                });
                            }
                        }
                    });
                }
            });
        });
    </script>



















<div class=\"blog-section\">
    ";
        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["demandes"] ?? $this->getContext($context, "demandes")));
        foreach ($context['_seq'] as $context["_key"] => $context["demande"]) {
            // line 103
            echo "    <div class=\"container\">
        <div class=\"blog-top\">
            <div class=\"col-md-6 grid_3\">
                <h3><a href=";
            // line 106
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("demande_show", ["id" => $this->getAttribute($context["demande"], "id", [])]), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["demande"], "titreDemande", []), "html", null, true);
            echo "</a></h3>
                <a href=";
            // line 107
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("demande_show", ["id" => $this->getAttribute($context["demande"], "id", [])]), "html", null, true);
            echo "><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("images/" . $this->getAttribute($context["demande"], "photoDemande", []))), "html", null, true);
            echo "\" height=\"380\" width=\"455\" alt=\"\"/></a>
                <div class=\"blog-poast-admin\">

                </div>
                <div class=\"blog-poast-info\">
                    <ul>
                        <li><i class=\"admin\"> </i><a class=\"admin\" href=\"#\"><span> </span> ";
            // line 113
            echo twig_escape_filter($this->env, $this->getAttribute($context["demande"], "typeDemande", []), "html", null, true);
            echo " </a></li>
                    </ul>

                </div>
                <p>";
            // line 117
            echo twig_escape_filter($this->env, $this->getAttribute($context["demande"], "descriptionDemande", []), "html", null, true);
            echo "</p>
                <div class=\"button\"><a class=\"read trd\" href=";
            // line 118
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("demande_show", ["id" => $this->getAttribute($context["demande"], "id", [])]), "html", null, true);
            echo ">afficher + </a></div>
            </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['demande'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
        echo "



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
        return "demande/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 121,  209 => 118,  205 => 117,  198 => 113,  187 => 107,  181 => 106,  176 => 103,  172 => 102,  121 => 54,  78 => 15,  72 => 13,  70 => 12,  60 => 4,  51 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'Base.html.twig' %}

{% block content %}

    <div class=\"clearfix\"></div>
    <div class=\"banner two\">
        <h2>Demandes de don</h2>
    </div>
    <br>
    <ul>
        <li>
            {% if is_granted('ROLE_ASSO') %}
            <span class=\"button\"><a class=\"read trd\" href=\"{{ path('demande_new') }}\"> + demande</a></span>
            {% endif %}
            <span class=\"button\"><a class=\"read trd\" href=\"{{ path('liste_demande_pdf') }}\">imprimer la liste</a></span>
        </li>
    </ul>

    <div class=\"col-lg-offset-6\">

        <div class=\"input-group custom-search-form\">
            <input type=\"text\" id=\"search\" class=\"form-control\" placeholder=\"Chercher...\">
        </div>
        <!-- /input-group -->

        <ul class=\"nav\" id=\"side-menu\">
            <li>
                <a href=\"#\"><span class=\"fa arrow\"></span></a>
                <ul class=\"nav nav-second-level\" id=\"entitiesNav\">
                </ul>
            </li>
        </ul>
    </div>




    <!-- jQuery is necessary -->
    <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js\"></script>

    <script>
        jQuery(document).ready(function() {
            var searchRequest = null;
            \$(\"#search\").keyup(function() {
                var minlength = 3;
                var that = this;
                var value = \$(this).val();
                var entitySelector = \$(\"#entitiesNav\").html('');
                if (value.length >= minlength ) {
                    if (searchRequest != null)
                        searchRequest.abort();
                    searchRequest = \$.ajax({
                        type: \"GET\",
                        url: \"{{ path('ajaxx_search') }}\",
                        data: {
                            'q' : value
                        },
                        dataType: \"text\",
                        success: function(msg){
                            //we need to check if the value is the same
                            if (value==\$(that).val()) {
                                var result = JSON.parse(msg);
                                \$.each(result, function(key, arr) {
                                    \$.each(arr, function(id, value) {
                                        if (key == 'demandes') {
                                            if (id != 'error') {
                                                console.log(value[1]);
                                                entitySelector.append('<li><b>'+value[1]+'</b><a href=\"/ProjetPI/web/app_dev.php/demande/show/'+id+'\">'+'<img src=\"/ProjetPI/web/images/'+value[0]+'\" style=\"width: 50px; height: 50px\"/>'+'</a></li>');
                                            } else {
                                                entitySelector.append('<li class=\"errorLi\">'+value+'</li>');
                                            }
                                        }
                                    });
                                });
                            }
                        }
                    });
                }
            });
        });
    </script>



















<div class=\"blog-section\">
    {% for demande in demandes %}
    <div class=\"container\">
        <div class=\"blog-top\">
            <div class=\"col-md-6 grid_3\">
                <h3><a href={{ path('demande_show', { 'id': demande.id }) }}>{{ demande.titreDemande }}</a></h3>
                <a href={{ path('demande_show', { 'id': demande.id }) }}><img src=\"{{ asset('images/' ~ demande.photoDemande) }}\" height=\"380\" width=\"455\" alt=\"\"/></a>
                <div class=\"blog-poast-admin\">

                </div>
                <div class=\"blog-poast-info\">
                    <ul>
                        <li><i class=\"admin\"> </i><a class=\"admin\" href=\"#\"><span> </span> {{ demande.typeDemande }} </a></li>
                    </ul>

                </div>
                <p>{{ demande.descriptionDemande }}</p>
                <div class=\"button\"><a class=\"read trd\" href={{ path('demande_show', { 'id': demande.id }) }}>afficher + </a></div>
            </div>
    {% endfor %}




            </div>
        </div>
    </div>
</div>

{% endblock %}
", "demande/index.html.twig", "C:\\wamp64\\www\\ProjetPI\\app\\Resources\\views\\demande\\index.html.twig");
    }
}
