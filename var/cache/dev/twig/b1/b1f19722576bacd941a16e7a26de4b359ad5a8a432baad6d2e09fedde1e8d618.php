<?php

/* base.html.twig */
class __TwigTemplate_e7512925d8fb00307cc049a1006d437f3028b1723b810d6e2acede88a13e1891 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cedd13db13854ce06ae89b8cd27da4f9839b2b0c4ba99683bec89bcbd11b3f03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cedd13db13854ce06ae89b8cd27da4f9839b2b0c4ba99683bec89bcbd11b3f03->enter($__internal_cedd13db13854ce06ae89b8cd27da4f9839b2b0c4ba99683bec89bcbd11b3f03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_1aa4fc951edc4451b27bf512a2cfc2ec1594ab3e9320cb3c58b9d916034ce6cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1aa4fc951edc4451b27bf512a2cfc2ec1594ab3e9320cb3c58b9d916034ce6cd->enter($__internal_1aa4fc951edc4451b27bf512a2cfc2ec1594ab3e9320cb3c58b9d916034ce6cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_cedd13db13854ce06ae89b8cd27da4f9839b2b0c4ba99683bec89bcbd11b3f03->leave($__internal_cedd13db13854ce06ae89b8cd27da4f9839b2b0c4ba99683bec89bcbd11b3f03_prof);

        
        $__internal_1aa4fc951edc4451b27bf512a2cfc2ec1594ab3e9320cb3c58b9d916034ce6cd->leave($__internal_1aa4fc951edc4451b27bf512a2cfc2ec1594ab3e9320cb3c58b9d916034ce6cd_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_61190629528942315600546d56c7e4cb16d4c61c8306e0fcbef85a4f1403f04a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61190629528942315600546d56c7e4cb16d4c61c8306e0fcbef85a4f1403f04a->enter($__internal_61190629528942315600546d56c7e4cb16d4c61c8306e0fcbef85a4f1403f04a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fa27bb17849a3a2ef152fa18f67a3be9452ae125829167a79d2810cff9eec356 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa27bb17849a3a2ef152fa18f67a3be9452ae125829167a79d2810cff9eec356->enter($__internal_fa27bb17849a3a2ef152fa18f67a3be9452ae125829167a79d2810cff9eec356_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_fa27bb17849a3a2ef152fa18f67a3be9452ae125829167a79d2810cff9eec356->leave($__internal_fa27bb17849a3a2ef152fa18f67a3be9452ae125829167a79d2810cff9eec356_prof);

        
        $__internal_61190629528942315600546d56c7e4cb16d4c61c8306e0fcbef85a4f1403f04a->leave($__internal_61190629528942315600546d56c7e4cb16d4c61c8306e0fcbef85a4f1403f04a_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e27e61f4e308dcbd62368e6e896d68a0461f9b20cb55abdcf8413bd1547f1252 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e27e61f4e308dcbd62368e6e896d68a0461f9b20cb55abdcf8413bd1547f1252->enter($__internal_e27e61f4e308dcbd62368e6e896d68a0461f9b20cb55abdcf8413bd1547f1252_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_5762dc0033fb7b96693df936e37b1623062ddba57777e2369aae486e4a20b365 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5762dc0033fb7b96693df936e37b1623062ddba57777e2369aae486e4a20b365->enter($__internal_5762dc0033fb7b96693df936e37b1623062ddba57777e2369aae486e4a20b365_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_5762dc0033fb7b96693df936e37b1623062ddba57777e2369aae486e4a20b365->leave($__internal_5762dc0033fb7b96693df936e37b1623062ddba57777e2369aae486e4a20b365_prof);

        
        $__internal_e27e61f4e308dcbd62368e6e896d68a0461f9b20cb55abdcf8413bd1547f1252->leave($__internal_e27e61f4e308dcbd62368e6e896d68a0461f9b20cb55abdcf8413bd1547f1252_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_cdda6b98a0d531bf0db28cf0ed947b30fb25d1769e053ba2c66fdf57c139b346 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdda6b98a0d531bf0db28cf0ed947b30fb25d1769e053ba2c66fdf57c139b346->enter($__internal_cdda6b98a0d531bf0db28cf0ed947b30fb25d1769e053ba2c66fdf57c139b346_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_408d477e0e332d42a94960687f38156310a91213c8c96184effe079b313dc7ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_408d477e0e332d42a94960687f38156310a91213c8c96184effe079b313dc7ac->enter($__internal_408d477e0e332d42a94960687f38156310a91213c8c96184effe079b313dc7ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_408d477e0e332d42a94960687f38156310a91213c8c96184effe079b313dc7ac->leave($__internal_408d477e0e332d42a94960687f38156310a91213c8c96184effe079b313dc7ac_prof);

        
        $__internal_cdda6b98a0d531bf0db28cf0ed947b30fb25d1769e053ba2c66fdf57c139b346->leave($__internal_cdda6b98a0d531bf0db28cf0ed947b30fb25d1769e053ba2c66fdf57c139b346_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_875a90f51eaec7e2f055a5da7b42793dc2772c58a77f6ba1901741611b88e180 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_875a90f51eaec7e2f055a5da7b42793dc2772c58a77f6ba1901741611b88e180->enter($__internal_875a90f51eaec7e2f055a5da7b42793dc2772c58a77f6ba1901741611b88e180_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_9582d39ebb5559c1d85bf22adfb0fbbdf36f6629bbae77a7ce9830f43fc6e31e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9582d39ebb5559c1d85bf22adfb0fbbdf36f6629bbae77a7ce9830f43fc6e31e->enter($__internal_9582d39ebb5559c1d85bf22adfb0fbbdf36f6629bbae77a7ce9830f43fc6e31e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_9582d39ebb5559c1d85bf22adfb0fbbdf36f6629bbae77a7ce9830f43fc6e31e->leave($__internal_9582d39ebb5559c1d85bf22adfb0fbbdf36f6629bbae77a7ce9830f43fc6e31e_prof);

        
        $__internal_875a90f51eaec7e2f055a5da7b42793dc2772c58a77f6ba1901741611b88e180->leave($__internal_875a90f51eaec7e2f055a5da7b42793dc2772c58a77f6ba1901741611b88e180_prof);

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
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/home/paul/projects/game/app/Resources/views/base.html.twig");
    }
}
