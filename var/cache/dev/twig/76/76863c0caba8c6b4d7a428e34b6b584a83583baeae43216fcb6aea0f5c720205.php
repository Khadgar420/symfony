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

/* blog/hardware.html.twig */
class __TwigTemplate_64ade17b1393b62d0395f9fefb7aea8c4c1cc9bf11a1606275a21d919d488609 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/hardware.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/hardware.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "blog/hardware.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "


   

  

  <div class=\"container-md\">



        <div class=\"articleshow row\">
        <div class=\"col-12\">
            <div class=\"allarticle\">
               Hardware
            </div>

         </div>   
            <br>
               ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 26, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 27
            echo "
              ";
            // line 28
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "category", [], "any", false, false, false, 28), "title", [], "any", false, false, false, 28), "Hardware")) {
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "blog/hardware.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 52,  135 => 50,  124 => 41,  120 => 40,  116 => 38,  113 => 36,  111 => 35,  102 => 31,  98 => 29,  96 => 28,  93 => 27,  89 => 26,  68 => 7,  58 => 6,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}




{% block body %}



   

  

  <div class=\"container-md\">



        <div class=\"articleshow row\">
        <div class=\"col-12\">
            <div class=\"allarticle\">
               Hardware
            </div>

         </div>   
            <br>
               {% for article in articles  %}

              {% if article.category.title == 'Hardware' %}
  
    
            <div class=\"col-3 article\" style=\"background-image: url('{{article.image}}');\" onclick=\"location.href='{{ path('blog_show', {'id': article.id}) }}'\">
            
            
                <div class=\"extrait\">
                    <p> {% set strategy = 'html' %}

                      {% autoescape 'html' %}
                          

                          {{ article.content|length > 50 ? article.content|slice(0, 80) ~ '...' : article.content  }}
                      {% endautoescape %}</p>

                </div>

                
              
    </div>

    {% endif %}
    
{% endfor %}
        </div>

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

    



  


{% endblock %}
", "blog/hardware.html.twig", "C:\\Users\\NZXT\\Documents\\Symfony\\Symfony\\templates\\blog\\hardware.html.twig");
    }
}
