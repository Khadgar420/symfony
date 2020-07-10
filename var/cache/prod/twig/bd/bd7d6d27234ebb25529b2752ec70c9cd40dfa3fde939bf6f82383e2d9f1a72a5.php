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

/* blog/gaming.html.twig */
class __TwigTemplate_c4ef5b2ebf98d399e0e1b07c11d881082faffefd41fab6b4424ef5ceecfb0ad0 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "blog/gaming.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "


   

  

  <div class=\"container-md\">



        <div class=\"articleshow row\">
        <div class=\"col-12\">
            <div class=\"allarticle\">
               Gaming
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
              ";
            // line 28
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "category", [], "any", false, false, false, 28), "title", [], "any", false, false, false, 28), "Gaming")) {
                // line 29
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
            // line 50
            echo "    
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
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
        return "blog/gaming.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 52,  117 => 50,  106 => 41,  102 => 40,  98 => 38,  95 => 36,  93 => 35,  84 => 31,  80 => 29,  78 => 28,  75 => 27,  71 => 26,  50 => 7,  46 => 6,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "blog/gaming.html.twig", "C:\\Users\\NZXT\\Documents\\Symfony\\Symfony\\templates\\blog\\gaming.html.twig");
    }
}
