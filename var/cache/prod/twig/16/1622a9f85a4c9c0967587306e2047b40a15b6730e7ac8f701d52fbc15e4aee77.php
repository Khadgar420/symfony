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

/* base.html.twig */
class __TwigTemplate_4d4cff8725616e98e37895c603f2b86a313902cbf15adc3dad0454c89869a206 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <meta name=\"description\" content=\"Le Pad Pourpre, news sur le hardware et les jeux vidéo ! \">
        
        <meta name=\"copyright\" content=\"© Le Pad Poupre 2020\">
 
  
        ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
        echo "
      <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
   
    </head>


<body>
    <div class=\"sidemenu\">
        <div class=\"nav-hide\">&#9776;</div>
        <a href=\"/\" id=\"cdvslide\"><img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/logodusite.png"), "html", null, true);
        echo "\" id=\"avatarside\" alt=\"imgcdv\"></a>
        <ul class=\"info-user-side\">

           

            ";
        // line 32
        if ( !twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 32)) {
            // line 33
            echo "  
   
            <li><a href=\"/connexion\"> Se connecter</a></li>

   ";
        } else {
            // line 38
            echo "
    <li>Bonjour ";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 39), "username", [], "any", false, false, false, 39), "html", null, true);
            echo "</li>
            <li><a href=\"/deconnexion\"> Se déconnecter</a></li>
        </ul>

       ";
        }
        // line 43
        echo " 

        <ul class=\"list\">
            <li>
                <a href=\"/\">
                    <h2>Accueil</h2>
                </a>
            </li>
            ";
        // line 51
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 52
            echo "            <li>
                <a href=\"/blog/new\">
                    <h2>Créer un article</h2> 
                </a>
            </li>
            <li>
                <a href=\"/admin\">
                    <h2>Administration</h2>
                </a>
            </li>

            ";
        }
        // line 64
        echo "            <li>
                <a href=\"/blog\">
                    <h2>Tout les articles</h2>
                </a>
            </li>
            <li>
                <a href=\"/gaming\">
                    <h2>Gaming</h2>
                </a>
            </li>
            <li>
                <a href=\"/hardware\">
                    <h2>Hardware</h2>
                </a>
            </li>
        </ul>


    </div>

    <div class=\"navbar\">

        <div class=\"title\">
            <div class=\"nav-toggle\">&#9776;</div>
            <a href=\"/\"><img src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/logodusite.png"), "html", null, true);
        echo "\" id=\"sitelogo\" alt=\"logo\"></a>
            <h1 id=\"webtitle\">Le Pad Pourpre</h1>
        </div>



        <div class=\"userpart\">
            <a href=\"cdv\"><img src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/logodusite.png"), "html", null, true);
        echo "\" id=\"avatar\" alt=\"imgcdv\"></a>
            <li class=\"info-user\">
                    ";
        // line 97
        if ( !twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 97)) {
            // line 98
            echo "  
   
            <ul><a href=\"/connexion\"> Se connecter</a></ul>

   ";
        } else {
            // line 103
            echo "
    <ul>Bonjour ";
            // line 104
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 104), "username", [], "any", false, false, false, 104), "html", null, true);
            echo "</ul>
            <ul><a href=\"/deconnexion\"> Se déconnecter</a></ul>
        </ul>
            </li>
            </li>

      ";
        }
        // line 110
        echo "      
        </div>



    </div>

    

    
       
";
        // line 121
        $this->displayBlock('body', $context, $blocks);
        // line 124
        echo "
    


    <!-- Site footer -->
    <footer class=\"site-footer\">
        <div class=\"container\">
            <div class=\"chiant\">
                <div class=\"col-sm-12 col-md-6\">
                    <h6>A propos</h6>
                    <li><a href=\"mentions\">Mentions légales</a></li>
                    <li><a href=\"Condition\">Conditions d'utilisation</a></li>
                    <li><a href=\"Pol\">Politiques de confidentialité</a></li>

                </div>



                <div class=\"col-xs-6 col-md-3\">
                    <h6>Liens rapides</h6>
                    <ul class=\"footer-links\">
                        <li><a href=\"http://scanfcode.com/about/\">Nous contacter</a></li>

                    </ul>
                </div>
            </div>
            <hr>
        </div>
        <div class=\"container\">
            <div class=\"chiant\">
                <div class=\"col-md-8 col-sm-6 col-xs-12\">
                    <p class=\"copyright-text\">Copyright &copy; 2020 All Rights Reserved by
                        <a href=\"#\">LePadPourpre</a>.
                    </p>
                </div>


            </div>
        </div>
    </footer>





    



</html>


        ";
        // line 176
        $this->displayBlock('javascripts', $context, $blocks);
        // line 190
        echo "

        
    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Le Pad Pourpre";
    }

    // line 11
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "         
          ";
        // line 13
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("cookiesscss");
        echo "
          ";
        // line 14
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("style");
        echo "
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css\" integrity=\"sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk\" crossorigin=\"anonymous\">
       <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/favicon.png"), "html", null, true);
        echo "\" />
        ";
    }

    // line 121
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 122
        echo "
";
    }

    // line 176
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 177
        echo "       
        
        ";
        // line 179
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("cookies");
        echo "
        ";
        // line 180
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("anim0");
        echo "
        ";
        // line 181
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("anim1");
        echo "

        
       
<script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\" integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\" crossorigin=\"anonymous\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\" integrity=\"sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6\" crossorigin=\"anonymous\"></script>
        
        
";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  320 => 181,  316 => 180,  312 => 179,  308 => 177,  304 => 176,  299 => 122,  295 => 121,  289 => 16,  284 => 14,  280 => 13,  277 => 12,  273 => 11,  266 => 5,  257 => 190,  255 => 176,  201 => 124,  199 => 121,  186 => 110,  176 => 104,  173 => 103,  166 => 98,  164 => 97,  159 => 95,  149 => 88,  123 => 64,  109 => 52,  107 => 51,  97 => 43,  89 => 39,  86 => 38,  79 => 33,  77 => 32,  69 => 27,  58 => 18,  56 => 11,  47 => 5,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "C:\\Users\\NZXT\\Documents\\Symfony\\Symfony\\templates\\base.html.twig");
    }
}
