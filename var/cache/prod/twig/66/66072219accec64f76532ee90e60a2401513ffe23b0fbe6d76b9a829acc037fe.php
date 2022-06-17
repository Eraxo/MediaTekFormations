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

/* admin/admin.formations.html.twig */
class __TwigTemplate_0a2f3d5627ce45de96d05323bf68d07ace87c78236043b13501b4dfb4ad978a5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "baseadmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("baseadmin.html.twig", "admin/admin.formations.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <table class=\"table table-striped\">
        <thead>
            <tr>
                <th class=\"text-left align-top\" scope=\"col\">
                    titre
                    <a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.formations.sort", ["champ" => "title", "ordre" => "DESC"]), "html", null, true);
        echo "\" class=\"btn btn-info btn-sm active\" role=\"button\" aria-pressed=\"true\"><</a>
                    <a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.formations.sort", ["champ" => "title", "ordre" => "ASC"]), "html", null, true);
        echo "\" class=\"btn btn-info btn-sm active\" role=\"button\" aria-pressed=\"true\">></a>
                    <form class=\"form-inline mt-1\" method=\"POST\" action=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.formations.findallcontain", ["champ" => "title"]);
        echo "\">
                        <div class=\"form-group mr-1 mb-2\">
                            <input type=\"text\" class=\"sm\" name=\"recherche\">
                        </div>
                        <input type=\"hidden\" name=\"_token\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("filtre_title"), "html", null, true);
        echo "\">
                        <button type=\"submit\" class=\"btn btn-info mb-2 btn-sm\">filtrer</button>
                    </form>
                    
                </th>
           
                <th class=\"form-group mr-1 mb-2\" scope=\"col\">
                    <a href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.formations.niveau", ["valeur" => "Débutant"]);
        echo "\" class=\"btn btn-info btn-sm active\" role=\"button\" aria-pressed=\"true\">Débutant</a>
                    <a href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.formations.niveau", ["valeur" => "Confirmé"]);
        echo "\" class=\"btn btn-info btn-sm active\" role=\"button\" aria-pressed=\"true\">Confirmé</a>
                    <a href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.formations.niveau", ["valeur" => "Expert"]);
        echo "\" class=\"btn btn-info btn-sm active\" role=\"button\" aria-pressed=\"true\">Expert</a>
                </th>
                <th class=\"text-center align-top\" scope=\"col\">
                    <a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.formations.sort", ["champ" => "publishedAt", "ordre" => "DESC"]), "html", null, true);
        echo "\" class=\"btn btn-info btn-sm active\" role=\"button\" aria-pressed=\"true\"><</a>
                    <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.formations.sort", ["champ" => "publishedAt", "ordre" => "ASC"]), "html", null, true);
        echo "\" class=\"btn btn-info btn-sm active\" role=\"button\" aria-pressed=\"true\">></a>
                 </th>
                 <th class=\"text-center align-top\" scope=\"col\">
                 </th>
                 <th class=\"text-center align-top\" scope=\"col\">
                    <a href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.formation.ajout");
        echo "\" class=\"btn btn-primary\">Ajouter une nouvelle formation</a>
                 </th>
                ";
        // line 40
        echo "            </tr>
        </thead>
        <thead>
            <tr>
                <th>
                    Titre
                </th>
                <th class=\"text-center\">
                    Niveau
                </th>
                <th class=\"text-center\">
                    Date
                </th>
                <th class=\"text-center\">
                    Miniature
                </th>
                <th class=\"text-center\">
                    Actions
                </th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["formations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["formation"]) {
            // line 63
            echo "                <tr>
                    <td>
                        <h5 class=\"text-info\">
                            ";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "title", [], "any", false, false, false, 66), "html", null, true);
            echo "
                        </h5>
                    </td>
                    <td class=\"text-center\">
                        ";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["formation"], "idNiveau", [], "any", false, false, false, 70), "niveaudifficulte", [], "any", false, false, false, 70), "html", null, true);
            echo "
                    </td>
                    <td class=\"text-center\">
                        ";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "publishedatstring", [], "any", false, false, false, 73), "html", null, true);
            echo "
                    </td>
                    <td class=\"text-center\">
                        <img src=\"";
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "miniature", [], "any", false, false, false, 76), "html", null, true);
            echo "\">
                    </td>
                    <td>
                        <a href=\"";
            // line 79
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.formation.edit", ["id" => twig_get_attribute($this->env, $this->source, $context["formation"], "id", [], "any", false, false, false, 79)]), "html", null, true);
            echo "\" class=\"btn btn-secondary\">Editer</a>
                        <a href=\"";
            // line 80
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.formation.suppr", ["id" => twig_get_attribute($this->env, $this->source, $context["formation"], "id", [], "any", false, false, false, 80)]), "html", null, true);
            echo "\" class=\"btn btn-danger\" 
                           onclick=\"return confirm('Etes vous sûr de vouloir supprimer la formation ";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "title", [], "any", false, false, false, 81), "html", null, true);
            echo " ?')\">Supprimer</a>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "        </tbody>
    </table>
";
    }

    public function getTemplateName()
    {
        return "admin/admin.formations.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 85,  179 => 81,  175 => 80,  171 => 79,  165 => 76,  159 => 73,  153 => 70,  146 => 66,  141 => 63,  137 => 62,  113 => 40,  108 => 33,  100 => 28,  96 => 27,  90 => 24,  86 => 23,  82 => 22,  72 => 15,  65 => 11,  61 => 10,  57 => 9,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/admin.formations.html.twig", "D:\\wamp\\www\\mediatekformationQ\\templates\\admin\\admin.formations.html.twig");
    }
}
