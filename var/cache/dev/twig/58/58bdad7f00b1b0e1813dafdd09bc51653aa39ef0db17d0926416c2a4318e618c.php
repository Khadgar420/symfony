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

/* blog/legal.html.twig */
class __TwigTemplate_c3cd42d828b114be3da0cac520c73296c1e95759b86e69bb3ce51dd5175493b9 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/legal.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/legal.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "blog/legal.html.twig", 1);
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


   
 
    
<div class=\"row\">
  <div class=\"col\" id=\"col1\">

 
<p>
Hébergement :
<br>
Hébergeur : o2switch
<br>
222 Boulevard Gustave Flaubert, 63000 Clermont-Ferrand
<br>
Site Web : https://o2switch.fr
</p>
<br>

<h1>Conditions d’utilisation :</h1>

<p>Ce site (lepadpoupre.com) est proposé en différents langages web (HTML5, PHP, Javascript, CSS, etc…) pour un meilleur confort d’utilisation et un graphisme plus agréable, nous vous recommandons de recourir à des navigateurs modernes comme Internet explorer, Safari, Firefox, Google Chrome, etc…
<br>
Le créateur met en œuvre tous les moyens dont il dispose, pour assurer une information fiable et une mise à jour fiable de ses sites internet. Toutefois, des erreurs ou omissions peuvent survenir. L’internaute devra donc s’assurer de l’exactitude des informations auprès de lepadpourpre@gmail.com, et signaler toutes modifications du site qu’il jugerait utile. 
<br>
Lepadpoupre.com n’est en aucun cas responsable de l’utilisation faite de ces informations, et de tout préjudice direct ou indirect pouvant en découler.</p>
<br><br>
<h1>Cookies :</h1> 
<p>Le site lepadpourpre.com peut être amené à vous demander l’acceptation des cookies pour des besoins de statistiques et d’affichage.
<br> 
Un cookie est une information déposée sur votre disque dur par le serveur du site que vous visitez. Il contient plusieurs données qui sont stockées sur votre ordinateur dans un simple fichier texte auquel un serveur accède pour lire et enregistrer des informations.

<br> Certaines parties de ce site ne peuvent être fonctionnelles sans l’acceptation de cookies.</p>

<br><br>

<h1>Liens hypertextes :</h1>

<p>Les sites internet peuvent offrir des liens vers d’autres sites internet ou d’autres ressources disponibles sur Internet. 
<br>
LePadPoupre.com ne dispose d’aucun moyen pour contrôler les sites en connexion avec ses sites internet. 
<br>
Lepadpoupre.com ne répond pas de la disponibilité de tels sites et sources externes, ni ne la garantit. 
<br>
Il ne peut être tenue pour responsable de tout dommage, de quelque nature que ce soit, résultant du contenu de ces sites ou sources externes, et notamment des informations, produits ou services qu’ils proposent, ou de tout usage qui peut être fait de ces éléments.
<br>
 Les risques liés à cette utilisation incombent pleinement à l’internaute, qui doit se conformer à leurs conditions d’utilisation.
 <br>
Les utilisateurs, les abonnés et les visiteurs des sites internet ne peuvent pas mettre en place un hyperlien en direction de ce site sans l’autorisation expresse et préalable de lepadpoupre.com.
<br>
Dans l’hypothèse où un utilisateur ou visiteur souhaiterait mettre en place un hyperlien en direction de lepadpoupre.com, il lui appartiendra d’adresser un email accessible sur le site afin de formuler sa demande de mise en place d’un hyperlien. 
<br>
Lepadpoupre.com se réserve le droit d’accepter ou de refuser un hyperlien sans avoir à en justifier sa décision.</p>

<br><br>

<h1>Services fournis : </h1>

<p>Lepadpoupre.com s’efforce de fournir sur le site www.lepadpoupre.com des informations aussi précises que possible. 
Les renseignements figurant sur le site lepadpoupre.com ne sont pas exhaustifs et les photos non contractuelles. Ils sont donnés sous réserve de modifications ayant été apportées depuis leur mise en ligne.
<br>
 Par ailleurs, toutes les informations indiquées sur le site lepadpoupre.com sont données à titre indicatif, et sont susceptibles de changer ou d’évoluer sans préavis.
 <br>
Limitation contractuelle sur les données :
Les informations contenues sur ce site sont aussi précises que possible et le site remis à jour à différentes périodes de l’année, mais peut toutefois contenir des inexactitudes ou des omissions. 
<br>
Si vous constatez une lacune, erreur ou ce qui parait être un dysfonctionnement, merci de bien vouloir le signaler par email, à l’adresse lepadpoupre.com, en décrivant le problème de la manière la plus précise possible (page posant problème, type d’ordinateur et de navigateur utilisé, …).
<br>
Tout contenu téléchargé se fait aux risques et périls de l’utilisateur et sous sa seule responsabilité. En conséquence, lepadpourpre.com ne saurait être tenu responsable d’un quelconque dommage subi par l’ordinateur de l’utilisateur ou d’une quelconque perte de données consécutives au téléchargement.
<br>
De plus, l’utilisateur du site s’engage à accéder au site en utilisant un matériel récent, ne contenant pas de virus et avec un navigateur de dernière génération mis-à-jour.
<br>
Les liens hypertextes mis en place dans le cadre du présent site internet en direction d’autres ressources présentes sur le réseau Internet ne sauraient engager la responsabilité de lepadpoupre.com.</p>

<br><br>
<h1>Propriété intellectuelle :</h1>
<p>
Le logo de lepadpoupre.com est la propriété exclusive de la société à l’exception des marques, logos ou contenus appartenant à d’autres sociétés partenaires ou auteurs.
<br>
Toute reproduction, distribution, modification, adaptation, retransmission ou publication, même partielle, de ces différents éléments est strictement interdite sans l’accord exprès par écrit de lepadpoupre.com.
<br>
 Cette représentation ou reproduction, par quelque procédé que ce soit, constitue une contrefaçon sanctionnée par les articles L.335-2 et suivants du Code de la propriété intellectuelle.
 <br>
 Le non-respect de cette interdiction constitue une contrefaçon pouvant engager la responsabilité civile et pénale du contrefacteur. En outre, les propriétaires des Contenus copiés pourraient intenter une action en justice à votre encontre.</p>

 <br><br>

<h1>Déclaration à la CNIL :</h1>
<p>
Conformément à la loi 78-17 du 6 janvier 1978 (modifiée par la loi 2004-801 du 6 août 2004 relative à la protection des personnes physiques à l’égard des traitements de données à caractère personnel) relative à l’informatique, aux fichiers et aux libertés, ce site a fait l’objet d’une déclaration 1656629 auprès de la Commission nationale de l’informatique et des libertés (www.cnil.fr).</p>

<br><br>

<h1>Litiges :</h1>

<p>Les présentes conditions du site lepadpoupre.com sont régies par les lois françaises et toute contestation ou litiges qui pourraient naître de l’interprétation ou de l’exécution de celles-ci seront de la compétence exclusive des tribunaux dont dépend le siège social de la société. La langue de référence, pour le règlement de contentieux éventuels, est le français.</p>

<br><br>

<h1>Données personnelles :</h1>
<p>De manière générale, vous n’êtes pas tenu de nous communiquer vos données personnelles lorsque vous visitez notre site Internet lepadpoupre.com.
<br>
Aucune des fonctionnalités ne demandent vos coordonnées personnelles, de ce fait les seules données enregistrées sont votre pseudo, adresse mail et vos commentaires.
<br>
Enfin, nous pouvons collecter de manière automatique certaines informations vous concernant lors d’une simple navigation sur notre site Internet, notamment : des informations concernant l’utilisation de notre site, comme les zones que vous visitez et les services auxquels vous accédez, votre adresse IP, le type de votre navigateur, vos temps d’accès.
<br>
De telles informations sont utilisées exclusivement à des fins de statistiques internes, de manière à améliorer la qualité des services qui vous sont proposés. Les bases de données sont protégées par les dispositions de la loi du 1er juillet 1998 transposant la directive 96/9 du 11 mars 1996 relative à la protection juridique des bases de données.
<br></p>



</div>




        
    
  </div>


  


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "blog/legal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 7,  58 => 6,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}




{% block body %}



   
 
    
<div class=\"row\">
  <div class=\"col\" id=\"col1\">

 
<p>
Hébergement :
<br>
Hébergeur : o2switch
<br>
222 Boulevard Gustave Flaubert, 63000 Clermont-Ferrand
<br>
Site Web : https://o2switch.fr
</p>
<br>

<h1>Conditions d’utilisation :</h1>

<p>Ce site (lepadpoupre.com) est proposé en différents langages web (HTML5, PHP, Javascript, CSS, etc…) pour un meilleur confort d’utilisation et un graphisme plus agréable, nous vous recommandons de recourir à des navigateurs modernes comme Internet explorer, Safari, Firefox, Google Chrome, etc…
<br>
Le créateur met en œuvre tous les moyens dont il dispose, pour assurer une information fiable et une mise à jour fiable de ses sites internet. Toutefois, des erreurs ou omissions peuvent survenir. L’internaute devra donc s’assurer de l’exactitude des informations auprès de lepadpourpre@gmail.com, et signaler toutes modifications du site qu’il jugerait utile. 
<br>
Lepadpoupre.com n’est en aucun cas responsable de l’utilisation faite de ces informations, et de tout préjudice direct ou indirect pouvant en découler.</p>
<br><br>
<h1>Cookies :</h1> 
<p>Le site lepadpourpre.com peut être amené à vous demander l’acceptation des cookies pour des besoins de statistiques et d’affichage.
<br> 
Un cookie est une information déposée sur votre disque dur par le serveur du site que vous visitez. Il contient plusieurs données qui sont stockées sur votre ordinateur dans un simple fichier texte auquel un serveur accède pour lire et enregistrer des informations.

<br> Certaines parties de ce site ne peuvent être fonctionnelles sans l’acceptation de cookies.</p>

<br><br>

<h1>Liens hypertextes :</h1>

<p>Les sites internet peuvent offrir des liens vers d’autres sites internet ou d’autres ressources disponibles sur Internet. 
<br>
LePadPoupre.com ne dispose d’aucun moyen pour contrôler les sites en connexion avec ses sites internet. 
<br>
Lepadpoupre.com ne répond pas de la disponibilité de tels sites et sources externes, ni ne la garantit. 
<br>
Il ne peut être tenue pour responsable de tout dommage, de quelque nature que ce soit, résultant du contenu de ces sites ou sources externes, et notamment des informations, produits ou services qu’ils proposent, ou de tout usage qui peut être fait de ces éléments.
<br>
 Les risques liés à cette utilisation incombent pleinement à l’internaute, qui doit se conformer à leurs conditions d’utilisation.
 <br>
Les utilisateurs, les abonnés et les visiteurs des sites internet ne peuvent pas mettre en place un hyperlien en direction de ce site sans l’autorisation expresse et préalable de lepadpoupre.com.
<br>
Dans l’hypothèse où un utilisateur ou visiteur souhaiterait mettre en place un hyperlien en direction de lepadpoupre.com, il lui appartiendra d’adresser un email accessible sur le site afin de formuler sa demande de mise en place d’un hyperlien. 
<br>
Lepadpoupre.com se réserve le droit d’accepter ou de refuser un hyperlien sans avoir à en justifier sa décision.</p>

<br><br>

<h1>Services fournis : </h1>

<p>Lepadpoupre.com s’efforce de fournir sur le site www.lepadpoupre.com des informations aussi précises que possible. 
Les renseignements figurant sur le site lepadpoupre.com ne sont pas exhaustifs et les photos non contractuelles. Ils sont donnés sous réserve de modifications ayant été apportées depuis leur mise en ligne.
<br>
 Par ailleurs, toutes les informations indiquées sur le site lepadpoupre.com sont données à titre indicatif, et sont susceptibles de changer ou d’évoluer sans préavis.
 <br>
Limitation contractuelle sur les données :
Les informations contenues sur ce site sont aussi précises que possible et le site remis à jour à différentes périodes de l’année, mais peut toutefois contenir des inexactitudes ou des omissions. 
<br>
Si vous constatez une lacune, erreur ou ce qui parait être un dysfonctionnement, merci de bien vouloir le signaler par email, à l’adresse lepadpoupre.com, en décrivant le problème de la manière la plus précise possible (page posant problème, type d’ordinateur et de navigateur utilisé, …).
<br>
Tout contenu téléchargé se fait aux risques et périls de l’utilisateur et sous sa seule responsabilité. En conséquence, lepadpourpre.com ne saurait être tenu responsable d’un quelconque dommage subi par l’ordinateur de l’utilisateur ou d’une quelconque perte de données consécutives au téléchargement.
<br>
De plus, l’utilisateur du site s’engage à accéder au site en utilisant un matériel récent, ne contenant pas de virus et avec un navigateur de dernière génération mis-à-jour.
<br>
Les liens hypertextes mis en place dans le cadre du présent site internet en direction d’autres ressources présentes sur le réseau Internet ne sauraient engager la responsabilité de lepadpoupre.com.</p>

<br><br>
<h1>Propriété intellectuelle :</h1>
<p>
Le logo de lepadpoupre.com est la propriété exclusive de la société à l’exception des marques, logos ou contenus appartenant à d’autres sociétés partenaires ou auteurs.
<br>
Toute reproduction, distribution, modification, adaptation, retransmission ou publication, même partielle, de ces différents éléments est strictement interdite sans l’accord exprès par écrit de lepadpoupre.com.
<br>
 Cette représentation ou reproduction, par quelque procédé que ce soit, constitue une contrefaçon sanctionnée par les articles L.335-2 et suivants du Code de la propriété intellectuelle.
 <br>
 Le non-respect de cette interdiction constitue une contrefaçon pouvant engager la responsabilité civile et pénale du contrefacteur. En outre, les propriétaires des Contenus copiés pourraient intenter une action en justice à votre encontre.</p>

 <br><br>

<h1>Déclaration à la CNIL :</h1>
<p>
Conformément à la loi 78-17 du 6 janvier 1978 (modifiée par la loi 2004-801 du 6 août 2004 relative à la protection des personnes physiques à l’égard des traitements de données à caractère personnel) relative à l’informatique, aux fichiers et aux libertés, ce site a fait l’objet d’une déclaration 1656629 auprès de la Commission nationale de l’informatique et des libertés (www.cnil.fr).</p>

<br><br>

<h1>Litiges :</h1>

<p>Les présentes conditions du site lepadpoupre.com sont régies par les lois françaises et toute contestation ou litiges qui pourraient naître de l’interprétation ou de l’exécution de celles-ci seront de la compétence exclusive des tribunaux dont dépend le siège social de la société. La langue de référence, pour le règlement de contentieux éventuels, est le français.</p>

<br><br>

<h1>Données personnelles :</h1>
<p>De manière générale, vous n’êtes pas tenu de nous communiquer vos données personnelles lorsque vous visitez notre site Internet lepadpoupre.com.
<br>
Aucune des fonctionnalités ne demandent vos coordonnées personnelles, de ce fait les seules données enregistrées sont votre pseudo, adresse mail et vos commentaires.
<br>
Enfin, nous pouvons collecter de manière automatique certaines informations vous concernant lors d’une simple navigation sur notre site Internet, notamment : des informations concernant l’utilisation de notre site, comme les zones que vous visitez et les services auxquels vous accédez, votre adresse IP, le type de votre navigateur, vos temps d’accès.
<br>
De telles informations sont utilisées exclusivement à des fins de statistiques internes, de manière à améliorer la qualité des services qui vous sont proposés. Les bases de données sont protégées par les dispositions de la loi du 1er juillet 1998 transposant la directive 96/9 du 11 mars 1996 relative à la protection juridique des bases de données.
<br></p>



</div>




        
    
  </div>


  


{% endblock %}
", "blog/legal.html.twig", "C:\\Users\\NZXT\\Documents\\Symfony\\Symfony\\templates\\blog\\legal.html.twig");
    }
}
