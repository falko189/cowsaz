<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_dfdcbab386c35e1c5384252088219ee51128b0d3286289187da76d0322a019a1 extends Twig_Template
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
        $__internal_b9123054a2fc80eb8c35ad868b7bc0af88247223c744dd3c9a11654db08fdec9 = $this->env->getExtension("native_profiler");
        $__internal_b9123054a2fc80eb8c35ad868b7bc0af88247223c744dd3c9a11654db08fdec9->enter($__internal_b9123054a2fc80eb8c35ad868b7bc0af88247223c744dd3c9a11654db08fdec9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b9123054a2fc80eb8c35ad868b7bc0af88247223c744dd3c9a11654db08fdec9->leave($__internal_b9123054a2fc80eb8c35ad868b7bc0af88247223c744dd3c9a11654db08fdec9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4e28a6911aabe65385219428752fb35752e7fa31d9dd947336cb473bf84e38be = $this->env->getExtension("native_profiler");
        $__internal_4e28a6911aabe65385219428752fb35752e7fa31d9dd947336cb473bf84e38be->enter($__internal_4e28a6911aabe65385219428752fb35752e7fa31d9dd947336cb473bf84e38be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4e28a6911aabe65385219428752fb35752e7fa31d9dd947336cb473bf84e38be->leave($__internal_4e28a6911aabe65385219428752fb35752e7fa31d9dd947336cb473bf84e38be_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_76d10ca0e34a1ab4e8152ecf0cae01aa1f4c8521e0b424bfb88003ee30e7df43 = $this->env->getExtension("native_profiler");
        $__internal_76d10ca0e34a1ab4e8152ecf0cae01aa1f4c8521e0b424bfb88003ee30e7df43->enter($__internal_76d10ca0e34a1ab4e8152ecf0cae01aa1f4c8521e0b424bfb88003ee30e7df43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_76d10ca0e34a1ab4e8152ecf0cae01aa1f4c8521e0b424bfb88003ee30e7df43->leave($__internal_76d10ca0e34a1ab4e8152ecf0cae01aa1f4c8521e0b424bfb88003ee30e7df43_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3a4bb578913bd222034d7fca421b34e5e16cdaa848c5b7c37fda87882ee1a648 = $this->env->getExtension("native_profiler");
        $__internal_3a4bb578913bd222034d7fca421b34e5e16cdaa848c5b7c37fda87882ee1a648->enter($__internal_3a4bb578913bd222034d7fca421b34e5e16cdaa848c5b7c37fda87882ee1a648_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3a4bb578913bd222034d7fca421b34e5e16cdaa848c5b7c37fda87882ee1a648->leave($__internal_3a4bb578913bd222034d7fca421b34e5e16cdaa848c5b7c37fda87882ee1a648_prof);

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
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
