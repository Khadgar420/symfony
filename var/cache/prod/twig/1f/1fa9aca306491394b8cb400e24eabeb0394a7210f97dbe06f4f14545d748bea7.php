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

/* blog/index.html.twig */
class __TwigTemplate_4f4aa555a4039df863cdd5253b468b2a261fbf020f934b7b556cdb709e40f17d extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "blog/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "






  <div class=\"container-md\">
";
        // line 15
        $context["article"] = "articles";
        // line 16
        echo "

        <div class=\"articleshow row\">
        <div class=\"col-12\">
            <div class=\"allarticle\">
             ";
        // line 21
        echo twig_escape_filter($this->env, ($context["articleCount"] ?? null), "html", null, true);
        echo "   Articles
            </div>

         </div>   
            <br>
               ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 27
            echo "
               
  
    
            <div class=\"col-3 article\" style=\"background-image: url('";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "image", [], "any", false, false, false, 31), "html", null, true);
            echo "');\" onclick=\"location.href='";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_show", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 31)]), "html", null, true);
            echo "'\">
            
            
                <div class=\"extrait\">
                    <p> ";
            // line 35
            $context["strategy"] = "html";
            // line 36
            echo "
                      ";
            // line 38
            echo "                          

                          ";
            // line 40
            echo twig_escape_filter($this->env, ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "content", [], "any", false, false, false, 40)), 50)) ? ((twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "content", [], "any", false, false, false, 40), 0, 80) . "...")) : (twig_get_attribute($this->env, $this->source, $context["article"], "content", [], "any", false, false, false, 40))), "html", null, true);
            echo "
                      ";
            // line 41
            echo "</p>

                </div>

                
              
    </div>
    
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "        </div>

        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        </div>
        </div>
    </div>

    ";
    }

    public function getTemplateName()
    {
        return "blog/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 50,  109 => 41,  105 => 40,  101 => 38,  98 => 36,  96 => 35,  87 => 31,  81 => 27,  77 => 26,  69 => 21,  62 => 16,  60 => 15,  50 => 7,  46 => 6,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "blog/index.html.twig", "C:\\Users\\NZXT\\Documents\\Symfony\\Symfony\\templates\\blog\\index.html.twig");
    }
}
