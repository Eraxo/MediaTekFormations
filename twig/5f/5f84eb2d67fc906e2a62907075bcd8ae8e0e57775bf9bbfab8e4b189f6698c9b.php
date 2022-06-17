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

/* pages/accueil.html.twig */
class __TwigTemplate_2675f88a7924fe2f250e84a56dc9548001e942917fc2915238810c69ebbc9f86 extends Template
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
        $this->parent = $this->loadTemplate("basefront.html.twig", "pages/accueil.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <p class=\"mt-3\">
        <h3>Bienvenue sur le site de MediaTek86 consacré aux formations</h3>
    </p>
    <p class=\"mt-3\">
        Vous allez pouvoir vous former à différents outils numériques gratuitement et directement en ligne.<br />
        Dans la partie <a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formations");
        echo "\">Formations</a>, vous trouverez la liste des formations proposées. 
        Vous pouvez faire une recherche à partir d'un mot, trier les formations sur le titre ou la date de parution et, 
        en cliquant sur la miniature, vous accèderez à la présentation plus détaillée de la formation ainsi que la vidéo correspondante.
    </p>
    <p>
        Voici les deux dernières formations ajoutées au catalogue :
        <table>
            <tr>
                ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["formations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["formation"]) {
            // line 18
            echo "                    <td style=\"vertical-align: text-top; width: 50%\">
                        <div class=\"row mt-3 mr-3\">
                            <div class=\"col\">
                                <!-- emplacement photo -->
                                ";
            // line 22
            if (twig_get_attribute($this->env, $this->source, $context["formation"], "picture", [], "any", false, false, false, 22)) {
                // line 23
                echo "                                    <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formations.showone", ["id" => twig_get_attribute($this->env, $this->source, $context["formation"], "id", [], "any", false, false, false, 23)]), "html", null, true);
                echo "\">
                                    <img src=\"";
                // line 24
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "picture", [], "any", false, false, false, 24), "html", null, true);
                echo "\" 
                                         class=\"card-img-top\" style=\"width:100%;height:auto;\">
                                    </a>    
                                ";
            }
            // line 28
            echo "                            </div>
                            <div class=\"col\">
                                <p>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "publishedatstring", [], "any", false, false, false, 30), "html", null, true);
            echo "</p>
                                <h4 class=\"text-info mt-1\">
                                    ";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "title", [], "any", false, false, false, 32), "html", null, true);
            echo "
                                </h4>
                            </div>    
                        </div>                    
                    </td>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "    
            </tr>
        </table>
    </p>
";
    }

    public function getTemplateName()
    {
        return "pages/accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 37,  101 => 32,  96 => 30,  92 => 28,  85 => 24,  80 => 23,  78 => 22,  72 => 18,  68 => 17,  57 => 9,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/accueil.html.twig", "D:\\wamp\\www\\mediatekformationQ\\templates\\pages\\accueil.html.twig");
    }
}
