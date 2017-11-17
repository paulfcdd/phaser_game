<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_40d17f889cda0e9198fdd0de6a45002f4e95d20d7f1dda71b6e52967dec960e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a9df965dbee9f303c01fc9d37c5bb604f0ebceaa93f1b569a64cc45cb9a8f500 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9df965dbee9f303c01fc9d37c5bb604f0ebceaa93f1b569a64cc45cb9a8f500->enter($__internal_a9df965dbee9f303c01fc9d37c5bb604f0ebceaa93f1b569a64cc45cb9a8f500_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_549a5d1abd736e40a4fc4c13993876d3a395f0b529aa66dff24dac9ab1d4c8c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_549a5d1abd736e40a4fc4c13993876d3a395f0b529aa66dff24dac9ab1d4c8c7->enter($__internal_549a5d1abd736e40a4fc4c13993876d3a395f0b529aa66dff24dac9ab1d4c8c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_a9df965dbee9f303c01fc9d37c5bb604f0ebceaa93f1b569a64cc45cb9a8f500->leave($__internal_a9df965dbee9f303c01fc9d37c5bb604f0ebceaa93f1b569a64cc45cb9a8f500_prof);

        
        $__internal_549a5d1abd736e40a4fc4c13993876d3a395f0b529aa66dff24dac9ab1d4c8c7->leave($__internal_549a5d1abd736e40a4fc4c13993876d3a395f0b529aa66dff24dac9ab1d4c8c7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0b1908ad8f6de7b834877a67133bb5fa02462b737247f797387574e1082c8cfe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b1908ad8f6de7b834877a67133bb5fa02462b737247f797387574e1082c8cfe->enter($__internal_0b1908ad8f6de7b834877a67133bb5fa02462b737247f797387574e1082c8cfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ea5f2d79394881adbbeb71dbbc5b2504f8fec7db8ccfecb80e56bf38907b35ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea5f2d79394881adbbeb71dbbc5b2504f8fec7db8ccfecb80e56bf38907b35ce->enter($__internal_ea5f2d79394881adbbeb71dbbc5b2504f8fec7db8ccfecb80e56bf38907b35ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_ea5f2d79394881adbbeb71dbbc5b2504f8fec7db8ccfecb80e56bf38907b35ce->leave($__internal_ea5f2d79394881adbbeb71dbbc5b2504f8fec7db8ccfecb80e56bf38907b35ce_prof);

        
        $__internal_0b1908ad8f6de7b834877a67133bb5fa02462b737247f797387574e1082c8cfe->leave($__internal_0b1908ad8f6de7b834877a67133bb5fa02462b737247f797387574e1082c8cfe_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_31e64c73569dab0699b5891e41457d0dd4b6fc6316b85032fd47e19ec67279c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31e64c73569dab0699b5891e41457d0dd4b6fc6316b85032fd47e19ec67279c8->enter($__internal_31e64c73569dab0699b5891e41457d0dd4b6fc6316b85032fd47e19ec67279c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8273d790b0d35c8b7c902f21d1ebba5e8a3f7e55d6645c582e5a44760d6218b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8273d790b0d35c8b7c902f21d1ebba5e8a3f7e55d6645c582e5a44760d6218b6->enter($__internal_8273d790b0d35c8b7c902f21d1ebba5e8a3f7e55d6645c582e5a44760d6218b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_8273d790b0d35c8b7c902f21d1ebba5e8a3f7e55d6645c582e5a44760d6218b6->leave($__internal_8273d790b0d35c8b7c902f21d1ebba5e8a3f7e55d6645c582e5a44760d6218b6_prof);

        
        $__internal_31e64c73569dab0699b5891e41457d0dd4b6fc6316b85032fd47e19ec67279c8->leave($__internal_31e64c73569dab0699b5891e41457d0dd4b6fc6316b85032fd47e19ec67279c8_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_586c36a68a09764648edf3b1fe21148bba31a3dbe609d0bb7d36628d5f7cfa09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_586c36a68a09764648edf3b1fe21148bba31a3dbe609d0bb7d36628d5f7cfa09->enter($__internal_586c36a68a09764648edf3b1fe21148bba31a3dbe609d0bb7d36628d5f7cfa09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_59ddbec1609e17a108738ab5f3e6c915ef4497bd0f7caf2488a49c88a6554c5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59ddbec1609e17a108738ab5f3e6c915ef4497bd0f7caf2488a49c88a6554c5c->enter($__internal_59ddbec1609e17a108738ab5f3e6c915ef4497bd0f7caf2488a49c88a6554c5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_59ddbec1609e17a108738ab5f3e6c915ef4497bd0f7caf2488a49c88a6554c5c->leave($__internal_59ddbec1609e17a108738ab5f3e6c915ef4497bd0f7caf2488a49c88a6554c5c_prof);

        
        $__internal_586c36a68a09764648edf3b1fe21148bba31a3dbe609d0bb7d36628d5f7cfa09->leave($__internal_586c36a68a09764648edf3b1fe21148bba31a3dbe609d0bb7d36628d5f7cfa09_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/home/paul/projects/game/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
