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

/* @FOSUser/Registration/register_content.html.twig */
class __TwigTemplate_074a9e3b4b539fb82817e98bba100a8e3ef6d9161022e249a029ffa0588b6048 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "@FOSUser/Registration/register_content.html.twig", 1);
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
    <div class=\"clearfix\"></div>
    </div>
    </div>
    <div class=\"clearfix\"></div>
    <div class=\"banner two\">
        <h2>Espace D'inscription</h2>

    </div>
    </div>
    <!--banner-bottom-->
    <link href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js\"></script>
    <script src=\"//code.jquery.com/jquery-1.11.1.min.js\"></script>
    <!------ Include the above in your HEAD tag ---------->

    <div class=\"container\">
        <div class=\"row\" style=\"margin-bottom: 50px; margin-top: 50px\">
            <div class=\"col-md-4 col-sm-4\"></div>



            <div class=\"panel panel-info\">
                <div class=\"panel-heading\">
                    <div class=\"panel-title\">Sign Up</div>
                    <div style=\"float:right; font-size: 85%; position: relative; top:-10px\"><a id=\"signinlink\" href=\"/accounts/login/\">Sign In</a></div>
                </div>
                <div class=\"panel-body\" >
                    <form method=\"post\" action=\".\">
                        <input type='hidden' name='csrfmiddlewaretoken' value='XFe2rTYl9WOpV8U6X5CfbIuOZOELJ97S' />


                        <form  class=\"form-horizontal\" method=\"post\" >
                            <input type='hidden' name='csrfmiddlewaretoken' value='XFe2rTYl9WOpV8U6X5CfbIuOZOELJ97S' />

                            <div id=\"div_id_username\" class=\"form-group required\">
                                <label for=\"id_username\" class=\"control-label col-md-4  requiredField\"> Nom<span class=\"asteriskField\">*</span> </label>
                                <div class=\"controls col-md-8 \">
                                    ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", []), 'widget', ["attr" => ["class" => "input-md textinput textInput form-control"]]);
        echo "

                                </div>
                            </div>
                            <div id=\"div_id_email\" class=\"form-group required\">
                                <label for=\"id_email\" class=\"control-label col-md-4  requiredField\"> Prénom<span class=\"asteriskField\">*</span> </label>
                                <div class=\"controls col-md-8 \">
                                    ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prenom", []), 'widget', ["attr" => ["class" => "input-md textinput textInput form-control"]]);
        echo "

                                </div>
                            </div>
                            <div id=\"div_id_password1\" class=\"form-group required\">
                                <label for=\"id_password1\" class=\"control-label col-md-4  requiredField\">Adresse<span class=\"asteriskField\">*</span> </label>
                                <div class=\"controls col-md-8 \">
                                    ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "addresse", []), 'widget', ["attr" => ["class" => "input-md textinput textInput form-control"]]);
        echo "
                                </div>
                                </div>
                            <div id=\"div_id_password2\" class=\"form-group required\">
                                <label for=\"id_password2\" class=\"control-label col-md-4  requiredField\"> Pays<span class=\"asteriskField\">*</span> </label>
                                <div class=\"controls col-md-8 \">
                                    ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "pays", []), 'widget', ["attr" => ["class" => "input-md textinput textInput form-control"]]);
        echo "
                                </div>
                            </div>
                            <div id=\"div_id_name\" class=\"form-group required\">
                                <label for=\"id_name\" class=\"control-label col-md-4  requiredField\"> Code Postal<span class=\"asteriskField\">*</span> </label>
                                <div class=\"controls col-md-8 \">
                                    ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "codePostal", []), 'widget', ["attr" => ["class" => "input-md textinput textInput form-control"]]);
        echo "
                                </div>
                            </div>

                            <div id=\"div_id_company\" class=\"form-group required\">
                                <label for=\"id_company\" class=\"control-label col-md-4  requiredField\"> Téléphone<span class=\"asteriskField\">*</span> </label>
                                <div class=\"controls col-md-8 \">
                                    ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tel", []), 'widget', ["attr" => ["class" => "input-md textinput textInput form-control"]]);
        echo "
                            </div>
                            <div id=\"div_id_catagory\" class=\"form-group required\">
                                <label for=\"id_catagory\" class=\"control-label col-md-4  requiredField\"> E-mail<span class=\"asteriskField\">*</span> </label>
                                <div class=\"controls col-md-8 \">
                                    ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", []), 'widget', ["attr" => ["class" => "input-md textinput textInput form-control"]]);
        echo "
                                </div>
                            </div>
                            <div id=\"div_id_number\" class=\"form-group required\">
                                <label for=\"id_number\" class=\"control-label col-md-4  requiredField\"> Rôle<span class=\"asteriskField\">*</span> </label>
                                <div class=\"controls col-md-8 \">
                                    ";
        // line 85
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "roles", []), 'widget', ["attr" => ["class" => "input-md textinput textInput form-control"]]);
        echo "
                                </div>
                            </div>
                                <div id=\"div_id_location\" class=\"form-group required\">
                                    <label for=\"id_location\" class=\"control-label col-md-4  requiredField\"> Nom d'utlisateur<span class=\"asteriskField\">*</span> </label>
                                    <div class=\"controls col-md-8 \">
                                        ";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", []), 'widget', ["attr" => ["class" => "input-md textinput textInput form-control"]]);
        echo "
                                    </div>
                                </div>
                            <div id=\"div_id_location\" class=\"form-group required\">
                                <label for=\"id_location\" class=\"control-label col-md-4  requiredField\"> Mot de passe<span class=\"asteriskField\">*</span> </label>
                                <div class=\"controls col-md-8 \">
                                    ";
        // line 97
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", []), "first", []), 'widget', ["attr" => ["class" => "input-md textinput textInput form-control"]]);
        echo "
                                </div>
                            </div>
                                <div id=\"div_id_location\" class=\"form-group required\">
                                    <label for=\"id_location\" class=\"control-label col-md-4  requiredField\"> Mot de passe<span class=\"asteriskField\">*</span> </label>
                                    <div class=\"controls col-md-8 \">
                                        ";
        // line 103
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", []), "second", []), 'widget', ["attr" => ["class" => "input-md textinput textInput form-control"]]);
        echo "
                                    </div>
                                    </div>

                            <div id=\"div_id_location\" class=\"form-group required\">
                                <label for=\"id_location\" class=\"control-label col-md-4  requiredField\">Confirmer<span class=\"asteriskField\">*</span> </label>
                                <div class=\"controls col-md-8 \">

                            </div>

                            <div class=\"form-group\">
                                <div class=\"aab controls col-md-4 \"></div>
                                <div class=\"controls col-md-8 \">
                                    <input type=\"submit\" name=\"Signup\" value=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.submit"), "html", null, true);
        echo "\" class=\"btn btn-primary btn btn-info\" id=\"submit-id-signup\" />
                                </div>
                            </div>
                                ";
        // line 119
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
                        </form>

                    </form>

                </div>
                </div>
            </div>
        </div>



    <!--swipebox -->
    <link rel=\"stylesheet\" href=\"css/swipebox.css\">
    <script src=\"js/jquery.swipebox.min.js\"></script>
    <script type=\"text/javascript\">
        jQuery(function(\$) {
            \$(\".swipebox\").swipebox();
        });
    </script>
    <!--banner-bottom-->
    <svg id=\"bigTriangleShadow\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" width=\"100%\" height=\"100\" viewBox=\"0 0 100 100\" preserveAspectRatio=\"none\">
        <path id=\"trianglePath5\" d=\"M0 0 L50 100 L100 0 Z\"></path>
        <path id=\"trianglePath6\" d=\"M50 100 L100 40 L100 0 Z\"></path>
    </svg>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 119,  208 => 116,  192 => 103,  183 => 97,  174 => 91,  165 => 85,  156 => 79,  148 => 74,  138 => 67,  129 => 61,  120 => 55,  110 => 48,  100 => 41,  60 => 3,  51 => 2,  29 => 1,);
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
        <h2>Espace D'inscription</h2>

    </div>
    </div>
    <!--banner-bottom-->
    <link href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js\"></script>
    <script src=\"//code.jquery.com/jquery-1.11.1.min.js\"></script>
    <!------ Include the above in your HEAD tag ---------->

    <div class=\"container\">
        <div class=\"row\" style=\"margin-bottom: 50px; margin-top: 50px\">
            <div class=\"col-md-4 col-sm-4\"></div>



            <div class=\"panel panel-info\">
                <div class=\"panel-heading\">
                    <div class=\"panel-title\">Sign Up</div>
                    <div style=\"float:right; font-size: 85%; position: relative; top:-10px\"><a id=\"signinlink\" href=\"/accounts/login/\">Sign In</a></div>
                </div>
                <div class=\"panel-body\" >
                    <form method=\"post\" action=\".\">
                        <input type='hidden' name='csrfmiddlewaretoken' value='XFe2rTYl9WOpV8U6X5CfbIuOZOELJ97S' />


                        <form  class=\"form-horizontal\" method=\"post\" >
                            <input type='hidden' name='csrfmiddlewaretoken' value='XFe2rTYl9WOpV8U6X5CfbIuOZOELJ97S' />

                            <div id=\"div_id_username\" class=\"form-group required\">
                                <label for=\"id_username\" class=\"control-label col-md-4  requiredField\"> Nom<span class=\"asteriskField\">*</span> </label>
                                <div class=\"controls col-md-8 \">
                                    {{ form_widget(form.nom, { 'attr': {'class': 'input-md textinput textInput form-control'}} ) }}

                                </div>
                            </div>
                            <div id=\"div_id_email\" class=\"form-group required\">
                                <label for=\"id_email\" class=\"control-label col-md-4  requiredField\"> Prénom<span class=\"asteriskField\">*</span> </label>
                                <div class=\"controls col-md-8 \">
                                    {{ form_widget(form.prenom, { 'attr': {'class': 'input-md textinput textInput form-control'}} ) }}

                                </div>
                            </div>
                            <div id=\"div_id_password1\" class=\"form-group required\">
                                <label for=\"id_password1\" class=\"control-label col-md-4  requiredField\">Adresse<span class=\"asteriskField\">*</span> </label>
                                <div class=\"controls col-md-8 \">
                                    {{ form_widget(form.addresse, { 'attr': {'class': 'input-md textinput textInput form-control'}} ) }}
                                </div>
                                </div>
                            <div id=\"div_id_password2\" class=\"form-group required\">
                                <label for=\"id_password2\" class=\"control-label col-md-4  requiredField\"> Pays<span class=\"asteriskField\">*</span> </label>
                                <div class=\"controls col-md-8 \">
                                    {{ form_widget(form.pays, { 'attr': {'class':'input-md textinput textInput form-control'}} ) }}
                                </div>
                            </div>
                            <div id=\"div_id_name\" class=\"form-group required\">
                                <label for=\"id_name\" class=\"control-label col-md-4  requiredField\"> Code Postal<span class=\"asteriskField\">*</span> </label>
                                <div class=\"controls col-md-8 \">
                                    {{ form_widget(form.codePostal, { 'attr': {'class':'input-md textinput textInput form-control'}} ) }}
                                </div>
                            </div>

                            <div id=\"div_id_company\" class=\"form-group required\">
                                <label for=\"id_company\" class=\"control-label col-md-4  requiredField\"> Téléphone<span class=\"asteriskField\">*</span> </label>
                                <div class=\"controls col-md-8 \">
                                    {{ form_widget(form.tel, { 'attr': {'class':'input-md textinput textInput form-control'}} ) }}
                            </div>
                            <div id=\"div_id_catagory\" class=\"form-group required\">
                                <label for=\"id_catagory\" class=\"control-label col-md-4  requiredField\"> E-mail<span class=\"asteriskField\">*</span> </label>
                                <div class=\"controls col-md-8 \">
                                    {{ form_widget(form.email, { 'attr': {'class':'input-md textinput textInput form-control'}} ) }}
                                </div>
                            </div>
                            <div id=\"div_id_number\" class=\"form-group required\">
                                <label for=\"id_number\" class=\"control-label col-md-4  requiredField\"> Rôle<span class=\"asteriskField\">*</span> </label>
                                <div class=\"controls col-md-8 \">
                                    {{ form_widget(form.roles, { 'attr': {'class':'input-md textinput textInput form-control'}} ) }}
                                </div>
                            </div>
                                <div id=\"div_id_location\" class=\"form-group required\">
                                    <label for=\"id_location\" class=\"control-label col-md-4  requiredField\"> Nom d'utlisateur<span class=\"asteriskField\">*</span> </label>
                                    <div class=\"controls col-md-8 \">
                                        {{ form_widget(form.username, { 'attr': {'class':'input-md textinput textInput form-control'}} ) }}
                                    </div>
                                </div>
                            <div id=\"div_id_location\" class=\"form-group required\">
                                <label for=\"id_location\" class=\"control-label col-md-4  requiredField\"> Mot de passe<span class=\"asteriskField\">*</span> </label>
                                <div class=\"controls col-md-8 \">
                                    {{ form_widget(form.plainPassword.first, { 'attr': {'class':'input-md textinput textInput form-control'}} ) }}
                                </div>
                            </div>
                                <div id=\"div_id_location\" class=\"form-group required\">
                                    <label for=\"id_location\" class=\"control-label col-md-4  requiredField\"> Mot de passe<span class=\"asteriskField\">*</span> </label>
                                    <div class=\"controls col-md-8 \">
                                        {{ form_widget(form.plainPassword.second, { 'attr': {'class':'input-md textinput textInput form-control'}} ) }}
                                    </div>
                                    </div>

                            <div id=\"div_id_location\" class=\"form-group required\">
                                <label for=\"id_location\" class=\"control-label col-md-4  requiredField\">Confirmer<span class=\"asteriskField\">*</span> </label>
                                <div class=\"controls col-md-8 \">

                            </div>

                            <div class=\"form-group\">
                                <div class=\"aab controls col-md-4 \"></div>
                                <div class=\"controls col-md-8 \">
                                    <input type=\"submit\" name=\"Signup\" value=\"{{ 'registration.submit'|trans }}\" class=\"btn btn-primary btn btn-info\" id=\"submit-id-signup\" />
                                </div>
                            </div>
                                {{ form_end(form) }}
                        </form>

                    </form>

                </div>
                </div>
            </div>
        </div>



    <!--swipebox -->
    <link rel=\"stylesheet\" href=\"css/swipebox.css\">
    <script src=\"js/jquery.swipebox.min.js\"></script>
    <script type=\"text/javascript\">
        jQuery(function(\$) {
            \$(\".swipebox\").swipebox();
        });
    </script>
    <!--banner-bottom-->
    <svg id=\"bigTriangleShadow\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" width=\"100%\" height=\"100\" viewBox=\"0 0 100 100\" preserveAspectRatio=\"none\">
        <path id=\"trianglePath5\" d=\"M0 0 L50 100 L100 0 Z\"></path>
        <path id=\"trianglePath6\" d=\"M50 100 L100 40 L100 0 Z\"></path>
    </svg>

{% endblock  %}
", "@FOSUser/Registration/register_content.html.twig", "C:\\wamp64\\www\\ProjetFIN\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\register_content.html.twig");
    }
}
