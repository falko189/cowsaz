<?php

/* base.html.twig */
class __TwigTemplate_a409d4a0b0e8d858b3fc3b66dfe35c87f9ec4bbbcc8a526bd65d249f7476b892 extends Twig_Template
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
        $__internal_d2264c1db81dbda9fe55a1664117b542d721ac169288cf11c10d9d3dc23c4bf0 = $this->env->getExtension("native_profiler");
        $__internal_d2264c1db81dbda9fe55a1664117b542d721ac169288cf11c10d9d3dc23c4bf0->enter($__internal_d2264c1db81dbda9fe55a1664117b542d721ac169288cf11c10d9d3dc23c4bf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
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
        
        $__internal_d2264c1db81dbda9fe55a1664117b542d721ac169288cf11c10d9d3dc23c4bf0->leave($__internal_d2264c1db81dbda9fe55a1664117b542d721ac169288cf11c10d9d3dc23c4bf0_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1ece1d9ec3281fd82531034378ac28084af4baff23078aa39456d1bb363cb4dc = $this->env->getExtension("native_profiler");
        $__internal_1ece1d9ec3281fd82531034378ac28084af4baff23078aa39456d1bb363cb4dc->enter($__internal_1ece1d9ec3281fd82531034378ac28084af4baff23078aa39456d1bb363cb4dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_1ece1d9ec3281fd82531034378ac28084af4baff23078aa39456d1bb363cb4dc->leave($__internal_1ece1d9ec3281fd82531034378ac28084af4baff23078aa39456d1bb363cb4dc_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_75be91877db8cfe53a630f52370edbe4c065fa219bfe04bf12aa2bb989fc69a6 = $this->env->getExtension("native_profiler");
        $__internal_75be91877db8cfe53a630f52370edbe4c065fa219bfe04bf12aa2bb989fc69a6->enter($__internal_75be91877db8cfe53a630f52370edbe4c065fa219bfe04bf12aa2bb989fc69a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_75be91877db8cfe53a630f52370edbe4c065fa219bfe04bf12aa2bb989fc69a6->leave($__internal_75be91877db8cfe53a630f52370edbe4c065fa219bfe04bf12aa2bb989fc69a6_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_a4b6fcf878e35b67a5ec0de4ce8b4d04a7663745a1edd5ff82d230db31ddfe9a = $this->env->getExtension("native_profiler");
        $__internal_a4b6fcf878e35b67a5ec0de4ce8b4d04a7663745a1edd5ff82d230db31ddfe9a->enter($__internal_a4b6fcf878e35b67a5ec0de4ce8b4d04a7663745a1edd5ff82d230db31ddfe9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a4b6fcf878e35b67a5ec0de4ce8b4d04a7663745a1edd5ff82d230db31ddfe9a->leave($__internal_a4b6fcf878e35b67a5ec0de4ce8b4d04a7663745a1edd5ff82d230db31ddfe9a_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6f8522e3a560af3568091a933792cb59fdf5ccce61b75ffb1da494df97f87c15 = $this->env->getExtension("native_profiler");
        $__internal_6f8522e3a560af3568091a933792cb59fdf5ccce61b75ffb1da494df97f87c15->enter($__internal_6f8522e3a560af3568091a933792cb59fdf5ccce61b75ffb1da494df97f87c15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6f8522e3a560af3568091a933792cb59fdf5ccce61b75ffb1da494df97f87c15->leave($__internal_6f8522e3a560af3568091a933792cb59fdf5ccce61b75ffb1da494df97f87c15_prof);

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
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
