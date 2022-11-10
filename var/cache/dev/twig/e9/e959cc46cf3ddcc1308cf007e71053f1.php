<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* cours/index.html.twig */
class __TwigTemplate_9a5f3574ff19a3c275e1422cf3d1189c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cours/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cours/index.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->displayBlock('title', $context, $blocks);
        // line 3
        echo "
";
        // line 4
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Cours index";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <h1>Cours index</h1>

    <div class=\"table-responsive\">
        <table class=\"table table-hover\" id=\"tableac\">
            <script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
            <div>
                <form class=\"nav-link mt-2 mt-md-0 d-none d-lg-flex search\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"Chercher un cours\" id=\"search\"> </form>
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Titre</th>
                    <th>Matiere</th>
                    <th>Domaine</th>
                    <th>Categorie</th>
                    <th>Chemin</th>
                    <th>actions</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cours"]) || array_key_exists("cours", $context) ? $context["cours"] : (function () { throw new RuntimeError('Variable "cours" does not exist.', 25, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["cour"]) {
            // line 26
            echo "                    <tr>
                        <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cour"], "id", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                        <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cour"], "titre", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                        <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cour"], "matiere", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
                        <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cour"], "domaine", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                        <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cour"], "categorie", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
                        <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cour"], "chemin", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
                        <td>
                            <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cours_show", ["id" => twig_get_attribute($this->env, $this->source, $context["cour"], "id", [], "any", false, false, false, 34)]), "html", null, true);
            echo "\">show</a>
                            <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cours_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["cour"], "id", [], "any", false, false, false, 35)]), "html", null, true);
            echo "\">edit</a>
                        </td>
                    </tr>
                    <script>
                        \$(document).ready(function(){
                            \$('#search').keyup(function(){
                                search_table(\$(this).val());
                            });
                            function search_table(value){
                                \$('#tableac tbody tr').each(function(){
                                    var found = 'false';
                                    \$(this).each(function(){
                                        if(\$(this).text().toLowerCase().indexOf(value.toLowerCase()) >= 0)
                                        {
                                            found = 'true';
                                        }
                                    });
                                    if(found == 'true')
                                    {
                                        \$(this).show();
                                    }
                                    else
                                    {
                                        \$(this).hide();
                                    }
                                });
                            }
                        });
                    </script>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 65
            echo "                    <tr>
                        <td colspan=\"7\">no records found</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cour'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "                </tbody>
            </div>
        </table>

        <a href=\"";
        // line 73
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cours_new");
        echo "\">Create new</a>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "cours/index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  204 => 73,  198 => 69,  189 => 65,  154 => 35,  150 => 34,  145 => 32,  141 => 31,  137 => 30,  133 => 29,  129 => 28,  125 => 27,  122 => 26,  117 => 25,  98 => 9,  92 => 5,  82 => 4,  63 => 2,  53 => 4,  50 => 3,  48 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% block title %}Cours index{% endblock %}

{% block body %}
    <h1>Cours index</h1>

    <div class=\"table-responsive\">
        <table class=\"table table-hover\" id=\"tableac\">
            <script src=\"{{ asset('/assets/js/jquery.min.js') }}\"></script>
            <div>
                <form class=\"nav-link mt-2 mt-md-0 d-none d-lg-flex search\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"Chercher un cours\" id=\"search\"> </form>
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Titre</th>
                    <th>Matiere</th>
                    <th>Domaine</th>
                    <th>Categorie</th>
                    <th>Chemin</th>
                    <th>actions</th>
                </tr>
                </thead>
                <tbody>
                {% for cour in cours %}
                    <tr>
                        <td>{{ cour.id }}</td>
                        <td>{{ cour.titre }}</td>
                        <td>{{ cour.matiere }}</td>
                        <td>{{ cour.domaine }}</td>
                        <td>{{ cour.categorie }}</td>
                        <td>{{ cour.chemin }}</td>
                        <td>
                            <a href=\"{{ path('app_cours_show', {'id': cour.id}) }}\">show</a>
                            <a href=\"{{ path('app_cours_edit', {'id': cour.id}) }}\">edit</a>
                        </td>
                    </tr>
                    <script>
                        \$(document).ready(function(){
                            \$('#search').keyup(function(){
                                search_table(\$(this).val());
                            });
                            function search_table(value){
                                \$('#tableac tbody tr').each(function(){
                                    var found = 'false';
                                    \$(this).each(function(){
                                        if(\$(this).text().toLowerCase().indexOf(value.toLowerCase()) >= 0)
                                        {
                                            found = 'true';
                                        }
                                    });
                                    if(found == 'true')
                                    {
                                        \$(this).show();
                                    }
                                    else
                                    {
                                        \$(this).hide();
                                    }
                                });
                            }
                        });
                    </script>
                    {% else %}
                    <tr>
                        <td colspan=\"7\">no records found</td>
                    </tr>
                {% endfor %}
                </tbody>
            </div>
        </table>

        <a href=\"{{ path('app_cours_new') }}\">Create new</a>
    </div>
{% endblock %}
", "cours/index.html.twig", "C:\\Users\\ADMIN\\OneDrive\\Bureau\\Nouveau dossier\\Workbot-web\\templates\\cours\\index.html.twig");
    }
}
