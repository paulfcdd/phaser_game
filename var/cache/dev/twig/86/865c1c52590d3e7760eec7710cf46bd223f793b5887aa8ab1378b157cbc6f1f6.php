<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_3af4a99c1cb655a4825f0a6e01551d674b52d52b622e47d73e3845cb1496152a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_460db162a4e8331ab2beb82fd4ac158549846f8010c3ca8acd39131919a2750f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_460db162a4e8331ab2beb82fd4ac158549846f8010c3ca8acd39131919a2750f->enter($__internal_460db162a4e8331ab2beb82fd4ac158549846f8010c3ca8acd39131919a2750f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_cd762278cd7df17298c8ad17bbc36d9f4a51961b33c6e0e816140aee378d0e0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd762278cd7df17298c8ad17bbc36d9f4a51961b33c6e0e816140aee378d0e0e->enter($__internal_cd762278cd7df17298c8ad17bbc36d9f4a51961b33c6e0e816140aee378d0e0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_460db162a4e8331ab2beb82fd4ac158549846f8010c3ca8acd39131919a2750f->leave($__internal_460db162a4e8331ab2beb82fd4ac158549846f8010c3ca8acd39131919a2750f_prof);

        
        $__internal_cd762278cd7df17298c8ad17bbc36d9f4a51961b33c6e0e816140aee378d0e0e->leave($__internal_cd762278cd7df17298c8ad17bbc36d9f4a51961b33c6e0e816140aee378d0e0e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5c0771a95bff2d972d348897b23ab7c8d24b1ae4cbb0f1ed82c73e072f2ce5e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c0771a95bff2d972d348897b23ab7c8d24b1ae4cbb0f1ed82c73e072f2ce5e5->enter($__internal_5c0771a95bff2d972d348897b23ab7c8d24b1ae4cbb0f1ed82c73e072f2ce5e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_8e8e1969e674a0f03a2b46469029fca088b79bfe0598238a121a28d14aa18225 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e8e1969e674a0f03a2b46469029fca088b79bfe0598238a121a28d14aa18225->enter($__internal_8e8e1969e674a0f03a2b46469029fca088b79bfe0598238a121a28d14aa18225_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8e8e1969e674a0f03a2b46469029fca088b79bfe0598238a121a28d14aa18225->leave($__internal_8e8e1969e674a0f03a2b46469029fca088b79bfe0598238a121a28d14aa18225_prof);

        
        $__internal_5c0771a95bff2d972d348897b23ab7c8d24b1ae4cbb0f1ed82c73e072f2ce5e5->leave($__internal_5c0771a95bff2d972d348897b23ab7c8d24b1ae4cbb0f1ed82c73e072f2ce5e5_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_97da2d3323b2d71d7ef6e298fa1aff63549e9229ce4f6d85369b0e80f1263a88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97da2d3323b2d71d7ef6e298fa1aff63549e9229ce4f6d85369b0e80f1263a88->enter($__internal_97da2d3323b2d71d7ef6e298fa1aff63549e9229ce4f6d85369b0e80f1263a88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c5632a1ff6e2ae340f897609d9f3bbf581310a85829ea579199ea099ece0830a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5632a1ff6e2ae340f897609d9f3bbf581310a85829ea579199ea099ece0830a->enter($__internal_c5632a1ff6e2ae340f897609d9f3bbf581310a85829ea579199ea099ece0830a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c5632a1ff6e2ae340f897609d9f3bbf581310a85829ea579199ea099ece0830a->leave($__internal_c5632a1ff6e2ae340f897609d9f3bbf581310a85829ea579199ea099ece0830a_prof);

        
        $__internal_97da2d3323b2d71d7ef6e298fa1aff63549e9229ce4f6d85369b0e80f1263a88->leave($__internal_97da2d3323b2d71d7ef6e298fa1aff63549e9229ce4f6d85369b0e80f1263a88_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5132ecac20871c9d09c4c2ee0e0315bb6aa59c0c20a5bd565b465a5283512b11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5132ecac20871c9d09c4c2ee0e0315bb6aa59c0c20a5bd565b465a5283512b11->enter($__internal_5132ecac20871c9d09c4c2ee0e0315bb6aa59c0c20a5bd565b465a5283512b11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2fc596d7b8edbfe4662ace5cf7ce03a803693d46f946f76f12377f310fb21866 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fc596d7b8edbfe4662ace5cf7ce03a803693d46f946f76f12377f310fb21866->enter($__internal_2fc596d7b8edbfe4662ace5cf7ce03a803693d46f946f76f12377f310fb21866_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2fc596d7b8edbfe4662ace5cf7ce03a803693d46f946f76f12377f310fb21866->leave($__internal_2fc596d7b8edbfe4662ace5cf7ce03a803693d46f946f76f12377f310fb21866_prof);

        
        $__internal_5132ecac20871c9d09c4c2ee0e0315bb6aa59c0c20a5bd565b465a5283512b11->leave($__internal_5132ecac20871c9d09c4c2ee0e0315bb6aa59c0c20a5bd565b465a5283512b11_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/paul/projects/game/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
