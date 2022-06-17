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

/* pages/formations.html.twig */
class __TwigTemplate_cfaa23aff2bf24a1fc10cccf9c06a68e8177c4f8faabf0059ca2022b835cd77c extends Template
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
        return "basefront.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("basefront.html.twig", "pages/formations.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "    <table class=\"table table-striped\">
        <thead>
            <tr>
                <th class=\"text-left align-top\" scope=\"col\">
                    titre
                    <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formations.sort", ["champ" => "title", "ordre" => "DESC"]), "html", null, true);
        echo "\" class=\"btn btn-info btn-sm active\" role=\"button\" aria-pressed=\"true\"><</a>
                    <a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formations.sort", ["champ" => "title", "ordre" => "ASC"]), "html", null, true);
        echo "\" class=\"btn btn-info btn-sm active\" role=\"button\" aria-pressed=\"true\">></a>
                    <form class=\"form-inline mt-1\" method=\"POST\" action=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formations.findallcontain", ["champ" => "title"]);
        echo "\">
                        <div class=\"form-group mr-1 mb-2\">
                            <input type=\"text\" class=\"sm\" name=\"recherche\">
                        </div>
                        <input type=\"hidden\" name=\"_token\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("filtre_title"), "html", null, true);
        echo "\">
                        <button type=\"submit\" class=\"btn btn-info mb-2 btn-sm\">filtrer</button>
                    </form>
                    
                </th>
           
                <th class=\"form-group mr-1 mb-2\" scope=\"col\">
                    <a href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formations.niveau", ["valeur" => "Débutant"]);
        echo "\" class=\"btn btn-info btn-sm active\" role=\"button\" aria-pressed=\"true\">Débutant</a>
                    <a href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formations.niveau", ["valeur" => "Confirmé"]);
        echo "\" class=\"btn btn-info btn-sm active\" role=\"button\" aria-pressed=\"true\">Confirmé</a>
                    <a href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formations.niveau", ["valeur" => "Expert"]);
        echo "\" class=\"btn btn-info btn-sm active\" role=\"button\" aria-pressed=\"true\">Expert</a>
                </th>
                <th class=\"text-center align-top\" scope=\"col\">
                    <a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formations.sort", ["champ" => "publishedAt", "ordre" => "DESC"]), "html", null, true);
        echo "\" class=\"btn btn-info btn-sm active\" role=\"button\" aria-pressed=\"true\"><</a>
                    <a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formations.sort", ["champ" => "publishedAt", "ordre" => "ASC"]), "html", null, true);
        echo "\" class=\"btn btn-info btn-sm active\" role=\"button\" aria-pressed=\"true\">></a>
                 </th>
                <th class=\"text-center align-top\" scope=\"col\">
                    &nbsp;
                </th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["formations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["formation"]) {
            // line 36
            echo "                <tr>
                    <td>
                        <h5 class=\"text-info\">
                            ";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "title", [], "any", false, false, false, 39), "html", null, true);
            echo "
                        </h5>
                    </td>
                    <td class=\"text-center\">
                        ";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["formation"], "idNiveau", [], "any", false, false, false, 43), "niveaudifficulte", [], "any", false, false, false, 43), "html", null, true);
            echo "
                    </td>
                    <td class=\"text-center\">
                        ";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "publishedatstring", [], "any", false, false, false, 46), "html", null, true);
            echo "
                    </td>
                    <td class=\"text-center\">
                        ";
            // line 49
            if (twig_get_attribute($this->env, $this->source, $context["formation"], "miniature", [], "any", false, false, false, 49)) {
                // line 50
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formations.showone", ["id" => twig_get_attribute($this->env, $this->source, $context["formation"], "id", [], "any", false, false, false, 50)]), "html", null, true);
                echo "\">
                                <img src=\"";
                // line 51
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "miniature", [], "any", false, false, false, 51), "html", null, true);
                echo "\">
                            </a>
                        ";
            }
            // line 54
            echo "                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "        </tbody>
    </table>
";
    }

    public function getTemplateName()
    {
        return "pages/formations.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 57,  152 => 54,  146 => 51,  141 => 50,  139 => 49,  133 => 46,  127 => 43,  120 => 39,  115 => 36,  111 => 35,  100 => 27,  96 => 26,  90 => 23,  86 => 22,  82 => 21,  72 => 14,  65 => 10,  61 => 9,  57 => 8,  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/formations.html.twig", "D:\\wamp\\www\\mediatekformationQ\\templates\\pages\\formations.html.twig");
    }
}
