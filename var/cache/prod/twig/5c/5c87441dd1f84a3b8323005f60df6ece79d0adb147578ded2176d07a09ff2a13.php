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

/* blog/show.html.twig */
class __TwigTemplate_e99e5474cc9956050ff0a0da19bf8a358d6d64178a5d7c37c491a4efd3ca01ef extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "blog/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "



 
    


<div class=\"container-md\">

        <div class=\"articleshow\">
            <div class=\"ArticleTitle col-12\">
                ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "title", [], "any", false, false, false, 16), "html", null, true);
        echo "
            </div>



        </div>
        <div class=\"col-xl\">
            <img src=\"";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "image", [], "any", false, false, false, 23), "html", null, true);
        echo "\" alt=\"\">
            <br>
            <br>
            <br>

            ";
        // line 28
        $context["strategy"] = "html";
        // line 29
        echo "
            ";
        // line 31
        echo "    

            <p id=\"contenu-article\">";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "content", [], "any", false, false, false, 33), "html");
        echo " </p>
            <br>
            <br>
            <br>

          ";
        // line 39
        echo "            <p id=\"info-article\">Ecrit le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "createdAt", [], "any", false, false, false, 39), "d/m/Y"), "html", null, true);
        echo " à ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "createdAt", [], "any", false, false, false, 39), "H:i"), "html", null, true);
        echo " dans la catégorie ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "category", [], "any", false, false, false, 39), "title", [], "any", false, false, false, 39), "html", null, true);
        echo "</p>

        </div>

        ";
        // line 43
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 44
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_edit", ["id" => twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "id", [], "any", false, false, false, 44)]), "html", null, true);
            echo "\" class=\"btn btn-danger\">Edit</a>
        ";
        }
        // line 46
        echo "
        <div class=\"comments\">
            <div class=\"ArticleCommentaire\">
              ";
        // line 49
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "comments", [], "any", false, false, false, 49)), "html", null, true);
        echo "  Commentaires
            </div>

            ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "comments", [], "any", false, false, false, 52));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            echo " 
            <div class=\"col-12 comment\">
                <div class=\"userinfo\">
                    <a href=\"cdv\" id=\"comslide\"><img src=\"./img/logodusite.png\" id=\"avatarcom\" alt=\"imgcdv\"></a>
                    <p>";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "author", [], "any", false, false, false, 56), "html", null, true);
            echo " (<small>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "createdAt", [], "any", false, false, false, 56), "d/m/Y à H:i"), "html", null, true);
            echo "</small>)</p>

                </div>
                     ";
            // line 59
            $context["strategy"] = "html";
            // line 60
            echo "
";
            // line 62
            echo "
                    <div class=\"lecommentaire\">
                        <br>
                        <br>
                        <p id=\"paragraph\"> ";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "content", [], "any", false, false, false, 66), "html");
            echo " </p>


                    </div>

                    ";
            // line 72
            echo "            </div>
            <br>
        <br>
        
        
  

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "
   
  


    ";
        // line 85
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 85)) {
            // line 86
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["commentForm"] ?? null), 'form_start');
            echo "


<div class=\"col-6 form\">";
            // line 89
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["commentForm"] ?? null), "content", [], "any", false, false, false, 89), 'row', ["attr" => ["placeholder" => "Restez courtois"]]);
            echo "</div>
<div class=\"col-6 form\"><button type=\"submit\" class=\"btn btn-success\">Commenter</button></div>

";
            // line 92
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["commentForm"] ?? null), 'form_end');
            echo "
<br>
<br>
<br>
<br>
<br>
<br>


<br>
";
        } else {
            // line 103
            echo "<h2 id=\"comcon\">Connectez vous pour commenter ! </h2>
<br>
<br>
<br>
<div class=\"col-6 form\">
<a href=\"";
            // line 108
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login");
            echo "\" class=\"btn btn-primary\">Connectez vous</a>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


";
        }
        // line 121
        echo "

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

    </div>




";
    }

    public function getTemplateName()
    {
        return "blog/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 121,  221 => 108,  214 => 103,  200 => 92,  194 => 89,  188 => 86,  186 => 85,  179 => 80,  166 => 72,  158 => 66,  152 => 62,  149 => 60,  147 => 59,  139 => 56,  130 => 52,  124 => 49,  119 => 46,  113 => 44,  111 => 43,  99 => 39,  91 => 33,  87 => 31,  84 => 29,  82 => 28,  74 => 23,  64 => 16,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "blog/show.html.twig", "C:\\Users\\NZXT\\Documents\\Symfony\\Symfony\\templates\\blog\\show.html.twig");
    }
}
