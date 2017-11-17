<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_cf162f25fa3b6f82cee69ba6f883fb7c82621dcf246f7c18429b115a3511835f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ab1117307f91f42f0ad048032a946c16b92ae3e3c60d6bbaf70520637b977145 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab1117307f91f42f0ad048032a946c16b92ae3e3c60d6bbaf70520637b977145->enter($__internal_ab1117307f91f42f0ad048032a946c16b92ae3e3c60d6bbaf70520637b977145_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_d36f4b99db947511e7539c6221f282b05d2c78f83dac08739c1f6639a4b2803a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d36f4b99db947511e7539c6221f282b05d2c78f83dac08739c1f6639a4b2803a->enter($__internal_d36f4b99db947511e7539c6221f282b05d2c78f83dac08739c1f6639a4b2803a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab1117307f91f42f0ad048032a946c16b92ae3e3c60d6bbaf70520637b977145->leave($__internal_ab1117307f91f42f0ad048032a946c16b92ae3e3c60d6bbaf70520637b977145_prof);

        
        $__internal_d36f4b99db947511e7539c6221f282b05d2c78f83dac08739c1f6639a4b2803a->leave($__internal_d36f4b99db947511e7539c6221f282b05d2c78f83dac08739c1f6639a4b2803a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d8685fc687607f8608d873efd2648fde1c44f5229d669173e660ea70ce9e6815 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8685fc687607f8608d873efd2648fde1c44f5229d669173e660ea70ce9e6815->enter($__internal_d8685fc687607f8608d873efd2648fde1c44f5229d669173e660ea70ce9e6815_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_bc48ed50b20715eb020fdc6a79eced563ee96ac58123a3c15ab9657e318a64c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc48ed50b20715eb020fdc6a79eced563ee96ac58123a3c15ab9657e318a64c0->enter($__internal_bc48ed50b20715eb020fdc6a79eced563ee96ac58123a3c15ab9657e318a64c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_bc48ed50b20715eb020fdc6a79eced563ee96ac58123a3c15ab9657e318a64c0->leave($__internal_bc48ed50b20715eb020fdc6a79eced563ee96ac58123a3c15ab9657e318a64c0_prof);

        
        $__internal_d8685fc687607f8608d873efd2648fde1c44f5229d669173e660ea70ce9e6815->leave($__internal_d8685fc687607f8608d873efd2648fde1c44f5229d669173e660ea70ce9e6815_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_96d041b0169b7ce726ef577a52138d69dc1f0f0a7d0665c9ee7302db1e7e90b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96d041b0169b7ce726ef577a52138d69dc1f0f0a7d0665c9ee7302db1e7e90b1->enter($__internal_96d041b0169b7ce726ef577a52138d69dc1f0f0a7d0665c9ee7302db1e7e90b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_55ce560ce93e4a5d15920cbae5b5246a1429a487fa27253bf05e18c12eac9080 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55ce560ce93e4a5d15920cbae5b5246a1429a487fa27253bf05e18c12eac9080->enter($__internal_55ce560ce93e4a5d15920cbae5b5246a1429a487fa27253bf05e18c12eac9080_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_55ce560ce93e4a5d15920cbae5b5246a1429a487fa27253bf05e18c12eac9080->leave($__internal_55ce560ce93e4a5d15920cbae5b5246a1429a487fa27253bf05e18c12eac9080_prof);

        
        $__internal_96d041b0169b7ce726ef577a52138d69dc1f0f0a7d0665c9ee7302db1e7e90b1->leave($__internal_96d041b0169b7ce726ef577a52138d69dc1f0f0a7d0665c9ee7302db1e7e90b1_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cd37f6c46f0425ae7cf5d2ff26874a70811de7d797ab21922b653b2374549947 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd37f6c46f0425ae7cf5d2ff26874a70811de7d797ab21922b653b2374549947->enter($__internal_cd37f6c46f0425ae7cf5d2ff26874a70811de7d797ab21922b653b2374549947_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_73e0fa3938ed812efd83dafa103b3d32ac620f379f3313ecfa2c9c8080e5b977 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73e0fa3938ed812efd83dafa103b3d32ac620f379f3313ecfa2c9c8080e5b977->enter($__internal_73e0fa3938ed812efd83dafa103b3d32ac620f379f3313ecfa2c9c8080e5b977_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_73e0fa3938ed812efd83dafa103b3d32ac620f379f3313ecfa2c9c8080e5b977->leave($__internal_73e0fa3938ed812efd83dafa103b3d32ac620f379f3313ecfa2c9c8080e5b977_prof);

        
        $__internal_cd37f6c46f0425ae7cf5d2ff26874a70811de7d797ab21922b653b2374549947->leave($__internal_cd37f6c46f0425ae7cf5d2ff26874a70811de7d797ab21922b653b2374549947_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/paul/projects/game/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
