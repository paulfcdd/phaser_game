<?php

/* default/index.html.twig */
class __TwigTemplate_e685ed4c5a9afa01fadd57a24b9e0c01697ea83a14d199d73fc764e51ec3b70f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_38906eaacffed34b85118f260b905f89bc139f43c8d714fd0c90d770dd301aaa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38906eaacffed34b85118f260b905f89bc139f43c8d714fd0c90d770dd301aaa->enter($__internal_38906eaacffed34b85118f260b905f89bc139f43c8d714fd0c90d770dd301aaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_85e5a780b726ccb4227917fdc6520f7b738b7252541f5f0b42b39233307af8cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85e5a780b726ccb4227917fdc6520f7b738b7252541f5f0b42b39233307af8cc->enter($__internal_85e5a780b726ccb4227917fdc6520f7b738b7252541f5f0b42b39233307af8cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_38906eaacffed34b85118f260b905f89bc139f43c8d714fd0c90d770dd301aaa->leave($__internal_38906eaacffed34b85118f260b905f89bc139f43c8d714fd0c90d770dd301aaa_prof);

        
        $__internal_85e5a780b726ccb4227917fdc6520f7b738b7252541f5f0b42b39233307af8cc->leave($__internal_85e5a780b726ccb4227917fdc6520f7b738b7252541f5f0b42b39233307af8cc_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6117fd119b51a4cda6ab0c221abc58d4951749c51fb1a0330db7d4958da21d56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6117fd119b51a4cda6ab0c221abc58d4951749c51fb1a0330db7d4958da21d56->enter($__internal_6117fd119b51a4cda6ab0c221abc58d4951749c51fb1a0330db7d4958da21d56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_76d0fbbcb031233e463f9461ab5034a96aadce3062c69a2981f0f5eda311db6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76d0fbbcb031233e463f9461ab5034a96aadce3062c69a2981f0f5eda311db6f->enter($__internal_76d0fbbcb031233e463f9461ab5034a96aadce3062c69a2981f0f5eda311db6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_76d0fbbcb031233e463f9461ab5034a96aadce3062c69a2981f0f5eda311db6f->leave($__internal_76d0fbbcb031233e463f9461ab5034a96aadce3062c69a2981f0f5eda311db6f_prof);

        
        $__internal_6117fd119b51a4cda6ab0c221abc58d4951749c51fb1a0330db7d4958da21d56->leave($__internal_6117fd119b51a4cda6ab0c221abc58d4951749c51fb1a0330db7d4958da21d56_prof);

    }

    // line 4
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e8e2689b2a2b0bb3aa420fef86ef0ce0cdbaf2de1055046a742055d02c41cd27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8e2689b2a2b0bb3aa420fef86ef0ce0cdbaf2de1055046a742055d02c41cd27->enter($__internal_e8e2689b2a2b0bb3aa420fef86ef0ce0cdbaf2de1055046a742055d02c41cd27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_0e305a6cc12795de2f53f9a1ea76ca9eb09b6d36c68b5c6aaf2596b156c10da7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e305a6cc12795de2f53f9a1ea76ca9eb09b6d36c68b5c6aaf2596b156c10da7->enter($__internal_0e305a6cc12795de2f53f9a1ea76ca9eb09b6d36c68b5c6aaf2596b156c10da7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 5
        echo "    ";
        $context["gameName"] = (($context["game"] ?? $this->getContext($context, "game")) . ".js");
        // line 6
        echo "    ";
        $context["gamePath"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("js/" . ($context["gameName"] ?? $this->getContext($context, "gameName"))));
        // line 7
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("node_modules/phaser/build/phaser.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["gamePath"] ?? $this->getContext($context, "gamePath")), "html", null, true);
        echo "\"></script>
";
        
        $__internal_0e305a6cc12795de2f53f9a1ea76ca9eb09b6d36c68b5c6aaf2596b156c10da7->leave($__internal_0e305a6cc12795de2f53f9a1ea76ca9eb09b6d36c68b5c6aaf2596b156c10da7_prof);

        
        $__internal_e8e2689b2a2b0bb3aa420fef86ef0ce0cdbaf2de1055046a742055d02c41cd27->leave($__internal_e8e2689b2a2b0bb3aa420fef86ef0ce0cdbaf2de1055046a742055d02c41cd27_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9e61326939a5247403c5210f83353494c807d0e4c141cfbb2c1cffa15d043259 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e61326939a5247403c5210f83353494c807d0e4c141cfbb2c1cffa15d043259->enter($__internal_9e61326939a5247403c5210f83353494c807d0e4c141cfbb2c1cffa15d043259_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f974e6a6ed45f3398065dd07c24617b0cfd7de3db6f411d21e0c253f31803916 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f974e6a6ed45f3398065dd07c24617b0cfd7de3db6f411d21e0c253f31803916->enter($__internal_f974e6a6ed45f3398065dd07c24617b0cfd7de3db6f411d21e0c253f31803916_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f974e6a6ed45f3398065dd07c24617b0cfd7de3db6f411d21e0c253f31803916->leave($__internal_f974e6a6ed45f3398065dd07c24617b0cfd7de3db6f411d21e0c253f31803916_prof);

        
        $__internal_9e61326939a5247403c5210f83353494c807d0e4c141cfbb2c1cffa15d043259->leave($__internal_9e61326939a5247403c5210f83353494c807d0e4c141cfbb2c1cffa15d043259_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 11,  79 => 8,  74 => 7,  71 => 6,  68 => 5,  59 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block stylesheets %}{% endblock %}
{% block javascripts %}
    {% set gameName = game ~ '.js' %}
    {% set gamePath = asset('js/' ~ gameName) %}
    <script src=\"{{ asset('node_modules/phaser/build/phaser.min.js') }}\"></script>
    <script src=\"{{ gamePath }}\"></script>
{% endblock %}

{% block body %}{% endblock %}
", "default/index.html.twig", "/home/paul/projects/game/app/Resources/views/default/index.html.twig");
    }
}
